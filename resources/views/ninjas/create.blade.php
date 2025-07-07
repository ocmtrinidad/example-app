<x-layout>

  <form action="{{route('ninjas.store')}}" method="post" class="flex flex-col gap-4">
    {{-- CSRF Protection. USE FOR EVERY FORM --}}
    @csrf

    <h2 class="header-two">Create a Ninja</h2>
    <label for="name">Ninja Name:</label>
    {{-- {{old('name')}} will repopulate input if the page was recreated due to an error. --}}
    <input class="form-input" type="text" name="name" id="name" value="{{old('name')}}" required>

    <label for="skill">Ninja Skill (0-100)</label>
    <input class="form-input" type="number" name="skill" id="skill" value="{{old('skill')}}" required>

    <label for="bio">Biography</label>
    <textarea class="form-input" name="bio" id="bio" rows="5" required>{{old('bio')}}</textarea>

    <label for="dojo_id">Dojo:</label>
    <select class="form-input" name="dojo_id" id="dojo_id" required>
      <option value="" disabled {{ old("dojo_id") === null ? "selected" : "" }}>Select a dojo</option>
      @foreach($dojos as $dojo)
        <option value="{{ $dojo->id }}" {{ old("dojo_id") === $dojo->id ? "selected" : ""}}>
          {{ $dojo->name }}
        </option>
      @endforeach
    </select>

    <button class="ninja-red-button bg-white w-max">Create Ninja</button>

    {{-- Errors sent by NinjaController store() --}}
    @if($errors->any())
      <ul class="px-4 py-2 bg-red-100">
        @foreach($errors->all() as $error)
          <li class="text-red-500 my-2">{{$error}}</li>
        @endforeach
      </ul>
    @endif
  </form>

</x-layout>