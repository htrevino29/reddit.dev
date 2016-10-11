@extends('layouts.master')

@section('content')
	<h1>You entered: {{ $word }} <h1>
	<h1>Uppercased: {{ $uppercasedWord }} ! </h1>
@stop