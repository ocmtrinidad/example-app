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
  {{-- session() is a Blade directive to check if the session has a "success" key --}}
  @if(session("success"))
    <div class="p-4 text-center bg-green-50 text-green-500 font-bold w-full">
      {{session("success")}}
    </div>
  @endif
  
  <header class="bg-white flex justify-center w-full">
    <nav class="container flex justify-between items-center p-4 max-w-4xl">
      <h1 class="header-one ninja-red-color">
        <a href="/">Ninja Network</a>
      </h1>
      <div class="flex items-center gap-4">

        {{-- Only shows to logged out users. --}}
        @guest
          <a class="ninja-red-button gray-color" href="{{route('show.register')}}">Register</a>
          <a class="ninja-red-button gray-color" href="{{route('show.login')}}">Login</a>
        @endguest
        
        {{-- Only shows to logged in users. --}}
        @auth
          <span class="border-r-2 pr-2">
          Hi, {{Auth::user()->name}}
          </span>

          <a class="ninja-red-button gray-color" href="{{route('ninjas.create')}}">Create Ninja</a>
          <a class="ninja-red-button gray-color" href="{{route('dojos.create')}}">Create Dojo</a>

          {{-- <a href="{{route('dojos.index')}}">All Dojos</a> --}}

          <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="ninja-red-button gray-color">Logout</button>
          </form>
        @endauth
        
      </div>
    </nav>
  </header>

  <main class="container flex flex-col gap-4 p-4 max-w-4xl">
    {{$slot}}
  </main>
</body>
</html>