@extends('wrapper')

@section('content')

@section('page_title') List of authors @endsection

<h1> List of authors </h1>

{{-- <?php var_dump($authors); ?> --}}

<ul>

@foreach($authors as $author)

    <li>
        {{ $author->name }} ({{ $author->year_of_birth }})
    </li>

    <li>AYN RAND</li>
    <li>ERNEST HEMINGWAY</li>
    <li>JOAN DIDION</li>
    <li>RAY BRADBURY</li>
    <li>GEORGE R.R. MARTIN</li>
    <li>GILLIAN FLYNN</li>
    <li>VLADIMIR NABOKOV</li>
    <li>JANE AUSTEN</li>
    <li>MARK TWAIN</li>
    <li>MEG WOLITZER</li>
    <li>ERIK LARSON</li>
    <li>F. SCOTT FITZGERALD</li>

@endforeach

</ul>

@endsection


