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
    
    <?php print $page; ?>

    <footer class="footer">

        <?php

           $contactDetails = views_get_view_result('footer', $reset = FALSE);

           $tel = $contactDetails[0]->_field_data['nid']['entity']->field_telephone_number['und'][0]['value'];
           $fax = $contactDetails[0]->_field_data['nid']['entity']->field_fax_number['und'][0]['value'];
           $email = $contactDetails[0]->_field_data['nid']['entity']->field_email_address['und'][0]['value'];
           $adminOffice = nl2br($contactDetails[0]->_field_data['nid']['entity']->field_administrative_office_addr['und'][0]['value']);
           $registeredOffice = nl2br($contactDetails[0]->_field_data['nid']['entity']->field_registered_office_address['und'][0]['value']);
           $regNumber = $contactDetails[0]->_field_data['nid']['entity']->field_company_registration_numbe['und'][0]['value'];
           $vatNumber = $contactDetails[0]->_field_data['nid']['entity']->field_vat_number['und'][0]['value'];

        ?>

        <!-- ********** FOOTER SECTION ********** -->
        <section class="section section--coach fade fade--up">

            <div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined">

                <h3 class="title title--xsmall">
                    Contact us
                </h3>

            </div>

            <div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined color--black">

                <div class="grid__col grid__col--2">

                    <p>
                        <strong>Tel</strong><br />
                        <?= $tel; ?>
                    </p>

                    <p>
                        <strong>Fax</strong><br />
                        <?= $fax; ?>
                    </p>

                    <p>
                        <strong>Email</strong><br />
                        <a href="mailto:<?= $email; ?>" target="_blank" class="color--black hover--gold"><?= $email; ?></a>
                    </p>

                </div>

                <div class="grid__col grid__col--2">

                    <p>
                        <strong>Administrative Office</strong><br />
                        <?= $adminOffice; ?>
                    </p>

                    <p>
                        <strong>Registered Office</strong><br />
                        <?= $registeredOffice; ?>
                    </p>

                </div>

                <div class="grid__col grid__col--1">

                    <p>
                        <strong>Registration Number </strong><br />
                        <?= $regNumber; ?>
                    </p>

                    <p>
                        <strong>VAT Number </strong><br />
                        <?= $vatNumber; ?>
                    </p>

                </div>

            </div>

        </section>

    </footer>

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
