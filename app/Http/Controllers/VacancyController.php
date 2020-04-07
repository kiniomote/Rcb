<?php

namespace App\Http\Controllers;

use App\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    function index() {
        $vacancies = Vacancy::orderBy('created_at', 'desc')->get();
        return view('vacancy', compact('vacancies'));
    }
}
