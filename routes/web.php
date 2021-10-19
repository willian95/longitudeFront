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
Route::get("service/{id}", function($id){

    $service = App\Models\Service::where("id", $id)->first();
    $files = App\Models\ServiceFile::where("service_id", $id)->get();
    return view("service", ["service" => $service, "files" => $files]);

});

Route::view("projects", "projects")->name("projects");
Route::get("project/{id}", function($id){

    $project = App\Models\Project::where("id", $id)->first();
    $files = App\Models\File::where("project_id", $id)->get();
    return view("project", ["project" => $project, "files" => $files]);

});