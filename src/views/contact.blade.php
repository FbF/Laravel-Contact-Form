@extends('layouts.master')

@section('title')
	{{ Config::get('laravel-contact-form::page_title') }}
@endsection

@section('meta_description')
	{{ Config::get('laravel-contact-form::meta_description') }}
@endsection

@section('meta_keywords')
	{{ Config::get('laravel-contact-form::meta_keywords') }}
@endsection

@section('content')
	@include('laravel-contact-form::form')
@stop