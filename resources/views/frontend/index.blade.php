@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid container-bg">
      <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Portal de lobby ciudadano</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 brand-box">
          <div class="row">
            <div class="col-md-5">
              <img src="/build/img/logoFM.png" class="img-responsive" />
            </div><!-- row -->
            <div class="col-md-7">
                <p>Fundación multitudes pone a disposición de la sociedad civil una herramienta para la fiscalización social del ejercicio de la ley de lobby. La herramienta tiene el objetivo de entregar recursos a los ciudadanos para que efectivamente podamos monitorear cómo se lleva a cabo el lobby en nuestro país y así, facilitar el mejoramiento continuo de la aplicación de la ley de lobby a través de la interacción de los usuarios.</p>
            </div><!-- row -->
          </div><!-- row -->
        </div><!-- row -->
    </div><!-- row -->
  </div><!-- row -->

  <div class="container">
    <div class="row">
        <div class="col-md-4">

          <div class="card hovercard"> 
            <div class="cardheader trato">
              <a href="/temas" class="hovertitle"><h3>Sobre igualdad de trato</h3></a>
            </div> 
            <div class="info"> 
              <div class="title"> 
                <a href="/temas">¿Nos reciben a todos?</a> 
              </div> 
              <div class="desc">Te negaron una audiencia ¿quieres saber si alguien se le otorgaron una audiencia sobre el mismo tema? entra aquí y confirma el principio de igualdad de trato.</div>
            </div>
            <div class="bottom"> </div> 
          </div> 

        </div><!-- col-4 -->
        <div class="col-md-4">

          <div class="card hovercard"> 
            <div class="cardheader roles">
              <a class="hovertitle hovertitle-soon"><h3>Próximamente</h3></a>
            </div> 
            <div class="info"> 
              <div class="title"> 
                <a>¿Quién es quién?</a> 
              </div> 
              <div class="desc">Posibilidad de investigar sobre roles de funcionarios. Próximamente.</div>
            </div>
            <div class="bottom"> </div> 
          </div> 

        </div><!-- col-4 -->
        <div class="col-md-4">

          <div class="card hovercard"> 
            <div class="cardheader viajes">
              <a class="hovertitle hovertitle-soon"><h3>Próximamente</h3></a>
            </div> 
            <div class="info"> 
              <div class="title"> 
                <a>¿Dónde viajan?</a> 
              </div> 
              <div class="desc">Herramienta de análisis sobre viajes de los funcionarios. Próximamente.</div>
            </div>
            <div class="bottom"> </div> 
          </div> 

        </div><!-- col-4 -->

    </div><!-- row -->
  </div><!-- container -->
@endsection

@section('after-scripts-end')
	<script>
	</script>
@stop