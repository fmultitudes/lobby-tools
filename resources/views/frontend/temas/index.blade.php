@extends('frontend.layouts.master')

@section('nav_options')
  <ul class="nav navbar-nav">
    <li>{!! link_to('temas', '¿Nos reciben a todos?') !!}</li>
  </ul>
@endsection

@section('content')
  <div class="row">
      <div class="jumbotron">
          <h1>¿Nos reciben a todos?</h1>
          <h2>Igualdad de trato</h2>
          @if(!isset($query))
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          @endif
      </div><!-- hero-unit -->
  </div><!-- row -->

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form method="GET">
        <div class="input-group">
          <input class="form-control input-lg" type="text" name="q" placeholder="Buscar temas..." value="{{isset($query)?$query:''}}">
          <span class="input-group-btn">
            <button type="submit" class="btn btn-default btn-lg">Buscar</button>
          </span>
        </div><!-- /input-group -->
      </form>
    </div>
  </div>

  @if(isset($query))
  <div class="row">
    <div class="col-md-6">
      <h3 class="text-center">Realizadas</h3>
      @if(count($realizadas)>0)
        <table class="table table-striped"> <thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> </table>
      @endif
    </div>
    <div class="col-md-6">
      <h3 class="text-center">Rechazadas</h3>
      @if(count($rechazadas)>0)
        <table class="table table-striped"> <thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> </table>
      @endif
    </div>
  </div>
  @endif

@endsection

@section('after-scripts-end')
	<script>
	</script>
@stop