<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('website.pages.index');
});

Route::get('/about', function () {
    return view('website.pages.about');
});

Route::get('/appointment', function () {
    return view('website.pages.appointment');
});

Route::get('/contact', function () {
    return view('website.pages.contact');
});

Route::get('/price', function () {
    return view('website.pages.price');
});

Route::get('/service', function () {
    return view('website.pages.service');
});

Route::get('/team', function () {
    return view('website.pages.team');
});

Route::get('/testmonial', function () {
    return view('website.pages.testmonial');
});



//================DASHBOARD ROUTES
Route::get('/home', function () {
    return view('dashboard.pages.dashboard');
});


Route::get('/allPatients', function () {
    return view('dashboard.pages.patients.all_patients');
});

//add patient
Route::get('/addPatient', function () {
    return view('dashboard.pages.patients.add_patient');
});

//doctors
Route::get('/allDoctors', function () {
    return view('dashboard.pages.hr.doctors.all_doctors');
});

// pharmacists
Route::get('/allPharmacists', function () {
    return view('dashboard.pages.hr.pharmacists.all_pharmacists');
});

//doctors
Route::get('/allNurses', function () {
    return view('dashboard.pages.hr.nurses.all_nurses');
});

//labaratorists
Route::get('/allLabaratorists', function () {
    return view('dashboard.pages.hr.labaratorists.all_labaratorists');
});

//accountants
Route::get('/allAccountants', function () {
    return view('dashboard.pages.hr.accountants.all_accountants');
});

//all medicines
Route::get('/allMedicines', function () {
    return view('dashboard.pages.pharmacy.all_medicines');
});


// medicine dispense
Route::get('/medicineDispense', function () {
    return view('dashboard.pages.pharmacy.medicine_dispense');
});


//birth report
Route::get('/birthReport', function () {
    return view('dashboard.pages.reports.birth_report');
});

//death report
Route::get('/deathReport', function () {
    return view('dashboard.pages.reports.death_report');
});

//APPOINTMENT
Route::get('/allAppointments', function () {
    return view('dashboard.pages.appointments.all_appointments');
});

//all fridges
Route::get('/allFridges', function () {
    return view('dashboard.pages.mortuary.all_fridges');
});

//all bodies
Route::get('/allBodies', function () {
    return view('dashboard.pages.mortuary.available_bodies');
});

// buildings
Route::get('/allBuildings', function () {
    return view('dashboard.pages.wards.buildings');
});

// all floors
Route::get('/allFloors', function () {
    return view('dashboard.pages.wards.floors');
});

// all rooms
Route::get('/allRooms', function () {
    return view('dashboard.pages.wards.rooms');
});

//all wards
Route::get('/allWards', function () {
    return view('dashboard.pages.wards.wards');
});

//all beds
Route::get('/allBeds', function () {
    return view('dashboard.pages.wards.beds');
});




