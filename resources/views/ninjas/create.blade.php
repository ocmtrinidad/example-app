<x-layout>

  <form action="{{route('ninjas.store')}}" method="post" class="flex flex-col gap-4">
    {{-- CSRF Protection. USE FOR EVERY FORM --}}
    @csrf

    <h2 class="header-two">Create a Ninja</h2>
    <label for="name">Ninja Name:</label>
    <input class="form-input" type="text" name="name" id="name" required>

    <label for="skill">Ninja Skill (0-100)</label>
    <input class="form-input" type="number" name="skill" id="skill" min="0" max="100" required>

    <label for="bio">Biography</label>
    <textarea class="form-input" name="bio" id="bio" rows="5" required></textarea>

    <label for="dojo_id">Dojo:</label>
    <select class="form-input" name="dojo_id" id="dojo_id" required>
      <option value="" disabled selected>Select a dojo</option>
      @foreach($dojos as $dojo)
        <option value="{{ $dojo->id }}">{{ $dojo->name }}</option>
      @endforeach
    </select>

    <button class="ninja-red-button bg-white w-max">Create Ninja</button>
  </form>

</x-layout>