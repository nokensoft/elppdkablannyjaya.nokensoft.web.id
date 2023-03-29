<?php 

    // LPPD ROUTES

    Route::get('lppd/', function () {
        return view('admin.pages.lppd.index');
    });

    Route::get('lppd/monitoring', function () {
        return view('admin.pages.lppd.monitoring');
    });