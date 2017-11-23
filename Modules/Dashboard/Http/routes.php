<?php

// Check if have language and make some change for each language
try {
    // Get all language codes
    $allLanguageCodes = \App\Models\Language::getAllLanguageCodes();

    if( count($allLanguageCodes) > 1 ){

        // Get default language
        $defaultLanguage = \App\Models\Language::getDefaultLanguage();
        if ($defaultLanguage) {
            $defaultLanguageCode = $defaultLanguage->code;
        } else {
            $defaultLanguageCode = 'en';
        }

        // Get current language
        $currentLanguageCode = Request::segment(1, $defaultLanguageCode);

        if (in_array($currentLanguageCode, $allLanguageCodes) ) {
            Route::get('/', function () use ($defaultLanguageCode) {
                return redirect()->to($defaultLanguageCode);
            });

            Route::group(['prefix' => $currentLanguageCode], function () use($currentLanguageCode) {
                /*Set locale*/
                app()->setLocale($currentLanguageCode);
                adminRoute();
            });
        }else{
            Route::get('/'.$currentLanguageCode, function () use ($defaultLanguageCode, $currentLanguageCode) {
                return redirect()->to($defaultLanguageCode.'/'.$currentLanguageCode);
            });
        }
    }else{
        adminRoute();
    }

} catch (\Exception $e) {
    // Language not found
    adminRoute();
}

// All routes for admin
function adminRoute(){
    Route::group(['middleware' => ['web'], 'prefix' => 'dashboard', 'as' => 'dashboard.', 'namespace' => 'Modules\Dashboard\Http\Controllers'], function()
    {
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('showLoginForm');
        Route::post('login', 'Auth\LoginController@login')->name('postLoginForm');
        Route::get('logout', 'Auth\LoginController@logout')->name('logout');
        Route::group(['middleware' => 'auth.dashboard'], function()
        {
            Route::get('/', 'DashboardController@index')->name('dashboard');
        });
    });
}
