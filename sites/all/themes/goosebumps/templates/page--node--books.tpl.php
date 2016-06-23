<?php 

    // Get the node ID of the page and load the node
    $nodeID = node_load($node->nid);

?>


    <!-- ********** CALENDAR SECTION ********** -->
    <section class="wrapper">

        <div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined">

            <div class="grid__col grid__col--5">

                <h3 class="title title--xsmall">
                    Publications
                </h3>

                <p>Books, periodicals and other publications from the Meyler Campbell Faculty and other members of our community.</p>

            </div>

        </div>

        <div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined">

                <?php 

                $books = views_get_view_result('publications', $reset = FALSE); 

                foreach ($books as $key => $book):

                        $author = $book->_field_data['nid']['entity']->field_author['und'][0]['value'];
                        $link = url('node/'. $book->_field_data['nid']['entity']->nid);                   
                        $contributors = $book->_field_data['nid']['entity']->field_contributors['und'];
                        $contributorsCount = count($contributors);
                        $description = $book->_field_data['nid']['entity']->field_book_description['und'][0]['value'];
                        $link = $book->_field_data['nid']['entity']->field_link_to_buy['und'][0]['value'];
                        $monthNum = $book->_field_data['nid']['entity']->field_publish_month['und'][0]['value'];
                        $dateObj = DateTime::createFromFormat('!m', $monthNum);
                        $publishMonth = $dateObj->format('F');
                        $publishYear = $book->_field_data['nid']['entity']->field_publish_year['und'][0]['value'];
                        $quote = strip_tags($book->_field_data['nid']['entity']->field_short_quote['und'][0]['value']);
                        $title = $book->_field_data['nid']['entity']->title;


                ?>

                    <div class="grid__row grid__row--person grid__row--underlined">

                        <div class="grid__col grid__col--2">

                            <a href="<?= $link; ?>" class="color--black hover--gold thought" target="_blank">

                                <img src="<?= base_path();?>sites/all/themes/goosebumps/img/spacer_2.png" alt="Spacer" />

                                <div class="title title--xsmall thought__title">“<?= $quote; ?>”</div>

                            </a>

                        </div>

                        <div class="grid__col grid__col--2">

                            <p><strong><?= strip_tags($title); ?></strong></p>

                            <p><?= strip_tags($description); ?></p>

                            <a href="<?= $link; ?>" class="underlined" target="_blank">Find it online</a>

                        </div>

                        <div class="grid__col grid__col--1">

                            <p class="font-12">
                                <?php
                                 
                                    print $author;

                                    if($contributorsCount > 0) {

                                        print '<br /><br />with contributions from:<br />';

                                        foreach ($contributors as $key => $contributor) {
                                            if($key === $contributorsCount - 1) {
                                                print strip_tags($contributor['value']);
                                            } else {
                                                print strip_tags($contributor['value']).'<br />';
                                            }
                                        }

                                    }

                                    print '<em>' . $publishMonth . ' ' . $publishYear . '</em>';
                                ?>
                            </p>

                        </div>

                    </div>

                <?php 

                    endforeach;

                    $booksPerPage = 6;
                    $bookCount = goosebumps_get_node_count('publication');
                    $noOfBookPages = ceil($bookCount / $booksPerPage);
                    $currentPageNo = $_GET['page'];

                    // Check to see if pagination is needed
                    if($noOfBookPages > 1) {

                        // Print the wrapper
                        print '<div class="news__pagination">';

                        // Loop through each page
                        for($i=0;$i<$noOfBookPages;$i++){

                            // check to see if this is the current page, if so add an active class
                            if($i === intval($currentPageNo)) {
                                $class = "pagination pagination--active";
                            } else {
                                $class = "pagination";
                            }

                            // check to see if the current page is the first page, if so slightly alter the URL
                            if($i === 0) {
                                print '<a href="'.base_path().'books" class="'.$class.'">';
                            } else {
                                print '<a href="'.base_path().'books?page='.$i.'" class="'.$class.'">';
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
