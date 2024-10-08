<?php

use App\Models\job;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;



Route::get('/', function () {
   return view('home');

});


Route::get('/jobs', function ()  {
    
    $jobs = Job::with('employer')->get();
    
    return view('jobs',[
        'jobs' => $jobs 
    ]);
});



Route::get('/jobs/{id}', function ($id) {

      $job = job::find($id);    
      
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});