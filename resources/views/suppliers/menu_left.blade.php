<div class="left-menu">
    @include('newest_comments')
</div>
<script>
    $(document).ready(function($) {
        $.ajax({
            url: '/new_report',
            type: "get",
            dataType: 'script'
        });
    })
</script>
<style>
    #product-report {
        max-height: 258px;
        overflow: auto;
        border-bottom: 1px solid #DDD;
        overscroll-behavior: none;
        overflow-x: hidden;
        scrollbar-width: thin;
        scrollbar-color: #666;
    }
    
    #product-report::-webkit-scrollbar {
        width: 6px;
        background: #eee;
    }
    
    #product-report::-webkit-scrollbar-thumb {
        background: #666;
    }
</style>

<style>
    .green a {
        padding: 0 !important;
    }
    
    .same-by-list {
        max-height: 258px;
        overflow: auto;
        border-bottom: 1px solid #DDD;
        overscroll-behavior: none;
        overflow-x: hidden;
        scrollbar-width: thin;
        scrollbar-color: #666;
    }
    
    .same-by-list::-webkit-scrollbar {
        width: 6px;
        background: #eee;
    }
    
    .same-by-list::-webkit-scrollbar-thumb {
        background: #666;
    }
</style>
<div class="left-menu">
    <a target="_blank" href="http://vinasemi.com/"><img alt="" class="" src="https://thegioiic.com/upload/large/10577.jpg"></a>
</div>