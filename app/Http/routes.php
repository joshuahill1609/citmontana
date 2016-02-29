<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::post('/info', function() {
    $all_info['county'] = Request::input('county');
    $all_info['le'] = App\Http\Utilities\County::getLawEnforcementContact(Request::input('county'));
    $all_info['mh'] = App\Http\Utilities\County::getMentalHealthContact(Request::input('county'));
    $all_info['class'] = App\Http\Utilities\County::getNextAcademy(Request::input('county'));
    return $all_info;
});

Route::get('/download/w9', function () {
    return Response::download(public_path() . '/CIT_Montana_W9.pdf');
});

Route::get('/facebook', function () {
    return redirect()->away('https://www.facebook.com/CIT-Montana-821754977916441/');
});

Route::get('/instagram', function () {
    return redirect()->away('https://www.instagram.com/citmontana/');
});

Route::get('/news/1', function () {
    return redirect()->away('http://www.bozemandailychronicle.com/news/crime/modern-policing-cit-montana-trains-officers-to-help-mentally-ill/article_1488b971-71cb-53c5-8a1c-8a4c590ae719.html');
});

Route::get('/news/2', function () {
    return redirect()->away('http://www.wisetail.com/learn-connect/wisetail-works-cit-montana/');
});

Route::get('/news/3', function () {
    return redirect()->away('http://www.nbcmontana.com/news/Emergency-responders-take-crisis-intervention-training/35733924');
});



Route::resource('events', 'EventsController');