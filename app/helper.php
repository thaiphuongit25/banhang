<?php
    use App\model\Type;
    use App\model\ArticleCategory;
    use App\model\Service;
    use App\model\Reply;
    use App\model\Comment;
    use App\model\Information;
    use App\model\Banner;
    use App\model\BannerItem;
    use App\model\OnlineSupportInformation;
    use App\model\Setting;
    use App\Enums\BannerType;
    use App\Enums\SettingType;

    function getTypes() {
        return Type::all();
    }

    function getArticleCategories() {
        return ArticleCategory::active()->get();
    }

    function getSuggestServices() {
        return Service::active()->orderBy('id', 'DESC')->take(5)->get();
    }

    function getSuggestInformations() {
        return Information::active()->orderBy('id', 'DESC')->take(5)->get();
    }

    function getInformations($types) {
        return Information::active()->where('types', $types)->orderBy('id', 'DESC')->take(6)->get();
    }

    function getSuggestArticleCategories() {
        return ArticleCategory::active()->with('articles')->orderBy('id', 'ASC')->take(1)->get();
    }

    function getTotalReplies($article) {
        $comment_ids = $article->comments->pluck('id')->toArray();
        $replies = Reply::whereIn('comment_id', $comment_ids)->get();
        return count($comment_ids) + count($replies);
    }

    function firstCharacterOfName($name) {
        return strtoupper(substr($name, 0, 1));
    }

    function statusStr($status) {
        return
        [
            0 => 'Disabled',
            1 => 'Active'
        ][$status];
    }


    function loadImage($image) {
        if ($image) {
            return URL::to('/').'/images/'.$image;
        } else {
            return URL::to('/').'/images/default-image.jpg';
        }
    }

    function settingTypeText($type) {
        return
        [   
            0 => 'Số điện thoại',
            1 => 'Giờ mở cửa',
            2 => 'Địa chỉ',
            3 => 'Hỗ trợ trực tuyến kinh doanh',
            4 => 'Hỗ trợ trực tuyến kĩ thuật',
            5 => 'Hỗ trợ trực tuyến bán hàng - bảo hành',
            6 => 'Tiêu đề trang',
        ][$type];
    }

    function bannerTypeText($type) {
        return
        [
            0 => 'Logo',
            1 => 'Trên cùng bên phải',
            2 => 'Trên cùng bên trái',
            3 => 'Bên trái ngoài cùng',
            4 => 'Bên phải ngoài cùng',
            5 => 'Bên trái',
            6 => 'Bên phải',
            7 => 'Slider'
        ][$type];
    }

    function getNewestComments() {
        return Comment::with('user')->where('commentable_type', 'App\model\Product')->orderBy('id', 'DESC')->take(10)->get();
    }

    function getBanner($type) {
        if ($type == BannerType::Slider)
        {
            $slider = Banner::active()->where('type', $type)->first();
            return BannerItem::active()->where('banner_id', $slider->id)->get();
        }
        return Banner::active()->where('type', $type)->first();
    }

    function getSetting($type) {
        return Setting::where('type', $type)->first();
    }

    function getOnlineSupportSetting() {
        return Setting::with('onlineSupportInformations')->whereIn('type', onlineSupportSettingTypes())->get();
    }

    function onlineSupportSettingTypes() {
        return [SettingType::OnlineSupportBusiness, SettingType::OnlineSupportTechnical, SettingType::OnlineSupportSaleWarranty];
    }

