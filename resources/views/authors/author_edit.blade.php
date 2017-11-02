@extends('wrapper')

@section('content')




<form action="" method="post">

{{ csrf_field() }}

    <div class="form-group">
        <label for="name_input">Name</label><br>
        <input type="text" name="name" value="{{ $author->name }}" id="name_input">
    </div>

    <div class="form-group">
        <label for="year_of_birth_input">Year of birth</label><br>
        <input type="text" name="year_of_birth" value="{{ $author->year_of_birth }}" id="year_of_birth_input">
    </div>

    <div class="form-group">
        <label for="biography_input">Biography</label><br>
        <input type="text" name="biography" value="{{ $author->biography }}" id="biography_input">
    </div>

    <input type="submit" value="Submit">

</form>

@endsection
