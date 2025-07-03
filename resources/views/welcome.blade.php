{{-- .blade.php allows for dynamic values with {{}} --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__(":app", ["app" => config("app.name")])}}</title>
    {{-- @vite() allows for styling --}}
    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1 class="text-center text-lg text-red-600">{{ __('Welcome to :app', ['app' => config('app.name')]) }}</h1>
    <a href="/ninjas" class="btn mt-4 inline-block">Find Ninjas!</a>
</body>
</html>