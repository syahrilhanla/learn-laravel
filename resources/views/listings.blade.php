<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listings</title>
</head>

<body>
    @extends('layout')
    @section('content')
        @include('partials._hero')
        @include('partials._search')

        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
            @unless(count($listings) == 0)
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            @else
                <p>No Listing Found</p>
            @endunless
        </div>
    @endsection
</body>

</html>
