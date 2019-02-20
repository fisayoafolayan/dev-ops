<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Big Store</title>
    <link href=" {{ secure_asset(mix('css/app.css')) }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <app></app>
    </div>
    <script src="{{ secure_asset(mix('js/bootstrap.js')) }}"></script>
    <script src="{{ secure_asset(mix('js/app.js')) }}"></script>
</body>
</html>
