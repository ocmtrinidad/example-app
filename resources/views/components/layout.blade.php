{{-- Layouts must be in a components folder --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{__(":app", ["app" => config("app.name")])}}</title>
  @vite('resources/css/app.css')
</head>
<body class="gray-color flex flex-col items-center">
  
  <header class="bg-white flex justify-center w-full mb-4">
    <nav class="container flex justify-between items-center py-4">
      <h1 class="header-one ninja-red-color">Ninja Network</h1>
      <div class="flex gap-4">
      {{-- route('name') calls a named route. --}}
      <a href="{{route('ninjas.index')}}">All Ninjas</a>
      <a href="{{route('ninjas.create')}}">Create New Ninja</a>
      </div>
    </nav>
  </header>

  <main class="container flex flex-col">
    {{$slot}}
  </main>
</body>
</html>