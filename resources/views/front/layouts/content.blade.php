<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        @include('front.layouts.widget')
        <div class="col-md-9 mx-auto">
            @if($articles->count()>0)
                @foreach($articles as $article)
                    <div class="post-preview">
                        <a href="{{route('front.show',$article->slug)}}">

                            <h2 class="post-title">{{$article->title}}</h2>
                            <img src="{{$article->image}}">
                            <h3 class="post-subtitle">{{Str::limit($article->content,50)}}</h3>

                        </a>
                        <p class="post-meta"> <a href="#!">{{$article->category_name}}</a>
                            <span class="float-end"> {{$article->created_at->diffForHumans()}}</span></p>
                    </div>
                @endforeach
            @else
                <div class="alert alert-primary">
                    <h1>Bu kategoriye aid xəbər yoxdur!</h1>
                </div>
            @endif
                <div class="d-flex justify-content-between mb-4 ">
                    @if($articles->onFirstPage())
                        <span></span>
                    @else
                        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="{{$articles->previousPageUrl()}}">Never Posts </a></div>
                    @endif

                    <!-- Pager-->
            @if($articles->hasMorePages())
                <div class="d-flex justify-content-end mb-4">
                    <a class="btn btn-primary text-uppercase" href="{{ $articles->nextPageUrl() }}">Older Posts →</a>
                </div>
            @endif
        </div>
    </div>
</div>
</div>
