<div class="h3 row">
    <div class="paragraph-marker-h3"></div>
    <div class="paragraph-h3">Новости</div>
    <a class="btn btn-primary ml-auto mr-3" href="{{ route('news') }}">Все новости</a>
</div>
@foreach($news as $post)
    <div class="card my-1 card-small">
        <div class="card-body">
            <a href="{{ route('post', $post->id) }}" class="post-link">
                <img class="img-fluid mb-2"
                     src="{{ asset('/storage/' . $post->image_path) }}" alt="Not found">
                <p class="h5">{{ $post->title }}</p>
                <p class="end-card">{{ $post->created_at }} </p>
            </a>
        </div>
    </div>
@endforeach
