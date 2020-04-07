<div class="h3 row">
    <div class="paragraph-marker-h3"></div>
    <div class="paragraph-h3">Вакансии</div>
</div>

@forelse($vacancies as $vacancy)
    <div class="h4 font-weight-bold">
        {{ $vacancy->name }}
    </div>
    <div class="h5">
        {!! $vacancy->description !!}
    </div>
@empty
    <p class="h5">На данные момент вакансий нет</p>
@endforelse
