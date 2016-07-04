<!DOCTYPE html>
<html <?php print $html_attributes . $rdf_namespaces; ?>>
<head>

    <!-- META TAGS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="cleartype" content="on">
    <meta charset="UTF-8">

    <?php print $head; ?>
    <title><?php print $head_title; ?></title>

    <link rel="stylesheet" type="text/css" href="<?= base_path(); ?>sites/all/themes/goosebumps/css/main.css">

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

    <div class="cover"></div>
    
    <?php 
        print $page; 
    ?>
    
    <script src="<?= base_path() . drupal_get_path('theme', 'goosebumps'); ?>/js/main.min.js" async></script>

    <?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
        
        <script>

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-46878903-6', 'auto');

            // ADD A SECONDARY CLIENT ANALYTCIS CODE LIKE THIS
            //ga('create', 'UA-XXXXXXXX-X', 'auto', {'name': 'CLIENTS NAME'});
            
            ga('send', 'pageview');
            ga('meylercampbell.send', 'pageview');

        </script>

    <?php endif; ?>

</body>
</h