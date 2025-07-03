{{-- Allows for highlight prop to be accepted with the default value of false. --}}
@props(["highlight" => false])

{{-- @class is a Blade directive that conditionally applies classes based on @props.--}}
<div @class(["highlight" => $highlight])>
  {{$slot}}
  {{-- $attributes is a Blade component that allows you to get attributes from a component. --}}
  <a href="{{ $attributes->get("href") }}" class="btn">View Details</a>
</div>