<x-layout>

  <h2 class="header-two">Currently Available Dojos</h2>

  <ul class="flex flex-col gap-2">
    @foreach($dojos as $dojo)
      <li>
        <x-card href="{{route('dojos.show', $dojo->id)}}">
          <div>
            <h3 class="header-three">
              <a href="{{route('dojos.show', $dojo->id)}}">{{ $dojo->name }}</a>
            </h3>
            <p>{{$dojo->location}}</p>
          </div>
        </x-card>
      </li>
    @endforeach
  </ul>

  {{ $dojos->links() }}

</x-layout>