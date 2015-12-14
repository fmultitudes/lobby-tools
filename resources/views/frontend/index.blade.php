@extends('frontend.layouts.home')

@section('content')
    <div class="row">
        <div class="jumbotron">
            <h1>Lobby tools</h1>
            <h2>Fundación Multitudes</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div><!-- hero-unit -->
	</div><!-- row -->

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Sobre igualdad de trato</h3>
              </div>
              <div class="panel-body text-center">
                <h2>¿Nos reciben a todos?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                <a class="btn btn-lg btn-primary" href="/temas">Ingresar</a>
              </div>
            </div>
        </div><!-- col-4 -->
        <div class="col-md-4">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Sobre roles</h3>
              </div>
              <div class="panel-body text-center">
                <h2>¿Quién es quién?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                <a class="btn btn-lg btn-success" disabled="disabled">Ingresar</a>
              </div>
            </div>
        </div><!-- col-4 -->
        <div class="col-md-4">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <h3 class="panel-title">...</h3>
              </div>
              <div class="panel-body text-center">
                <h2>...</h2>
                <p>...</p>
                <a class="btn btn-lg btn-warning" disabled="disabled">Próximamente</a>
              </div>
            </div>
        </div><!-- col-4 -->
    </div><!-- row -->
@endsection

@section('after-scripts-end')
	<script>
		//Being injected from FrontendController
		console.log(test);
	</script>
@stop