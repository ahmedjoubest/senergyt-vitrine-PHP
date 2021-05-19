<?php
session_start();
if(!isset($_SESSION['userLogin'])){
    header('Location: login_view.php');
}

?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="https://senergyt.fr/xmlrpc.php" />
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<!-- This site is optimized with the Yoast SEO plugin v16.0.2 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Senergy&#039;T &ndash; Accueil &ndash;</title>
	<link rel="canonical" href="https://senergyt.fr/" />
	<meta property="og:locale" content="fr_FR" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Senergy&#039;T &ndash; Accueil &ndash;" />
	<meta property="og:description" content="Les Artisans de votre maîtrise énergétique Un interlocuteur unique pour des solutions sur-mesures SENERGY’T est un groupement de PME et de partenaires techniques spécialisés dans l’efficacité énergétique sur les réseaux et infrastructures de transport et distribution d’énergie thermique. Nous intervenons comme opérateur d’exécution de travaux pour la réalisation d’actions de maîtrise énergétique auprès des exploitants, &hellip; Continuer la lecture « Accueil »" />
	<meta property="og:url" content="https://senergyt.fr/" />
	<meta property="og:site_name" content="Senergy&#039;T" />
	<meta property="article:modified_time" content="2021-03-29T18:55:55+00:00" />
	<meta property="og:image" content="http://senergyt.fr/wp-content/uploads/2021/03/icone-site-web-1.png" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Durée de lecture est.">
	<meta name="twitter:data1" content="6 minutes">
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://senergyt.fr/#organization","name":"Senergy'T","url":"https://senergyt.fr/","sameAs":[],"logo":{"@type":"ImageObject","@id":"https://senergyt.fr/#logo","inLanguage":"fr-FR","url":"https://senergyt.fr/wp-content/uploads/2021/03/cropped-Flavicon-SEN.png","width":512,"height":512,"caption":"Senergy'T"},"image":{"@id":"https://senergyt.fr/#logo"}},{"@type":"WebSite","@id":"https://senergyt.fr/#website","url":"https://senergyt.fr/","name":"Senergy&#039;T","description":"Les artisans de votre ma\u00eetrise \u00e9nerg\u00e9tique","publisher":{"@id":"https://senergyt.fr/#organization"},"potentialAction":[{"@type":"SearchAction","target":"https://senergyt.fr/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"fr-FR"},{"@type":"ImageObject","@id":"https://senergyt.fr/#primaryimage","inLanguage":"fr-FR","url":"http://senergyt.fr/wp-content/uploads/2021/03/icone-site-web-1.png"},{"@type":"WebPage","@id":"https://senergyt.fr/#webpage","url":"https://senergyt.fr/","name":"Senergy&#039;T &ndash; Accueil &ndash;","isPartOf":{"@id":"https://senergyt.fr/#website"},"about":{"@id":"https://senergyt.fr/#organization"},"primaryImageOfPage":{"@id":"https://senergyt.fr/#primaryimage"},"datePublished":"2021-03-12T22:27:01+00:00","dateModified":"2021-03-29T18:55:55+00:00","breadcrumb":{"@id":"https://senergyt.fr/#breadcrumb"},"inLanguage":"fr-FR","potentialAction":[{"@type":"ReadAction","target":["https://senergyt.fr/"]}]},{"@type":"BreadcrumbList","@id":"https://senergyt.fr/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://senergyt.fr/","url":"https://senergyt.fr/","name":"Accueil"}}]}]}</script>
	<meta name="google-site-verification" content="oJlrtpnSBLOzR3VSgIQlqr70nPLB-_3BtzS4XutORRQ" />
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Senergy&#039;T &raquo; Flux" href="https://senergyt.fr/feed/" />
<link rel="alternate" type="application/rss+xml" title="Senergy&#039;T &raquo; Flux des commentaires" href="https://senergyt.fr/comments/feed/" />
		<script>
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/senergyt.fr\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.1"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://senergyt.fr/wp-includes/css/dist/block-library/style.min.css?ver=5.7.1' media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href='https://senergyt.fr/wp-includes/css/dist/block-library/theme.min.css?ver=5.7.1' media='all' />
<link rel='stylesheet' id='templately-editor-css'  href='https://senergyt.fr/wp-content/plugins/templately/assets/css/editor.css?ver=1.2.1' media='all' />
<link rel='stylesheet' id='hfe-style-css'  href='https://senergyt.fr/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.5.9' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.11.0' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.2.2' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='https://senergyt.fr/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.2.2' media='all' />
<link rel='stylesheet' id='elementor-post-16-css'  href='https://senergyt.fr/wp-content/uploads/elementor/css/post-16.css?ver=1619099429' media='all' />
<link rel='stylesheet' id='elementor-pro-css'  href='https://senergyt.fr/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.2.1' media='all' />
<link rel='stylesheet' id='elementor-post-74-css'  href='https://senergyt.fr/wp-content/uploads/elementor/css/post-74.css?ver=1619102890' media='all' />
<link rel='stylesheet' id='hfe-widgets-style-css'  href='https://senergyt.fr/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.5.9' media='all' />
<link rel='stylesheet' id='elementor-post-82-css'  href='https://senergyt.fr/wp-content/uploads/elementor/css/post-82.css?ver=1619099429' media='all' />
<link rel='stylesheet' id='elementor-post-151-css'  href='https://senergyt.fr/wp-content/uploads/elementor/css/post-151.css?ver=1619099429' media='all' />
<link rel='stylesheet' id='twentynineteen-style-css'  href='https://senergyt.fr/wp-content/themes/twentynineteen/style.css?ver=2.0' media='all' />
<link rel='stylesheet' id='twentynineteen-print-style-css'  href='https://senergyt.fr/wp-content/themes/twentynineteen/print.css?ver=2.0' media='print' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto+Condensed%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.7.1' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css'  href='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.1' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css'  href='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.1' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css'  href='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.1' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css'  href='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.1' media='all' />
<link rel="https://api.w.org/" href="https://senergyt.fr/wp-json/" /><link rel="alternate" type="application/json" href="https://senergyt.fr/wp-json/wp/v2/pages/74" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://senergyt.fr/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://senergyt.fr/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.7.1" />
<link rel='shortlink' href='https://senergyt.fr/' />
<link rel="alternate" type="application/json+oembed" href="https://senergyt.fr/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsenergyt.fr%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://senergyt.fr/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsenergyt.fr%2F&#038;format=xml" />
<link rel="icon" href="https://senergyt.fr/wp-content/uploads/2021/03/cropped-Flavicon-SEN-32x32.png" sizes="32x32" />
<link rel="icon" href="https://senergyt.fr/wp-content/uploads/2021/03/cropped-Flavicon-SEN-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://senergyt.fr/wp-content/uploads/2021/03/cropped-Flavicon-SEN-180x180.png" />
<meta name="msapplication-TileImage" content="https://senergyt.fr/wp-content/uploads/2021/03/cropped-Flavicon-SEN-270x270.png" />
		<style id="wp-custom-css">
			h1:not(.site-title):before,
h2:before {
    display: none;
}

h1:not(.entry-title):before,
h2:before {
    display: none;
}
		</style>
		</head>

<body class="home page-template page-template-elementor_header_footer page page-id-74 wp-embed-responsive ehf-header ehf-footer ehf-template-twentynineteen ehf-stylesheet-twentynineteen singular image-filters-enabled elementor-default elementor-template-full-width elementor-kit-16 elementor-page elementor-page-74">
<div id="page" class="hfeed site">

		<header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
			<p class="main-title bhf-hidden" itemprop="headline"><a href="https://senergyt.fr" title="Senergy&#039;T" rel="home">Senergy&#039;T</a></p>
					<div data-elementor-type="wp-post" data-elementor-id="82" class="elementor elementor-82" data-elementor-settings="[]">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-85f99fd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="85f99fd" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0882bdf" data-id="0882bdf" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-41de9c2 elementor-widget elementor-widget-image" data-id="41de9c2" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="640" height="130" src="https://senergyt.fr/wp-content/uploads/2021/03/Sener.png" class="elementor-animation-grow attachment-large size-large" alt="" loading="lazy" />

															</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<header class="elementor-section elementor-top-section elementor-element elementor-element-7a45f35 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="7a45f35" data-element_type="section">
						<div class="elementor-container elementor-column-gap-narrow">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5f58927" data-id="5f58927" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-b18b572 elementor-nav-menu__align-center elementor-nav-menu--indicator-angle elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="b18b572" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
				<div class="elementor-widget-container">
						<nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-grow"><ul id="menu-1-b18b572" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-74 current_page_item menu-item-75"><a href="https://xlab.senergyt.fr/index.php" aria-current="page" class="elementor-item elementor-item-active">Accueil</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78"><a href="https://xlab.senergyt.fr/index1.php" class="elementor-item">Rationaliser le réseau de chaleur parisien</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><a href="https://xlab.senergyt.fr/index2.php" class="elementor-item">Apporter de la résilience</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-303"><a href="https://xlab.senergyt.fr/index3.php" class="elementor-item">Croiser les regards sur les réseaux</a></li>
</ul></nav>
					<div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
			<i class="eicon-menu-bar" aria-hidden="true"></i>
			<span class="elementor-screen-only">Menu</span>
		</div>
			<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true"><ul id="menu-2-b18b572" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-74 current_page_item menu-item-75"><a href="https://xlab.senergyt.fr/index.php" aria-current="page" class="elementor-item elementor-item-active">Aaccueil</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78"><a href="https://xlab.senergyt.fr/index1.php" class="elementor-item">Nos partenaires</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><a href="https://xlab.senergyt.fr/index2.php" class="elementor-item">Nous contacter</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-303"><a href="https://xlab.senergyt.fr/index3.php" class="elementor-item">Nos actualités</a></li>
</ul></nav>
				</div>
				</div>
					</div>
		</div>
							</div>
		</header>
						</div>
					</div>
				</header>

			<div data-elementor-type="wp-page" data-elementor-id="74" class="elementor elementor-74" data-elementor-settings="[]">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-48aa25f8 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="48aa25f8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;background_motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;background_motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;background_motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:14,&quot;end&quot;:88}},&quot;background_motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2680c911" data-id="2680c911" data-element_type="column">
			<div class="elementor-widget-wrap elementor-selement-populated">
			  
								<div class="elementor-element elementor-element-e09dfbf elementor-widget elementor-widget-heading" data-id="e09dfbf" data-element_type="widget" data-widget_type="heading.default">
								  
				<div class="elementor-widget-container">
				  <br>
				  <img width="19%" src="Logo-Engie.jpg" style="margin-bottom: 3em;" />
			<h2 class="elementor-heading-title elementor-size-default"  >PROJET  X-LAB 2024 </h2>	
			</div>
				</div>
				<div class="elementor-element elementor-element-37c2742a elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="37c2742a" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-eb891d1 elementor-widget elementor-widget-heading" data-id="eb891d1" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default" style="margin-bottom: 9em;">Communication et propositions en date de : Mai 2021</h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-56a998d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="56a998d" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1e032f6" data-id="1e032f6" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-cb45e30 elementor-widget elementor-widget-text-editor" data-id="cb45e30" data-element_type="widget" data-widget_type="text-editor.default">
				
				<section class="elementor-section elementor-top-section elementor-element elementor-element-cbe6679 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cbe6679" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-381cb08" data-id="381cb08" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-65ef6729 elementor-widget elementor-widget-heading" data-id="65ef6729" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
				  
				  				<br>

			<h3 class="elementor-heading-title elementor-size-large">NOTRE VOLONTE</h3>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				
				
				<div class="elementor-widget-container">
								<p style="text-align: center;">Apporter un support aux équipes ENGIE dans leurs anticipations techniques/financières/commerciales et contribuer ainsi aux pistes de transformation de l’outil de transport et de distribution thermique de la ville de Paris (périmètre intramuros et Francilien) à l’horizon 2024-2050 :</p> 
								<ul style = "position:relative; left: 22%; width: 65%">
    <li>Caractériser l’impact attendu des tendances lourdes</li>
    <li>Repérer des émergences sources de risques comme d’opportunités </li>
    <li>Cerner les espaces d’incertitudes  </li>
    <li>Imaginer des ruptures possibles </li>
    <li>Révéler les marges de manœuvre  </li>
    <li>Contribuer à la veille d’information  </li>
        </ul>
         
         <br>
         
         <p style="text-align: center;">Créer un pôle d’expérimentation en mode recherche-action visant la mise en œuvre de nouvelles solutions techniques/financières/commerciales avant l’échéance de la fin de la DSP afin :</p> 
								<ul style = "position:relative; left: 22%; width: 68%">
    <li>d’enrichir et/ou de justifier le positionnement d’ENGIE à l’égard du délégant et de ses nombreuses parties prenantes</li>
    <li>d’identifier et de maximiser les critères et les pôles de rentabilité du futur de l’outil de transport et de distribution thermique intramuros et francilien miser les critères et les pôles de rentabilité du futur de l’outil de transport et de distribution thermique intramuros et francilien</li>
        </ul>
         
         </div>
         
         	<section class="elementor-section elementor-top-section elementor-element elementor-element-cbe6679 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cbe6679" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-381cb08" data-id="381cb08" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-65ef6729 elementor-widget elementor-widget-heading" data-id="65ef6729" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
				  
				  				<br>

			<h3 class="elementor-heading-title elementor-size-large">NOTRE PROPOSITION OPERATIONNELLE</h3>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				
				
				<div class="elementor-widget-container">
								<p style="text-align: center;">Nous proposons la création d’un espace collaboratif ouvert, le laboratoire de recherche-action PROJET « X-LAB-2024 », afin de :</p> 
								<ul style = "position:relative; left: 22%; width: 70%">
    <li>Préparer des approches opérationnelles différenciantes, en assurer le suivi et la qualité du retour d’expérience (voir propositions ci-dessous)</li>
    <li>Interroger la transmission des savoir-faire, des savoir-être, et contribuer à la définition de crash-test opérationnel afin d’améliorer la résilience de l’organisation sur des temps longs </li>
        </ul>
         
         <br>
         
         <p style="text-align: center;">L’enjeu est de formaliser les enseignements tirés des expériences acquises afin de :</p> 
								<ul style = "position:relative; left: 22%; width: 70%">
    <li>Pérenniser l’outil de transport et de distribution d’énergie thermique à Paris</li>
    <li>Créer de la valeur pour ENGIE dans le cadre de la vente de ses services en France comme à l’international</li>
        </ul>
         
         </div>
         <br>
         
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-cbe6679 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cbe6679" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-381cb08" data-id="381cb08" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-65ef6729 elementor-widget elementor-widget-heading" data-id="65ef6729" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-large">Nos services</h3>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-f0d884e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f0d884e" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1faf417" data-id="1faf417" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-e75b5d1 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="e75b5d1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-42346ea" data-id="42346ea" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-77a3219 elementor-widget elementor-widget-image" data-id="77a3219" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="489" height="463" src="https://senergyt.fr/wp-content/uploads/2021/03/icone-site-web-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/icone-site-web-1.png 489w, https://senergyt.fr/wp-content/uploads/2021/03/icone-site-web-1-300x284.png 300w" sizes="(max-width: 489px) 100vw, 489px" />															</div>
				</div>
				<div class="elementor-element elementor-element-9e89b24 elementor-widget elementor-widget-heading" data-id="9e89b24" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Montube Industries</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-43d7bd7 elementor-widget elementor-widget-text-editor" data-id="43d7bd7" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<p style="text-align: center;">Opérateur de tuyauterie/soudure/montage, MONTUBE Industries intervient sans discontinuité pour le compte des exploitants de la région parisienne depuis plus de 25 ans.</p>						</div>
				</div>
				<div class="elementor-element elementor-element-ca1ed9f elementor-widget elementor-widget-image" data-id="ca1ed9f" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="2327" height="273" src="https://senergyt.fr/wp-content/uploads/2021/03/Sans-titre-1.jpg" class="attachment-full size-full" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/Sans-titre-1.jpg 2327w, https://senergyt.fr/wp-content/uploads/2021/03/Sans-titre-1-300x35.jpg 300w, https://senergyt.fr/wp-content/uploads/2021/03/Sans-titre-1-1024x120.jpg 1024w, https://senergyt.fr/wp-content/uploads/2021/03/Sans-titre-1-768x90.jpg 768w, https://senergyt.fr/wp-content/uploads/2021/03/Sans-titre-1-1536x180.jpg 1536w, https://senergyt.fr/wp-content/uploads/2021/03/Sans-titre-1-2048x240.jpg 2048w, https://senergyt.fr/wp-content/uploads/2021/03/Sans-titre-1-1568x184.jpg 1568w" sizes="(max-width: 2327px) 100vw, 2327px" />															</div>
				</div>
				<div class="elementor-element elementor-element-e782ead elementor-align-center elementor-widget elementor-widget-button" data-id="e782ead" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="http://montubeindustries.fr/" class="elementor-button-link elementor-button elementor-size-md elementor-animation-grow" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Consulter notre site</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-061b97d" data-id="061b97d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-833d577 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="833d577" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e73db81" data-id="e73db81" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-5acee87 elementor-widget elementor-widget-image" data-id="5acee87" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="478" height="228" src="https://senergyt.fr/wp-content/uploads/2021/03/logo_header_x2.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/logo_header_x2.png 478w, https://senergyt.fr/wp-content/uploads/2021/03/logo_header_x2-300x143.png 300w" sizes="(max-width: 478px) 100vw, 478px" />															</div>
				</div>
				<div class="elementor-element elementor-element-eeea66a elementor-widget elementor-widget-heading" data-id="eeea66a" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">CIMES ASSISTANCE</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-6fdff9b elementor-widget elementor-widget-text-editor" data-id="6fdff9b" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<p style="text-align: center;">En appui des projets d’optimisation, de rénovation et d’extension des principaux opérateurs de transport et de distribution d’énergie thermique franciliens, CIMES Assistance coordonne les interfaces d’exécution travaux.</p>						</div>
				</div>
				<div class="elementor-element elementor-element-7a0401f elementor-widget elementor-widget-image" data-id="7a0401f" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="2405" height="273" src="https://senergyt.fr/wp-content/uploads/2021/03/cimes.jpg" class="attachment-full size-full" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/cimes.jpg 2405w, https://senergyt.fr/wp-content/uploads/2021/03/cimes-300x34.jpg 300w, https://senergyt.fr/wp-content/uploads/2021/03/cimes-1024x116.jpg 1024w, https://senergyt.fr/wp-content/uploads/2021/03/cimes-768x87.jpg 768w, https://senergyt.fr/wp-content/uploads/2021/03/cimes-1536x174.jpg 1536w, https://senergyt.fr/wp-content/uploads/2021/03/cimes-2048x232.jpg 2048w, https://senergyt.fr/wp-content/uploads/2021/03/cimes-1568x178.jpg 1568w" sizes="(max-width: 2405px) 100vw, 2405px" />															</div>
				</div>
				<div class="elementor-element elementor-element-9fe76d1 elementor-align-center elementor-widget elementor-widget-button" data-id="9fe76d1" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="http://www.cimes-assistance.com/" class="elementor-button-link elementor-button elementor-size-md elementor-animation-grow" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Consulter notre site</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-86680fb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="86680fb" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-31c8716" data-id="31c8716" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-0cd7dbb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0cd7dbb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f4359e9" data-id="f4359e9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-22288f3 elementor-widget elementor-widget-image" data-id="22288f3" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="480" height="272" src="https://senergyt.fr/wp-content/uploads/2021/03/SEGETA-FullHorizon-MidRes.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/SEGETA-FullHorizon-MidRes.png 480w, https://senergyt.fr/wp-content/uploads/2021/03/SEGETA-FullHorizon-MidRes-300x170.png 300w" sizes="(max-width: 480px) 100vw, 480px" />															</div>
				</div>
				<div class="elementor-element elementor-element-2194e5e elementor-widget elementor-widget-heading" data-id="2194e5e" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">SEGETA</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-12bdfa2 elementor-widget elementor-widget-text-editor" data-id="12bdfa2" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<p style="text-align: center;">Bureau d’études spécialisé dans le design, le dimensionnement et l’intégration des installations thermiques sur les domaines publics tout autant que dans les périmètres privatifs.</p>						</div>
				</div>
				<div class="elementor-element elementor-element-2917e03 elementor-widget elementor-widget-image" data-id="2917e03" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="1455" height="273" src="https://senergyt.fr/wp-content/uploads/2021/03/segeta.jpg" class="attachment-full size-full" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/segeta.jpg 1455w, https://senergyt.fr/wp-content/uploads/2021/03/segeta-300x56.jpg 300w, https://senergyt.fr/wp-content/uploads/2021/03/segeta-1024x192.jpg 1024w, https://senergyt.fr/wp-content/uploads/2021/03/segeta-768x144.jpg 768w" sizes="(max-width: 1455px) 100vw, 1455px" />															</div>
				</div>
				<div class="elementor-element elementor-element-5ecf3ec elementor-align-center elementor-widget elementor-widget-button" data-id="5ecf3ec" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-size-md elementor-animation-grow" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Consulter notre site</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-842f886" data-id="842f886" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-a92e076 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default" data-id="a92e076" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ac687af" data-id="ac687af" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-31fdd86 elementor-widget elementor-widget-image" data-id="31fdd86" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="1790" height="1641" src="https://senergyt.fr/wp-content/uploads/2021/03/Logo-1.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/Logo-1.png 1790w, https://senergyt.fr/wp-content/uploads/2021/03/Logo-1-300x275.png 300w, https://senergyt.fr/wp-content/uploads/2021/03/Logo-1-1024x939.png 1024w, https://senergyt.fr/wp-content/uploads/2021/03/Logo-1-768x704.png 768w, https://senergyt.fr/wp-content/uploads/2021/03/Logo-1-1536x1408.png 1536w, https://senergyt.fr/wp-content/uploads/2021/03/Logo-1-1568x1437.png 1568w" sizes="(max-width: 1790px) 100vw, 1790px" />															</div>
				</div>
				<div class="elementor-element elementor-element-24090b7 elementor-widget elementor-widget-heading" data-id="24090b7" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">SEnergy't ouest</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-5840429 elementor-widget elementor-widget-text-editor" data-id="5840429" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<p style="text-align: center;">Votre intégrateur technique pour le déploiement, la densification et l’optimisation des réseaux de chaleur  sur la région Ouest de la France.</p>						</div>
				</div>
				<div class="elementor-element elementor-element-0c0cb46 elementor-widget elementor-widget-image" data-id="0c0cb46" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="640" height="73" src="https://senergyt.fr/wp-content/uploads/2021/03/Screenshot-2021-03-24-at-19.55.38-copie-1024x116.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/Screenshot-2021-03-24-at-19.55.38-copie-1024x116.png 1024w, https://senergyt.fr/wp-content/uploads/2021/03/Screenshot-2021-03-24-at-19.55.38-copie-300x34.png 300w, https://senergyt.fr/wp-content/uploads/2021/03/Screenshot-2021-03-24-at-19.55.38-copie-768x87.png 768w, https://senergyt.fr/wp-content/uploads/2021/03/Screenshot-2021-03-24-at-19.55.38-copie-1536x174.png 1536w, https://senergyt.fr/wp-content/uploads/2021/03/Screenshot-2021-03-24-at-19.55.38-copie.png 1558w" sizes="(max-width: 640px) 100vw, 640px" />															</div>
				</div>
				<div class="elementor-element elementor-element-f79a497 elementor-widget elementor-widget-spacer" data-id="f79a497" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-0e08c73 elementor-align-center elementor-widget elementor-widget-button" data-id="0e08c73" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="http://senergyt.fr/senergytouest/" class="elementor-button-link elementor-button elementor-size-md elementor-animation-grow" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Consulter notre page</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3d4cf9b2 elementor-section-height-min-height elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="3d4cf9b2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;none&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-19b2b464" data-id="19b2b464" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-260f2546 elementor-widget elementor-widget-image" data-id="260f2546" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="688" height="91" src="https://senergyt.fr/wp-content/uploads/2021/03/Illustration-6.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/Illustration-6.png 688w, https://senergyt.fr/wp-content/uploads/2021/03/Illustration-6-300x40.png 300w" sizes="(max-width: 688px) 100vw, 688px" />															</div>
				</div>
				<div class="elementor-element elementor-element-7cc3041a elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="7cc3041a" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-36ede36b elementor-widget elementor-widget-heading" data-id="36ede36b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-large">Notre INITIATIVE thermo'lease</h3>		</div>
				</div>
				<div class="elementor-element elementor-element-2510e527 elementor-widget elementor-widget-text-editor" data-id="2510e527" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<p>Notre initiative THERMO’LEASE a pour vocation d’apporter une assistance aux travaux d’exploitation&nbsp;: maîtrise des consommations d’énergie, transfert de savoir-faire et engagements de résultats sont au programme&nbsp;!&nbsp;</p>
<p>A très vite pour de nouvelles actualités&nbsp;!</p>						</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-15f6e683 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="15f6e683" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-67368ca" data-id="67368ca" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6398e90 elementor-widget elementor-widget-heading" data-id="6398e90" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-large">Des Solutions sur mesure
</h3>		</div>
				</div>
				<div class="elementor-element elementor-element-6cb3de7 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="6cb3de7" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-3f45f7ca elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3f45f7ca" data-element_type="section">
						<div class="elementor-container elementor-column-gap-wider">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-57347769" data-id="57347769" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-1efb791 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="1efb791" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="128" height="128" src="https://senergyt.fr/wp-content/uploads/2021/03/1470399671_SEO.png" class="attachment-full size-full" alt="" loading="lazy" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Audit &amp; Diagnostic</h3><p class="elementor-image-box-description"><span style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; letter-spacing: normal; text-align: left; white-space: normal;">Nos offres SENERGY'T permettent l’état des lieux de votre situation : diagnostic des installations, identification des principaux gisements de consommations thermiques et des sources d’optimisation, des préconisations et l’analyse des solutions susceptibles de générer des gains d’exploitation.</span></p></div></div>		</div>
				</div>
				<div class="elementor-element elementor-element-4b626ea elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="4b626ea" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="512" height="512" src="https://senergyt.fr/wp-content/uploads/2021/03/euro.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/euro.png 512w, https://senergyt.fr/wp-content/uploads/2021/03/euro-300x300.png 300w, https://senergyt.fr/wp-content/uploads/2021/03/euro-150x150.png 150w" sizes="(max-width: 512px) 100vw, 512px" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Temps de retour sur investissement</h3><p class="elementor-image-box-description"><span style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; text-align: left; white-space: normal;">Le plus de SENERGY'T&nbsp;: vous assister dans la mobilisation des incitations publiques, construire et justifier vos dossiers d’investissement, cofinancer vos travaux générant des économies d’énergie thermique.</span><br></p></div></div>		</div>
				</div>
				<div class="elementor-element elementor-element-415b3c1 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="415b3c1" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="128" height="128" src="https://senergyt.fr/wp-content/uploads/2021/03/1470399662_Marketing.png" class="attachment-full size-full" alt="" loading="lazy" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Exécution de travaux</h3><p class="elementor-image-box-description"><span style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; text-align: left; white-space: normal;">Nos équipes sont rompues à la mise en place de solutions techniques spécifiques permettant la réduction des pertes d’exploitation liées aux opérations de maintenance et d’optimisation</span></p></div></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-be1eb56" data-id="be1eb56" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-c724111 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="c724111" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="512" height="512" src="https://senergyt.fr/wp-content/uploads/2021/03/chat.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/chat.png 512w, https://senergyt.fr/wp-content/uploads/2021/03/chat-300x300.png 300w, https://senergyt.fr/wp-content/uploads/2021/03/chat-150x150.png 150w" sizes="(max-width: 512px) 100vw, 512px" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Conseils &amp; efficacité énergétique</h3><p class="elementor-image-box-description"><span style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; text-align: left; white-space: normal;">Nos offres SENERGY'T contribue d’abord à l’aide à la décision&nbsp;: évaluer la qualité des leviers qui conditionnent l’efficacité énergétique d’un bâtiment : mesures et comptage, réglages de votre installation et comportement des utilisateurs.</span><br></p></div></div>		</div>
				</div>
				<div class="elementor-element elementor-element-fee3050 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="fee3050" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="512" height="512" src="https://senergyt.fr/wp-content/uploads/2021/03/renew.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/renew.png 512w, https://senergyt.fr/wp-content/uploads/2021/03/renew-300x300.png 300w, https://senergyt.fr/wp-content/uploads/2021/03/renew-150x150.png 150w" sizes="(max-width: 512px) 100vw, 512px" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Energies renouvelables</h3><p class="elementor-image-box-description"><span style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; text-align: left; white-space: normal;">Fort de notre expérience et de nos partenaires, nous vous aidons à intégrer les solutions de production d’énergies renouvelables qui, elles-aussi, vous permettent de décarboner l’empreinte de vos consommations et valorisent vos actifs.</span><br></p></div></div>		</div>
				</div>
				<div class="elementor-element elementor-element-9ad93b3 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="9ad93b3" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="512" height="513" src="https://senergyt.fr/wp-content/uploads/2021/03/tools.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/tools.png 512w, https://senergyt.fr/wp-content/uploads/2021/03/tools-300x300.png 300w, https://senergyt.fr/wp-content/uploads/2021/03/tools-150x150.png 150w" sizes="(max-width: 512px) 100vw, 512px" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Exploitation &amp; maintenance</h3><p class="elementor-image-box-description"><span style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; text-align: left; white-space: normal;">Les opérations et les investissements pour l’optimisation énergétique ne sont rien sans une appropriation réussie et un niveau de compétences techniques suffisants pour évaluer, mesurer, quantifier les efforts de tous</span></p></div></div>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
						</div>
					</div>
		
		<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
			<div class='footer-width-fixer'>		<div data-elementor-type="wp-post" data-elementor-id="151" class="elementor elementor-151" data-elementor-settings="[]">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-ed06561 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ed06561" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b635a80" data-id="b635a80" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6f0a3d61 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6f0a3d61" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d6019a6" data-id="5d6019a6" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-342f716 elementor-section-content-top elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="342f716" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_top&quot;:&quot;arrow&quot;}">
					<div class="elementor-shape elementor-shape-top" data-negative="false">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 10" preserveAspectRatio="none">
	<path class="elementor-shape-fill" d="M350,10L340,0h20L350,10z"/>
</svg>		</div>
					<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2255f5d0" data-id="2255f5d0" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-645f7df elementor-widget elementor-widget-image" data-id="645f7df" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="640" height="130" src="https://senergyt.fr/wp-content/uploads/2021/03/Sener2-1024x208.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://senergyt.fr/wp-content/uploads/2021/03/Sener2-1024x208.png 1024w, https://senergyt.fr/wp-content/uploads/2021/03/Sener2-300x61.png 300w, https://senergyt.fr/wp-content/uploads/2021/03/Sener2-768x156.png 768w, https://senergyt.fr/wp-content/uploads/2021/03/Sener2-1536x312.png 1536w, https://senergyt.fr/wp-content/uploads/2021/03/Sener2-2048x416.png 2048w, https://senergyt.fr/wp-content/uploads/2021/03/Sener2-1568x318.png 1568w" sizes="(max-width: 640px) 100vw, 640px" />															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2a785140" data-id="2a785140" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-42834c5d elementor-widget elementor-widget-text-editor" data-id="42834c5d" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<p style="text-align: left;">Artisans de votre maîtrise énergétique</p>						</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e8262b5" data-id="e8262b5" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-32671f0 hfe-nav-menu__align-right hfe-link-redirect-self_link hfe-submenu-icon-arrow hfe-nav-menu__breakpoint-tablet elementor-widget elementor-widget-navigation-menu" data-id="32671f0" data-element_type="widget" data-widget_type="navigation-menu.default">
				<div class="elementor-widget-container">
						<div class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical" data-layout="vertical">
				<div class="hfe-nav-menu__toggle elementor-clickable">
					<div class="hfe-nav-menu-icon">
						<i aria-hidden="true" tabindex="0" class="fas fa-align-justify"></i>					</div>
				</div>
				<nav class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow" data-toggle-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;fas fa-align-justify&quot;&gt;&lt;/i&gt;" data-close-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;far fa-window-close&quot;&gt;&lt;/i&gt;" data-full-width="yes"><ul id="menu-1-32671f0" class="hfe-nav-menu"><li id="menu-item-75" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-74 current_page_item parent hfe-creative-menu"><a href="https://xlab.senergyt.fr/index.php" class = "hfe-menu-item">Accueil</a></li>
<li id="menu-item-78" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="https://xlab.senergyt.fr/index1.php" class = "hfe-menu-item">Rationaliser le réseau de chaleur parisien</a></li>
<li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="https://xlab.senergyt.fr/index2.php" class = "hfe-menu-item">Apporter de la résilience</a></li>
<li id="menu-item-303" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="https://xlab.senergyt.fr/index3.php" class = "hfe-menu-item">Croiser les regards sur les réseaux</a></li>
</ul></nav>              
			</div>
					</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<footer class="elementor-section elementor-top-section elementor-element elementor-element-4be2b2b4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4be2b2b4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4c51b06e" data-id="4c51b06e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-71796b60 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="71796b60" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-319e0ec3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="319e0ec3" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9650e0" data-id="9650e0" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-cdf2906 elementor-widget elementor-widget-heading" data-id="cdf2906" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default">© 2018 All rights reserved</p>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-58f6fb40" data-id="58f6fb40" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-19d438a1 e-grid-align-right e-grid-align-center elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="19d438a1" data-element_type="widget" data-widget_type="social-icons.default">
				<div class="elementor-widget-container">
					<div class="elementor-social-icons-wrapper elementor-grid">
							<div class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-dc10550" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
													<i class="fa fa-twitter"></i>
											</a>
				</div>
							<div class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-0267196" target="_blank">
						<span class="elementor-screen-only">Facebook</span>
													<i class="fa fa-facebook"></i>
											</a>
				</div>
							<div class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-dribbble elementor-repeater-item-0e260c9" target="_blank">
						<span class="elementor-screen-only">Dribbble</span>
													<i class="fa fa-dribbble"></i>
											</a>
				</div>
							<div class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-dbaeb71" target="_blank">
						<span class="elementor-screen-only">Youtube</span>
													<i class="fa fa-youtube"></i>
											</a>
				</div>
							<div class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest elementor-repeater-item-d2d5c50" target="_blank">
						<span class="elementor-screen-only">Pinterest</span>
													<i class="fa fa-pinterest"></i>
											</a>
				</div>
							<div class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-medium elementor-repeater-item-92c0998" target="_blank">
						<span class="elementor-screen-only">Medium</span>
													<i class="fa fa-medium"></i>
											</a>
				</div>
					</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</footer>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5e9698f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5e9698f" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
								</div>
		</section>
						</div>
					</div>
		</div>		</footer>
	</div><!-- #page -->
<script src='https://senergyt.fr/wp-includes/js/wp-embed.min.js?ver=5.7.1' id='wp-embed-js'></script>
<script src='https://senergyt.fr/wp-includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
<script src='https://senergyt.fr/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1' id='smartmenus-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/header-footer-elementor/inc/js/frontend.js?ver=1.5.9' id='hfe-frontend-js-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.2.1' id='elementor-pro-webpack-runtime-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.2.2' id='elementor-webpack-runtime-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.2.2' id='elementor-frontend-modules-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.2.1' id='elementor-sticky-js'></script>
<script id='elementor-pro-frontend-js-before'>
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/senergyt.fr\/wp-admin\/admin-ajax.php","nonce":"56c0bc9960","urls":{"assets":"https:\/\/senergyt.fr\/wp-content\/plugins\/elementor-pro\/assets\/"},"i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"fr_FR","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/senergyt.fr\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script src='https://senergyt.fr/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.2.1' id='elementor-pro-frontend-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script src='https://senergyt.fr/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.2.2' id='share-link-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js'></script>
<script id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Partager sur Facebook","shareOnTwitter":"Partager sur Twitter","pinIt":"L\u2019\u00e9pingler","download":"T\u00e9l\u00e9charger","downloadImage":"T\u00e9l\u00e9charger une image","fullscreen":"Plein \u00e9cran","zoom":"Zoom","share":"Partager","playVideo":"Lire la vid\u00e9o","previous":"Pr\u00e9c\u00e9dent","next":"Suivant","close":"Fermer"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablette","value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1365,"direction":"max","is_enabled":false},"laptop":{"label":"Portable","value":1620,"direction":"max","is_enabled":false},"widescreen":{"label":"\u00c9cran large","value":2400,"direction":"min","is_enabled":false}}},"version":"3.2.2","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"a11y_improvements":true,"landing-pages":true,"form-submissions":true},"urls":{"assets":"https:\/\/senergyt.fr\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":74,"title":"Senergy%27T%20%E2%80%93%20Les%20artisans%20de%20votre%20ma%C3%AEtrise%20%C3%A9nerg%C3%A9tique","excerpt":"","featuredImage":false}};
</script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.2.2' id='elementor-frontend-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min.js?ver=3.2.1' id='pro-preloaded-elements-handlers-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.2.2' id='preloaded-modules-js'></script>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	</body>
</html> 
