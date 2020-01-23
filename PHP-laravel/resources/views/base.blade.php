<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel PN</title>
    <link href="{{ url('css/form.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div>
            <a style="margin: 19px;" href="/add" class="btn btn-primary">New Human</a>
            <a style="margin: 19px;" href="/home" class="btn btn-primary">Human List </a>
        </div>
        @yield('main')
    </div>
    
</body>

</html>