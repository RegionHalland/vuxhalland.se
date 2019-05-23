{{--@if(function_exists('get_region_halland_breadcrumbs_pages'))
	@php($myBreadcrumbs = get_region_halland_breadcrumbs_pages())	
	@if(isset($myBreadcrumbs))
		<div class="pr2 pl2 pb1 pt2">
			<div class="px3">
				<div class="container mx-auto">
					<div class="clearfix mxn3">
						<nav class="col col-12">
							<ol class="breadcrumbs" aria-label="Länkstig" itemscope itemtype="http://schema.org/BreadcrumbList">
								@foreach ($myBreadcrumbs as $myBreadcrumb)
									<li class="breadcrumbs__item" @if ($loop->last) aria-current="page" @endif itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
										@if ($myBreadcrumb['url'])
											<a class="breadcrumbs__link text-white" href="{{ $myBreadcrumb['url'] }}">{!! $myBreadcrumb['name'] !!}</a>
										@else
											<span class="breadcrumbs__span text-white" itemprop="name">{!! $myBreadcrumb['name'] !!}</span>
										@endif
										<meta itemprop="position" content="{{ $loop->iteration }}" />
									</li>
								@endforeach
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	@endif
@endif
--}}
@if(!is_front_page())
	@php($breadcrumbs = get_region_halland_breadcrumbs_pages())
	@if(isset($breadcrumbs))
		<div class="rh-breadcrumbs hidden-sm mx-auto" style="max-width:1440px;">
			<ul class="rh-breadcrumb-group pl3 mx-auto" style="max-width:1440px;">
				@foreach ($breadcrumbs as $breadcrumb)
					<li class="rh-breadcrumb-group-item" @if ($loop->last) aria-current="page" @endif itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
						@if ($breadcrumb['url'])
							<a class="rh-breadcrumb-group-link" href="{{ $breadcrumb['url'] }}">{!! $breadcrumb['name'] !!}</a>
						@else
							{!! $breadcrumb['name'] !!}
						@endif
						<meta itemprop="position" content="{{ $loop->iteration }}">
					</li>
				@endforeach
			</ul>
		</div>
	@endif
@endif