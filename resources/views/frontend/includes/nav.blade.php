    <nav class="navbar navbar-lobby">
		<div class="container">

			@if(!Route::is('home'))
				<ul class="nav navbar-nav">
					<li>{!! link_to('/', 'Ir A MENÚ LOBBY') !!}</li>
				</ul>
			@endif

			<ul class="nav navbar-nav navbar-right">
				<li>{!! link_to('http://www.fundacionmultitudes.org', 'Ir a FUNDACIONMULTITUDES.ORG') !!}</li>
			</ul>
		</div>
	</nav>
