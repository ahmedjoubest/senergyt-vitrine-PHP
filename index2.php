<?php
session_start();
if(!isset($_SESSION['userLogin'])){
    header('Location: login_view.php');
}

?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>

    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="https://senergyt.fr/xmlrpc.php"/>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>

    <!-- This site is optimized with the Yoast SEO plugin v16.0.2 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Senergy&#039;T &ndash; Accueil &ndash;</title>
    <link rel="canonical" href="https://senergyt.fr/"/>
    <meta property="og:locale" content="fr_FR"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Senergy&#039;T &ndash; Accueil &ndash;"/>
    <meta property="og:description"
          content="Les Artisans de votre maîtrise énergétique Un interlocuteur unique pour des solutions sur-mesures SENERGY’T est un groupement de PME et de partenaires techniques spécialisés dans l’efficacité énergétique sur les réseaux et infrastructures de transport et distribution d’énergie thermique. Nous intervenons comme opérateur d’exécution de travaux pour la réalisation d’actions de maîtrise énergétique auprès des exploitants, &hellip; Continuer la lecture « Accueil »"/>
    <meta property="og:url" content="https://senergyt.fr/"/>
    <meta property="og:site_name" content="Senergy&#039;T"/>
    <meta property="article:modified_time" content="2021-03-29T18:55:55+00:00"/>
    <meta property="og:image" content="http://senergyt.fr/wp-content/uploads/2021/03/icone-site-web-1.png"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:label1" content="Durée de lecture est.">
    <meta name="twitter:data1" content="6 minutes">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>
    <script type="application/ld+json" class="yoast-schema-graph">{
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "Organization",
                    "@id": "https://senergyt.fr/#organization",
                    "name": "Senergy'T",
                    "url": "https://senergyt.fr/",
                    "sameAs": [],
                    "logo": {
                        "@type": "ImageObject",
                        "@id": "https://senergyt.fr/#logo",
                        "inLanguage": "fr-FR",
                        "url": "https://senergyt.fr/wp-content/uploads/2021/03/cropped-Flavicon-SEN.png",
                        "width": 512,
                        "height": 512,
                        "caption": "Senergy'T"
                    },
                    "image": {
                        "@id": "https://senergyt.fr/#logo"
                    }
                },
                {
                    "@type": "WebSite",
                    "@id": "https://senergyt.fr/#website",
                    "url": "https://senergyt.fr/",
                    "name": "Senergy&#039;T",
                    "description": "Les artisans de votre ma\u00eetrise \u00e9nerg\u00e9tique",
                    "publisher": {
                        "@id": "https://senergyt.fr/#organization"
                    },
                    "potentialAction": [
                        {
                            "@type": "SearchAction",
                            "target": "https://senergyt.fr/?s={search_term_string}",
                            "query-input": "required name=search_term_string"
                        }
                    ],
                    "inLanguage": "fr-FR"
                },
                {
                    "@type": "ImageObject",
                    "@id": "https://senergyt.fr/#primaryimage",
                    "inLanguage": "fr-FR",
                    "url": "http://senergyt.fr/wp-content/uploads/2021/03/icone-site-web-1.png"
                },
                {
                    "@type": "WebPage",
                    "@id": "https://senergyt.fr/#webpage",
                    "url": "https://senergyt.fr/",
                    "name": "Senergy&#039;T &ndash; Accueil &ndash;",
                    "isPartOf": {
                        "@id": "https://senergyt.fr/#website"
                    },
                    "about": {
                        "@id": "https://senergyt.fr/#organization"
                    },
                    "primaryImageOfPage": {
                        "@id": "https://senergyt.fr/#primaryimage"
                    },
                    "datePublished": "2021-03-12T22:27:01+00:00",
                    "dateModified": "2021-03-29T18:55:55+00:00",
                    "breadcrumb": {
                        "@id": "https://senergyt.fr/#breadcrumb"
                    },
                    "inLanguage": "fr-FR",
                    "potentialAction": [
                        {
                            "@type": "ReadAction",
                            "target": [
                                "https://senergyt.fr/"
                            ]
                        }
                    ]
                },
                {
                    "@type": "BreadcrumbList",
                    "@id": "https://senergyt.fr/#breadcrumb",
                    "itemListElement": [
                        {
                            "@type": "ListItem",
                            "position": 1,
                            "item": {
                                "@type": "WebPage",
                                "@id": "https://senergyt.fr/",
                                "url": "https://senergyt.fr/",
                                "name": "Accueil"
                            }
                        }
                    ]
                }
            ]
        }</script>
    <meta name="google-site-verification" content="oJlrtpnSBLOzR3VSgIQlqr70nPLB-_3BtzS4XutORRQ"/>
    <style>
        .rating {
            display: inline-block;
            width: 100%;
            text-align: center;
        }

        .like,
        .dislike {
            display: inline-block;
            cursor: pointer;
            margin: 10px;
        }

        .like:hover {
            color: green;
            transition: all .2s ease-in-out;
            transform: scale(1.1);
        }
        .dislike:hover{
            color: red;
            transition: all .2s ease-in-out;
            transform: scale(1.1);
        }


        .active {
            color: green;
        }
        .dislikeOffre{
            color: red;
        }

        .commen-section{
            width: 60%;
            margin: auto;
            margin-bottom: 20px;
        }
        #comment{
            margin-bottom: 20px;
        }
        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='//s.w.org'/>
    <link rel="alternate" type="application/rss+xml" title="Senergy&#039;T &raquo; Flux"
          href="https://senergyt.fr/feed/"/>
    <link rel="alternate" type="application/rss+xml" title="Senergy&#039;T &raquo; Flux des commentaires"
          href="https://senergyt.fr/comments/feed/"/>
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/senergyt.fr\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.1"}
        };
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
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
    <link rel='stylesheet' id='wp-block-library-css'
          href='https://senergyt.fr/wp-includes/css/dist/block-library/style.min.css?ver=5.7.1' media='all'/>
    <link rel='stylesheet' id='wp-block-library-theme-css'
          href='https://senergyt.fr/wp-includes/css/dist/block-library/theme.min.css?ver=5.7.1' media='all'/>
    <link rel='stylesheet' id='templately-editor-css'
          href='https://senergyt.fr/wp-content/plugins/templately/assets/css/editor.css?ver=1.2.1' media='all'/>
    <link rel='stylesheet' id='hfe-style-css'
          href='https://senergyt.fr/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.5.9'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-css'
          href='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.11.0'
          media='all'/>
    <link rel='stylesheet' id='elementor-animations-css'
          href='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.2.2'
          media='all'/>
    <link rel='stylesheet' id='elementor-frontend-css'
          href='https://senergyt.fr/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.2.2' media='all'/>
    <link rel='stylesheet' id='elementor-post-16-css'
          href='https://senergyt.fr/wp-content/uploads/elementor/css/post-16.css?ver=1619099429' media='all'/>
    <link rel='stylesheet' id='elementor-pro-css'
          href='https://senergyt.fr/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.2.1'
          media='all'/>
    <link rel='stylesheet' id='elementor-post-74-css'
          href='https://senergyt.fr/wp-content/uploads/elementor/css/post-74.css?ver=1619102890' media='all'/>
    <link rel='stylesheet' id='hfe-widgets-style-css'
          href='https://senergyt.fr/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.5.9'
          media='all'/>
    <link rel='stylesheet' id='elementor-post-82-css'
          href='https://senergyt.fr/wp-content/uploads/elementor/css/post-82.css?ver=1619099429' media='all'/>
    <link rel='stylesheet' id='elementor-post-151-css'
          href='https://senergyt.fr/wp-content/uploads/elementor/css/post-151.css?ver=1619099429' media='all'/>
    <link rel='stylesheet' id='twentynineteen-style-css'
          href='https://senergyt.fr/wp-content/themes/twentynineteen/style.css?ver=2.0' media='all'/>
    <link rel='stylesheet' id='twentynineteen-print-style-css'
          href='https://senergyt.fr/wp-content/themes/twentynineteen/print.css?ver=2.0' media='print'/>
    <link rel='stylesheet' id='google-fonts-1-css'
          href='https://fonts.googleapis.com/css?family=Roboto+Condensed%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.7.1'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
          href='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.1'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
          href='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.1'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
          href='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.1'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
          href='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.1'
          media='all'/>
    <link rel="https://api.w.org/" href="https://senergyt.fr/wp-json/"/>
    <link rel="alternate" type="application/json" href="https://senergyt.fr/wp-json/wp/v2/pages/74"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://senergyt.fr/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://senergyt.fr/wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 5.7.1"/>
    <link rel='shortlink' href='https://senergyt.fr/'/>
    <link rel="alternate" type="application/json+oembed"
          href="https://senergyt.fr/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsenergyt.fr%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="https://senergyt.fr/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsenergyt.fr%2F&#038;format=xml"/>
    <link rel="icon" href="https://senergyt.fr/wp-content/uploads/2021/03/cropped-Flavicon-SEN-32x32.png"
          sizes="32x32"/>
    <link rel="icon" href="https://senergyt.fr/wp-content/uploads/2021/03/cropped-Flavicon-SEN-192x192.png"
          sizes="192x192"/>
    <link rel="apple-touch-icon"
          href="https://senergyt.fr/wp-content/uploads/2021/03/cropped-Flavicon-SEN-180x180.png"/>
    <meta name="msapplication-TileImage"
          content="https://senergyt.fr/wp-content/uploads/2021/03/cropped-Flavicon-SEN-270x270.png"/>
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
        <p class="main-title bhf-hidden" itemprop="headline"><a href="https://senergyt.fr" title="Senergy&#039;T"
                                                                rel="home">Senergy&#039;T</a></p>
        <div data-elementor-type="wp-post" data-elementor-id="82" class="elementor elementor-82"
             data-elementor-settings="[]">
            <div class="elementor-section-wrap">
                <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-85f99fd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="85f99fd" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0882bdf"
                             data-id="0882bdf" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-41de9c2 elementor-widget elementor-widget-image"
                                     data-id="41de9c2" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img width="640" height="130"
                                             src="https://senergyt.fr/wp-content/uploads/2021/03/Sener.png"
                                             class="elementor-animation-grow attachment-large size-large" alt=""
                                             loading="lazy"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <header class="elementor-section elementor-top-section elementor-element elementor-element-7a45f35 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                        data-id="7a45f35" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-narrow">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5f58927"
                             data-id="5f58927" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-b18b572 elementor-nav-menu__align-center elementor-nav-menu--indicator-angle elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                     data-id="b18b572" data-element_type="widget"
                                     data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}"
                                     data-widget_type="nav-menu.default">
                                    <div class="elementor-widget-container">
                                        <nav role="navigation"
                                             class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-grow">
                                            <ul id="menu-1-b18b572" class="elementor-nav-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-74 current_page_item menu-item-75">
                                                    <a href="https://xlab.senergyt.fr/index.php" aria-current="page"
                                                       class="elementor-item">Accueil</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78">
                                                    <a href="https://xlab.senergyt.fr/index1.php" class="elementor-item">Rationaliser
                                                        le réseau de chaleur parisien</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">
                                                    <a href="https://xlab.senergyt.fr/index2.php" class="elementor-item elementor-item-active">Apporter
                                                        de la résilience</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-303">
                                                    <a href="https://xlab.senergyt.fr/index3.php" class="elementor-item">Croiser
                                                        les regards sur les réseaux</a></li>
                                            </ul>
                                        </nav>
                                        <div class="elementor-menu-toggle" role="button" tabindex="0"
                                             aria-label="Menu Toggle" aria-expanded="false">
                                            <i class="eicon-menu-bar" aria-hidden="true"></i>
                                            <span class="elementor-screen-only">Menu</span>
                                        </div>
                                        <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                             role="navigation" aria-hidden="true">
                                            <ul id="menu-2-b18b572" class="elementor-nav-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-74 current_page_item menu-item-75">
                                                    <a href="http://18.189.141.148/" aria-current="page"
                                                       class="elementor-item elementor-item-active">Accueil</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78">
                                                    <a href="https://senergyt.fr/partenaires/" class="elementor-item">Nos
                                                        partenaires</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">
                                                    <a href="https://senergyt.fr/contact/" class="elementor-item">Nous
                                                        contacter</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-303">
                                                    <a href="https://senergyt.fr/actualites/" class="elementor-item">Nos
                                                        actualités</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </header>

    <div data-elementor-type="wp-page" data-elementor-id="74" class="elementor elementor-74"
         data-elementor-settings="[]">
        <div class="elementor-section-wrap">

            <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-56a998d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="56a998d" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1e032f6"
                         data-id="1e032f6" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-cb45e30 elementor-widget elementor-widget-text-editor"
                                 data-id="cb45e30" data-element_type="widget" data-widget_type="text-editor.default">

                                <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-cbe6679 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="cbe6679" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-381cb08"
                                             data-id="381cb08" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-65ef6729 elementor-widget elementor-widget-heading"
                                                     data-id="65ef6729" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">

                                                        <br>

                                                        <h3 class="elementor-heading-title elementor-size-large">Investir dans un atelier de rechapage des équipements de ligne ?</h3></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <div class="elementor-widget-container">
                                    <h4 style="text-align: center;"> Rendez-vous avec M. X </h4>
                                    <img src="https://www.gtanf.com/forums/uploads/monthly_2016_11/Anonyme.png.2fe8ae9fa070b2f938302a0ab399b95d.png" style="display: block; margin-left: auto; margin-right: auto; width: 5%;">
                                    <p style="text-align: center;">Spécialiste du rechapage des pièces automobile, M. X. gère un réseau d’entreprises dédiées aux pièces d’occasion. Membre BPI Excellence, M. X. possède une expérience commerciale avérée dans les circuits de recyclage technique.</p>
                                    
                                    <div class="rating">
                                        <!-- Thumbs up -->
                                        <div data-value="Intéressé" class="like grow offre1 tooltip">
                                            <span class="tooltiptext">Intéressé</span>
                                            <i class="fa fa-thumbs-up fa-3x like" aria-hidden="true"></i>
                                        </div>
                                        <!-- Thumbs down -->
                                        <div data-value="Non intéressé" class="dislike grow offre1 tooltip">
                                            <span class="tooltiptext">Non intéressé</span>
                                            <i class="fa fa-thumbs-down fa-3x dislike" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <h4 style="text-align: center;"> Témoignage sous X </h4>
                                    <p style="text-align: center;"> - A l’époque ; l’atelier de robinetterie s’occupait des purgeurs, des filtres de vannes. Un banc vapeur et une dizaine de collaborateurs ! Nous pouvions facilement entretenir le parc de notre robinetterie : fait dans la journée, reparti le lendemain. Nous avions un savoir-faire et des compétences<p>
                                    <p style="text-align: center;"> - Il y avait un roulement avec le magasin, ce qui évitait de recommander en permanence du matériel<p>
                                    <div class="rating">
                                        <!-- Thumbs up -->
                                        <div data-value="Intéressé" class="like grow offre2 tooltip">
                                            <span class="tooltiptext">Intéressé</span>
                                            <i class="fa fa-thumbs-up fa-3x like" aria-hidden="true"></i>
                                        </div>
                                        <!-- Thumbs down -->
                                        <div data-value="Non intéressé" class="dislike grow offre2 tooltip">
                                            <span class="tooltiptext">Non intéressé</span>
                                            <i class="fa fa-thumbs-down fa-3x dislike" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                    
                                
                                    <h4 style="text-align: center;"> Logarythm'X  </h4>
                                    <p style="text-align: center;"> Plan de transformation de l’économie française : <a target="_blank" href="https://theshiftproject.org/wp-content/uploads/2021/04/TSP-PTEF-V1-FL-Industrie.pdf">Rapport Du Shift Project sur l’Industrie</a> et sur <a target="_blank" href="https://theshiftproject.org/plan-de-transformation-de-leconomie-francaise-focus-sur-lenergie/">l’énergie</a></p>
                                    
                                
                                
                                    <div class="rating">
                                        <!-- Thumbs up -->
                                        <div data-value="Intéressé" class="like grow offre3 tooltip">
                                            <span class="tooltiptext">Intéressé</span>
                                            <i class="fa fa-thumbs-up fa-3x like" aria-hidden="true"></i>
                                        </div>
                                        <!-- Thumbs down -->
                                        <div data-value="Non intéressé" class="dislike grow offre3 tooltip">
                                            <span class="tooltiptext">Non intéressé</span>
                                            <i class="fa fa-thumbs-down fa-3x dislike" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                    
                                    <h4 style="text-align: center;"> X'pression  </h4>
                                    <p style="text-align: center;"> <a target="_blank" href=" https://www.ecologie.gouv.fr/loi-anti-gaspillage-economie-circulaire-1"> La loi anti-gaspillage comme point de départ ? </a></p>
                                    
                                
                                
                                    <div class="rating">
                                        <!-- Thumbs up -->
                                        <div data-value="Intéressé" class="like grow offre4 tooltip">
                                            <span class="tooltiptext">Intéressé</span>
                                            <i class="fa fa-thumbs-up fa-3x like" aria-hidden="true"></i>
                                        </div>
                                        <!-- Thumbs down -->
                                        <div data-value="Non intéressé" class="dislike grow offre4 tooltip">
                                            <span class="tooltiptext">Non intéressé</span>
                                            <i class="fa fa-thumbs-down fa-3x dislike" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                    

<br> <br> <br>



<section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-cbe6679 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="cbe6679" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-381cb08"
                                             data-id="381cb08" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-65ef6729 elementor-widget elementor-widget-heading"
                                                     data-id="65ef6729" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">

                                                        <br>

                                                        <h3 class="elementor-heading-title elementor-size-large">Comment consolider la clientèle existante ? </h3></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

<h4 style="text-align: center;"> X-Lab : Nos propositions </h4>
                                    <p style="text-align: center;">Etude d’impact de la baisse des puissances souscrites pour le compte d’une Foncière importante à Paris : quelles voies pour vendre le Delta de puissance à d’autres clients ? </p>
                                    
                                    <p style="text-align: center;">Recycler les chaleurs de purge : Chauffer les terrasses avec les déchets de chaleur CPCU : conception/réalisation</p>
                                    
                                    <ul style="position:relative; left: 37%; width: 65%">
                                        <li>Nos proposistions d'expérimentations :
                                        <br>
                                        <b style="margin-left: 0.6em;">→</b> Rue du Bac/Rue de Varenne
                                        <br>
                                        <b style="margin-left: 0.6em;">→</b> Avenue Hoche/Avenue du Faubourg St-Honoré
                                        <br>
                                        <b style="margin-left: 0.6em;">→</b> Avenue de Suffren/Rue Pérignon</li>
                                    </ul>
                                    
                                    <div class="rating">
                                        <!-- Thumbs up -->
                                        <div data-value="Intéressé" class="like grow offre5 tooltip">
                                            <span class="tooltiptext">Intéressé</span>
                                            <i class="fa fa-thumbs-up fa-3x like" aria-hidden="true"></i>
                                        </div>
                                        <!-- Thumbs down -->
                                        <div data-value="Non intéressé" class="dislike grow offre5 tooltip">
                                            <span class="tooltiptext">Non intéressé</span>
                                            <i class="fa fa-thumbs-down fa-3x dislike" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                    
                                    
                                    <h4 style="text-align: center;"> Témoignage sous X </h4>
                                    <p style="text-align: center;">« J’étais responsable d’un syndic pour des petites copro. Discuter avec CPCU était impossible. Quand j’ai pris ce poste à la foncière, je pensais que les discussions allaient être possible. Rien du tout ! Nous avons des fins de non-recevoir à chaque fois que nous demandons une révision des contrats ! CPCU voit pourtant bien que nous avons rénové nos actifs et que les consommations ne sont plus les mêmes ? »</p>
                                <div class="rating">
                                        <!-- Thumbs up -->
                                        <div data-value="Intéressé" class="like grow offre6 tooltip">
                                            <span class="tooltiptext">Intéressé</span>
                                            <i class="fa fa-thumbs-up fa-3x like" aria-hidden="true"></i>
                                        </div>
                                        <!-- Thumbs down -->
                                        <div data-value="Non intéressé" class="dislike grow offre6 tooltip">
                                            <span class="tooltiptext">Non intéressé</span>
                                            <i class="fa fa-thumbs-down fa-3x dislike" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                    
                                    
                                    <h4 style="text-align: center;"> X'pression </h4>
                                    <p style="text-align: center;"> Ateliers collaboratifs "Stratégie de résilience des territoires" du Shift Project : étude du rôle des infrastructures dans la transition énergétique : la filière TP est accompagnée par CARBONE 4 pour éclairer ses enjeux pour le futur :  </a></p>
                                    
                                    <ul style="position:relative; left: 45%; width: 65%">
                                        <li><a target="_blank" href="https://www.constructioncayola.com/infrastructures/article/2021/03/31/133417/peut-pas-ignorer-les-infrastructures-dans-debat-national-sur-transition-environnementale"> Source 1 </a></li>
                                        <li><a target="_blank" href="https://www.linkedin.com/posts/carbone-4_on-ne-peut-pas-ignorer-les-infrastructures-activity-6787305900592926720-VAvo/"> Source 2 </a></li>
                                    </ul>

                                    <div class="rating">
                                        <!-- Thumbs up -->
                                        <div data-value="Intéressé" class="like grow offre7 tooltip">
                                            <span class="tooltiptext">Intéressé</span>
                                            <i class="fa fa-thumbs-up fa-3x like" aria-hidden="true"></i>
                                        </div>
                                        <!-- Thumbs down -->
                                        <div data-value="Non intéressé" class="dislike grow offre7 tooltip">
                                            <span class="tooltiptext">Non intéressé</span>
                                            <i class="fa fa-thumbs-down fa-3x dislike" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                    


                                    <br>

                                    </div>

                                </div>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="commen-section">
                    <label>Laissez-nous un commentaire</label>
                    <textarea id="comment" style="height: 350px;"></textarea>

                    <div id="confirmation" class="alert alert-success" style="display: none">
                        <strong>Merci!</strong> Nous avons bien reçu votre feedback
                    </div>
                    <div style="text-align: center; margin-bottom: 20px;">
                        <input type="hidden" name="offre1" id="offre1" value="NONE">
                        <input type="hidden" name="offre2" id="offre2" value="NONE">
                        <input type="hidden" name="offre3" id="offre3" value="NONE">
                        <input type="hidden" name="offre4" id="offre4" value="NONE">
                        <input type="hidden" name="offre5" id="offre5" value="NONE">
                        <input type="hidden" name="offre6" id="offre6" value="NONE">
                        <input type="hidden" name="offre7" id="offre7" value="NONE">
                        <button id="submit" class="btn" value="Soumettre" >Soumettre</button>
                    </div>

                </div>

            </section>


        </div>
    </div>

    <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
        <div class='footer-width-fixer'>
            <div data-elementor-type="wp-post" data-elementor-id="151" class="elementor elementor-151"
                 data-elementor-settings="[]">
                <div class="elementor-section-wrap">
                    <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-ed06561 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="ed06561" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b635a80"
                                 data-id="b635a80" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-6f0a3d61 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="6f0a3d61" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d6019a6"
                                 data-id="5d6019a6" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-342f716 elementor-section-content-top elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="342f716" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_top&quot;:&quot;arrow&quot;}">
                                        <div class="elementor-shape elementor-shape-top" data-negative="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 10"
                                                 preserveAspectRatio="none">
                                                <path class="elementor-shape-fill" d="M350,10L340,0h20L350,10z"/>
                                            </svg>
                                        </div>
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2255f5d0"
                                                 data-id="2255f5d0" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-645f7df elementor-widget elementor-widget-image"
                                                         data-id="645f7df" data-element_type="widget"
                                                         data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img width="640" height="130"
                                                                 src="https://senergyt.fr/wp-content/uploads/2021/03/Sener2-1024x208.png"
                                                                 class="attachment-large size-large" alt=""
                                                                 loading="lazy"
                                                                 srcset="https://senergyt.fr/wp-content/uploads/2021/03/Sener2-1024x208.png 1024w, https://senergyt.fr/wp-content/uploads/2021/03/Sener2-300x61.png 300w, https://senergyt.fr/wp-content/uploads/2021/03/Sener2-768x156.png 768w, https://senergyt.fr/wp-content/uploads/2021/03/Sener2-1536x312.png 1536w, https://senergyt.fr/wp-content/uploads/2021/03/Sener2-2048x416.png 2048w, https://senergyt.fr/wp-content/uploads/2021/03/Sener2-1568x318.png 1568w"
                                                                 sizes="(max-width: 640px) 100vw, 640px"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2a785140"
                                                 data-id="2a785140" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-42834c5d elementor-widget elementor-widget-text-editor"
                                                         data-id="42834c5d" data-element_type="widget"
                                                         data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p style="text-align: left;">Artisans de votre maîtrise
                                                                énergétique</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e8262b5"
                                 data-id="e8262b5" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-32671f0 hfe-nav-menu__align-right hfe-link-redirect-self_link hfe-submenu-icon-arrow hfe-nav-menu__breakpoint-tablet elementor-widget elementor-widget-navigation-menu"
                                         data-id="32671f0" data-element_type="widget"
                                         data-widget_type="navigation-menu.default">
                                        <div class="elementor-widget-container">
                                            <div class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                 data-layout="vertical">
                                                <div class="hfe-nav-menu__toggle elementor-clickable">
                                                    <div class="hfe-nav-menu-icon">
                                                        <i aria-hidden="true" tabindex="0"
                                                           class="fas fa-align-justify"></i></div>
                                                </div>
                                                <nav class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow" data-toggle-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;fas fa-align-justify&quot;&gt;&lt;/i&gt;" data-close-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;far fa-window-close&quot;&gt;&lt;/i&gt;" data-full-width="yes"><ul id="menu-1-32671f0" class="hfe-nav-menu"><li id="menu-item-75" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-74 current_page_item parent hfe-creative-menu"><a href="https://xlab.senergyt.fr/index.php" class = "hfe-menu-item">Accueil</a></li>
<li id="menu-item-78" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="https://xlab.senergyt.fr/index1.php" class = "hfe-menu-item">Rationaliser le réseau de chaleur parisien</a></li>
<li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="https://xlab.senergyt.fr/index2.php" class = "hfe-menu-item">Apporter de la résilience</a></li>
<li id="menu-item-303" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="https://xlab.senergyt.fr/index3.php" class = "hfe-menu-item">Croiser les regards sur les réseaux</a></li>
</ul></nav>                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer class="elementor-section elementor-top-section elementor-element elementor-element-4be2b2b4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="4be2b2b4" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4c51b06e"
                                 data-id="4c51b06e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-71796b60 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                         data-id="71796b60" data-element_type="widget"
                                         data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
                                            </div>
                                        </div>
                                    </div>
                                    <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-319e0ec3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="319e0ec3" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9650e0"
                                                 data-id="9650e0" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-cdf2906 elementor-widget elementor-widget-heading"
                                                         data-id="cdf2906" data-element_type="widget"
                                                         data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <p class="elementor-heading-title elementor-size-default">©
                                                                2018 All rights reserved</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-58f6fb40"
                                                 data-id="58f6fb40" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-19d438a1 e-grid-align-right e-grid-align-center elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                                         data-id="19d438a1" data-element_type="widget"
                                                         data-widget_type="social-icons.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-social-icons-wrapper elementor-grid">
                                                                <div class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-dc10550"
                                                                       target="_blank">
                                                                        <span class="elementor-screen-only">Twitter</span>
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-0267196"
                                                                       target="_blank">
                                                                        <span class="elementor-screen-only">Facebook</span>
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-dribbble elementor-repeater-item-0e260c9"
                                                                       target="_blank">
                                                                        <span class="elementor-screen-only">Dribbble</span>
                                                                        <i class="fa fa-dribbble"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-dbaeb71"
                                                                       target="_blank">
                                                                        <span class="elementor-screen-only">Youtube</span>
                                                                        <i class="fa fa-youtube"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest elementor-repeater-item-d2d5c50"
                                                                       target="_blank">
                                                                        <span class="elementor-screen-only">Pinterest</span>
                                                                        <i class="fa fa-pinterest"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-medium elementor-repeater-item-92c0998"
                                                                       target="_blank">
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
                    <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-5e9698f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="5e9698f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->
<script src='https://senergyt.fr/wp-includes/js/wp-embed.min.js?ver=5.7.1' id='wp-embed-js'></script>
<script src='https://senergyt.fr/wp-includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
<script src='https://senergyt.fr/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1'
        id='smartmenus-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/header-footer-elementor/inc/js/frontend.js?ver=1.5.9'
        id='hfe-frontend-js-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.2.1'
        id='elementor-pro-webpack-runtime-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.2.2'
        id='elementor-webpack-runtime-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.2.2'
        id='elementor-frontend-modules-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.2.1'
        id='elementor-sticky-js'></script>
<script id='elementor-pro-frontend-js-before'>
    var ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/senergyt.fr\/wp-admin\/admin-ajax.php",
        "nonce": "56c0bc9960",
        "urls": {"assets": "https:\/\/senergyt.fr\/wp-content\/plugins\/elementor-pro\/assets\/"},
        "i18n": {"toc_no_headings_found": "No headings were found on this page."},
        "shareButtonsNetworks": {
            "facebook": {"title": "Facebook", "has_counter": true},
            "twitter": {"title": "Twitter"},
            "google": {"title": "Google+", "has_counter": true},
            "linkedin": {"title": "LinkedIn", "has_counter": true},
            "pinterest": {"title": "Pinterest", "has_counter": true},
            "reddit": {"title": "Reddit", "has_counter": true},
            "vk": {"title": "VK", "has_counter": true},
            "odnoklassniki": {"title": "OK", "has_counter": true},
            "tumblr": {"title": "Tumblr"},
            "digg": {"title": "Digg"},
            "skype": {"title": "Skype"},
            "stumbleupon": {"title": "StumbleUpon", "has_counter": true},
            "mix": {"title": "Mix"},
            "telegram": {"title": "Telegram"},
            "pocket": {"title": "Pocket", "has_counter": true},
            "xing": {"title": "XING", "has_counter": true},
            "whatsapp": {"title": "WhatsApp"},
            "email": {"title": "Email"},
            "print": {"title": "Print"}
        },
        "facebook_sdk": {"lang": "fr_FR", "app_id": ""},
        "lottie": {"defaultAnimationUrl": "https:\/\/senergyt.fr\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}
    };
</script>
<script src='https://senergyt.fr/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.2.1'
        id='elementor-pro-frontend-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2'
        id='elementor-waypoints-js'></script>
<script src='https://senergyt.fr/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6'
        id='swiper-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.2.2'
        id='share-link-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1'
        id='elementor-dialog-js'></script>
<script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false},
        "i18n": {
            "shareOnFacebook": "Partager sur Facebook",
            "shareOnTwitter": "Partager sur Twitter",
            "pinIt": "L\u2019\u00e9pingler",
            "download": "T\u00e9l\u00e9charger",
            "downloadImage": "T\u00e9l\u00e9charger une image",
            "fullscreen": "Plein \u00e9cran",
            "zoom": "Zoom",
            "share": "Partager",
            "playVideo": "Lire la vid\u00e9o",
            "previous": "Pr\u00e9c\u00e9dent",
            "next": "Suivant",
            "close": "Fermer"
        },
        "is_rtl": false,
        "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {"label": "Mobile Extra", "value": 880, "direction": "max", "is_enabled": false},
                "tablet": {"label": "Tablette", "value": 1024, "direction": "max", "is_enabled": true},
                "tablet_extra": {"label": "Tablet Extra", "value": 1365, "direction": "max", "is_enabled": false},
                "laptop": {"label": "Portable", "value": 1620, "direction": "max", "is_enabled": false},
                "widescreen": {"label": "\u00c9cran large", "value": 2400, "direction": "min", "is_enabled": false}
            }
        },
        "version": "3.2.2",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "a11y_improvements": true,
            "landing-pages": true,
            "form-submissions": true
        },
        "urls": {"assets": "https:\/\/senergyt.fr\/wp-content\/plugins\/elementor\/assets\/"},
        "settings": {"page": [], "editorPreferences": []},
        "kit": {
            "body_background_background": "classic",
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 74,
            "title": "Senergy%27T%20%E2%80%93%20Les%20artisans%20de%20votre%20ma%C3%AEtrise%20%C3%A9nerg%C3%A9tique",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.2.2'
        id='elementor-frontend-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min.js?ver=3.2.1'
        id='pro-preloaded-elements-handlers-js'></script>
<script src='https://senergyt.fr/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.2.2'
        id='preloaded-modules-js'></script>
<script>
    /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function () {
        var t, e = location.hash.substring(1);
        /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
    }, !1);
</script>
</body>
</html>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $( document ).ready(function() {



        var offre1 = $(".offre1");
        var offre2 = $(".offre2");
        var offre3 = $(".offre3");
        var offre4 = $(".offre4");
        var offre5 = $(".offre5");
        var offre6 = $(".offre6");
        var offre7 = $(".offre7");




        $('.offre1.like').on('click', function (e) {
            e.preventDefault();
            offre1.removeClass('active');
            offre1.removeClass('dislikeOffre');
            $(this).addClass('active');
            var value = $(this).attr('data-value');
            $('#offre1').val(value);
        });

        $('.offre1.dislike').on('click', function (e) {
            e.preventDefault();
            offre1.removeClass('active');
            offre1.removeClass('dislikeOffre');
            $(this).addClass('dislikeOffre');
            var value = $(this).attr('data-value');
            $('#offre1').val(value);
        });



        $('.offre2.like').on('click', function (e) {
            e.preventDefault();
            offre2.removeClass('active');
            offre2.removeClass('dislikeOffre');
            $(this).addClass('active');
            var value = $(this).attr('data-value');
            $('#offre2').val(value);
        });

        $('.offre2.dislike').on('click', function (e) {
            e.preventDefault();
            offre2.removeClass('active');
            offre2.removeClass('dislikeOffre');
            $(this).addClass('dislikeOffre');
            var value = $(this).attr('data-value');
            $('#offre2').val(value);
        });

        $('.offre3.like').on('click', function (e) {
            e.preventDefault();
            offre3.removeClass('active');
            offre3.removeClass('dislikeOffre');
            $(this).addClass('active');
            var value = $(this).attr('data-value');
            $('#offre3').val(value);
        });

        $('.offre3.dislike').on('click', function (e) {
            e.preventDefault();
            offre3.removeClass('active');
            offre3.removeClass('dislikeOffre');
            $(this).addClass('dislikeOffre');
            var value = $(this).attr('data-value');
            $('#offre3').val(value);
        });


        $('.offre4.like').on('click', function (e) {
            e.preventDefault();
            offre4.removeClass('active');
            offre4.removeClass('dislikeOffre');
            $(this).addClass('active');
            var value = $(this).attr('data-value');
            $('#offre4').val(value);
        });

        $('.offre4.dislike').on('click', function (e) {
            e.preventDefault();
            offre4.removeClass('active');
            offre4.removeClass('dislikeOffre');
            $(this).addClass('dislikeOffre');
            var value = $(this).attr('data-value');
            $('#offre4').val(value);
        });


        $('.offre5.like').on('click', function (e) {
            e.preventDefault();
            offre5.removeClass('active');
            offre5.removeClass('dislikeOffre');
            $(this).addClass('active');
            var value = $(this).attr('data-value');
            $('#offre5').val(value);
        });

        $('.offre5.dislike').on('click', function (e) {
            e.preventDefault();
            offre5.removeClass('active');
            offre5.removeClass('dislikeOffre');
            $(this).addClass('dislikeOffre');
            var value = $(this).attr('data-value');
            $('#offre5').val(value);
        });

        $('.offre6.like').on('click', function (e) {
            e.preventDefault();
            offre6.removeClass('active');
            offre6.removeClass('dislikeOffre');
            $(this).addClass('active');
            var value = $(this).attr('data-value');
            $('#offre6').val(value);
        });

        $('.offre6.dislike').on('click', function (e) {
            e.preventDefault();
            offre6.removeClass('active');
            offre6.removeClass('dislikeOffre');
            $(this).addClass('dislikeOffre');
            var value = $(this).attr('data-value');
            $('#offre6').val(value);
        });

        $('.offre7.like').on('click', function (e) {
            e.preventDefault();
            offre7.removeClass('active');
            offre7.removeClass('dislikeOffre');
            $(this).addClass('active');
            var value = $(this).attr('data-value');
            $('#offre7').val(value);
        });

        $('.offre7.dislike').on('click', function (e) {
            e.preventDefault();
            offre7.removeClass('active');
            offre7.removeClass('dislikeOffre');
            $(this).addClass('dislikeOffre');
            var value = $(this).attr('data-value');
            $('#offre7').val(value);
        });
    });


    $("#submit").on('click',function(e){
        e.preventDefault();
        var values = {
            'offre1':$('#offre1').val(),
            'offre2':$('#offre2').val(),
            'offre3':$('#offre3').val(),
            'offre4':$('#offre4').val(),
            'offre5':$('#offre5').val(),
            'offre6':$('#offre6').val(),
            'offre7':$('#offre7').val(),
            'page':"3",
            'comment':$('#comment').val()
        };
        $.ajax({
            url : 'response.php',
            type : 'POST',
            data:values,
            success : function(code_html, statut){ // success est toujours en place, bien sûr !
                $("#confirmation").fadeIn();
            },

            error : function(resultat, statut, erreur){
                alert('Erreur de traitement');
            }

        });

    });


</script>
