@extends('layouts.main')
@section('content')

<div class="container">

<!-- Vallidation error handling -->
@if ($errors->any())
@foreach ($errors->all() as $error)

<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>

@endforeach
@endif

<h1> Edit Page </h1>

<!-- Added name, action and method to the form -->
<form action="{{ route('update', $basic->id) }}" method="POST">

<!-- Added csrf -->
{{ csrf_field() }}

  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example1" class="form-control" value="{{ $basic->first_name }}" name="firstname" />
        <label class="form-label" for="form3Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example2" class="form-control" value="{{ $basic->last_name }}" name="lastname" />
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form3Example3" class="form-control" value="{{ $basic->email }}" name="email"/>
    <label class="form-label" for="form3Example3">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="phone" id="form3Example4" class="form-control" value="{{ $basic->phone }}" name="phone"/>
    <label class="form-label" for="form3Example4">Phone</label>
  </div>

  <!-- Checkbox -->
 
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Edit Data</button>

  <!-- Register buttons -->

</form>
</div>

@endsection