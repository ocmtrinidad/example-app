<x-layout>
  <form action="{{route('dojos.store')}}" method="post" class="flex flex-col gap-4">
  @csrf

  <h2 class="header-two">Create a Dojo</h2>
    <label for="name">Dojo Name:</label>
    <input class="form-input" type="text" name="name" id="name" value="{{old('name')}}" required>

    <label for="location">Dojo Location:</label>
    <input class="form-input" type="text" name="location" id="location" value="{{old('location')}}" required>

    <label for="description">Dojo Description</label>
    <textarea class="form-input" name="description" id="description" rows="5" required>{{old('description')}}
    </textarea>

    <button class="ninja-red-button bg-white w-max">Create Dojo</button>

    @if($errors->any())
      <ul class="px-4 py-2 bg-red-100">
        @foreach($errors->all() as $error)
          <li class="text-red-500 my-2">{{$error}}</li>
        @endforeach
      </ul>
    @endif
  </form>
</x-layout>