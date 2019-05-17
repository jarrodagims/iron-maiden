<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132328851-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132328851-1');
</script>

	<meta name="google-site-verification" content="GzOErTSNcW6vS8QL19mIeKt0fPqz3iSWy0eRgCSIED0" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

    <?php if (!empty(get_option('sherpa_schema'))): ?>

    <?= get_option('sherpa_schema') ?>

    <?php endif; ?>
	
<!-- Default Statcounter code for Quality Iron
https://www.qualityironmaid.com/ -->
<script type="text/javascript">
var sc_project=11925698; 
var sc_invisible=1; 
var sc_security="75eff404"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="//c.statcounter.com/11925698/0/75eff404/1/" alt="Web
Analytics"></a></div></noscript>
<!-- End of Statcounter Code -->
	
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "DryCleaningOrLaundry",
  "name": "Quality Iron Maid",
  "image": "https://www.qualityironmaid.com/wp-content/themes/iron-maiden/img/logo.svg",
  "@id": "",
  "url": "https://www.qualityironmaid.com/",
  "telephone": "(915) 595-4766",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1475 George Dieter Dr Ste C",
    "addressLocality": "El Paso",
    "addressRegion": "TX",
    "postalCode": "79936",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 31.742168,
    "longitude": -106.3025098
  },
  "openingHoursSpecification": [{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "07:30",
    "closes": "18:30"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Saturday",
    "opens": "08:00",
    "closes": "14:30"
  }],
  "sameAs": [
    "https://www.facebook.com/Quality-Iron-Maid-829855534071607/?modal=admin_todo_tour",
    "https://twitter.com/YouWashWeIron"
  ]
}
</script>
	
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KX5C52M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->
    <div class="top-header <?php if(!is_front_page()) : ?>internal<?php endif; ?>">
        <div class="container">
            <div class="v-align">
                <div class="col-xs-12 navbar-button text-center">

                    <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="menu-item">
                            <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                                    $sm->setSize('sm');
                                    $sm->showNetworkButtons();
                                    $sm->setColorType('singleColor');
                                    $sm->setListType('listUnstyled');
                                    ?>
                        </li>
                        <li class="menu-item directions"><a href="<?php echo get_site_url() ?>/contact/"></a></a></li>
                        <li class="menu-item contact"><a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"><span>
                                    &nbsp;
                                    <?php printPhone(); ?></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-xs-12 text-center">
                <a id="header-logo" class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.svg"
                        alt="<?php echo get_bloginfo(
                            'description'
                        ); ?>" /></a>
            </div>
        </div>
    </div>