<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Club;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EducationController extends Controller
{
    private $query_take_day_id = 'SELECT id FROM days WHERE name = ?';
    private $query_take_time = 'SELECT time_start, time_end FROM exercises
                                WHERE club_id = ? AND day_id = ?
                                ORDER BY time_start';

    function index() {
        $timetable = $this->build();
        $lessons = Lesson::orderBy('created_at', 'desc')->paginate(5);
        return view('education', compact('timetable', 'lessons'));
    }

    function download_file($link) {
        $path = storage_path('app/public/' . $link);
        return response()->download($path);
    }

    private function build()
    {
        $clubs_exercises = $this->takeClubs();
        $timetable = $this->takeTimes($clubs_exercises);
        return $timetable;
    }

    private function takeClubs()
    {
        $clubs_exercises = [];
        $clubs = Club::has('exercises')->get();
        foreach ($clubs as $club) {
            $full_name = $club->leader->surname . ' ' . $club->leader->name . ' ' . $club->leader->patronymic;
            $clubs_exercises[] = [
                'id' => $club->id,
                'club' => $club->name,
                'leader' => $full_name,
                'monday' => [],
                'tuesday' => [],
                'wednesday' => [],
                'thursday' => [],
                'friday' => [],
                'saturday' => [],
                'sunday' => [],
            ];
        }
        return $clubs_exercises;
    }

    private function takeTimes($clubs_exercises)
    {
        foreach ($clubs_exercises as &$clubs_exercise) {
            $clubs_exercise = $this->add_time_day($clubs_exercise, 'monday', 'Понедельник');
            $clubs_exercise = $this->add_time_day($clubs_exercise, 'tuesday', 'Вторник');
            $clubs_exercise = $this->add_time_day($clubs_exercise, 'wednesday', 'Среда');
            $clubs_exercise = $this->add_time_day($clubs_exercise, 'thursday', 'Четверг');
            $clubs_exercise = $this->add_time_day($clubs_exercise, 'friday', 'Пятница');
            $clubs_exercise = $this->add_time_day($clubs_exercise, 'saturday', 'Суббота');
            $clubs_exercise = $this->add_time_day($clubs_exercise, 'sunday', 'Воскресенье');
        }
        return $clubs_exercises;
    }

    private function add_time_day($exercise, $day, $name_day)
    {
        $club_id = $exercise['id'];
        $day_id = DB::select($this->query_take_day_id, [$name_day]);
        $times = DB::select($this->query_take_time, [$club_id, $day_id[0]->id]);
        foreach ($times as $time) {
            $exercise[$day][] = substr($time->time_start, 0, 5) . ' - ' . substr($time->time_end, 0, 5);
        }
        return $exercise;
    }
}
