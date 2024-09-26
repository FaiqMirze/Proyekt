<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Categories:
        </div>
        <div class="list-group">
            <ul class="list-group list-group-flush">

                    @foreach($categories as $category)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{route('front.category',$category->name)}}">{{$category->name}}</a>
                            <span class="badge bg-success">{{$category->articleCount()}}</span>
                        </li>
                    @endforeach

            </ul>
        </div>
    </div>
</div>
