<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link rel="apple-touch-icon" sizes="180x180" href="{!! env('WP_HOME') !!}/include/favicons/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="{!! env('WP_HOME') !!}/include/favicons/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="{!! env('WP_HOME') !!}/include/favicons/favicon-16x16.png"/>
	<link rel="manifest" href="{!! env('WP_HOME') !!}/include/favicons/site.webmanifest" />
	<link rel="mask-icon" href="{!! env('WP_HOME') !!}/include/favicons/safari-pinned-tab.svg" color="#6ba3cb" />
	<link rel="shortcut icon" href="{!! env('WP_HOME') !!}/include/favicons/favicon.ico" />
	<meta name="apple-mobile-web-app-title" content="Region Halland" />
	<meta name="application-name" content="Region Halland" />
	<meta name="msapplication-TileColor" content="#ffffff" />
	<meta name="msapplication-config" href="{!! env('WP_HOME') !!}/include/favicons/browserconfig.xml" />
	<meta name="theme-color" content="#ffffff" />
	@php($myPostType = get_post_type())
	@if($myPostType == 'page')
		<title>{{ $post->post_title }} - Vuxhalland</title>
	@else
		<title>{{ $myPostType }} - Vuxhalland</title>
	@endif
    <link rel="stylesheet" type="text/css" href="{!! env('WP_HOME') !!}/include/alicdn/font_o5hd5vvqpoqiwwmi_190529.css">
	<link href="{!! env('WP_HOME') !!}/styleguide5.0.0/css/components.css" rel="stylesheet"/>
	<link rel="stylesheet" href="{!! env('WP_HOME') !!}/include/style/development.css" type="text/css" media="all" />
	<style>
		.rh-article ul {
			list-style-type: disc;
			padding-left: 2ex;
			line-height: 1.37em;
		}
		.rh-article ol {
			list-style-type: decimal;
			padding-left: 2ex;
			line-height: 1.37em;
		}

	</style>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141325041-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-141325041-1');
	</script>

</head>