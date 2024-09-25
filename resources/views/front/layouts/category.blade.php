
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="{{asset('front/assets/favicon.ico')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('front/css/styles.css')}}" rel="stylesheet" />
</head>
<body>
<!-- Navigation-->
@include('front.layouts.nowbar')
<!-- Page Header-->
@include('front.layouts.header')
<!-- Main Content-->

<main>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-9 mx-auto">
                @if(count($articles)>0)
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
                        <h1>Bu kategoriye aid xeber yoxdur!</h1>
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
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="{{$articles->nextPageUrl()}}">Older Posts →</a></div>
                @endif
            </div>
        </div>
    </div>
    </div>

</main>
<!-- Footer-->
@include('front.layouts.footer')
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('front/js/scripts.js')}}"></script>
</body>
</html>


