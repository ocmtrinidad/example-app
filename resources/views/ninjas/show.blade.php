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
    <p><strong>Dojo Name: </strong>{{$ninja->dojo->name}}</p>
    <p><strong>Location: </strong>{{$ninja->dojo->location}}</p>
    <p><strong>About the Dojo: </strong></p>
    <p>{{$ninja->dojo->description}}</p>
  </div>

</x-layout>