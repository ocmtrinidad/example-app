<div class="card">
  {{$slot}}
  {{-- $attributes is a Blade component that allows you to get attributes from a component. --}}
  <a href="{{ $attributes->get("href") }}" class="btn">View Details</a>
</div>