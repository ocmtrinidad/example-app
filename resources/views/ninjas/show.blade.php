<x-layout>

  <div class="flex flex-col gap-2">
    <h2 class="header-two">{{$ninja->name}}</h2>
    <p><strong>Skill level: </strong>{{$ninja->skill}}</p>
    <div>
      <p><strong>About me: </strong></p>
      <p>{{$ninja->bio}}</p>
    </div>
  </div>

  <div class="my-4 flex flex-col gap-2 bg-white p-4">
    <h2 class="header-two">Dojo Information</h2>
    <p>
      <strong>Dojo Name: </strong>
      <a href="{{route('dojos.show', $ninja->dojo->id)}}">{{$ninja->dojo->name}}</a>
    </p>
    <p><strong>Location: </strong>{{$ninja->dojo->location}}</p>
    <p><strong>About the Dojo: </strong></p>
    <p>{{$ninja->dojo->description}}</p>
  </div>

{{-- Forms only allow GET or POST methods. Use Blade directive @method("DELETE"). --}}
  <form action="{{route('ninjas.destroy', $ninja->id)}}" method="POST">
    @csrf
    {{-- Switches method from POST to DELETE --}}
    @method("DELETE")
  <button class="ninja-red-button bg-white">Delete Ninja</button>
  </form>

</x-layout>