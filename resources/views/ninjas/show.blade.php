<x-layout>

  <div class="flex flex-col gap-2">
    <h2 class="header-two">{{$ninja->name}}</h2>
    <p><strong>Skill level: </strong>{{$ninja->skill}}</p>
    <div>
      <p><strong>About me: </strong></p>
      <p>{{$ninja->bio}}</p>
    </div>
  </div>

</x-layout>