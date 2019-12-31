<?php
    use App\model\Type;
    use App\model\ArticleCategory;
    use App\model\Service;

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
        return count($article->comments);
    }


