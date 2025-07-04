{{-- Determines which props to be accepted. Props are prefixed with a :. --}}
{{-- highlight prop is accepted with a default value of false --}}
{{-- @props(["highlight" => false]) --}}

{{-- @class is a Blade directive that conditionally applies classes based on a @props value. --}}
{{-- @class(["highlight" => $highlight]) --}}
<div class="bg-white p-2 flex justify-between items-center">
  {{$slot}}
  {{-- $attributes is a Blade component that allows you to get attributes from a component. --}}
  <a href="{{ $attributes->get("href") }}" class="ninja-red-button">View Details</a>
</div>