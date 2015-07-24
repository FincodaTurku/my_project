<?php
   
   Route::get('/', 'WelcomeController@index');
   Route::get('/questions', 'QuestionsController@index');
Route:resource('cars', 'CarController');
