{{-- x-filename --}}
{{-- x-layout is a custom Blade component that outputs the content as {{$slot}} in the layout in components/layout.blade.php. --}}
<x-layout>

<h2 class="header-two">Currently Available Ninjas</h2>

<ul class="flex flex-col gap-2">
  @foreach($ninjas as $ninja)
    <li>
      {{--Passing a href prop to the card layout component--}}
      {{-- route('name', url parameter) --}}
      {{-- 
        The prefix : allows for non string values to be sent. Still written as a string though. 
      --}}
      <x-card href="{{route('ninjas.show', $ninja->id)}}" :highlight="$ninja->skill > 70">
        <div>
          <h3 class="header-three">
            <a href="{{route('ninjas.show', $ninja->id)}}">{{ $ninja->name }}</a>
          </h3>
          <p>
          <a href="{{route('dojos.show', $ninja->dojo->id)}}">{{$ninja->dojo->name}}</a>
          </p>
        </div>
        
      </x-card>
    </li>
  @endforeach
</ul>

{{-- ->links() displays pagination links automatically created by Laravel --}}
{{$ninjas->links()}}

</x-layout>