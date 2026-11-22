<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $Nama = 'Christian Farrel Tanmel';
    $homes = DB::table('homes')->get();
    return view('home', [
        'Nama' => $Nama,
        'homes' => $homes,
    ]);
});

Route::get('/about', function () {
    $Nama = 'Christian Farrel Tanmel';
    $abouts = DB::table('abouts')->get();
    return view('about', [
        'Nama' => $Nama,
        'abouts' => $abouts,
    ]);
});

Route::get('/contact', function () {
    $Nama = 'Christian Farrel Tanmel';
    $contacts = DB::table('contacts')->get();
    return view('contact', [
        'contacts' => $contacts,
        'Nama' => $Nama,
    ]);
});

Route::post('/contact', function () {
    $validated = request()->validate([
        'nama'  => 'required|string|max:100',
        'email' => 'required|email|max:255',
        'pesan' => 'required|string|max:2000',
    ]);

    $Nama  = $validated['nama'];
    $Email = $validated['email'];
    $Pesan = $validated['Pesan'] ?? $validated['pesan'];

    return view('contact', compact('Nama', 'Email', 'Pesan'));
});

Route::get('/blog', function () {
    $Nama = 'Christian Farrel Tanmel';
    $blogs = DB::table('blogs')->get();
    return view('blog', [
        'blogs' => $blogs,
        'Nama' => $Nama,
    ]);
});

Route::get('/project', function () {
    $Nama = 'Christian Farrel Tanmel';
    $projects = DB::table('projects')->get();
    return view('project', [
        'projects' => $projects,
        'Nama' => $Nama,
    ]);
});
