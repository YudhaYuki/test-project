@extends('wrapper')

@section('content')

<h1>{{ $author->name }}</h1>

<div class="year_of_birth"> {{ $author->year_of_birth }}</div>

<p class="biography">
{{ $author->biography }}
</p>

@endsection

@section('page_title') AYN RAND @endsection
