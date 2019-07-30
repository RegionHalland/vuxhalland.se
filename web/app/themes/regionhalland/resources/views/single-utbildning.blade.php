{{--

Används inte så länge vi länkar vidare från utbildningslistan och inte presenterar utbildningarna direkt på sajten.

--}}

{{--
@extends('layouts.app')

@section('content') 	
  	
  	<!-- **************************** -->
	<!-- Content with grey background -->
	<!-- **************************** -->
	<div class="relative">
		
		<nav aria-label="Huvudnavigation" class="breadcrumbs container background-dark-blue relative mx-auto pl5 pr5 pt1 pb2 z1">

			@include('partials.breadcrumb')
			
		</nav>
	</div>	
	
	<!-- ************ -->
	<!-- Page content -->
	<!-- ************ -->
	<div class="background-white">
		<div class="background-white">
			<div class="container mx-auto p4">
				<div class="m2 flex flex-wrap">
					
					<div class="col-12 lg-col-3">
					
						@include('partials.nav-sidebars')
						
						<div class="pt2">&nbsp;</div>

						@include('partials.content-nav')
					
					</div>
					
					<!-- ************ -->
					<!-- Page content -->
					<!-- ************ -->
					<div class="col-12 lg-col-9">
						<main class="ml4">
							
							<div>
								<h1>{{ the_title() }}</h1>
							</div>
							
							<div id="main">
								@while(have_posts()) @php(the_post())
									@include('partials.article')
									@include('partials.entry-meta')
								@endwhile
							</div>

						</main>
					</div>

				</div>
			</div>
		</div>	
	</div>

@endsection
--}}
