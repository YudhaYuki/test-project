@extends('wrapper')

@section('content')

<h1>{{ $author->name }}</h1>

<div class="year_of_birth"> {{ $author->year_of_birth }}</div>

<p class="biography">
{{ $author->biography }}
</p>

<a href="{{ action('authorController@edit', ['id' => $author->id]) }}" class="btn btn-primary"> Edit author</a>


@endsection

@section('page_title') {{ $author->name }} {{ $author->year_of_birth }}  @endsection
