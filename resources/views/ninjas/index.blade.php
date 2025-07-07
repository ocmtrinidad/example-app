{{-- x-filename --}}
{{-- x-layout is a custom Blade component that outputs the content as {{$slot}} in the layout in components/layout.blade.php. --}}
<x-layout>

<h2 class="header-two mb-4">Currently Available Ninjas</h2>

<ul class="flex flex-col gap-2 mb-4">
  {{--$ninjas comes from /routes/web.php.--}}
  {{-- @foreach/@endforeach are Blade directives that loop through an array --}}
  @foreach($ninjas as $ninja)
    <li>
      {{--Passing a href prop to the card layout component--}}
      {{-- route('name', url parameter) --}}
      {{-- 
        The prefix : allows for non string values to be sent. Still written as a string though. 
      --}}
      <x-card href="{{route('ninjas.show', $ninja->id)}}" :highlight="$ninja->skill > 70">
        {{--Using blade's {{}} syntax is like using echo and htmlspecialchars in PHP.--}}
        <h3>{{ $ninja->name }}</h3>
      </x-card>
    </li>
  @endforeach
</ul>

{{-- ->links() displays pagination links automatically created by Laravel --}}
{{$ninjas->links()}}

</x-layout>