<?php 

    // IKK ROUTES

    Route::get('ikk', function () {
        return view('admin.pages.ikk.ikk');
    });

    // MAKRO
    Route::get('ikk/makro', function () {
        return view('admin.pages.ikk.ikk-makro');
    });

    // OUTPUT
    Route::get('ikk/output', function () {
        return view('admin.pages.ikk.ikk-output');
    });