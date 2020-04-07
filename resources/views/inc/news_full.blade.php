<div class="h3 row">
    <div class="paragraph-marker-h3"></div>
    <div class="paragraph-h3">Все новости</div>
    <a class="btn btn-primary ml-auto mr-3" href="{{ route('main') }}">Назад</a>
</div>
@foreach($news as $post)
    <div class="card my-4">
        <div class="card-header">
            <a href="{{ route('post', $post->id) }}" class="h4 post-link">{{ $post->title }}</a>
        </div>
        <div class="card-body">
            <img class="img-fluid mb-2"
                src="{{ asset('/storage/' . $post->image_path) }}" alt="Not found">
            <p class="font-weight-bold">{{ $post->lead }}</p>
            <div class="card-text">{!! $post->body !!}</div>
        </div>
        <div class="card-footer text-muted">
            <p class="end-card">{{ $post->created_at }}</p>
        </div>
    </div>
@endforeach
{{ $news->links() }}
