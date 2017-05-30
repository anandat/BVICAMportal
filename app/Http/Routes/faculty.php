<?php

Route::group(['middleware' => ['auth:faculty']], function ($router) {
    Route::get('/', [
        'uses' => 'FacultyController@index',
        'as' => 'faculty.index',
    ]);
});

Route::get('login', [
    'uses' => 'AuthController@index',
    'as' => 'faculty.auth.index',
]);

Route::post('login', [
    'uses' => 'AuthController@login',
    'as' => 'faculty.auth.login',
]);

Route::get('logout', [
    'uses' => 'AuthController@logout',
    'as' => 'faculty.auth.logout',
]);

Route::get('register', [
    'uses' => 'AuthController@getRegister',
    'as' => 'faculty.auth.register',
]);

Route::post('register', [
    'uses' => 'AuthController@postRegister',
    'as' => 'faculty.auth.register',
]);

Route::get('password/reset/{token?}', [
    'uses' => 'PasswordController@showResetForm',
    'as' => 'faculty.password.reset',
]);

Route::post('password/reset', [
    'uses' => 'PasswordController@reset',
    'as' => 'faculty.password.reset',
]);

Route::post('password/email', [
    'uses' => 'PasswordController@sendResetLinkEmail',
    'as' => 'faculty.password.email',
]);

Route::get('attendanceList', [
    'uses' => 'AttendanceController@attendanceList',
    'as' => 'faculty.attendanceList'
]);

Route::get('selectSubject', [
    'uses' => 'AttendanceController@selectSubject',
    'as' => 'faculty.selectSubject'
]);

Route::post('showDefaulters', [
    'uses' => 'AttendanceController@showDefaulters',
    'as' => 'faculty.showDefaulters'
]);

Route::get('listAllStudents', [
    'uses' => 'StudentController@index',
    'as' => 'faculty.showStudent',
]);

Route::get('studentDetails/{id}', [
    'uses' => 'StudentController@studentDetails',
    'as' => 'faculty.showStudentDetails',
]);


Route::post('/createPost', [
    'uses' => 'FacultyController@postCreatePost',
    'as' => 'faculty.post.create',
]);

Route::get('changePassowrd', [
    'uses' => 'FacultyController@getChangePassword',
    'as' => 'faculty.changePassword',
]);

Route::post('postChangePassword', [
    'uses' => 'FacultyController@postChangePassword',
    'as' => 'faculty.changePassword' 
]);

Route::get('selectClass', [
    'uses' => 'AttendanceController@selectClass',
    'as' => 'faculty.class.select'
]);

Route::post('/updateAttendance', [
    'uses' => 'AttendanceController@store',
    'as' => 'faculty.attendance.store',
]);

Route::post('viewList', [
    'uses' => 'AttendanceController@viewList',
    'as' => 'faculty.attendance.viewList'
]);