@extends('layouts.admin')

@section('content')

<div class="card">

<div class="card-header">
Package Details
</div>

<div class="card-body">

<h3>{{ $adPackage->name }}</h3>

<p>{{ $adPackage->description }}</p>

<hr>

<h5>Features</h5>

<ul>

@foreach($adPackage->features ?? [] as $f)

<li>{{ $f }}</li>

@endforeach

</ul>

<hr>

<strong>Type:</strong> {{ $adPackage->type }}

<br>

<strong>Price:</strong>

@if($adPackage->price)

{{ number_format($adPackage->price) }} DA

@else

{{ $adPackage->price_note }}

@endif

<br>

<strong>Featured:</strong>
{{ $adPackage->is_featured ? 'Yes' : 'No' }}

<br>

<strong>Active:</strong>
{{ $adPackage->is_active ? 'Yes' : 'No' }}

</div>
</div>

@endsection