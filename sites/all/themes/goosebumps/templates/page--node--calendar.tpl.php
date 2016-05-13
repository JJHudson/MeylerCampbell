<?php 

    // Get the node ID of the page and load the node
    $nodeID = node_load($node->nid);

    // Variables
    $urlDate = $_GET['date'];
    $urlPage = $_GET['page'];
    $token = 'DCBYYCJA4HOSK6P53WJQ';
    $id = '10012777225';

    // Check if the date is set in the URL
    if(isset($urlDate) && !empty($urlDate)) {

        // Get the desired month and year from the URL
        $month = substr($urlDate, 0,2);
        $year = '20'.substr($urlDate, 2,3);

    }else{

        // Get the current month and year
        $month = date('m');
        $year = date('Y');

    }

    // Get the number of days in the desired month
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, date($month), date($year));

    // Get the day of the week for the first of the month
    $fullDate = date($year).'-'.date($month).'-01';
    $firstDay = date('w', strtotime( $fullDate));

    // Set the start date and end date for desired month
    $startDate = date($year).'-'.date($month).'-01T00:00:00';
    $endDate = date($year).'-'.date($month).'-'.$daysInMonth.'T23:59:59';

    // Set the next and previous months
    if ($month === '12') {

        $nextMonth = '01'.(substr($year, 2,3) + 1);
        $prevMonth = '11'.(substr($year, 2,3));

    } else if($month === '01') {

        $nextMonth = '02'.(substr($year, 2,3));
        $prevMonth = '12'.(substr($year, 2,3) - 1);

    } else {

        $tmpNextMonth = sprintf("%02d", $month + 1);
        $tmpPrevMonth = sprintf("%02d", $month - 1);
        $tmpYear = substr($year, 2,3);
        $nextMonth = $tmpNextMonth.$tmpYear;
        $prevMonth = $tmpPrevMonth.$tmpYear;

    }

    // Load the Eventbrite API class.
    include('./sites/all/themes/goosebumps/eventbrite/eventbrite.php'); 

    // Instantiate a new object with your OAuth token.
    $eventbrite = new eventbrite('J2U654GJNHRH2M3HJHTK');

    // Get all the events fro the current month
    $args = array('data' => 'search', 'params' => '?token='.$token.'&organizer.id='.$id.'&start_date.range_start='.$startDate.'&start_date.range_end='.$endDate);
    $events = $eventbrite->events($args);

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

?>


    <!-- ********** CALENDAR SECTION ********** -->
    <section class="wrapper">

        <div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined grid__wrapper--overlined-grey color--grey">

            <div class="grid__col grid__col--5">

                <h3 class="title title--xsmall">
                    Calendar<br />
                    <span class="title--light"><?= date('F \‘y', strtotime($year.$month.'01') ); ?></span>
                </h3>

                <a href="<?= base_path() ?>calendar?date=<?= $prevMonth; ?>" class="color--black hover--gold">< Prev</a> | 
                <a href="<?= base_path() ?>calendar?date=<?= $nextMonth; ?>" class="color--black hover--gold">Next ></a>

                <br /><br />

                <?php

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

                                    print '<a href="'.$url.'" target="_blank">Register here ></a>';

                                print '</div>';

                            print '</div>';

                            // Add the temporary array to the corresponding day of the calendar events array
                            $calendarEvents[$day]['events'][] = $tempArray;

                        }

                        // Close the element that holds all of the event overlay information
                        print '</div>';

                ?>


            </div>

        </div>

        <div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined grid__wrapper--overlined-grey color--grey">

            <div class="grid__col grid__col--5">

                    <?php

                        // Open the calendar wrapper
                        print '<div class="calendar">';

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

