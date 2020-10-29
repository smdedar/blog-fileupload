<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div>
    @foreach ($images as $image)
        <li>{{$image->url}}</li>
    @endforeach

</div>

<div>
    {{ $images->links() }}
</div>

<div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            {{ $images->links() }}
        </ul>
      </nav>
</div>

    <div>
        @php
         $role = "ded1";
    @endphp
        @if($role == "ded")
            <h1>Yo! Dedar</h1>
        @endif
    </div>
</body>

</html>
