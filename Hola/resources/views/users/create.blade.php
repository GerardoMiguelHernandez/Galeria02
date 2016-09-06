@extends('template.main')

@section('title', 'Agregar Usuario')

@section('content')
    


    <div class="container">

<div class="card bordered z-depth-3" style="margin:0% auto; max-width:400px;">
        
  <div class="row">

    <div class="col s12 m12 l12">
      
        <form method="post" action="{{ url('admin/users/store') }}" class="col s12">

          <div class="row">
            <div class="col s12 cyan">
              <h5 class="center">Registrar</h5>
            </div>
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="row">
            <div class="input-field col s12">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" value="">
            </div>  
            </div>
            <div class="row">
            <div class="input-field col s12">
              <label for="lastname">Email</label>
              <input type="email" name="email" id="email" value="">
            </div></div>
            <div class="row">
            <div class="input-field col s12">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" value="">
            </div>            
          </div>
          
          
          
          <div class="row">
              <div class="col s6 offset-s3">
     <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">Agregar</i>
  </button>
  </div>
          </div>
        </form>
      
    </div>
  </div>
  </div>
</div>
@endsection

