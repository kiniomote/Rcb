<div class="h3 row">
    <div class="paragraph-marker-h3"></div>
    <div class="paragraph-h3">Оборудование</div>
</div>
<table  class="table table-bordered">
    <tr>
        <th class="th-115">Название</th>
        <th class="th-115">Кол-ство</th>
        <th>Описание</th>
    </tr>
    @foreach($equipments as $equipment)
        <tr>
            <td>{{ $equipment->name }}</td>
            <td>{{ $equipment->count }}</td>
            <td>{!! $equipment->description !!}</td>
        </tr>
    @endforeach
</table>
{{ $equipments->links() }}

