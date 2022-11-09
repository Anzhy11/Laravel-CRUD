@extends('layouts.main')
@section('content')

<div class="container">
<h1> Create Page </h1>

<form>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example1" class="form-control" />
        <label class="form-label" for="form3Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form3Example3" class="form-control" />
    <label class="form-label" for="form3Example3">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="phone" id="form3Example4" class="form-control" />
    <label class="form-label" for="form3Example4">Phone</label>
  </div>

  <!-- Checkbox -->
 
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Add Data</button>

  <!-- Register buttons -->

</form>
</div>

@endsection