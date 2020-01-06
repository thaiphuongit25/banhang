<?php
    use App\model\Type;
    use App\model\ArticleCategory;
    use App\model\Service;
    use App\model\Reply;
    use App\model\Comment;
    use App\model\Banner;
    use App\model\BannerItem;
    use App\Enums\BannerType;

    function getTypes() {
        return Type::all();
    }

    function getArticleCategories() {
        return ArticleCategory::active()->get();
    }

    function getSuggestServices() {
        return Service::active()->orderBy('id', 'DESC')->take(5)->get();
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

