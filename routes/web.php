<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view("contact", "contact")->name("contact");
Route::view("services", "services")->name("services");
Route::get("service/{slug}", function($slug){

    $service = App\Models\Service::where("slug", $slug)->first();
    $files = App\Models\ServiceFile::where("service_id", $service->id)->get();
    return view("service", ["service" => $service, "files" => $files]);

});

Route::view("projects", "projects")->name("projects");
Route::get("project/{slug}", function($slug){

    $project = App\Models\Project::where("slug", $slug)->first();
    $files = App\Models\File::where("project_id", $project->id)->get();
    return view("project", ["project" => $project, "files" => $files]);

});