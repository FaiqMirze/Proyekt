<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Categories:
        </div>
        <div class="list-group">
            <ul class="list-group list-group-flush">
                @if(count($articles)>0)
                    @foreach($categories as $category)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{route('front.category',$category->name)}}">{{$category->name}}</a>
                            <span class="badge bg-success">{{$category->articleCount()}}</span>
                        </li>
                    @endforeach
                @else
                    <div class="alert alert-primary">
                        <h1>Bu kategoriye aid xeber yoxdur!</h1>
                    </div>
                @endif
            </ul>
        </div>
    </div>
</div>
