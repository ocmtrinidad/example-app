<x-layout>
  <h2 class="header-two">{{ $dojo->name }}</h2>

  <div class=" flex flex-col gap-2 bg-gray-200 p-4">
    <p><strong>Location:</strong> {{ $dojo->location }}</p>
    <p><strong>Description:</strong></p>
    <p>{{ $dojo->description }}</p>
  </div>

  <h3 class="header-three">Ninjas in this dojo:</h3>
  <ul class="flex flex-col gap-2">
    @foreach($dojo->ninjas as $ninja)
      <li>
        <x-card href="{{ route('ninjas.show', $ninja->id) }}">
          <div>
            <h3 class="header-three">
              <a href="{{route('ninjas.show', $ninja->id)}}">{{ $ninja->name }}</a>
            </h3>
            <p>Skill Level: <strong>{{ $ninja->skill }}</strong></p>
          </div>
        </x-card>
      </li>
    @endforeach
  </ul>

  <form action="{{route('dojos.destroy', $dojo->id)}}" method="post">
  @method("DELETE")
  @csrf
    <button class="ninja-red-button bg-white">Delete Dojo</button>
  </form>

  {{ $dojo->ninjas->links() }}

</x-layout>