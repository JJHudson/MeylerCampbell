<?php 

$nodeID = node_load($node->nid);
$people = views_get_view_result('person', $reset = FALSE); 

?>

<!-- ********** INTRO SECTION ********** -->
    <?php

        $peopleCount = count($people);
        $randPerson = rand(0, $peopleCount - 1);

        $heroName = strip_tags($people[$randPerson]->_field_data['nid']['entity']->title);
        $heroJob = strip_tags($people[$randPerson]->_field_data['nid']['entity']->field_job_title['und'][0]['value']);
        $heroQuote = $people[$randPerson]->_field_data['nid']['entity']->field_quote['und'][0]['value'];
        $heroPic = $people[$randPerson]->_field_data['nid']['entity']->field_profile_picture['und'][0]['filename'];

    ?>

    <section class="section section--hero" style="background-image: url(<?= base_path().'sites/default/files/'.$heroPic ?>);" >

        <div class="quote">

            <div class="intro">

                <h2 class="title title--small title--white">
                    <span>“</span><?= $heroQuote ?>”<br />
                </h2>

                <p>
                    <strong><?= $heroName; ?></strong><br />
                    <?= $heroJob; ?>
                </p>

            </div>

        </div>

    </section>

<!-- ********** CONTAINER ********** -->
<div class="container">

    <!-- ********** INTRO SECTION ********** -->
    <section class="section section--intro">

        <div class="grid__row"> 

            <div class="grid__wrapper grid__wrapper--2 grid__wrapper--no-padding">

            <a href="<?= base_path(); ?>">
                <svg class="logo-home logo-home__fixed" viewBox="0 0 112.3 97.74">
                    <polygon points="2.64 3.66 2.69 3.66 10.29 20.95 11.09 20.95 18.57 3.66 18.63 3.66 18.63 20.95 20.45 20.95 20.45 1.33 17.85 1.33 10.7 17.79 3.55 1.33 0.81 1.33 0.81 20.95 2.64 20.95 2.64 3.66"/>
                    <path d="M25.66,19.38a6,6,0,0,0,2.05,1.4,6.82,6.82,0,0,0,2.66.5,7.63,7.63,0,0,0,3.15-.64,5.59,5.59,0,0,0,2.4-2.11l-1.22-1a4.44,4.44,0,0,1-1.83,1.66,5.35,5.35,0,0,1-2.47.61,4.63,4.63,0,0,1-2.4-.55,4.84,4.84,0,0,1-1.48-1.33,4.74,4.74,0,0,1-.76-1.59A5.66,5.66,0,0,1,25.55,15H36.3V13.8a6.43,6.43,0,0,0-.39-2.19,5.63,5.63,0,0,0-3-3.28,6.19,6.19,0,0,0-2.59-.51,6.34,6.34,0,0,0-2.58.51,6.26,6.26,0,0,0-2,1.41,6.35,6.35,0,0,0-1.33,2.12,7.3,7.3,0,0,0-.47,2.66,7.79,7.79,0,0,0,.46,2.73A6.13,6.13,0,0,0,25.66,19.38Zm0.11-6.85a5.06,5.06,0,0,1,.75-1.4A4.93,4.93,0,0,1,28,9.86a4.24,4.24,0,0,1,2.26-.55,4.57,4.57,0,0,1,1.73.33,4.48,4.48,0,0,1,1.41.9,4.32,4.32,0,0,1,.94,1.32,3.78,3.78,0,0,1,.35,1.61H25.55A3.71,3.71,0,0,1,25.78,12.54Z"/>
                    <rect x="52.01" width="1.66" height="20.95"/>
                    <path d="M58.89,19.38a6,6,0,0,0,2.05,1.4,6.82,6.82,0,0,0,2.66.5,7.63,7.63,0,0,0,3.14-.64,5.59,5.59,0,0,0,2.4-2.11l-1.22-1a4.44,4.44,0,0,1-1.83,1.66,5.35,5.35,0,0,1-2.47.61,4.63,4.63,0,0,1-2.4-.55,4.84,4.84,0,0,1-1.48-1.33A4.74,4.74,0,0,1,59,16.31,5.66,5.66,0,0,1,58.78,15H69.53V13.8a6.42,6.42,0,0,0-.39-2.19,5.63,5.63,0,0,0-3-3.28,6.19,6.19,0,0,0-2.59-.51,6.34,6.34,0,0,0-2.58.51,6.26,6.26,0,0,0-2,1.41,6.35,6.35,0,0,0-1.33,2.12,7.3,7.3,0,0,0-.47,2.66,7.79,7.79,0,0,0,.46,2.73A6.13,6.13,0,0,0,58.89,19.38ZM59,12.54a5.06,5.06,0,0,1,.75-1.4,4.93,4.93,0,0,1,1.43-1.27,4.24,4.24,0,0,1,2.26-.55,4.57,4.57,0,0,1,1.73.33,4.48,4.48,0,0,1,1.41.9,4.32,4.32,0,0,1,.94,1.32,3.78,3.78,0,0,1,.35,1.61H58.78A3.72,3.72,0,0,1,59,12.54Z"/>
                    <path d="M72.61,9.84q0,0.53,0,1t0,0.87v9.2h1.66V14a6,6,0,0,1,.25-1.76,4,4,0,0,1,.76-1.43,3.51,3.51,0,0,1,1.3-1,4.63,4.63,0,0,1,1.87-.35,2,2,0,0,1,.64.11L79.36,8l-0.49-.1a2.75,2.75,0,0,0-.48,0A4.05,4.05,0,0,0,76,8.53a5.67,5.67,0,0,0-1.64,1.86,4.23,4.23,0,0,1-.07-0.86c0-.44,0-0.9,0-1.39H72.55q0,0.25,0,.71C72.59,9.16,72.61,9.49,72.61,9.84Z"/>
                    <path d="M2.83,42.71A9.27,9.27,0,0,0,6,44.84a10.81,10.81,0,0,0,4.11.76,9.71,9.71,0,0,0,4-.83A8.31,8.31,0,0,0,17.43,42l-1.5-1.14a6,6,0,0,1-1.22,1.37,7.58,7.58,0,0,1-1.45.94,7.18,7.18,0,0,1-3.12.73,8.61,8.61,0,0,1-3.45-.66,7.69,7.69,0,0,1-2.62-1.83A8.09,8.09,0,0,1,2.41,38.7a10.27,10.27,0,0,1,0-6.82,8.07,8.07,0,0,1,1.66-2.74,7.68,7.68,0,0,1,2.62-1.83,8.61,8.61,0,0,1,3.45-.66,7.1,7.1,0,0,1,2.92.64,5.43,5.43,0,0,1,2.34,2l1.5-1.25a7.41,7.41,0,0,0-3-2.37A9.77,9.77,0,0,0,10.14,25,10.64,10.64,0,0,0,6,25.76a9.45,9.45,0,0,0-3.2,2.15A9.82,9.82,0,0,0,.75,31.17a11.81,11.81,0,0,0,0,8.27A9.78,9.78,0,0,0,2.83,42.71Z"/>
                    <path d="M20.7,34.91a5.84,5.84,0,0,1,3.91-1.44,4.37,4.37,0,0,1,2.58.72,2.7,2.7,0,0,1,1,2.38v0.78H26.27q-0.94,0-2.17.13a8.75,8.75,0,0,0-2.33.55,4.67,4.67,0,0,0-1.84,1.29,3.42,3.42,0,0,0-.75,2.33,3.42,3.42,0,0,0,1.44,2.92,4.27,4.27,0,0,0,1.44.66,6.49,6.49,0,0,0,1.64.21,5.6,5.6,0,0,0,2.7-.58A4.67,4.67,0,0,0,28.18,43h0.05a12.08,12.08,0,0,0,.17,2.08H30q-0.08-.55-0.12-1.11c0-.37-0.05-0.77-0.07-1.19s0-.89,0-1.39,0-1.06,0-1.69V36.6a4.24,4.24,0,0,0-1.39-3.53A5.83,5.83,0,0,0,24.6,32a8.14,8.14,0,0,0-2.6.46,5.93,5.93,0,0,0-2.27,1.34Zm7.51,4.63A6.67,6.67,0,0,1,28,41.13a3.53,3.53,0,0,1-.71,1.41,3.72,3.72,0,0,1-1.37,1,5.34,5.34,0,0,1-2.19.39,3.64,3.64,0,0,1-1-.15,3.2,3.2,0,0,1-.93-0.44,2.3,2.3,0,0,1-.68-0.75,2.23,2.23,0,0,1,.21-2.42,3.29,3.29,0,0,1,1.26-.89,7.1,7.1,0,0,1,1.77-.47,14.5,14.5,0,0,1,2-.14h1.83v0.86Z"/>
                    <path d="M44,45.1V37.9a6.5,6.5,0,0,1,.18-1.47A4.5,4.5,0,0,1,44.79,35,3.37,3.37,0,0,1,46,33.9a3.8,3.8,0,0,1,1.91-.43,3.32,3.32,0,0,1,1.62.35,2.54,2.54,0,0,1,1,.93A4,4,0,0,1,51,36.06a8.16,8.16,0,0,1,.14,1.51V45.1h1.66V37.48a10,10,0,0,0-.21-2.05,4.63,4.63,0,0,0-.75-1.76,3.94,3.94,0,0,0-1.48-1.23A5.48,5.48,0,0,0,47.88,32a5.17,5.17,0,0,0-2.54.67,4.14,4.14,0,0,0-1.82,2.1A3.69,3.69,0,0,0,42,32.62,4.34,4.34,0,0,0,39.68,32a4.85,4.85,0,0,0-2.72.76,4.49,4.49,0,0,0-1.66,1.82H35.22a4.27,4.27,0,0,1-.07-0.86q0-.66,0-1.39H33.44q0,0.25,0,.71c0,0.3,0,.63,0,1s0,0.7,0,1,0,0.63,0,.87v9.2h1.66V38.7a7,7,0,0,1,.35-2.31,4.7,4.7,0,0,1,.94-1.64,3.74,3.74,0,0,1,1.41-1,4.75,4.75,0,0,1,1.73-.32,2.18,2.18,0,0,1,2,1.08,5.48,5.48,0,0,1,.65,2.85v7.7H44Z"/>
                    <path d="M57.94,42.86H58A4.3,4.3,0,0,0,59,44a5.81,5.81,0,0,0,1.26.8,6.35,6.35,0,0,0,1.43.47,7.39,7.39,0,0,0,1.47.15,7.15,7.15,0,0,0,2.7-.5,6.27,6.27,0,0,0,3.53-3.53,7.56,7.56,0,0,0,0-5.4,6.26,6.26,0,0,0-3.53-3.53,7.13,7.13,0,0,0-2.7-.5,7.32,7.32,0,0,0-1.47.15,6.3,6.3,0,0,0-1.43.47,5.89,5.89,0,0,0-1.26.8,4.34,4.34,0,0,0-1,1.15H57.94V32.3H56.27V51.42h1.66V42.86Zm0.25-6.19A5.19,5.19,0,0,1,59.32,35,5.45,5.45,0,0,1,61,33.88a5.29,5.29,0,0,1,2.11-.42,5.16,5.16,0,0,1,2.1.42A4.88,4.88,0,0,1,66.83,35a4.77,4.77,0,0,1,1,1.66,6.15,6.15,0,0,1,0,4.07,4.77,4.77,0,0,1-1,1.66,4.87,4.87,0,0,1-1.61,1.12,5.16,5.16,0,0,1-2.1.42A5.29,5.29,0,0,1,61,43.52a5.43,5.43,0,0,1-1.69-1.12,5.19,5.19,0,0,1-1.14-1.66A5.2,5.2,0,0,1,58.19,36.67Z"/>
                    <path d="M84.33,43.54a6.33,6.33,0,0,0,1.4-2.13,7.56,7.56,0,0,0,0-5.4,6.26,6.26,0,0,0-3.53-3.53,7.12,7.12,0,0,0-2.7-.5,7.32,7.32,0,0,0-1.47.15,6.32,6.32,0,0,0-1.43.47,5.86,5.86,0,0,0-1.26.8,4.34,4.34,0,0,0-1,1.15H74.31V24.16H72.65V45.1h1.66V42.86h0.05a4.3,4.3,0,0,0,1,1.15,5.78,5.78,0,0,0,1.26.8,6.37,6.37,0,0,0,1.43.47,7.39,7.39,0,0,0,1.47.15,7.14,7.14,0,0,0,2.7-.5A6.34,6.34,0,0,0,84.33,43.54Zm-4.84.4a5.29,5.29,0,0,1-2.11-.42A5.43,5.43,0,0,1,75.7,42.4a5.22,5.22,0,0,1-1.14-1.66,5.2,5.2,0,0,1,0-4.07A5.22,5.22,0,0,1,75.7,35a5.45,5.45,0,0,1,1.69-1.12,5.29,5.29,0,0,1,2.11-.42,5.17,5.17,0,0,1,2.11.42A4.89,4.89,0,0,1,83.21,35a4.77,4.77,0,0,1,1,1.66,6.15,6.15,0,0,1,0,4.07,4.77,4.77,0,0,1-1,1.66,4.88,4.88,0,0,1-1.61,1.12A5.17,5.17,0,0,1,79.49,43.94Z"/>
                    <path d="M99.54,33.84a5.69,5.69,0,0,0-1.88-1.36A6.19,6.19,0,0,0,95.07,32a6.34,6.34,0,0,0-2.58.51,6.27,6.27,0,0,0-2,1.41A6.35,6.35,0,0,0,89.14,36a7.3,7.3,0,0,0-.47,2.66,7.82,7.82,0,0,0,.46,2.73,6.12,6.12,0,0,0,1.32,2.13,6,6,0,0,0,2,1.4,6.83,6.83,0,0,0,2.66.5,7.63,7.63,0,0,0,3.14-.64,5.59,5.59,0,0,0,2.4-2.1l-1.22-1a4.44,4.44,0,0,1-1.83,1.66,5.35,5.35,0,0,1-2.47.61,4.62,4.62,0,0,1-2.4-.55,4.83,4.83,0,0,1-1.48-1.33,4.74,4.74,0,0,1-.76-1.59,5.67,5.67,0,0,1-.21-1.34h10.75V38a6.42,6.42,0,0,0-.39-2.19A5.78,5.78,0,0,0,99.54,33.84Zm-9.21,3.78a3.69,3.69,0,0,1,.22-0.93,5.09,5.09,0,0,1,.75-1.4A4.92,4.92,0,0,1,92.72,34,4.24,4.24,0,0,1,95,33.47a4.57,4.57,0,0,1,1.73.33,4.47,4.47,0,0,1,1.41.9A4.32,4.32,0,0,1,99.07,36a3.78,3.78,0,0,1,.35,1.61H90.33Z"/>
                    <rect x="104.51" y="24.16" width="1.66" height="20.95"/>
                    <rect x="110.64" y="24.16" width="1.66" height="20.95"/>
                    <path d="M40.37,27.1h1.88l7.41-19H47.89L43.76,18.92,39.52,8.15H37.66L42.87,21S40.53,26.9,40.37,27.1Z"/>
                    <path d="M17.53,70.33l-0.45-.42a7.29,7.29,0,0,1-3,2.16,10,10,0,0,1-3.68.72A9.68,9.68,0,0,1,6.45,72a9,9,0,0,1-3-2.13A9.47,9.47,0,0,1,1.5,66.71a11.13,11.13,0,0,1-.68-3.91,10.91,10.91,0,0,1,.69-3.91,9.65,9.65,0,0,1,1.95-3.18,9,9,0,0,1,3-2.13,9.6,9.6,0,0,1,3.91-.78,10,10,0,0,1,1.64.14,9.12,9.12,0,0,1,1.68.45,8.83,8.83,0,0,1,1.58.78,6.85,6.85,0,0,1,1.34,1.09L17,54.8a7.72,7.72,0,0,0-3-1.93,10.63,10.63,0,0,0-3.63-.64A10.49,10.49,0,0,0,6.28,53,9.68,9.68,0,0,0,3,55.21a9.77,9.77,0,0,0-2.1,3.35A12.35,12.35,0,0,0,.94,67a9.58,9.58,0,0,0,5.32,5.53,10.46,10.46,0,0,0,4.12.79,10.83,10.83,0,0,0,3.94-.75A7.71,7.71,0,0,0,17.53,70.33Z"/>
                    <rect x="22.02" y="51.44" width="0.62" height="21.34"/>
                    <path d="M37.25,72.54a6.58,6.58,0,0,0,2.24-1.89L39,70.25A6,6,0,0,1,37,72a5.86,5.86,0,0,1-2.71.61,5.62,5.62,0,0,1-2.6-.57,5.41,5.41,0,0,1-1.82-1.48,6.29,6.29,0,0,1-1.07-2.08,8,8,0,0,1-.35-2.34H40V65.62a7.22,7.22,0,0,0-.37-2.27,5.83,5.83,0,0,0-1.12-2,5.61,5.61,0,0,0-1.88-1.41A6.16,6.16,0,0,0,34,59.41a6,6,0,0,0-2.43.49,5.81,5.81,0,0,0-2,1.4,6.68,6.68,0,0,0-1.32,2.15,7.45,7.45,0,0,0-.48,2.71A8.3,8.3,0,0,0,28.27,69a6.44,6.44,0,0,0,1.33,2.23,6.11,6.11,0,0,0,2,1.45,6.45,6.45,0,0,0,2.63.52A6.52,6.52,0,0,0,37.25,72.54Zm-8.48-8.63a6.32,6.32,0,0,1,1-1.86,5.62,5.62,0,0,1,1.71-1.5A4.92,4.92,0,0,1,34,59.94a5.72,5.72,0,0,1,2.2.41,4.86,4.86,0,0,1,1.69,1.16A5.52,5.52,0,0,1,39,63.3a6.72,6.72,0,0,1,.44,2.31h-11A5.72,5.72,0,0,1,28.77,63.91Z"/>
                    <path d="M48.34,73.18a5.51,5.51,0,0,0,3-.86,4.62,4.62,0,0,0,1.95-2.64h0.08c0,0.19,0,.42,0,0.71s0,0.57.06,0.86,0.05,0.57.07,0.85a5.5,5.5,0,0,0,.08.69h0.59q-0.08-.54-0.16-1.37c0-.56-0.07-1.08-0.07-1.57v-5.7a4.58,4.58,0,0,0-1.28-3.6,5.1,5.1,0,0,0-3.52-1.14,6.64,6.64,0,0,0-2.24.41,6.33,6.33,0,0,0-2,1.2l0.34,0.48A6.44,6.44,0,0,1,47,60.37a5.49,5.49,0,0,1,2.16-.42,4.45,4.45,0,0,1,3,1,4,4,0,0,1,1.16,3.18v1H51a19.86,19.86,0,0,0-2.24.14,8.07,8.07,0,0,0-2.3.61,4.85,4.85,0,0,0-1.79,1.31A3.33,3.33,0,0,0,44,69.46a3.45,3.45,0,0,0,.38,1.67,3.4,3.4,0,0,0,1,1.16,4.48,4.48,0,0,0,1.4.68A5.55,5.55,0,0,0,48.34,73.18ZM45,71a3,3,0,0,1-.35-1.51,2.92,2.92,0,0,1,.64-2,4.14,4.14,0,0,1,1.62-1.13A8.18,8.18,0,0,1,49,65.83a21.42,21.42,0,0,1,2.26-.13h2v1.24a8.92,8.92,0,0,1-.23,2,5.18,5.18,0,0,1-.8,1.83,4.52,4.52,0,0,1-1.54,1.37,4.87,4.87,0,0,1-2.4.54,5.07,5.07,0,0,1-1.26-.17,3.93,3.93,0,0,1-1.21-.54A2.9,2.9,0,0,1,45,71Z"/>
                    <path d="M65.52,59.94l0.21,0V59.43l-0.25,0H65.22a4.52,4.52,0,0,0-2.68.89,5.12,5.12,0,0,0-1.81,2.92H60.67c0-.24,0-0.52,0-0.83s0-.63,0-1,0-.63,0-0.92,0-.52,0-0.71H59.94c0,0.19,0,.42.06,0.71s0,0.58,0,.89,0,0.62,0,.92,0,0.56,0,.76v9.71H60.7V66.07A9,9,0,0,1,61,63.91a6.6,6.6,0,0,1,.83-2,4.56,4.56,0,0,1,1.44-1.44,3.89,3.89,0,0,1,2.12-.55h0.16Z"/>
                    <polygon points="3.22 77.35 2.6 77.35 2.6 97.34 13.16 97.34 13.16 96.78 3.22 96.78 3.22 77.35"/>
                    <path d="M26.21,85.91a5.61,5.61,0,0,0-1.88-1.41A6.16,6.16,0,0,0,21.67,84a6,6,0,0,0-2.43.49,5.81,5.81,0,0,0-2,1.4A6.68,6.68,0,0,0,16,88a7.45,7.45,0,0,0-.48,2.71,8.3,8.3,0,0,0,.47,2.82,6.44,6.44,0,0,0,1.33,2.23,6.11,6.11,0,0,0,2,1.45,6.45,6.45,0,0,0,2.63.52,6.22,6.22,0,0,0,5.22-2.54l-0.45-.4a6,6,0,0,1-2.06,1.76,5.86,5.86,0,0,1-2.71.61,5.62,5.62,0,0,1-2.6-.57,5.41,5.41,0,0,1-1.82-1.48A6.29,6.29,0,0,1,16.44,93a8,8,0,0,1-.35-2.34H27.7V90.17a7.22,7.22,0,0,0-.37-2.27A5.83,5.83,0,0,0,26.21,85.91ZM16.12,90.17a5.72,5.72,0,0,1,.31-1.71,6.32,6.32,0,0,1,1-1.86,5.62,5.62,0,0,1,1.71-1.5,4.92,4.92,0,0,1,2.51-.61,5.72,5.72,0,0,1,2.2.41,4.86,4.86,0,0,1,1.69,1.16,5.52,5.52,0,0,1,1.12,1.79,6.72,6.72,0,0,1,.44,2.31h-11Z"/>
                    <path d="M41.62,94.4V88.7a4.58,4.58,0,0,0-1.28-3.6A5.1,5.1,0,0,0,36.82,84a6.64,6.64,0,0,0-2.24.41,6.33,6.33,0,0,0-2,1.2L32.86,86a6.44,6.44,0,0,1,1.79-1.13,5.49,5.49,0,0,1,2.16-.42,4.45,4.45,0,0,1,3,1A4,4,0,0,1,41,88.67v1H38.74a19.86,19.86,0,0,0-2.24.14,8.07,8.07,0,0,0-2.3.61,4.85,4.85,0,0,0-1.79,1.31A3.33,3.33,0,0,0,31.68,94a3.45,3.45,0,0,0,.38,1.67,3.4,3.4,0,0,0,1,1.16,4.48,4.48,0,0,0,1.4.68A5.53,5.53,0,0,0,39,96.87a4.62,4.62,0,0,0,1.95-2.64H41c0,0.19,0,.42,0,0.71s0,0.57.06,0.86,0.05,0.57.07,0.85a5.5,5.5,0,0,0,.08.69h0.59Q41.76,96.8,41.69,96C41.64,95.42,41.62,94.89,41.62,94.4ZM41,91.5a8.92,8.92,0,0,1-.23,2,5.18,5.18,0,0,1-.8,1.83,4.52,4.52,0,0,1-1.54,1.37,4.87,4.87,0,0,1-2.4.54A5.07,5.07,0,0,1,34.77,97a3.93,3.93,0,0,1-1.21-.54,2.9,2.9,0,0,1-.9-1A3,3,0,0,1,32.3,94a2.92,2.92,0,0,1,.64-2,4.14,4.14,0,0,1,1.62-1.13,8.18,8.18,0,0,1,2.17-.52A21.42,21.42,0,0,1,39,90.25h2V91.5Z"/>
                    <path d="M59,87.88H58.89A6.21,6.21,0,0,0,53,84a6.46,6.46,0,0,0-2.61.52,6.07,6.07,0,0,0-2.06,1.45A6.68,6.68,0,0,0,47,88.14a7.68,7.68,0,0,0-.48,2.74A7.56,7.56,0,0,0,47,93.6a6.54,6.54,0,0,0,1.34,2.17,6.16,6.16,0,0,0,2.06,1.44,6.48,6.48,0,0,0,2.61.52,6.24,6.24,0,0,0,5.84-3.9H59v3.5H59.6V76H59V87.88ZM58.56,93.3a6.4,6.4,0,0,1-1.24,2,5.93,5.93,0,0,1-1.88,1.37A5.56,5.56,0,0,1,53,97.2a5.69,5.69,0,0,1-2.44-.51,5.61,5.61,0,0,1-1.85-1.37,6,6,0,0,1-1.17-2,7.4,7.4,0,0,1,0-4.86,6.21,6.21,0,0,1,1.17-2A5.7,5.7,0,0,1,50.61,85a5.91,5.91,0,0,1,4.83,0,5.93,5.93,0,0,1,1.88,1.37,6.4,6.4,0,0,1,1.24,2A6.91,6.91,0,0,1,58.56,93.3Z"/>
                    <path d="M75.53,85.91a5.61,5.61,0,0,0-1.88-1.41A6.16,6.16,0,0,0,71,84a6,6,0,0,0-2.43.49,5.81,5.81,0,0,0-2,1.4A6.68,6.68,0,0,0,65.28,88a7.45,7.45,0,0,0-.48,2.71,8.3,8.3,0,0,0,.47,2.82,6.44,6.44,0,0,0,1.33,2.23,6.11,6.11,0,0,0,2,1.45,6.45,6.45,0,0,0,2.63.52,6.22,6.22,0,0,0,5.22-2.54L76,94.8A6,6,0,0,1,74,96.56a5.86,5.86,0,0,1-2.71.61,5.62,5.62,0,0,1-2.6-.57,5.41,5.41,0,0,1-1.82-1.48A6.29,6.29,0,0,1,65.77,93a8,8,0,0,1-.35-2.34H77V90.17a7.22,7.22,0,0,0-.37-2.27A5.83,5.83,0,0,0,75.53,85.91ZM65.44,90.17a5.72,5.72,0,0,1,.31-1.71,6.32,6.32,0,0,1,1-1.86,5.62,5.62,0,0,1,1.71-1.5,4.92,4.92,0,0,1,2.51-.61,5.72,5.72,0,0,1,2.2.41,4.86,4.86,0,0,1,1.69,1.16A5.52,5.52,0,0,1,76,87.85a6.72,6.72,0,0,1,.44,2.31h-11Z"/>
                    <path d="M87.38,84a4.52,4.52,0,0,0-2.68.89,5.12,5.12,0,0,0-1.81,2.92H82.84c0-.24,0-0.52,0-0.83s0-.63,0-1,0-.63,0-0.92,0-.52,0-0.71H82.1c0,0.19,0,.42.06,0.71s0,0.58,0,.89,0,0.62,0,.92,0,0.56,0,.76v9.71h0.62V90.62a9,9,0,0,1,.27-2.16,6.6,6.6,0,0,1,.83-2A4.56,4.56,0,0,1,85.41,85a3.89,3.89,0,0,1,2.12-.55h0.16l0.21,0V84l-0.25,0H87.38Z"/>
                    <path d="M97.79,91.5a5.42,5.42,0,0,0-1.27-.66A15.14,15.14,0,0,0,95,90.37q-0.82-.2-1.5-0.41a4.73,4.73,0,0,1-1.16-.52,2.16,2.16,0,0,1-.75-0.82,2.91,2.91,0,0,1-.27-1.35,2.46,2.46,0,0,1,.32-1.3,2.66,2.66,0,0,1,.82-0.86,3.39,3.39,0,0,1,1.09-.47,4.9,4.9,0,0,1,1.13-.14,4.39,4.39,0,0,1,2,.41,4.28,4.28,0,0,1,1.47,1.26l0.54-.31a4.54,4.54,0,0,0-4-1.89,5.11,5.11,0,0,0-1.45.21,4.17,4.17,0,0,0-1.28.62,3.06,3.06,0,0,0-.9,1,3,3,0,0,0-.34,1.47A3.28,3.28,0,0,0,91,88.7a2.7,2.7,0,0,0,.73.95,4,4,0,0,0,1.09.62q0.62,0.24,1.33.44l1.4,0.38a6.65,6.65,0,0,1,1.37.55,3.08,3.08,0,0,1,1,.9A2.45,2.45,0,0,1,98.36,94,2.78,2.78,0,0,1,98,95.36a3.08,3.08,0,0,1-.85,1,3.72,3.72,0,0,1-1.16.59,4.22,4.22,0,0,1-1.26.2,4.69,4.69,0,0,1-4.07-2l-0.51.34a4.89,4.89,0,0,0,1.93,1.62,6.06,6.06,0,0,0,2.61.55,5.16,5.16,0,0,0,1.64-.25,4.13,4.13,0,0,0,1.34-.73A3.45,3.45,0,0,0,99,94a3,3,0,0,0-.32-1.47A2.94,2.94,0,0,0,97.79,91.5Z"/>
                </svg>
            </a>

                &nbsp;

                <div class="burger color--black hover--gold">&#9776;</div>

            </div>

            <div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined grid__wrapper--padding-large fade fade--up">

                <div class="grid__col grid__col--5">

                    <h2 class="title title--medium">
                        <?= $body[0]['value']; ?>
                    </h2>

                </div>

            </div>

        </div>

    </section>



    <!-- ********** WHAT WE DO SECTION ********** -->
    <section class="section section--intro fade fade--up">

        <div class="grid__row">

            <div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined grid__wrapper--no-height">

                <h3 class="title title--xsmall">
                    <?= $nodeID->field_section_title['und']['0']['value']; ?>
                </h3>

                <p><?= nl2br($nodeID->field_section_description['und']['0']['value']); ?></p>

                <a href="<?= base_path(); ?>what-we-do" class="button">Find out more</a>

            </div>

            <?php 

                $programmes = count($nodeID->field_programmes['und']);

                for($i=0;$i<$programmes;$i++):

                    $hex = $nodeID->field_programmes['und'][$i]['entity']->field_colour['und'][0]['rgb'];
                    $link = url('node/'. $nodeID->field_programmes['und'][$i]['entity']->nid);

                    switch ($hex) {
                        case '#6d8798':
                            $color = 'blue';
                            break;
                        case '#98694c':
                            $color = 'bronze';
                            break;
                        case '#8e8b89':
                            $color = 'grey';
                            break;
                        default:
                            $color = 'gold';
                    }

            ?>

                    <?php if($i === 0): ?>

                        <div class="grid__wrapper grid__wrapper--5 grid__wrapper--no-margin grid__wrapper--overlined color--<?= $color; ?>">

                    <?php else: ?>

                        <div class="grid__wrapper grid__wrapper--5 grid__wrapper--offset-2 grid__wrapper--overlined color--<?= $color; ?>">

                    <?php endif; ?>

                        <div class="grid__col grid__col--3 color--<?= $color; ?>">

                            <h2 class="title title--medium">
                                <?= $nodeID->field_programmes['und'][$i]['entity']->title; ?>
                            </h2>

                        </div>

                        <div class="grid__col grid__col--2 color--black">

                            <?= nl2br($nodeID->field_programmes['und'][$i]['entity']->field_brief_description['und'][0]['value']); ?>

                            <a href="<?= $link; ?>" class="button button--<?= $color; ?>">Read more</a>

                        </div>

                    </div>

            <?php endfor; ?>
                
        </div>

    </section>



    <!-- ********** FACULTY SECTION ********** -->
    <section class="section section--people fade fade--up">

        <div class="grid__row">

            <div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined ">

                <h3 class="title title--xsmall">
                    <?= $nodeID->field_section_title_2['und']['0']['value']; ?>    
                </h3>

                <p><?= nl2br($nodeID->field_section_description_2['und']['0']['value']); ?></p>

                <a href="<?= base_path(); ?>our-people" class="button">Find out more</a>

            </div>

            <div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined">

                <div class="grid__col grid__col--5 gallery">

                     <?php 

                        foreach ($people as $key => $person):

                            $name = $person->_field_data['nid']['entity']->title;
                            $job = $person->_field_data['nid']['entity']->field_job_title['und'][0]['value'];
                            $quote = strip_tags($person->_field_data['nid']['entity']->field_quote['und'][0]['value']);
                            $image = base_path().'sites/default/files/styles/profile/public/'.$person->_field_data['nid']['entity']->field_profile_picture['und'][0]['filename'];

                    ?>
                            <div class="person gallery__item">

                                <img src="<?= $image; ?>" width="100%" alt="<?= $name; ?>" class="person__image" />

                                <div class="person__bio">

                                    <h3><?= $name; ?>: <?= $job; ?></h3>

                                    <p>“<?= $quote; ?>”</p>

                                    <p>
                                        <span class="gallery__arrow hover--gold" data-direction="previous">< Previous</span>
                                         | 
                                        <span class="gallery__arrow hover--gold" data-direction="next"> Next ></span>
                                    </p>

                                </div>

                            </div>

                    <?php

                        endforeach;

                    ?>

                </div>

            </div>

        </div>

    </section>



    <!-- ********** CALENDAR SECTION ********** -->
    <section class="section section--calendar fade fade--up">

       <div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined color--grey">

            <h3 class="title title--xsmall">
                <?= $nodeID->field_section_title_4['und']['0']['value']; ?>
            </h3>

            <p><?= nl2br($nodeID->field_section_description_4['und']['0']['value']); ?></p>

            <p>Here’s <strong><?= date('F'); ?>'s</strong> highlights.</p>

            <a href="<?= base_path(); ?>connected" class="button button--grey">Find out more</a>

        </div>

        <div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined color--grey">

            <div class="grid__col grid__col--5">

                    <?php

                        // Load the Eventbrite API class.
                        include('./sites/all/themes/goosebumps/eventbrite/eventbrite.php'); 

                        // Instantiate a new object with your OAuth token.
                        $eventbrite = new eventbrite('J2U654GJNHRH2M3HJHTK');

                        // Variables
                        $token = 'J2U654GJNHRH2M3HJHTK';
                        $id = '10012777225';
                        $month = date('m');
                        $year = date('Y');

                        // Get all the events fro the current month
                        $args = array('data' => 'search', 'params' => '?token='.$token.'&organizer.id='.$id.'&start_date.keyword=this_month');
                        $events = $eventbrite->events($args);

                        // Get the number of days in the current month
                        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, date($month), date($year));

                        // Get the day of the week for the first of the month
                        $fullDate = date($year).'-'.date($month).'-01';
                        $firstDay = date('w', strtotime( $fullDate));

                        // Create an array for the current month
                        $calendarEvents = array();

                        // Fill the array with an entry for each day
                        for($i=1;$i<$daysInMonth+1;$i++){

                            $day = date( "w", strtotime($year."-".$month."-".$i." 00:00:00"));
                            $date = sprintf("%02d", $i);

                            $calendarEvents[$date]['day'] = $day;
                            $calendarEvents[$date]['date'] = $date;
                            $calendarEvents[$date]['events'] = array();

                        }

                        // Add an element to hold all of the event overlay information
                        print '<div class="event__info-wrapper">';
                        print '<div class="event__hide hover--gold">+</div>';

                        // Loop through the events and add the event items to the corresponding day
                        foreach($events->events as $key=>$event) {

                            // Create variables for each event item
                            $name = $event->name->text;
                            $description = $event->description->text;
                            $logo = $event->logo->url;
                            $url = $event->url;
                            $day = $event->start->local;
                            $day = explode("T", $day);
                            $day = explode("-", $day[0]);
                            $day = $day[2];

                            // Add the event items to a temporary array
                            $tempArray = array(
                                'name'=> $name,
                                'description' => $description,
                                'logo' => $logo,
                                'url' => $url
                            );

                            // Add the event info to the open element

                            print '<div class="event__info event__info--'.$day.'" >';

                                print '<img src="'.$logo.'" width="100%" />';

                                print '<div class="event__copy">';
                            
                                    print '<p><strong>01.05.16</strong></p>';

                                    print '<p><strong>'.$name.'</strong></p>';

                                    print '<p>'.substr($description, 0, 140).'...</p>';

                                    print '<a href="'.$url.'">Register here ></a>';

                                print '</div>';

                            print '</div>';

                            // Add the temporary array to the corresponding day of the calendar events array
                            $calendarEvents[$day]['events'][] = $tempArray;

                        }

                        // Close the element that holds all of the event overlay information
                        print '</div>';

                        // Open the calendar wrapper
                        print '<div class="calendar">';

                        // Print the current month
                        print '<h3 class="title title--xsmall calendar__month">';

                        print '</h3>';

                        // Work out the number of empty slots needed at the front of the month
                        $emptiesStart = $firstDay -1 ;

                        // Print the empty slots needed

                        if($emptiesStart < 5) {
                        
                            for($j=0;$j<$emptiesStart;$j++) {
                                print '<div class="calendar__item calendar__item--empty">&nbsp;</div>';
                            }

                        }

                        $itemsCounter = 0;
                        
                        // Loop through the month and print out each day as a calendar item
                        foreach($calendarEvents as $key=>$calendarEvent) {

                            $day = $calendarEvent['day'];

                            if($day > 0 && $day < 6) {

                                $date = $calendarEvent['date'];
                                $events = $calendarEvent['events'];

                                if($key % 5 == 0 || $key % 5 == 1) {
                                    $x = 'left';
                                }else{
                                    $x = 'right';
                                }

                                if($key > 15) {
                                    $y = 'top';
                                }else{
                                    $y = 'bottom';
                                }

                                $itemsCounter++;

                                if (empty($events)) {

                                    print '<div class="calendar__item calendar__item--'.$date.'">'.$date.'</div>';

                                } else {

                                    print '<div class="calendar__item calendar__item--active calendar__item--'.$date.'" data-date="'.$date.'" data-x="'.$x.'" data-y="'.$y.'">';

                                        // The date
                                        print $date;

                                        // Event titles over the date
                                        print '<div class="event__titles">';

                                            // Loop through the events and print the names of them
                                            foreach($events as $key=>$event) {

                                                $name = $event['name'];

                                                print '<h4>'.$name.'</h4>';

                                            }

                                        print '</div>';

                                    print '</div>';

                                }
                                

                            }

                        }

                        // Make sure the emptiesStart variable equals at least zero
                        if( $emptiesStart < 0 ){
                            $emptiesStart = 0;
                        }

                        // Work out the number of empty slots needed at the end of the month
                        $emptiesEnd = 5 - (($itemsCounter + $emptiesStart) % 5);

                        // Print the empty slots if there are less than a full row needed
                        if($emptiesEnd < 5) {

                            for($j=0;$j<$emptiesEnd;$j++) {
                                print '<div class="calendar__item calendar__item--empty">&nbsp;</div>';
                            }

                        }

                    ?>

                </div>

            </div>

        </div>

    </section>



    <!-- ********** COACH SECTION ********** -->
    <section class="section section--coach fade fade--up">

        <?php 

            $person = views_get_view_result('person', $reset = FALSE); 

            $name = $person[0]->_field_data['nid']['entity']->title;
            $job = $person[0]->_field_data['nid']['entity']->field_job_title['und'][0]['value'];
            $bio = $person[0]->_field_data['nid']['entity']->field_brief_description['und'][0]['value'];
            $image = base_path().'sites/default/files/styles/profile/public/'.$person[0]->_field_data['nid']['entity']->field_profile_picture['und'][0]['filename'];

        ?>

        <div class="grid__row">

            <div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined color--gold">

                <h3 class="title title--xsmall">
                    <?= $nodeID->field_section_title_3['und']['0']['value']; ?>    
                </h3>

                <p class="color--black"><?= nl2br($nodeID->field_section_description_3['und']['0']['value']); ?></p>

                <a href="<?= base_path(); ?>what-we-do/mastered" class="button button--gold">Find out more</a>

            </div>

            <div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined color--gold">

                <div class="grid__col grid__col--5 gallery">

                    <?php

                        $testimonials = field_get_items('node', $nodeID, 'field_testimonials');

                        foreach ($testimonials as $testimonial):

                            $fc = field_collection_field_get_entity($testimonial);

                            $quote = $fc->field_quote['und']['0']['value'];
                            $name = $fc->field_quotee_name['und']['0']['value'];
                            $job = $fc->field_quotee_job['und']['0']['value'];

                    ?>              

                        <div class="testimonial gallery__item">

                            <div class="title title--small title--center color--black testimonial--quote">

                                <?= nl2br($quote); ?>

                            </div>

                            <div class="testimonial__byline">

                                <h4 class="testimonial__quotee color--black">
                                    <strong><?= $name; ?></strong><br />
                                    <?= $job; ?>
                                </h4>

                                <div class="testimonial__controls">
                                    <span class="gallery__arrow hover--gold color--black" data-direction="previous">< Previous</span>
                                     | 
                                    <span class="gallery__arrow hover--gold color--black" data-direction="next"> Next ></span>
                                </div>

                            </div>

                        </div>

                    <?php

                        endforeach;

                    ?>

                </div>

            </div>

        </div>


    </section>

</div>
