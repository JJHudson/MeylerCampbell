<?php 

    // Get the node ID of the page and load the node
    $nodeID = node_load($node->nid);

?>


    <!-- ********** CALENDAR SECTION ********** -->
    <section class="wrapper">

        <div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined grid__wrapper--overlined-grey color--grey">

            <div class="grid__col grid__col--5">

                <h3 class="title title--xsmall">
                    News &amp; Opinion
                </h3>

            </div>

        </div>

        <div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined grid__wrapper--overlined-grey">

        <?php

            $newsView = views_get_view_result('news', $reset = FALSE);

            foreach($newsView as $key => $newsItem):

                $item = node_load($newsItem->nid);

                $title = $item->title;
                $filename = $item->field_image['und'][0]['filename'];
                $newsTID = $item->field_news_type['und'][0]['tid'];
                $author = $item->field_author['und'][0]['value'];
                $intro = $item->field_intro['und'][0]['value'];
                $link = url('node/'. $item->nid);

                if($newsTID === '10') {
                    $image = base_path().'sites/default/files/styles/blackandwhite/public/'.$filename;
                } else {
                    $image = base_path().'sites/default/files/styles/profile/public/'.$filename;
                }

                $newsDate = explode(" ", $item->field_date['und'][0]['value']);
                $newsDate = explode("-", $newsDate[0]);

                if($newsDate[2] === '1' || $newsDate[2] === '01' || $newsDate[2] === '21' || $newsDate[2] === '31') {
                    $newsDay = $newsDate[2].'<sup>st</sup>';
                }else if($newsDate[2] === '2' || $newsDate[2] === '02' || $newsDate[2] === '22') {
                    $newsDay = $newsDate[2].'<sup>nd</sup>';
                }else if($newsDate[2] === '3' || $newsDate[2] === '03' || $newsDate[2] === '23') {
                    $newsDay = $newsDate[2].'<sup>rd</sup>';
                }else{
                    $newsDay = $newsDate[2].'<sup>th</sup>';
                }

                if($newsDate[1] === '01') {
                    $newsMonth = 'January';
                }else if($newsDate[1] === '02') {
                    $newsMonth = 'February';
                }else if($newsDate[1] === '03') {
                    $newsMonth = 'March';
                }else if($newsDate[1] === '04') {
                    $newsMonth = 'April';
                }else if($newsDate[1] === '05') {
                    $newsMonth = 'May';
                }else if($newsDate[1] === '06') {
                    $newsMonth = 'June';
                }else if($newsDate[1] === '07') {
                    $newsMonth = 'July';
                }else if($newsDate[1] === '08') {
                    $newsMonth = 'August';
                }else if($newsDate[1] === '09') {
                    $newsMonth = 'September';
                }else if($newsDate[1] === '10') {
                    $newsMonth = 'October';
                }else if($newsDate[1] === '11') {
                    $newsMonth = 'November';
                }else if($newsDate[1] === '12') {
                    $newsMonth = 'December';
                }

                $newsYear = $newsDate[0];

        ?>

                <div class="grid__row grid__row--person grid__row--underlined">

                    <div class="grid__col grid__col--2">

                        <a href="<?= $link; ?>" target="_parent" class="color--black hover--grey thought">

                        <?php if( empty($filename) ): ?>

                            <img src="<?= base_path(); ?>sites/all/themes/goosebumps/img/spacer_2.png" alt="Spacer" />

                            <div class="title title--small thought__title"><?= $newsType; ?></div>

                        <?php else: ?>

                            <img src="<?= $image; ?>" alt="<?= $title; ?>" width="100%" />

                        <?php endif; ?>

                        </a>

                    </div>

                    <div class="grid__col grid__col--2">

                        <p><strong><?= strip_tags($title); ?></strong></p>

                        <p><?= strip_tags($intro); ?></p>

                        <a href="<?= $link; ?>" target="_parent" class="underlined hover--grey">Find out more</a>

                    </div>

                    <div class="grid__col grid__col--1">

                        <p class="font-12"><?= $author; ?><em><?= $newsDay . ' ' . $newsMonth . ' ' . $newsYear; ?></em></p>

                    </div>

                </div>

        <?php

            endforeach;

            $articlePerPage = 6;
            $newsCount = goosebumps_get_node_count('news');
            $noOfPages = ceil($newsCount / $articlePerPage);
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
                        print '<a href="'.base_path().'news" class="'.$class.'">';
                    } else {
                        print '<a href="'.base_path().'news?page='.$i.'" class="'.$class.'">';
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

