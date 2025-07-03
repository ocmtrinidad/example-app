{{--
  x-filename
  x-layout is a custom Blade component that outputs the content as {{$slot}} in the layout in components/layout.blade.php
--}}
<x-layout>

<h2>Currently Available Ninjas</h2>


<ul>
  {{--
    $ninjas comes from /routes/web.php
    @foreach/@endforeach are Blade directives that loop through an array
  --}}
  @foreach($ninjas as $ninja)
    <li>
      {{--Using blade's {{}} syntax is like using echo and htmlspecialchars in PHP--}}
      <p>{{$ninja["name"]}}</p>
      <a href="/ninjas/{{$ninja["id"]}}">View Details</a>
    </li>
  @endforeach
</ul>

</x-layout>