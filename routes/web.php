<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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


Route::view("contacto", "contact")->name("contact");
Route::view("servicios", "services")->name("services");
Route::get("servicio/{slug}", function($slug){

    $service = App\Models\Service::where("slug", $slug)->first();
    $files = App\Models\ServiceFile::where("service_id", $service->id)->get();
    return view("service", ["service" => $service, "files" => $files]);

});

Route::view("proyectos", "projects")->name("projects");
Route::get("proyecto/{slug}", function($slug){

    $project = App\Models\Project::where("slug", $slug)->first();
    $files = App\Models\File::where("project_id", $project->id)->get();
    return view("project", ["project" => $project, "files" => $files]);

});

Route::post("/send/message", [ContactController::class, "sendEmail"]);