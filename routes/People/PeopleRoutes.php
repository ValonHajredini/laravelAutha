<?php

Route::get('/Dashboard', 'People\PeopleController@Dashboard');
Route::get('/Dashboard/person/{id}', 'People\PeopleController@showPErson');