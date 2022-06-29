<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Listing</title>
</head>
<body>
  @extends('layout')
  @section('content')
      
  <h1>
    {{$listing['title']}}
  </h1>
  <h1>
    {{$listing['description']}}
  </h1>
  <button>
    <a href="/">Go Back</a>    
  </button>
  @endsection
</body>
</html>