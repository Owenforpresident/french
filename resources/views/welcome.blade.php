@extends('layouts.app')

@section('content')

  <!-- Page Content -->
  <div class= "container text-center">
    <!-- Jumbotron Header -->
    <div class="jumbotron" style="background-image:url(https://www.cannesconventionbureau.com/sites/www.cannesconventionbureau.com/files/styles/blog/public/thumbnails/image/cannes-destination-responsa.jpg?itok=rk18MdA_); background-size: cover;">
    <div class="container"> 
      <h1 class="display-3">Learn Together !</h1>
      <div> 
      
     <span class="badge badge-primary mb-5"><i> Liberté, égalité, fraternité </i></span></h4>
      </div>
      <a href="#" class="btn btn-info btn-lg">Sign up to get started!`</a>
    </div>
</div>

    <!-- Page Features -->
    <div class="row text-center">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-60">
          <div class="card-body">
            <h4 class="card-title">Vocabulary</h4>
            <p class="card-text"> Basic nouns, everyday objects, simple English French Vocab!.</p>
          </div>
          <div class="card-footer">
            <a href="/vocab" class="btn btn-primary">Learn now!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-60">
          
          <div class="card-body">
            <h4 class="card-title">Verbs</h4>
            <p class="card-text">To be or not to be? That is the question. Action words!</p>
          </div>
          <div class="card-footer">
            <a href="/verbs" class="btn btn-primary">Learn now!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-60">
         
          <div class="card-body">
            <h4 class="card-title">Phrases</h4>
            <p class="card-text">Plans for this weekend? I would like to order...etc. </p>
          </div>
          <div class="card-footer">
            <a href="/phrases" class="btn btn-primary">Learn now!</a>
          </div>
        </div>
      </div>

   
 <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-60">
          <div class="card-body">
            <h4 class="card-title">Social/Cultural</h4>
            <p class="card-text">In France, we don't slurp our drinks</p>
          </div>
          <div class="card-footer">
            <a href="/social" class="btn btn-primary">Learn now!</a>
          </div>
        </div>
      </div>
    </div>
       <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-60">
          <div class="card-body">
            <h4 class="card-title">Everything Else</h4>
            <p class="card-text">The boring stuff, the present perfect tense and all his friends</p>
          </div>
          <div class="card-footer">
            <a href="/everythingelse" class="btn btn-primary">Learn now!</a>
          </div>
        </div>
      </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection


