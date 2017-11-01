<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title') Books I have read website</title>

</head>
<body>

    <nav>
        <a href="{{ action('indexController@my_books_homepage') }}">Home</a>

        <a href="{{ action('authorController@author_list') }}">List of authors</a>

        <a href="{{ action('authorController@author_detail', ['id' => 1]) }}">Detail of authors A</a>

        <a href="{{ route('author detail', ['id' => 1]) }}">Detail of authors B</a>

    </nav>

    
    @yield('content')
    
</body>
</html>
