<?php

use Illuminate\Http\Request;

Route::resource('attendances', 'Api\AttendancesController')
				->only(['index', 'show', 'store']);
Route::put('attendances/{attendance}/report', 'Api\ReportAttendancesController@update');