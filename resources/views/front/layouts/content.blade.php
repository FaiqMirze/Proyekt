<div class="container px-4 px-lg-5">
<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">
        <!-- Post preview-->
        @foreach($articles as $article)
            <div class="post-preview">
                <a href="{{route('front.show',$article->id)}}">


                    <h2 class="post-title">{{$article->title}}</h2>
                    <img src="{{$article->image}}">
                    <h3 class="post-subtitle">{{Str::limit($article->content,50)}}</h3>
                </a>
                <p class="post-meta"><a href="#!">{{$article->category_name}}</a>
                    <span class="float-end">{{$article->created_at->diffForHumans()}}</span>
                </p>

            </div>
        @endforeach

        <!-- Post preview-->

        <!-- Divider-->
        <hr class="my-4" />
        <!-- Pager-->
        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
    </div>
</div>
</div>
