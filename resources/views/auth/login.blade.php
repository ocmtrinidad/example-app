<x-layout>

  <form action="{{route('login')}}" method="post" class="flex flex-col gap-4">
    @csrf

    <h2 class="header-two">Login to Your Account</h2>

    <label for="email">Email:</label>
    <input class="form-input" type="email" name="email" id="email" value="{{old('email')}}" required>

    <label for="password">Password:</label>
    <input class="form-input" type="password" name="password" id="password" required>

    <button class="ninja-red-button max-w-max bg-white">Log in</button>

    @if($errors->any())
      <ul class="px-4 py-2 bg-red-100">
        @foreach($errors->all() as $error)
          <li class="my-2 text-red-500">{{$error}}</li>
        @endforeach
      </ul>
    @endif

  </form>

</x-layout>