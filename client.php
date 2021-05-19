<?php
session_start();
if(!isset($_SESSION['adminLogin'])){
    header('Location: login_view.php');
}
$file = fopen('assets/responses.csv', 'r');
$responses = array();

while (($line = fgetcsv($file,0,";")) !== FALSE) {
    $responses[]=$line;
    $i++;
}
array_shift($responses);
fclose($file);

//Page 2

$file = fopen('assets/responses2.csv', 'r');
$responses2 = array();

while (($line = fgetcsv($file,0,";")) !== FALSE) {
    $responses2[]=$line;
    $i++;
}

array_shift($responses2);
fclose($file);

//Page 3

$file = fopen('assets/responses3.csv', 'r');
$responses3 = array();


while (($line = fgetcsv($file,0,";")) !== FALSE) {
    $responses3[]=$line;
    $i++;
}

array_shift($responses3);
fclose($file);


//Page 4

$file = fopen('assets/responses4.csv', 'r');
$responses4 = array();


while (($line = fgetcsv($file,0,";")) !== FALSE) {
    $responses4[]=$line;
    $i++;
}

array_shift($responses4);
fclose($file);




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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>

    <meta name="google-site-verification" content="oJlrtpnSBLOzR3VSgIQlqr70nPLB-_3BtzS4XutORRQ"/>
    <style>
        .dataTables_info{
            display: none;
        }
        .table-responsive{
            margin-top: 30px;
        }
        table.dataTable thead tr th {
            word-wrap: break-word;
            word-break: break-all;
        }
        table.dataTable tbody tr td {
            word-wrap: break-word;
            word-break: break-all;
        }

        .text-wrap{
            white-space:normal;
        }
    </style>
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='//s.w.org'/>
    <link rel="alternate" type="application/rss+xml" title="Senergy&#039;T &raquo; Flux"
          href="https://senergyt.fr/feed/"/>
    <link rel="alternate" type="application/rss+xml" title="Senergy&#039;T &raquo; Flux des commentaires"
          href="https://senergyt.fr/comments/feed/"/>

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
                                                    <a href="https://senergyt.fr/" aria-current="page"
                                                       class="elementor-item elementor-item-active">Accueil</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78">
                                                    <a href="https://senergyt.fr/partenaires/" class="elementor-item">Rationaliser
                                                        le réseau de chaleur parisien</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">
                                                    <a href="https://senergyt.fr/contact/" class="elementor-item">Apporter
                                                        de la résilience</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-303">
                                                    <a href="https://senergyt.fr/actualites/" class="elementor-item">Croiser
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

                                                        <h3 class="elementor-heading-title elementor-size-large">RÉSULAT</h3></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>




                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    
                                    <li class="nav-item">
                                        <a class="nav-link active" id="page2-tab" data-toggle="tab" href="#page2" role="tab" aria-controls="page2" aria-selected="true">Rationaliser le réseau de chaleur parisien</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="page3-tab" data-toggle="tab" href="#page3" role="tab" aria-controls="page3" aria-selected="true">Apporter de la résiliance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="page4-tab" data-toggle="tab" href="#page4" role="tab" aria-controls="page4" aria-selected="true">Croiser les regards sur le réseau</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                                                        <div class="tab-pane fade show active" id="page2" role="tabpanel" aria-labelledby="page2-tab">
                                        <div class="row table-responsive">
                                            <table id="datatable-responses2" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>P1</th>
                                                    <th>P2</th>
                                                    <th>P3</th>
                                                    <th>P4</th>
                                                    <th>P5</th>
                                                    <th>P6</th>
                                                    <th>P7</th>
                                                    <th>P8</th>
                                                    <th>P9</th>
                                                    <th>Date</th>
                                                    <th>Commentaire</th>
                                                </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>P1</th>
                                                    <th>P2</th>
                                                    <th>P3</th>
                                                    <th>P4</th>
                                                    <th>P5</th>
                                                    <th>P6</th>
                                                    <th>P7</th>
                                                    <th>P8</th>
                                                    <th>P9</th>
                                                    <th>Date</th>
                                                    <th>Commentaire</th>
                                                </tr>
                                                </tfoot>
                                                <tbody>
                                                <?php foreach ($responses2 as $key => $response2){ ?>
                                                    <tr>
                                                        <td><?php echo $response2[0]; ?></td>
                                                        <td><?php echo $response2[1]; ?></td>
                                                        <td><?php echo $response2[2]; ?></td>
                                                        <td><?php echo $response2[3]; ?></td>
                                                        <td><?php echo $response2[4]; ?></td>
                                                        <td><?php echo $response2[5]; ?></td>
                                                        <td><?php echo $response2[6]; ?></td>
                                                        <td><?php echo $response2[7]; ?></td>
                                                        <td><?php echo $response2[8]; ?></td>
                                                        <td><?php echo $response2[9]; ?></td>
                                                        <td><?php echo $response2[10]; ?></td>
                                                        <td class="text-wrap"><?php echo $response2[11]; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        Télécharger le fichier de réponses de cet onglet : <a style="margin-left: 3px;" href="assets/responses2.csv"> Télécharger</a>
                                    </div>

                                    <div class="tab-pane fade" id="page3" role="tabpanel" aria-labelledby="page3-tab">
                                        <div class="row table-responsive">
                                            <table id="datatable-responses3" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>P1</th>
                                                    <th>P2</th>
                                                    <th>P3</th>
                                                    <th>P4</th>
                                                    <th>P5</th>
                                                    <th>P6</th>
                                                    <th>P7</th>
                                                    <th>Date</th>
                                                    <th>Commentaire</th>
                                                </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>P1</th>
                                                    <th>P2</th>
                                                    <th>P3</th>
                                                    <th>P4</th>
                                                    <th>P5</th>
                                                    <th>P6</th>
                                                    <th>P7</th>
                                                    <th>Date</th>
                                                    <th>Commentaire</th>
                                                </tr>
                                                </tfoot>
                                                <tbody>
                                                <?php foreach ($responses3 as $key => $response3){ ?>
                                                    <tr>
                                                        <td><?php echo $response3[0]; ?></td>
                                                        <td><?php echo $response3[1]; ?></td>
                                                        <td><?php echo $response3[2]; ?></td>
                                                        <td><?php echo $response3[3]; ?></td>
                                                        <td><?php echo $response3[4]; ?></td>
                                                        <td><?php echo $response3[5]; ?></td>
                                                        <td><?php echo $response3[6]; ?></td>
                                                        <td><?php echo $response3[7]; ?></td>
                                                        <td><?php echo $response3[8]; ?></td>
                                                        <td class="text-wrap"><?php echo $response3[9]; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        Télécharger le fichier de réponses de cet onglet : <a style="margin-left: 3px;" href="assets/responses3.csv"> Télécharger</a>
                                    </div>

                                    <div class="tab-pane fade" id="page4" role="tabpanel" aria-labelledby="page4-tab">
                                        <div class="row table-responsive">
                                            <table id="datatable-responses4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>P1</th>
                                                    <th>P2</th>
                                                    <th>P3</th>
                                                    <th>P4</th>
                                                    <th>P5</th>
                                                    <th>P6</th>
                                                    <th>P7</th>
                                                    <th>P8</th>
                                                    <th>P9</th>
                                                    <th>P10</th>
                                                    <th>P11</th>
                                                    <th>P12</th>
                                                    <th>P13</th>
                                                    <th>Date</th>
                                                    <th>Commentaire</th>
                                                </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>P1</th>
                                                    <th>P2</th>
                                                    <th>P3</th>
                                                    <th>P4</th>
                                                    <th>P5</th>
                                                    <th>P6</th>
                                                    <th>P7</th>
                                                    <th>P8</th>
                                                    <th>P9</th>
                                                    <th>P10</th>
                                                    <th>P11</th>
                                                    <th>P12</th>
                                                    <th>P13</th>
                                                    <th>Date</th>
                                                    <th">Commentaire</th>
                                                </tr>
                                                </tfoot>
                                                <tbody>
                                                <?php foreach ($responses4 as $key => $response4){ ?>
                                                    <tr>
                                                        <td><?php echo $response4[0]; ?></td>
                                                        <td><?php echo $response4[1]; ?></td>
                                                        <td><?php echo $response4[2]; ?></td>
                                                        <td><?php echo $response4[3]; ?></td>
                                                        <td><?php echo $response4[4]; ?></td>
                                                        <td><?php echo $response4[5]; ?></td>
                                                        <td><?php echo $response4[6]; ?></td>
                                                        <td><?php echo $response4[7]; ?></td>
                                                        <td><?php echo $response4[8]; ?></td>
                                                        <td><?php echo $response4[9]; ?></td>
                                                        <td><?php echo $response4[10]; ?></td>
                                                        <td><?php echo $response4[11]; ?></td>
                                                        <td><?php echo $response4[12]; ?></td>
                                                        <td><?php echo $response4[13]; ?></td>
                                                        <td><?php echo $response4[14]; ?></td>
                                                        <td class="text-wrap"><?php echo $response4[15]; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        Télécharger le fichier de réponses de cet onglet : <a style="margin-left: 3px;" href="assets/responses4.csv"> Télécharger</a>
                                    </div>
                                </div>





                                <br>

                            </div>

                        </div>
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
                                                <nav class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                     data-toggle-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;fas fa-align-justify&quot;&gt;&lt;/i&gt;"
                                                     data-close-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;far fa-window-close&quot;&gt;&lt;/i&gt;"
                                                     data-full-width="yes">
                                                    <ul id="menu-1-32671f0" class="hfe-nav-menu">
                                                        <li id="menu-item-75"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-74 current_page_item parent hfe-creative-menu">
                                                            <a href="https://senergyt.fr/"
                                                               class="hfe-menu-item">Accueil</a></li>
                                                        <li id="menu-item-78"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                            <a href="https://senergyt.fr/partenaires/"
                                                               class="hfe-menu-item">Rationaliser le réseau de chaleur
                                                                parisien</a></li>
                                                        <li id="menu-item-27"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                            <a href="https://senergyt.fr/contact/"
                                                               class="hfe-menu-item">Apporter de la résilience</a></li>
                                                        <li id="menu-item-303"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                            <a href="https://senergyt.fr/actualites/"
                                                               class="hfe-menu-item">Croiser les regards sur les
                                                                réseaux</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
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

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="assets/js/jquery-3.5.1.js"></script>
<script src="assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="assets/js/datatable/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {

        if ($("#datatable-responses").length) {
            $("#datatable-responses").DataTable({
                columnDefs: [
                    { width: 200, targets: 5 }
                ],
                aaSorting: [[0, 'desc']],
                responsive: true,
                "language": {
                    "url": "assets/French.json"
                }
            });
        }

        if ($("#datatable-responses2").length) {
            $("#datatable-responses2").removeAttr('width').DataTable({
                aaSorting: [[0, 'desc']],
                responsive: true,
                "language": {
                    "url": "assets/French.json"
                }
            });
        }

        if ($("#datatable-responses3").length) {
            $("#datatable-responses3").DataTable({
                aaSorting: [[0, 'desc']],
                responsive: true,
                "language": {
                    "url": "assets/French.json"
                }
            });
        }

        if ($("#datatable-responses4").length) {
            $("#datatable-responses4").DataTable({
                aaSorting: [[0, 'desc']],
                responsive: true,
                "language": {
                    "url": "assets/French.json"
                }
            });
        }
    });
</script>

