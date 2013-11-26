<?php

Route::get(Config::get('laravel-contact-form::uri'), 'Fbf\LaravelContactForm\ContactController@form');

Route::post(Config::get('laravel-contact-form::uri'), 'Fbf\LaravelContactForm\ContactController@send');