<?php
    use App\model\Type;
    use App\model\ArticleCategory;
    use App\model\Service;
    use App\model\Reply;

    function getTypes() {
        return Type::all();
    }

    function getArticleCategories() {
        return ArticleCategory::all();
    }

    function getSuggestServices() {
        return Service::orderBy('id', 'DESC')->take(5)->get();
    }

    function getSuggestArticleCategories() {
        return ArticleCategory::with('articles')->orderBy('id', 'ASC')->take(1)->get();
    }

    function getTotalReplies($article) {
        $comment_ids = $article->comments->pluck('id')->toArray();
        $replies = Reply::whereIn('comment_id', $comment_ids)->get();
        return count($comment_ids) + count($replies);
    }

    function firstCharacterOfName($name) {
        return substr($name, 0, 1);
    }


