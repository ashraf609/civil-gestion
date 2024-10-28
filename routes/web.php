<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/dashboard-admin', function () {
    return view('admin/dashboard');
});
Route::get('/client', function () {
    return view('admin/client');
});
Route::get('/demande_de_projet', function () {
    return view('admin/demand');
});
Route::get('/projet', function () {
    return view('admin/projet');
});
Route::get('/employeur', function () {
    return view('admin/employe');
});
Route::get('/rendez-vous', function () {
    return view('admin/appointement');
});
Route::get('/facture', function () {
    return view('admin/facture');
});
Route::get('/matriel', function () {
    return view('admin/matriel');
});
Route::get('/notifications', function () {
    return view('admin/notification');
});
Route::get('/tache', function () {
    return view('admin/tache');
});Route::get('/users', function () {
    return view('admin/user');
});
Route::get('/dashboard-directeur', function () {
    return view('Directeur/dashboard');
});

Route::get('/client-directeur', function () {
    return view('Directeur/client');
});
Route::get('/appointement-directeur', function () {
    return view('Directeur/appointement');
});
Route::get('/demande_de_projet-directeur', function () {
    return view('Directeur/demand');
});

Route::get('/projet-directeur', function () {
    return view('Directeur/projet');
});

Route::get('/employeur-directeur', function () {
    return view('Directeur/employe');
});

Route::get('/facture-directeur', function () {
    return view('Directeur/facture');
});

Route::get('/matriel-directeur', function () {
    return view('Directeur/matriel');
});

Route::get('/notifications-directeur', function () {
    return view('Directeur/notification');
});

Route::get('/tache-directeur', function () {
    return view('Directeur/tache');
});

Route::get('/users-directeur', function () {
    return view('Directeur/user');
});

Route::get('/dashboard-client', function () {
    return view('client/dashboard');
});

Route::get('/appointement-client', function () {
    return view('client/appointement');
});

Route::get('/client-client', function () {
    return view('client/client');
});

Route::get('/demande_de_projet-client', function () {
    return view('client/demand');
});

Route::get('/projet-client', function () {
    return view('client/projet');
});

Route::get('/employeur-client', function () {
    return view('client/employe');
});

Route::get('/facture-client', function () {
    return view('client/facture');
});

Route::get('/matriel-client', function () {
    return view('client/matriel');
});

Route::get('/notifications-client', function () {
    return view('client/notification');
});

Route::get('/tache-client', function () {
    return view('client/tache');
});

Route::get('/users-client', function () {
    return view('Client/user');
});
