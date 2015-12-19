@extends('frontend.layouts.master')

@section('nav_options')
  <ul class="nav navbar-nav">
    <li>{!! link_to('temas', '¿Nos reciben a todos?') !!}</li>
  </ul>
@endsection

@section('content')
<div ng-app="LobbyToolsApp" ng-controller="TemasController" ng-cloak=""> 
  <div class="row">
      <div class="jumbotron">
          <h1>¿Nos reciben a todos?</h1>
          <h2>Igualdad de trato</h2>
          <p ng-hide="results" class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div><!-- hero-unit -->
  </div><!-- row -->

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="input-group">
          <input class="form-control input-lg" type="text" name="q" placeholder="Buscar temas..." ng-model="query">
          <span class="input-group-btn">
            <a type="submit" class="btn btn-default btn-lg" ng-click="onClickSearch()">Buscar</a>
          </span>
        </div><!-- /input-group -->
    </div>
  </div>

  <div class="row" ng-show="results">
    <div class="col-md-6">
        <h3 class="text-center">Realizadas</h3>
        <p ng-show="loadingRealizadas" class="text-center"><i class="fa fa-spinner fa-spin fa-3x"></i></p>
        <table ng-hide="loadingRealizadas" class="table table-striped">
          <thead>
            <tr>
              <th>Activo</th>
              <th>Pasivo</th>
              <th>Resumen</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="r in realizadas">
              <td>@{{r.pasivo.value}}</td>
              <td>@{{r.activos.value}}</td>
              <td>@{{r.observaciones.value}}</td>
            </tr>
          </tbody>
        </table>
    </div>
    <div class="col-md-6">
      <h3 class="text-center">Rechazadas</h3>
      <p ng-show="loadingRechazadas" class="text-center"><i class="fa fa-spinner fa-spin fa-3x"></i></p>
      <table ng-hide="loadingRechazadas" class="table table-striped">
        <thead>
          <tr>
            <th>Activo</th>
            <th>Pasivo</th>
            <th>Resumen</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="r in rechazadas">
            <td>@{{r.pasivo}}</td>
            <td>@{{r.activo}}</td>
            <td>@{{r.materia_resumen}}</td>
          </tr>
        </tbody>
      </table>      
    </div>
  </div>

</div>
@endsection

@section('after-scripts-end')
	<script>
	</script>
@stop