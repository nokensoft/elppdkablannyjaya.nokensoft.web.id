<?php 

    // LPPD ROUTES

    Route::get('lppd/', function () {
        return view('admin.pages.lppd.index');
    });

    // MONITORING
    Route::get('lppd/monitoring', function () {
        return view('admin.pages.lppd.monitoring');
    });

    // PELAPORANG
    Route::get('lppd/pelaporan', function () {
        return view('admin.pages.lppd.pelaporan');
    });

    // PERANGKAT DAERAH
    Route::get('lppd/perangkat-daerah', function () {
        return view('admin.pages.lppd.perangkat-daerah');
    });