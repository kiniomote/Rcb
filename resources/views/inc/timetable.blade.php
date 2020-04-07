
<div class="h3 row">
    <div class="paragraph-marker-h3"></div>
    <div class="paragraph-h3">Расписание занятий кружков</div>
</div>
<div class="timetable table">
    <table class="table table-bordered table-responsive-xl">
        <tr>
            <th class="th-115">Кружок</th>
            <th class="th-115">Руководитель</th>
            <th class="th-115">Пн</th>
            <th class="th-115">Вт</th>
            <th class="th-115">Ср</th>
            <th class="th-115">Чт</th>
            <th class="th-115">Пт</th>
            <th class="th-115">Сб</th>
            <th class="th-115">Вс</th>
        </tr>
        @foreach($timetable as $exercise)
            <tr>
                <td>{{ $exercise['club'] }}</td>
                <td>{{ $exercise['leader'] }}</td>
                <td>
                    @foreach($exercise['monday'] as $monday_exercise)
                        {{ $monday_exercise }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach($exercise['tuesday'] as $tuesday_exercise)
                        {{ $tuesday_exercise }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach($exercise['wednesday'] as $wednesday_exercise)
                        {{ $wednesday_exercise }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach($exercise['thursday'] as $thursday_exercise)
                        {{ $thursday_exercise }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach($exercise['friday'] as $friday_exercise)
                        {{ $friday_exercise }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach($exercise['saturday'] as $saturday_exercise)
                        {{ $saturday_exercise }}<br>
                    @endforeach</td>
                <td>

                    @foreach($exercise['sunday'] as $sunday_exercise)
                        {{ $sunday_exercise }}<br>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
</div>
