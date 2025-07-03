{{--
  x-filename
  x-layout is a custom Blade component that outputs the content as {{$slot}} in the layout in components/layout.blade.php
--}}
<x-layout>

<h2>Currently Available Ninjas</h2>

{{--The @if / @endif blade directive is used to conditionally display content. --}}
{{--No { } needed--}}
@if ($greeting)
  <p>Hi from inside the if statement.</p>
@endif

{{--$ninjas comes from /routes/web.php--}}
{{--Using blade's {{}} syntax is like using echo and htmlspecialchars in PHP--}}
<ul>
  @foreach($ninjas as $ninja)
    <li>
      <p>{{$ninja["name"]}}</p>
      <a href="/ninjas/{{$ninja["id"]}}">View Details</a>
    </li>
  @endforeach
</ul>

</x-layout>