<?php

	global $user;

?>

<?php if (drupal_is_front_page()): ?>
    <nav class="nav">
<?php else: ?>
    <nav class="nav nav--fixed">
<?php endif; ?>

    <a href="javascript:void(0)" class="close hover--black">+</a>    

    <div class="menu-wrapper">

        <div class="grid__row">

            <div class="grid__wrapper grid__wrapper--2">
                <a href="<? base_path(); ?>"><svg class="logo logo--small" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100.6 52" style="enable-background:new 0 0 100.6 52;" xml:space="preserve"><path d="M0,1.6h6.9l18,41.5L43,1.6h6.6v49.5H45V7.5h-0.1L25.9,51.1h-2L4.8,7.5H4.6v43.6H0V1.6z M100.6,43c-2.4,3.2-5.1,5.5-8.3,6.9 c-3.1,1.4-6.5,2.1-10.1,2.1c-3.8,0-7.2-0.6-10.4-1.9c-3.1-1.3-5.8-3.1-8.1-5.4s-4-5.1-5.2-8.3c-1.3-3.2-1.9-6.7-1.9-10.5 s0.6-7.2,1.9-10.4c1.3-3.2,3-5.9,5.2-8.2s4.9-4.1,8.1-5.4c3.1-1.3,6.6-2,10.4-2c3.4,0,6.5,0.6,9.4,1.8c2.9,1.2,5.5,3.2,7.7,6 l-3.8,3.1c-1.5-2.3-3.5-4-5.9-5.1c-2.4-1.1-4.9-1.6-7.4-1.6c-3.2,0-6.1,0.6-8.7,1.7c-2.6,1.1-4.8,2.7-6.6,4.6 c-1.8,2-3.2,4.3-4.2,6.9c-1,2.7-1.5,5.5-1.5,8.6s0.5,5.9,1.5,8.6c1,2.7,2.4,5,4.2,6.9c1.8,2,4,3.5,6.6,4.6c2.6,1.1,5.5,1.7,8.7,1.7 c1.3,0,2.6-0.2,3.9-0.5c1.4-0.3,2.7-0.8,4-1.4c1.3-0.6,2.5-1.4,3.7-2.4c1.2-1,2.2-2.1,3.1-3.5L100.6,43z"/></svg></a>
            </div>

            <div class="grid__wrapper grid__wrapper--5">

                <?php

                    $tree = menu_tree_all_data('main-menu');
                    menu_set_active_trail($tree);
                    $output = menu_tree_output($tree);
                    print drupal_render($output);

                    if (in_array('administrator', array_values($user->roles))) {
                     
                        //print '<a href="'.base_path().'node/'.$node->nid.'/edit" class="button">Edit page</a>';

                    }

                ?>

            </div>

        </div>

    </div>

</nav>

<?php print render($page['content']); ?>

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

                <?php

                    global $user;

                    if ( in_array('administrator', $user->roles) || in_array('office', $user->roles) ) {

                        if (arg(0) == 'node' && is_numeric(arg(1))) $nodeid = arg(1);

                        print '<a href="'.base_path().'node/'.$nodeid.'/edit">Edit this page</a>';

                    }

                ?>

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
