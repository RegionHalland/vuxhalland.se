@extends('layouts.app')
@section('content')
    @php($myBlurbs = get_region_halland_acf_main_post_page_links_blurbs())
    @if(isset($myBlurbs))

        <ul class="clearfix center mb2 mt2" style="max-width:1440px;">

            <li class="left-align col col-12 sm-col-6 md-col-6 lg-col-4">
                <div class="rh-blurb mx1 my2" style="border-bottom: 4px solid #E99579">
                    <div style="height: 200px; overflow:hidden;position:relative">
                        <img src="{!! $myBlurbs[0]['image_url'] !!}" style="width:100%; position: absolute; top:50%; transform: translateY(-50%);">
                    </div>
                    <div class="mx2 pt2 rh-blurb__description">
                        <h3><a href="{{ $myBlurbs[0]['link_url'] }}" target="{{ $myBlurbs[0]['link_target'] }}" style="color:black">{{ $myBlurbs[0]['link_title'] }}</a></h3>
                        <p>{{ $myBlurbs[0]['post_content'] }}</p>
                    </div>
                </div>
            </li>

            <li class="left-align  col col-12 sm-col-6 md-col-6 lg-col-4">
                <div class="rh-blurb mx1 my2" style="border-bottom: 4px solid #E99579">
                    <div style="height: 200px; overflow:hidden;position:relative">
                        <img src="{!! $myBlurbs[1]['image_url'] !!}" style="width:100%; position: absolute; top:50%; transform: translateY(-50%);">
                    </div>
                    <div class="rh-blurb__description mx2 pt2" >
                        <h3><a href="{{ $myBlurbs[1]['link_url'] }}" target="{{ $myBlurbs[1]['link_target'] }}" style="color:black">{{ $myBlurbs[1]['link_title'] }}</a></h3>
                        <p>{{ $myBlurbs[1]['post_content'] }}</p>
                    </div>
                </div>
            </li>

            <li class="left-align  col col-12 sm-col-6 md-col-6 lg-col-4">
                <div class="rh-blurb mx1 my2" style="border-bottom: 4px solid #E99579">
                    <div style="height: 200px; overflow:hidden;position:relative">
                        <img src="{!! $myBlurbs[2]['image_url'] !!}" style="width:100%; position: absolute; top:50%; transform: translateY(-50%);">
                    </div>
                    <div class="mx2 pt2 rh-blurb__description">
                        <h3><a href="{{ $myBlurbs[2]['link_url'] }}" target="{{ $myBlurbs[2]['link_target'] }}" style="color:black">{{ $myBlurbs[2]['link_title'] }}</a></h3>
                        <p>{{ $myBlurbs[2]['post_content'] }}</p>
                    </div>
                </div>
            </li>
        </ul>
    @endif



    <nav aria-label="Undersidor" style="background-color: #F4F4F4;">
        <ul class="flex flex-wrap px3 pt3 center" aria-label="Undersidor" style="max-width: 1440px;">
            @php($first_level_pages = get_region_halland_tree_first_level())
            @foreach($first_level_pages as $index => $page)
                <li class="rh-navigation-card left-align col-12 sm-col-6 md-col-4 lg-col-3 pr2" style="position:relative">
                    <div class="rh-navigation-card-title">
                        <span class="rh-navigation-card-title-icon"></span>
                        <strong><a href="{{ $page->url }}" class="h3" style="color:black; text-decoration: none;">
                                {{ $page->post_title }}
                            </a></strong>
                    </div>
                    <p class="rh-navigation-card-description left-align" style="overflow:hidden; color:#575757;">
                        {{ get_region_halland_acf_page_menu_text($page->ID) }}
                    </p>
                </li>
            @endforeach
        </ul>
    </nav>

@endsection
