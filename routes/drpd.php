<?php 

Route::controller(DprdController::class)->group(function(){
    Route::get('dprd','index')->name('admin.dprd');
    Route::get('dprd/create','create')->name('admin.dprd.create');
    Route::post('dprd','store')->name('admin.dprd.store');
    
    Route::get('dprd/{id}/edit','edit')->name('admin.dprd.edit');

    Route::get('dprd/show','show')->name('admin.dprd.show');
    Route::get('dprd/delete/{id}','delete')->name('admin.dprd.delete');
    
    Route::put('dprd/{id}','update')->name('admin.dprd.update');

    Route::delete('dprd/{id}','destroy')->name('admin.dprd.destroy');
});