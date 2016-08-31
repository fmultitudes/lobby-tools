@extends('frontend.layouts.master')

@section('nav_options')
  <ul class="nav navbar-nav">
    <li>{!! link_to('temas', '¿Nos reciben a todos?') !!}</li>
  </ul>
@endsection

@section('content')
<div ng-app="LobbyToolsApp" ng-controller="TemasController" ng-cloak=""> 

  <div class="container-fluid">
    <div class="row row-bg">
      <div class="col-xs-12">
        <h1 class="text-center">¿Nos reciben a todos?</h1>
      </div>
    </div>
  </div>

  <div class="container">

    <div class="row">
      <div class="col-md-9 col-md-offset-1">
          <h2>Igualdad de trato</h2>
          <p ng-hide="results">La ley de lobby establece que se deben publicar los registros de las audiencias realizadas. Sin embargo, las audiencias que no se han realizado no quedan en un registro público. Esto dificulta la verificación del principio de igualdad de trato. Para  obtener información sobre las audiencias rechazadas, se realizaron múltiples solicitudes de acceso a la información a todos los ministerios. Mientras que las audiencias realizadas se extrajeron de la API de Infolobby.cl.</p>
      </div>
    </div><!-- row -->

    <div class="row">
      <div class="col-md-3 col-md-offset-4">
            <input class="form-control input-lg" type="text" name="q" placeholder="Buscar temas..." ng-model="query">
      </div>
      <div class="col-md-2">
            <a type="submit" class="btn btn-default btn-lg btn-red" ng-click="onClickSearch()">Buscar</a>
      </div>
    </div>

    <div class="row" ng-show="results">
      <div class="col-md-6">
          <h3 class="table-title text-center">Realizadas</h3>
          <p ng-show="loadingRealizadas" class="text-center"><i class="fa fa-spinner fa-spin fa-3x"></i></p>
          <table ng-hide="loadingRealizadas" class="table table-striped">
            <thead>
              <tr>
                <th class="text-center">Fecha</th>
                <th class="text-center">Pasivo</th>
                <th class="text-center">Activo</th>
                <th class="text-center"></th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="r in realizadas">
                <td>@{{r.dia.value}}/@{{r.mes.value}}/@{{r.agno.value}}</td>
                <td>@{{r.pasivo.value}}</td>
                <td>@{{r.activos.value}}</td>
                <td><a class="btn btn-xs btn-red btn-circle" ng-click="openRealizadas(r)">+</a></td>
              </tr>
            </tbody>
          </table>
      </div>
      <div class="col-md-6">
        <h3 class="table-title text-center">Rechazadas</h3>
        <p ng-show="loadingRechazadas" class="text-center"><i class="fa fa-spinner fa-spin fa-3x"></i></p>
        <table ng-hide="loadingRechazadas" class="table table-striped">
          <thead>
            <tr>
              <th class="text-center">Fecha</th>
              <th class="text-center">Pasivo</th>
              <th class="text-center">Activo</th>
              <th class="text-center"></th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="r in rechazadas">
              <td>@{{r.fecha_ingreso}}</td>
              <td>@{{r.pasivo}}</td>
              <td>@{{r.activo}}</td>
              <td><a class="btn btn-xs btn-red btn-circle" ng-click="openRechazadas(r)">+</a></td>
            </tr>
          </tbody>
        </table>      
      </div>
    </div>

    <div class="modal fade" id="realizadas_selected" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detalle audiencia Realizada</h4>
          </div>
          <div class="modal-body">
            <h4>Fecha de ingreso</h4>
            <p>@{{realizadas_selected.dia.value}}/@{{realizadas_selected.mes.value}}/@{{realizadas_selected.agno.value}}</p>
            <h4>Activo</h4>
            <p>@{{realizadas_selected.pasivo.value}}</p>
            <h4>Pasivo</h4>
            <p>@{{realizadas_selected.activos.value}}</p>
            <h4>Institución</h4>
            <p>@{{realizadas_selected.nombreInstitucion.value}}</p>
            <h4>Observaciones</h4>
            <p>@{{realizadas_selected.observaciones.value}}</p>
            <h4>Materia</h4>
            <p>@{{realizadas_selected.materias.value}}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-red" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="rechazadas_selected" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detalle audiencia Rechazada</h4>
          </div>
          <div class="modal-body">
            <h4>Fecha de ingreso</h4>
            <p>@{{rechazadas_selected.fecha_ingreso}}</p>
            <h4>Activo</h4>
            <p>@{{rechazadas_selected.pasivo}}</p>
            <h4>Pasivo</h4>
            <p>@{{rechazadas_selected.activo}}</p>
            <h4>Institución</h4>
            <p>@{{rechazadas_selected.ministerio}}</p>
            <h4>Tema</h4>
            <p>@{{rechazadas_selected.materia_resumen}}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-red" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

  </div><!-- CONTAINER -->
</div>


@endsection

@section('after-scripts-end')
	<script>
	</script>
@stop