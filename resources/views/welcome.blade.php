@extends('layouts.main')
@section('content')

<div class="container">
<h1> Home Page </h1>

<!-- Added message alert -->
@if (session('successMsg'))

<div class="alert alert-success" role="alert">
    {{ session('successMsg') }}
</div>

@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- Iterate through all the data from basic database -->
    @foreach($basics as $basic)
      <tr class="table-active">
        <th scope="row">{{ $basic->id }}</th>
        <td>{{ $basic->first_name }}</td>
        <td>{{ $basic->last_name }}</td>
        <td>{{ $basic->email }}</td>
        <td>{{ $basic->phone }}</td>
        <td>edit || delete</td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection