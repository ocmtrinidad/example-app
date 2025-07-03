{{-- Layouts must be in a components folder --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{__(":app", ["app" => config("app.name")])}}</title>
</head>
<body>
  
  <header>
    <nav>
      <h1>Ninja Network</h1>
      <a href="/ninjas">All Ninjas</a>
      <a href="/ninjas/create">Create New Ninja</a>
    </nav>
  </header>

  <main class="container">
  {{-- $slot is a Blade variable that represents the content that will be rendered --}}
    {{$slot}}
  </main>
</body>
</html>