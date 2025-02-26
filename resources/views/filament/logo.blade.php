@php
    $brand = \App\Models\Logo::first(); // Fetch the first logo entry
@endphp
@if ($brand && $brand->brand)
<img src="{{ asset('storage/' . $brand->brand) }}" alt="" class="h-12 w-auto"
    style="width: 100px; height: 59px; margin-top: -17px;"/>
@endif