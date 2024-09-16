<div class="card">
    <div class="card-header">Article Show</div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Image:{{$articles->image}}</h5>
            <p class="card-text">Title:{{$articles->title}}</p>
            <p class="card-text">Category:{{$articles->category_name}}</p>
            <p class="card-text">Content:{{$articles->content}}</p>
            <p class="card-text">Created_at:{{$articles->Created_at}}</p>
            <p class="card-text">Updated_at:{{$articles->updated_at}}</p>
        </div>
        <hr>
    </div>
</div>
