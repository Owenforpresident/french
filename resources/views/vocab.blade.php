@extends('layouts.app')

@section('content')
<div class="container"> 

<div class="input-group mb-4">
  <div class="input-group-prepend">
    <!--<span class="input-group-text">Add vocab </span> --> 
    
  </div>
  <input type="text" aria-label="English" placeholder= "English translation" class="form-control">
  <input type="text" aria-label="French"   placeholder= "French Translation" class="form-control">
  <button class= "btn btn-primary">Add word!</button>
</div>
<h1 class="my-4">Word list
  </h1>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      
      <th scope="col">English/Anglais</th>
      <th scope="col">French/Francais</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      
    </tr>
    <tr>
      <td>Larry</td>
      <td>the Bird</td>
      
    </tr>
  </tbody>
</table>
</div>
@endsection