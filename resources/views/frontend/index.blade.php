@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid container-bg">
      <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Ley del Lobby</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 brand-box">
          <div class="row">
            <div class="col-md-5">
              <img src="/build/img/logoFM.png" class="img-responsive" />
            </div><!-- row -->
            <div class="col-md-7">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div><!-- row -->
          </div><!-- row -->
        </div><!-- row -->
    </div><!-- row -->
  </div><!-- row -->

  <div class="container">
    <div class="row">
        <div class="col-md-4">

          <div class="card hovercard"> 
            <div class="cardheader">
              <a href="/temas" class="hovertitle"><h3>Sobre igualdad de trato</h3></a>
            </div> 
            <div class="info"> 
              <div class="title"> 
                <a href="/temas">¿Nos reciben a todos?</a> 
              </div> 
              <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
            <div class="bottom"> </div> 
          </div> 

        </div><!-- col-4 -->
        <div class="col-md-4">

          <div class="card hovercard"> 
            <div class="cardheader">
              <a class="hovertitle"><h3>Próximamente</h3></a>
            </div> 
            <div class="info"> 
              <div class="title"> 
                <a>¿Quién es quién?</a> 
              </div> 
              <div class="desc">Sobre roles. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
            <div class="bottom"> </div> 
          </div> 

        </div><!-- col-4 -->
        <div class="col-md-4">

          <div class="card hovercard"> 
            <div class="cardheader">
              <a class="hovertitle"><h3>Próximamente</h3></a>
            </div> 
            <div class="info"> 
              <div class="title"> 
                <a>¿Dónde viajan?</a> 
              </div> 
              <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
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