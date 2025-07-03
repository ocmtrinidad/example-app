<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{__(":app", ["app" => config("app.name")])}} | Home</title>
</head>
<body>
  <h2>Currently Available Ninjas</h2>
  <ul>
    <li>
      {{--$ninjas comes from web.php--}}
      {{--Using blade's {{}} syntax is like using echo and htmlspecialchars in PHP--}}
      <a href="/ninjas/{{$ninjas[0]["id"]}}">{{$ninjas[0]["name"]}}</a>
    </li>
    <li>
      <a href="/ninjas/{{$ninjas[1]["id"]}}">{{$ninjas[1]["name"]}}</a>
    </li> 
  </ul>
</body>
</html>