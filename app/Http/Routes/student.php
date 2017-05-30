<?php

Route::group(['middleware' => ['auth:student']], function ($router) {
    Route::get('/', [
        'uses' => 'StudentController@index',
        'as' => 'student.index',
    ]);
});

Route::get('login', [
    'uses' => 'AuthController@index',
    'as' => 'student.auth.index',
]);

Route::post('login', [
    'uses' => 'AuthController@login',
    'as' => 'student.auth.login',
]);

Route::get('logout', [
    'uses' => 'AuthController@logout',
    'as' => 'student.auth.logout',
]);

Route::get('register', [
    'uses' => 'AuthController@getRegister',
    'as' => 'student.auth.register',
]);

Route::post('register', [
    'uses' => 'AuthController@postRegister',
    'as' => 'student.auth.register',
]);

Route::get('password/reset/{token?}', [
    'uses' => 'PasswordController@showResetForm',
    'as' => 'student.password.reset',
]);

Route::post('password/reset', [
    'uses' => 'PasswordController@reset',
    'as' => 'student.password.reset',
]);

Route::post('password/email', [
    'uses' => 'PasswordController@sendResetLinkEmail',
    'as' => 'student.password.email',
]);

Route::get('viewAttendance', [
    'uses' => 'StudentController@viewAttendance',
    'as' => 'student.view.attendance',
]);

Route::get('applyForDL', [
    'uses' => 'StudentController@applyForDL',
    'as' => 'student.apply.DL',
]);

Route::post('processDLRequest', [
    'uses' => 'StudentController@processDLRequest',
    'as' => 'student.save.DL',
]);

Route::get('changePassowrd', [
    'uses' => 'StudentController@getChangePassword',
    'as' => 'student.changePassword',
]);

Route::post('changePassword', [
    'uses' => 'StudentController@postChangePassword',
    'as' => '/student/changePassword' 
]);
