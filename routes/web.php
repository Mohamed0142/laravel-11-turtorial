<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;




Route::get('/', function () {
$jobs = Job::all();
return view('home');
});



Route::get('/contact', function () {
    return view('contact');
});




Route::get('/jobs', function () {
    $jobs = Job::with('employer')->Simplepaginate(3);

    return view('jobs', [
    'jobs' => Job::all()
    ]);
});
Route::get('/jobs/{id}', function ($id)  {
    $job = Job::find($id);

    return view('job',['job' => $job ]);
});
