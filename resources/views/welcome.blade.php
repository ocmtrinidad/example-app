{{-- .blade.php allows for dynamic values with {{}} --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__(":app", ["app" => config("app.name")])}}</title>
</head>
<body>
    <h1>{{ __('Welcome to :app', ['app' => config('app.name')]) }}</h1>
    <a href="/ninjas">Find Ninjas!</a>
</body>
</html>