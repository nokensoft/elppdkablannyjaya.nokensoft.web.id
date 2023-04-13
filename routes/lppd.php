<?php

    // LPPD ROUTES

    // Route::get('lppd/', function () {
    //     return view('admin.pages.lppd.index');
    // });

    // // MONITORING
    // Route::get('lppd/monitoring', function () {
    //     return view('admin.pages.lppd.monitoring');
    // });

    // // PELAPORANG
    // Route::get('lppd/pelaporan', function () {
    //     return view('admin.pages.lppd.pelaporan');
    // });

    // // PERANGKAT DAERAH
    // Route::get('lppd/perangkat-daerah', function () {
    //     return view('admin.pages.lppd.perangkat-daerah.index');
    // });

    // Route::resource('lppd', LppdController::class);

    

    // lppd
    Route::controller(LppdController::class)->group(function(){
        Route::get('lppd/monitoring','index')->name('admin.lppd.monitoring');
        // Route::get('lppd/create','create')->name('admin.lppd.create');
        // Route::post('lppd','store')->name('admin.lppd.store');
        // Route::get('lppd/edit','edit')->name('admin.lppd.edit');
        // Route::get('lppd/show','show')->name('admin.lppd.show');
        // Route::put('lppd/{id}','update')->name('admin.lppd.update');
        // Route::delete('lppd/{id}','destroy')->name('admin.lppd.destroy');
    });