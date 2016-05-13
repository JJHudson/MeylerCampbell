<!DOCTYPE html>
<html <?php print $html_attributes . $rdf_namespaces; ?>>
<head>

    <!-- META TAGS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="cleartype" content="on">

    <?php print $head; ?>
    <title><?php print $head_title; ?></title>

    <link rel="stylesheet" type="text/css" href="<?= base_path(); ?>sites/all/themes/goosebumps/css/main.css">

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

    <div class="cover"></div>
    
    <?php 

        if ( $user->uid ) {

            print $page; 

        } else {

            print '<div class="container">';

                print '<section class="section section--intro">';

                    print '<div class="grid__row"> ';

                        print '<div class="grid__wrapper grid__wrapper--2 grid__wrapper--no-padding">';

                            print '<a href="'.base_path().'">';
                                
                                print '<svg class="logo-main" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 393.2 270.7" xml:space="preserve"><path class="st1" d="M40,175.5c-3.2,1.2-6.4,1.9-9.8,1.9c-3.7,0-7.1-0.7-10.2-2c-3.1-1.3-5.7-3.1-8-5.4s-4-5.1-5.2-8.3 c-1.2-3.2-1.9-6.7-1.9-10.5c0-3.8,0.6-7.3,1.9-10.5c1.2-3.2,3-6,5.2-8.3c2.2-2.3,4.9-4.1,8-5.4c3.1-1.3,6.5-2,10.2-2 c3.1,0,6.1,0.5,9,1.6c2.9,1,5.4,2.6,7.4,4.8l-1,1.1c-1-1-2.1-1.9-3.3-2.7c-1.2-0.8-2.5-1.4-3.9-1.9c-1.4-0.5-2.8-0.9-4.2-1.1 c-1.4-0.2-2.8-0.3-4.1-0.3c-3.5,0-6.8,0.6-9.7,1.9c-2.9,1.3-5.4,3-7.5,5.3c-2.1,2.2-3.7,4.9-4.8,7.9c-1.1,3-1.7,6.2-1.7,9.7 c0,3.4,0.6,6.7,1.7,9.7s2.7,5.6,4.8,7.9c2.1,2.2,4.6,4,7.5,5.3c2.9,1.3,6.2,1.9,9.8,1.9c3.1,0,6.1-0.6,9.1-1.8s5.5-3,7.4-5.3l1.1,1 C45.9,172.3,43.2,174.2,40,175.5z M57.4,175.9v-52.8h1.5v52.8H57.4z M71.6,159.5c0,2,0.3,3.9,0.9,5.8c0.6,1.9,1.5,3.6,2.7,5.1 c1.2,1.5,2.7,2.7,4.5,3.7c1.8,0.9,4,1.4,6.4,1.4c2.5,0,4.8-0.5,6.7-1.5c2-1,3.7-2.5,5.1-4.4l1.1,1c-1.6,2.1-3.4,3.6-5.6,4.7 c-2.1,1.1-4.6,1.6-7.4,1.6c-2.4,0-4.5-0.4-6.5-1.3c-2-0.9-3.6-2.1-5.1-3.6c-1.4-1.5-2.5-3.4-3.3-5.5c-0.8-2.1-1.2-4.5-1.2-7 c0-2.4,0.4-4.7,1.2-6.7c0.8-2,1.9-3.8,3.3-5.3c1.4-1.5,3-2.6,4.9-3.5c1.9-0.8,3.9-1.2,6-1.2c2.5,0,4.7,0.4,6.6,1.3 c1.9,0.9,3.4,2.1,4.7,3.5c1.2,1.4,2.2,3.1,2.8,4.9c0.6,1.8,0.9,3.7,0.9,5.6v1.3H71.6z M98.8,158.2c0-2.1-0.4-4-1.1-5.7 c-0.7-1.7-1.6-3.2-2.8-4.4c-1.2-1.2-2.6-2.2-4.2-2.9c-1.6-0.7-3.4-1-5.5-1c-2.4,0-4.5,0.5-6.2,1.5c-1.7,1-3.1,2.2-4.2,3.7 c-1.1,1.5-1.9,3-2.4,4.6c-0.5,1.6-0.8,3-0.8,4.2H98.8z M133,168.6c0,1.2,0.1,2.5,0.2,3.9c0.1,1.4,0.2,2.5,0.4,3.4h-1.5 c-0.1-0.5-0.2-1-0.2-1.7c0-0.7-0.1-1.4-0.2-2.1c-0.1-0.7-0.1-1.4-0.1-2.1s0-1.3,0-1.7h-0.2c-0.9,2.9-2.5,5.1-4.8,6.5 c-2.3,1.4-4.7,2.1-7.3,2.1c-1.3,0-2.6-0.2-3.9-0.6c-1.3-0.4-2.4-0.9-3.5-1.7c-1-0.7-1.9-1.7-2.5-2.9c-0.6-1.2-0.9-2.5-0.9-4.1 c0-2.3,0.6-4.1,1.8-5.5c1.2-1.4,2.7-2.5,4.4-3.3c1.8-0.8,3.7-1.3,5.7-1.5c2-0.2,3.9-0.3,5.6-0.3h5.6v-2.6c0-3.6-1-6.2-2.9-7.9 c-1.9-1.7-4.4-2.5-7.5-2.5c-1.9,0-3.7,0.3-5.3,1c-1.7,0.7-3.1,1.6-4.4,2.8l-0.8-1.2c1.5-1.3,3.2-2.3,5.1-3c1.9-0.7,3.7-1,5.6-1 c3.7,0,6.6,0.9,8.7,2.8c2.1,1.9,3.2,4.9,3.2,8.9V168.6z M131.5,158.4h-5c-1.8,0-3.6,0.1-5.6,0.3c-2,0.2-3.8,0.6-5.4,1.3 c-1.6,0.7-3,1.6-4,2.8c-1,1.2-1.6,2.8-1.6,4.9c0,1.5,0.3,2.7,0.9,3.7c0.6,1,1.3,1.8,2.2,2.4c0.9,0.6,1.9,1,3,1.3s2.1,0.4,3.1,0.4 c2.4,0,4.4-0.4,5.9-1.3c1.6-0.9,2.9-2,3.8-3.4c1-1.4,1.6-2.9,2-4.5c0.4-1.7,0.6-3.3,0.6-4.9V158.4z M152.7,145 c2.1-1.5,4.3-2.2,6.6-2.2c0.2,0,0.4,0,0.6,0c0.2,0,0.4,0,0.6,0.1v1.3c-0.2,0-0.4-0.1-0.5-0.1c-0.2,0-0.3,0-0.4,0 c-2.1,0-3.8,0.5-5.2,1.4c-1.4,0.9-2.6,2.1-3.6,3.6c-0.9,1.5-1.6,3.1-2.1,4.9c-0.4,1.8-0.7,3.6-0.7,5.3v16.6h-1.5v-24 c0-0.5,0-1.1,0-1.9c0-0.7,0-1.5-0.1-2.3c0-0.8-0.1-1.5-0.1-2.2c0-0.7-0.1-1.3-0.1-1.7h1.5c0,0.5,0.1,1,0.1,1.7s0,1.5,0.1,2.3 c0,0.8,0,1.6,0.1,2.4c0,0.8,0,1.5,0,2.1h0.1C149.1,148.9,150.6,146.4,152.7,145z M7.4,245.1v-49.5h1.5v48.1h24.6v1.4H7.4z  M39.1,228.6c0,2,0.3,3.9,0.9,5.8c0.6,1.9,1.5,3.6,2.7,5.1c1.2,1.5,2.7,2.7,4.5,3.7c1.8,0.9,4,1.4,6.4,1.4c2.5,0,4.8-0.5,6.7-1.5 c2-1,3.7-2.5,5.1-4.4l1.1,1c-1.6,2.1-3.4,3.6-5.6,4.7c-2.1,1.1-4.6,1.6-7.4,1.6c-2.4,0-4.5-0.4-6.5-1.3c-2-0.9-3.6-2.1-5.1-3.6 c-1.4-1.5-2.5-3.4-3.3-5.5c-0.8-2.1-1.2-4.5-1.2-7c0-2.4,0.4-4.7,1.2-6.7c0.8-2,1.9-3.8,3.3-5.3c1.4-1.5,3-2.6,4.9-3.5 c1.9-0.8,3.9-1.2,6-1.2c2.5,0,4.7,0.4,6.6,1.3c1.9,0.9,3.4,2.1,4.7,3.5c1.2,1.4,2.2,3.1,2.8,4.9c0.6,1.8,0.9,3.7,0.9,5.6v1.3H39.1z  M66.3,227.3c0-2.1-0.4-4-1.1-5.7c-0.7-1.7-1.6-3.2-2.8-4.4c-1.2-1.2-2.6-2.2-4.2-2.9c-1.6-0.7-3.4-1-5.5-1c-2.4,0-4.5,0.5-6.2,1.5 c-1.7,1-3.1,2.2-4.2,3.7c-1.1,1.5-1.9,3-2.4,4.6c-0.5,1.6-0.8,3-0.8,4.2H66.3z M100.5,237.8c0,1.2,0.1,2.5,0.2,3.9 c0.1,1.4,0.2,2.5,0.4,3.4h-1.5c-0.1-0.5-0.2-1-0.2-1.7c0-0.7-0.1-1.4-0.2-2.1c-0.1-0.7-0.1-1.4-0.1-2.1s0-1.3,0-1.7h-0.2 c-0.9,2.9-2.5,5.1-4.8,6.5c-2.3,1.4-4.7,2.1-7.3,2.1c-1.3,0-2.6-0.2-3.9-0.6c-1.3-0.4-2.4-0.9-3.5-1.7c-1-0.7-1.9-1.7-2.5-2.9 c-0.6-1.2-0.9-2.5-0.9-4.1c0-2.3,0.6-4.1,1.8-5.5c1.2-1.4,2.7-2.5,4.4-3.3c1.8-0.8,3.7-1.3,5.7-1.5c2-0.2,3.9-0.3,5.6-0.3H99v-2.6 c0-3.6-1-6.2-2.9-7.9c-1.9-1.7-4.4-2.5-7.5-2.5c-1.9,0-3.7,0.3-5.3,1c-1.7,0.7-3.1,1.6-4.4,2.8l-0.8-1.2c1.5-1.3,3.2-2.3,5.1-3 c1.9-0.7,3.7-1,5.6-1c3.7,0,6.6,0.9,8.7,2.8c2.1,1.9,3.2,4.9,3.2,8.9V237.8z M99,227.5h-5c-1.8,0-3.6,0.1-5.6,0.3 c-2,0.2-3.8,0.6-5.4,1.3c-1.6,0.7-3,1.6-4,2.8c-1,1.2-1.6,2.8-1.6,4.9c0,1.5,0.3,2.7,0.9,3.7c0.6,1,1.3,1.8,2.2,2.4 c0.9,0.6,1.9,1,3,1.3s2.1,0.4,3.1,0.4c2.4,0,4.4-0.4,5.9-1.3c1.6-0.9,2.9-2,3.8-3.4c1-1.4,1.6-2.9,2-4.5c0.4-1.7,0.6-3.3,0.6-4.9 V227.5z M141.8,192.2h1.5v52.8h-1.5v-8.7h-0.2c-1.4,3.2-3.4,5.6-6,7.2c-2.6,1.6-5.4,2.4-8.5,2.4c-2.3,0-4.5-0.4-6.5-1.3 c-2-0.9-3.7-2-5.1-3.6c-1.4-1.5-2.5-3.3-3.3-5.4c-0.8-2.1-1.2-4.3-1.2-6.7c0-2.4,0.4-4.7,1.2-6.8c0.8-2.1,1.9-3.9,3.3-5.5 c1.4-1.5,3.1-2.7,5.1-3.6c2-0.9,4.1-1.3,6.5-1.3c3.1,0,5.9,0.8,8.5,2.4c2.6,1.6,4.6,4.1,6,7.3h0.2V192.2z M112.6,229.1 c0,2.1,0.3,4.1,1,6c0.7,1.9,1.6,3.6,2.9,5c1.3,1.4,2.8,2.6,4.6,3.4c1.8,0.8,3.8,1.3,6,1.3c2.1,0,4.1-0.4,5.9-1.3 c1.8-0.8,3.3-2,4.6-3.4c1.3-1.4,2.3-3.1,3.1-5c0.7-1.9,1.1-3.9,1.1-6.1s-0.4-4.2-1.1-6.1c-0.7-1.9-1.8-3.6-3.1-5 c-1.3-1.4-2.9-2.6-4.6-3.4c-1.8-0.8-3.8-1.3-5.9-1.3c-2.2,0-4.3,0.4-6,1.3c-1.8,0.9-3.3,2-4.6,3.5c-1.3,1.4-2.2,3.1-2.9,5 C112.9,225,112.6,227,112.6,229.1z M156,228.6c0,2,0.3,3.9,0.9,5.8c0.6,1.9,1.5,3.6,2.7,5.1c1.2,1.5,2.7,2.7,4.5,3.7 c1.8,0.9,4,1.4,6.4,1.4c2.5,0,4.8-0.5,6.7-1.5c2-1,3.7-2.5,5.1-4.4l1.1,1c-1.6,2.1-3.4,3.6-5.6,4.7c-2.1,1.1-4.6,1.6-7.4,1.6 c-2.4,0-4.5-0.4-6.5-1.3c-2-0.9-3.6-2.1-5.1-3.6c-1.4-1.5-2.5-3.4-3.3-5.5c-0.8-2.1-1.2-4.5-1.2-7c0-2.4,0.4-4.7,1.2-6.7 c0.8-2,1.9-3.8,3.3-5.3c1.4-1.5,3-2.6,4.9-3.5c1.9-0.8,3.9-1.2,6-1.2c2.5,0,4.7,0.4,6.6,1.3c1.9,0.9,3.4,2.1,4.7,3.5 c1.2,1.4,2.2,3.1,2.8,4.9c0.6,1.8,0.9,3.7,0.9,5.6v1.3H156z M183.2,227.3c0-2.1-0.4-4-1.1-5.7c-0.7-1.7-1.6-3.2-2.8-4.4 c-1.2-1.2-2.6-2.2-4.2-2.9c-1.6-0.7-3.4-1-5.5-1c-2.4,0-4.5,0.5-6.2,1.5c-1.7,1-3.1,2.2-4.2,3.7c-1.1,1.5-1.9,3-2.4,4.6 c-0.5,1.6-0.8,3-0.8,4.2H183.2z M202.1,214.1c2.1-1.5,4.3-2.2,6.6-2.2c0.2,0,0.4,0,0.6,0c0.2,0,0.4,0,0.6,0.1v1.3 c-0.2,0-0.4-0.1-0.5-0.1c-0.2,0-0.3,0-0.4,0c-2.1,0-3.8,0.5-5.2,1.4c-1.4,0.9-2.6,2.1-3.6,3.6c-0.9,1.5-1.6,3.1-2.1,4.9 c-0.4,1.8-0.7,3.6-0.7,5.3v16.6H196v-24c0-0.5,0-1.1,0-1.9c0-0.7,0-1.5-0.1-2.3c0-0.8-0.1-1.5-0.1-2.2c0-0.7-0.1-1.3-0.1-1.7h1.5 c0,0.5,0.1,1,0.1,1.7s0,1.5,0.1,2.3c0,0.8,0,1.6,0.1,2.4c0,0.8,0,1.5,0,2.1h0.1C198.5,218,200,215.6,202.1,214.1z M235.7,236.7 c0,1.4-0.3,2.7-0.8,3.9c-0.6,1.1-1.3,2.1-2.3,2.9c-1,0.8-2.1,1.4-3.3,1.8c-1.3,0.4-2.6,0.6-4.1,0.6c-2.4,0-4.5-0.5-6.5-1.4 c-1.9-0.9-3.5-2.2-4.8-4l1.3-0.8c2.3,3.3,5.7,4.9,10.1,4.9c1,0,2.1-0.2,3.1-0.5c1-0.3,2-0.8,2.9-1.5c0.9-0.7,1.6-1.5,2.1-2.4 c0.5-1,0.8-2.1,0.8-3.4c0-1.5-0.3-2.7-1-3.6c-0.7-0.9-1.5-1.7-2.6-2.2c-1-0.6-2.2-1-3.4-1.4c-1.2-0.3-2.4-0.7-3.5-0.9 c-1.2-0.3-2.3-0.7-3.3-1.1c-1-0.4-1.9-0.9-2.7-1.5c-0.8-0.6-1.4-1.4-1.8-2.3c-0.4-0.9-0.7-2.1-0.7-3.5c0-1.4,0.3-2.6,0.8-3.6 c0.6-1,1.3-1.9,2.2-2.6c0.9-0.7,2-1.2,3.2-1.5c1.2-0.3,2.4-0.5,3.6-0.5c4.4,0,7.7,1.6,9.9,4.7l-1.3,0.8c-1.1-1.4-2.3-2.4-3.6-3.1 c-1.4-0.7-3-1-4.9-1c-0.9,0-1.8,0.1-2.8,0.3c-1,0.2-1.9,0.6-2.7,1.2c-0.8,0.5-1.5,1.2-2,2.1c-0.5,0.9-0.8,2-0.8,3.2 c0,1.4,0.2,2.5,0.7,3.4c0.4,0.8,1.1,1.5,1.9,2c0.8,0.5,1.7,0.9,2.9,1.3c1.1,0.3,2.4,0.7,3.7,1c1.3,0.3,2.5,0.7,3.7,1.2 c1.2,0.4,2.2,1,3.1,1.6c0.9,0.7,1.6,1.5,2.2,2.4C235.4,234,235.7,235.2,235.7,236.7z M7.3,3.4h6.9l18,41.5l18-41.5h6.6v49.5h-4.6 V9.2h-0.1L33.2,52.9h-2L12,9.2h-0.1v43.6H7.3V3.4z M95.9,46.8c-1.6,2.5-3.6,4.2-6.1,5.3c-2.4,1.1-5,1.6-7.9,1.6 c-2.5,0-4.7-0.4-6.7-1.3c-2-0.8-3.7-2-5.2-3.5c-1.4-1.5-2.6-3.3-3.3-5.4c-0.8-2.1-1.2-4.4-1.2-6.9c0-2.4,0.4-4.7,1.2-6.7 c0.8-2.1,1.9-3.8,3.4-5.4c1.4-1.5,3.1-2.7,5.1-3.6c2-0.9,4.1-1.3,6.5-1.3c2.5,0,4.7,0.4,6.5,1.3c1.9,0.9,3.5,2,4.8,3.4 c1.3,1.4,2.2,3,2.9,4.9c0.7,1.8,1,3.7,1,5.5v2.9H69.7c0,0.9,0.2,2,0.5,3.4c0.3,1.4,1,2.7,1.9,4c0.9,1.3,2.2,2.4,3.7,3.4 c1.6,0.9,3.6,1.4,6.1,1.4c2.1,0,4.2-0.5,6.2-1.5c2-1,3.5-2.4,4.6-4.2L95.9,46.8z M92.7,34c0-1.4-0.3-2.8-0.9-4.1 c-0.6-1.3-1.4-2.4-2.4-3.3c-1-1-2.2-1.7-3.6-2.3c-1.4-0.6-2.8-0.8-4.4-0.8c-2.3,0-4.2,0.5-5.7,1.4c-1.5,0.9-2.7,2-3.6,3.2 c-0.9,1.2-1.5,2.4-1.9,3.5c-0.4,1.1-0.6,1.9-0.6,2.3H92.7z M136.5,0h4.2v52.9h-4.2V0z M179.7,46.8c-1.6,2.5-3.6,4.2-6.1,5.3 c-2.4,1.1-5,1.6-7.9,1.6c-2.5,0-4.7-0.4-6.7-1.3c-2-0.8-3.7-2-5.2-3.5c-1.4-1.5-2.6-3.3-3.3-5.4c-0.8-2.1-1.2-4.4-1.2-6.9 c0-2.4,0.4-4.7,1.2-6.7c0.8-2.1,1.9-3.8,3.4-5.4c1.4-1.5,3.1-2.7,5.1-3.6c2-0.9,4.1-1.3,6.5-1.3c2.5,0,4.7,0.4,6.5,1.3 c1.9,0.9,3.5,2,4.8,3.4s2.2,3,2.9,4.9c0.7,1.8,1,3.7,1,5.5v2.9h-27.1c0,0.9,0.2,2,0.5,3.4c0.3,1.4,1,2.7,1.9,4 c0.9,1.3,2.2,2.4,3.7,3.4c1.6,0.9,3.6,1.4,6.1,1.4c2.1,0,4.2-0.5,6.2-1.5c2-1,3.5-2.4,4.6-4.2L179.7,46.8z M176.5,34 c0-1.4-0.3-2.8-0.9-4.1c-0.6-1.3-1.4-2.4-2.4-3.3c-1-1-2.2-1.7-3.6-2.3c-1.4-0.6-2.8-0.8-4.4-0.8c-2.3,0-4.2,0.5-5.7,1.4 c-1.5,0.9-2.7,2-3.6,3.2c-0.9,1.2-1.5,2.4-1.9,3.5c-0.4,1.1-0.6,1.9-0.6,2.3H176.5z M188.7,29.7c0-0.6,0-1.3-0.1-2.2 c0-0.9-0.1-1.7-0.1-2.6c0-0.9-0.1-1.7-0.1-2.5c0-0.8-0.1-1.4-0.1-1.8h4.2c0,1.2,0.1,2.4,0.1,3.5c0,1.1,0.1,1.8,0.2,2.2 c1.1-1.9,2.4-3.5,4.1-4.7c1.7-1.2,3.7-1.8,6.2-1.8c0.4,0,0.8,0,1.2,0.1c0.4,0.1,0.8,0.2,1.2,0.2l-0.5,4.1c-0.6-0.2-1.1-0.3-1.6-0.3 c-1.8,0-3.4,0.3-4.7,0.9c-1.3,0.6-2.4,1.4-3.3,2.4c-0.9,1-1.5,2.2-1.9,3.6s-0.6,2.9-0.6,4.4v17.6h-4.2V29.7z M49.2,106.1 c-2.4,3.2-5.1,5.5-8.3,6.9c-3.1,1.4-6.5,2.1-10.1,2.1c-3.8,0-7.2-0.6-10.4-1.9c-3.1-1.3-5.8-3.1-8.1-5.4c-2.2-2.3-4-5.1-5.2-8.3 c-1.3-3.2-1.9-6.7-1.9-10.5c0-3.8,0.6-7.2,1.9-10.4c1.3-3.2,3-5.9,5.2-8.2c2.2-2.3,4.9-4.1,8.1-5.4c3.1-1.3,6.6-2,10.4-2 c3.4,0,6.5,0.6,9.4,1.8c2.9,1.2,5.5,3.2,7.7,6L44.1,74c-1.5-2.3-3.5-4-5.9-5.1c-2.4-1.1-4.9-1.6-7.4-1.6c-3.2,0-6.1,0.6-8.7,1.7 c-2.6,1.1-4.8,2.7-6.6,4.6c-1.8,2-3.2,4.3-4.2,6.9c-1,2.7-1.5,5.5-1.5,8.6s0.5,5.9,1.5,8.6c1,2.7,2.4,5,4.2,6.9 c1.8,2,4,3.5,6.6,4.6c2.6,1.1,5.5,1.7,8.7,1.7c1.3,0,2.6-0.2,3.9-0.5c1.4-0.3,2.7-0.8,4-1.4c1.3-0.6,2.5-1.4,3.7-2.4 c1.2-1,2.2-2.1,3.1-3.5L49.2,106.1z M80.2,100.3c0,1.6,0,3,0,4.3c0,1.3,0.1,2.4,0.1,3.5c0,1.1,0.1,2.1,0.2,3 c0.1,0.9,0.2,1.9,0.3,2.8h-3.9c-0.3-1.6-0.4-3.3-0.4-5.2h-0.1c-1.2,2.1-2.7,3.6-4.5,4.6c-1.8,1-4.1,1.5-6.8,1.5 c-1.4,0-2.8-0.2-4.1-0.5c-1.4-0.3-2.6-0.9-3.6-1.7c-1.1-0.8-1.9-1.8-2.6-3c-0.7-1.2-1-2.7-1-4.4c0-2.5,0.6-4.4,1.9-5.9 c1.3-1.4,2.8-2.5,4.7-3.3c1.8-0.7,3.8-1.2,5.9-1.4c2.1-0.2,3.9-0.3,5.5-0.3h4.9v-2c0-2.8-0.9-4.8-2.6-6c-1.7-1.2-3.9-1.8-6.5-1.8 c-3.7,0-7,1.2-9.9,3.6L55,85.2c1.5-1.5,3.5-2.6,5.7-3.4c2.3-0.8,4.5-1.2,6.6-1.2c3.9,0,7,0.9,9.4,2.8c2.3,1.8,3.5,4.8,3.5,8.9 V100.3z M71.8,97.6c-1.8,0-3.5,0.1-5.1,0.4c-1.7,0.2-3.1,0.6-4.5,1.2c-1.3,0.6-2.4,1.3-3.2,2.2c-0.8,0.9-1.2,2.1-1.2,3.5 c0,1,0.2,1.9,0.7,2.6c0.4,0.8,1,1.4,1.7,1.9s1.5,0.9,2.3,1.1s1.7,0.4,2.6,0.4c2.2,0,4.1-0.3,5.5-1c1.4-0.7,2.6-1.5,3.5-2.6 c0.9-1,1.5-2.2,1.8-3.6s0.5-2.7,0.5-4v-2.2H71.8z M90,90.6c0-0.6,0-1.3-0.1-2.2c0-0.9-0.1-1.7-0.1-2.6c0-0.9-0.1-1.7-0.1-2.5 c0-0.8-0.1-1.4-0.1-1.8h4.2c0,1.2,0.1,2.4,0.1,3.5c0,1.1,0.1,1.8,0.2,2.2h0.2c0.8-1.8,2.2-3.3,4.2-4.6c2-1.3,4.2-1.9,6.9-1.9 c2.1,0,4.1,0.5,5.9,1.6c1.8,1.1,3.1,2.9,3.8,5.4c1-2.4,2.6-4.2,4.6-5.3c2-1.1,4.2-1.7,6.4-1.7c2.5,0,4.6,0.4,6.2,1.2 c1.6,0.8,2.8,1.8,3.7,3.1c0.9,1.3,1.5,2.8,1.9,4.4c0.4,1.7,0.5,3.4,0.5,5.2v19.2h-4.2v-19c0-1.3-0.1-2.6-0.3-3.8 c-0.2-1.2-0.6-2.3-1.2-3.3c-0.6-1-1.4-1.8-2.4-2.3c-1-0.6-2.4-0.9-4.1-0.9c-2,0-3.6,0.4-4.8,1.1c-1.3,0.7-2.2,1.6-3,2.8 c-0.7,1.1-1.2,2.3-1.5,3.6c-0.3,1.3-0.5,2.5-0.5,3.7v18.2h-4.2V94.4c0-3-0.5-5.4-1.6-7.2c-1.1-1.8-2.8-2.7-5.1-2.7 c-1.5,0-3,0.3-4.4,0.8c-1.4,0.5-2.6,1.4-3.6,2.4c-1,1.1-1.8,2.5-2.4,4.1c-0.6,1.7-0.9,3.6-0.9,5.8v16.2H90V90.6z M147.3,81.5h4.2 v5.7h0.1c0.7-1.1,1.5-2.1,2.4-2.9c1-0.8,2-1.5,3.2-2c1.1-0.5,2.3-0.9,3.6-1.2c1.3-0.3,2.5-0.4,3.7-0.4c2.5,0,4.7,0.4,6.8,1.3 c2.1,0.8,3.9,2,5.4,3.5c1.5,1.5,2.7,3.3,3.5,5.4c0.8,2.1,1.3,4.3,1.3,6.8c0,2.5-0.4,4.7-1.3,6.8c-0.8,2.1-2,3.9-3.5,5.4 c-1.5,1.5-3.3,2.7-5.4,3.5c-2.1,0.8-4.3,1.3-6.8,1.3c-1.2,0-2.4-0.1-3.7-0.4c-1.3-0.3-2.5-0.7-3.6-1.2c-1.1-0.5-2.2-1.2-3.2-2 c-1-0.8-1.8-1.8-2.4-2.9h-0.1v21.6h-4.2V81.5z M151,97.7c0,1.8,0.3,3.5,1,5.1s1.7,3,2.9,4.2c1.2,1.2,2.6,2.1,4.3,2.8 c1.6,0.7,3.4,1,5.3,1c2,0,3.7-0.4,5.3-1c1.6-0.7,2.9-1.6,4.1-2.8c1.1-1.2,2-2.6,2.6-4.2c0.6-1.6,0.9-3.3,0.9-5.1 c0-1.8-0.3-3.5-0.9-5.1c-0.6-1.6-1.4-3-2.6-4.2c-1.1-1.2-2.5-2.1-4.1-2.8c-1.6-0.7-3.4-1-5.3-1c-1.9,0-3.7,0.4-5.3,1 c-1.6,0.7-3.1,1.6-4.3,2.8c-1.2,1.2-2.2,2.6-2.9,4.2S151,95.9,151,97.7z M188.6,61h4.2v26.2h0.1c0.7-1.1,1.5-2.1,2.4-2.9 c1-0.8,2-1.5,3.2-2c1.1-0.5,2.3-0.9,3.6-1.2c1.3-0.3,2.5-0.4,3.7-0.4c2.5,0,4.7,0.4,6.8,1.3c2.1,0.8,3.9,2,5.4,3.5 c1.5,1.5,2.7,3.3,3.5,5.4c0.8,2.1,1.3,4.3,1.3,6.8c0,2.5-0.4,4.7-1.3,6.8c-0.8,2.1-2,3.9-3.5,5.4c-1.5,1.5-3.3,2.7-5.4,3.5 c-2.1,0.8-4.3,1.3-6.8,1.3c-1.2,0-2.4-0.1-3.7-0.4c-1.3-0.3-2.5-0.7-3.6-1.2c-1.1-0.5-2.2-1.2-3.2-2c-1-0.8-1.8-1.8-2.4-2.9h-0.1 v5.7h-4.2V61z M192.4,97.7c0,1.8,0.4,3.5,1,5.1s1.7,3,2.9,4.2c1.2,1.2,2.6,2.1,4.3,2.8c1.6,0.7,3.4,1,5.3,1c2,0,3.7-0.4,5.3-1 c1.6-0.7,2.9-1.6,4.1-2.8c1.1-1.2,2-2.6,2.6-4.2c0.6-1.6,0.9-3.3,0.9-5.1c0-1.8-0.3-3.5-0.9-5.1c-0.6-1.6-1.4-3-2.6-4.2 c-1.1-1.2-2.5-2.1-4.1-2.8c-1.6-0.7-3.4-1-5.3-1c-1.9,0-3.7,0.4-5.3,1c-1.6,0.7-3.1,1.6-4.3,2.8c-1.2,1.2-2.2,2.6-2.9,4.2 S192.4,95.9,192.4,97.7z M259.4,107.8c-1.6,2.5-3.6,4.2-6.1,5.3c-2.4,1.1-5,1.6-7.9,1.6c-2.5,0-4.7-0.4-6.7-1.3 c-2-0.8-3.7-2-5.2-3.5c-1.4-1.5-2.6-3.3-3.3-5.4c-0.8-2.1-1.2-4.4-1.2-6.9c0-2.4,0.4-4.7,1.2-6.7c0.8-2.1,1.9-3.8,3.4-5.4 c1.4-1.5,3.1-2.7,5.1-3.6c2-0.9,4.1-1.3,6.5-1.3c2.5,0,4.7,0.4,6.5,1.3c1.9,0.9,3.5,2,4.8,3.4c1.3,1.4,2.2,3,2.9,4.9 c0.7,1.8,1,3.7,1,5.5v2.9h-27.1c0,0.9,0.2,2,0.5,3.4c0.3,1.4,1,2.7,1.9,4c0.9,1.3,2.2,2.4,3.7,3.4c1.6,0.9,3.6,1.4,6.1,1.4 c2.1,0,4.2-0.5,6.2-1.5c2-1,3.5-2.4,4.6-4.2L259.4,107.8z M256.2,95c0-1.4-0.3-2.8-0.9-4.1c-0.6-1.3-1.4-2.4-2.4-3.3 c-1-1-2.2-1.7-3.6-2.3s-2.8-0.8-4.4-0.8c-2.3,0-4.2,0.5-5.7,1.4c-1.5,0.9-2.7,2-3.6,3.2c-0.9,1.2-1.5,2.4-1.9,3.5 c-0.4,1.1-0.6,1.9-0.6,2.3H256.2z M269,61h4.2v52.9H269V61z M284.5,61h4.2v52.9h-4.2V61z M107.1,68.4h4.8 c0,0.1,18.7-47.8,18.7-47.8h-4.5l-10.4,27.2L105,20.6h-4.7L113.4,53C113.4,53,107.5,67.9,107.1,68.4z"/></svg>';
            
                            print '</a>';

                        print '</div>';

                        print '<div class="grid__wrapper grid__wrapper--5 grid__wrapper--no-padding fade fade--up">';

                            print '<div class="grid__col grid__col--2">';

                                print drupal_render(drupal_get_form('user_login'));

                            print '</div>';

                        print '</div>';

                    print '</div>';

                print '</section>';

            print '</div>';

        }

    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script src="<?= base_path() . drupal_get_path('theme', 'goosebumps'); ?>/js/main.js"></script>

    <script>

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-XXXXXXXX-X', 'auto');

        // ADD A SECONDARY CLIENT ANALYTCIS CODE LIKE THIS
        //ga('create', 'UA-XXXXXXXX-X', 'auto', {'name': 'CLIENTS NAME'});
        
        ga('send', 'pageview');
        ga('outsmart.send', 'pageview');

    </script>

</body>
</html>
