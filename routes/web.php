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

    return view('jobs.index', [
    'jobs' => Job::all()
    ]);
});


Route::get('jobs/create', function () {
    return view('jobs.create');
});

Route::get('jobs.show', function ($id)  {
    $job = Job::find($id);

    return view('job',['job' => $job ]);
});

Route::post('/jobs', function () {

    job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

