<div class="h3 row">
    <div class="paragraph-marker-h3"></div>
    <div class="paragraph-h3">Отчёты занятий</div>
</div>
@foreach($lessons as $lesson)
    <div class="card my-4">
        <div class="card-header">
            <p class="h4">{{ $lesson->title }}</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('/storage/' . $lesson->image_title_path) }}" alt="Not found">
                </div>

                <div class="col-12 col-md-6">
                    <div class="card-text">{!! $lesson->body !!}</div>
                    <div class="row">
                        @foreach(json_decode($lesson->attachments_files) as $file)
                            <a href="{{ route('download', $file->download_link) }}" class="mx-2">{{ $file->original_name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                @foreach(json_decode($lesson->images_paths) as $image)
                    <img src="{{ asset('/storage/' . $image) }}" alt="" height="150" class="mx-1 mb-1">
                @endforeach
            </div>
        </div>
    </div>
@endforeach
{{ $lessons->links() }}
