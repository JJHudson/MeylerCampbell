<?php 

    // Get the node ID of the page and load the node
    $nodeID = node_load($node->nid);

?>


    <!-- ********** CALENDAR SECTION ********** -->
    <section class="wrapper">

        <div class="grid__row grid__row--margin-bottom">

            <div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined">

                <h3 class="title title--xsmall">

                    Insight

                </h3>

                <p>Our training is grounded in rigorous study and evidence and our community boasts leading academics, business people and other influential thinkers - in fields ranging from neuroscience and psychology to sport, management, and the law.</p>

                <p>Here's some of the latest research projects, white papers and thought leadership from, and for, our community.</p>

            </div>

            <div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined">

                <?php 

                $insights = views_get_view_result('insight', $reset = FALSE); 

                foreach ($insights as $key => $insight):

                    $title = $insight->_field_data['nid']['entity']->title;
                    $author = $insight->_field_data['nid']['entity']->field_author['und'][0]['value'];
                    $type = $insight->_field_data['nid']['entity']->field_type['und'][0]['tid'];
                    $pullQuote = $insight->_field_data['nid']['entity']->field_pull_quote['und'][0]['value'];
                    $intro = $insight->_field_data['nid']['entity']->field_intro['und'][0]['value'];
                    $research = base_path() . 'sites/default/files/' . $insight->_field_data['nid']['entity']->field_research_paper['und'][0]['filename'];
                    $link = url('node/'. $insight->_field_data['nid']['entity']->nid);

                    $date = explode(" ", $insight->_field_data['nid']['entity']->field_date['und'][0]['value']);
                    $date = explode("-", $date[0]);

                    if($date[2] === '1' || $date[2] === '01' || $date[2] === '21' || $date[2] === '31') {
                        $day = $date[2].'<sup>st</sup>';
                    }else if($date[2] === '2' || $date[2] === '02' || $date[2] === '22') {
                        $day = $date[2].'<sup>nd</sup>';
                    }else if($date[2] === '3' || $date[2] === '03' || $date[2] === '23') {
                        $day = $date[2].'<sup>rd</sup>';
                    }else{
                        $day = $date[2].'<sup>th</sup>';
                    }

                    if($date[1] === '01') {
                        $month = 'January';
                    }else if($date[1] === '02') {
                        $month = 'February';
                    }else if($date[1] === '03') {
                        $month = 'March';
                    }else if($date[1] === '04') {
                        $month = 'April';
                    }else if($date[1] === '05') {
                        $month = 'May';
                    }else if($date[1] === '06') {
                        $month = 'June';
                    }else if($date[1] === '07') {
                        $month = 'July';
                    }else if($date[1] === '08') {
                        $month = 'August';
                    }else if($date[1] === '09') {
                        $month = 'September';
                    }else if($date[1] === '10') {
                        $month = 'October';
                    }else if($date[1] === '11') {
                        $month = 'November';
                    }else if($date[1] === '12') {
                        $month = 'December';
                    }

                    $year = $date[0];

                ?>

                    <div class="grid__row grid__row--person grid__row--underlined">

                        <div class="grid__col grid__col--2">

                            <?php if($type === '7'): ?>

                                <a href="<?= $research; ?>" target="_blank" class="color--black hover--gold thought">

                            <?php else: ?>

                                <a href="<?= $link; ?>" target="_parent" class="color--black hover--gold thought">

                            <?php endif; ?>

                                <img src="<?= base_path();?>sites/all/themes/goosebumps/img/spacer_2.png" alt="Spacer" />

                                <div class="title title--xsmall thought__title">“<?= strip_tags($pullQuote); ?>”</div>

                            </a>

                        </div>

                        <div class="grid__col grid__col--2">

                            <p><strong><?= strip_tags($title); ?></strong></p>

                            <p><?= strip_tags($intro); ?></p>

                            <?php if($type === '7'): ?>

                                <a href="<?= $research; ?>" target="_blank" class="underlined" target="_blank">Download PDF</a>

                            <?php else: ?>

                                <a href="<?= $link; ?>" target="_parent" class="underlined">Find out more</a>

                            <?php endif; ?>

                        </div>

                        <div class="grid__col grid__col--1">

                            <p class="font-12"><?= $author; ?><em><?= $day . ' ' . $month . ' ' . $year; ?></em></p>

                        </div>

                    </div>

                <?php 

                    endforeach;

                    $articlePerPage = 6;
                    $insightCount = goosebumps_get_node_count('insight');
                    $noOfPages = ceil($insightCount / $articlePerPage);
                    $currentPageNo = $_GET['page'];

                    // Check to see if pagination is needed
                    if($noOfPages > 1) {

                        // Print the wrapper
                        print '<div class="news__pagination">';

                        // Loop through each page
                        for($i=0;$i<$noOfPages;$i++){

                            // check to see if this is the current page, if so add an active class
                            if($i === intval($currentPageNo)) {
                                $class = "pagination pagination--active";
                            } else {
                                $class = "pagination";
                            }

                            // check to see if the current page is the first page, if so slightly alter the URL
                            if($i === 0) {
                                print '<a href="'.base_path().'insight" class="'.$class.'">';
                            } else {
                                print '<a href="'.base_path().'insight?page='.$i.'" class="'.$class.'">';
                            }
                            
                            // prin the page number
                            print $i + 1;

                            // close the anchor tag
                            print '</a>';

                        }

                        // close the pagination wrapper
                        print '</div>';

                    }

                ?>

                

            </div>

    </section>
