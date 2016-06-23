<?php 

$nodeID = node_load($node->nid);
$author = $nodeID->field_author['und'][0]['value'];
$body = $nodeID->field_body['und'][0]['value'];

$date = explode(" ", $nodeID->field_date['und']['0']['value']);
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

<div class="node-type" data-node="<?= $nodeID->type; ?>"></div>

<!-- ********** CONTAINER ********** -->
<div class="container">

	<!-- ********** INTRO SECTION ********** -->
    <section class="section section--intro">

        <div class="grid__row"> 

            <div class="grid__wrapper grid__wrapper--2 grid__wrapper--no-padding">

	            <a href="<?= base_path(); ?>">
	            	<svg class="logo logo-main" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297.2 220" xml:space="preserve">
                    	<path d="M36,162.2c-2.9,1.1-5.9,1.7-9,1.7c-3.4,0-6.6-0.6-9.4-1.8c-2.8-1.2-5.3-2.9-7.4-5s-3.7-4.7-4.8-7.6c-1.1-3-1.7-6.2-1.7-9.7 c0-3.5,0.6-6.7,1.7-9.7c1.1-3,2.7-5.5,4.8-7.6c2.1-2.1,4.5-3.8,7.4-5c2.9-1.2,6-1.8,9.4-1.8c2.8,0,5.6,0.5,8.3,1.5 c2.7,1,5,2.4,6.9,4.4l-0.9,1c-0.9-0.9-1.9-1.8-3.1-2.5c-1.1-0.7-2.3-1.3-3.6-1.8c-1.3-0.5-2.5-0.8-3.8-1c-1.3-0.2-2.5-0.3-3.7-0.3 c-3.3,0-6.2,0.6-8.9,1.8c-2.7,1.2-5,2.8-6.9,4.9c-1.9,2.1-3.4,4.5-4.5,7.3c-1.1,2.8-1.6,5.8-1.6,8.9c0,3.2,0.5,6.2,1.5,8.9 c1,2.8,2.5,5.2,4.4,7.3c1.9,2.1,4.2,3.7,6.9,4.9c2.7,1.2,5.7,1.8,9,1.8c2.8,0,5.6-0.5,8.4-1.6s5.1-2.7,6.9-4.9l1,1 C41.4,159.3,38.9,161.1,36,162.2z M51.7,162.6v-48.8h1.4v48.8H51.7z M62.9,147.5c0,1.8,0.3,3.6,0.8,5.4c0.5,1.8,1.4,3.3,2.5,4.7 c1.1,1.4,2.5,2.5,4.2,3.4c1.7,0.9,3.7,1.3,5.9,1.3c2.3,0,4.4-0.5,6.2-1.4c1.8-0.9,3.4-2.3,4.7-4l1,0.9c-1.5,1.9-3.2,3.3-5.1,4.3 c-2,1-4.2,1.5-6.8,1.5c-2.2,0-4.2-0.4-6-1.2c-1.8-0.8-3.4-1.9-4.7-3.3c-1.3-1.4-2.3-3.1-3-5.1c-0.7-2-1.1-4.1-1.1-6.4 c0-2.2,0.4-4.3,1.1-6.2c0.7-1.9,1.7-3.5,3-4.9c1.3-1.4,2.8-2.4,4.5-3.2c1.7-0.8,3.6-1.1,5.6-1.1c2.3,0,4.4,0.4,6.1,1.2 c1.7,0.8,3.2,1.9,4.3,3.2c1.1,1.3,2,2.8,2.6,4.5c0.6,1.7,0.8,3.4,0.8,5.2v1.2H62.9z M87.9,146.2c0-1.9-0.4-3.7-1-5.3 c-0.6-1.6-1.5-3-2.5-4.1c-1.1-1.1-2.4-2-3.9-2.6c-1.5-0.6-3.2-0.9-5-0.9c-2.2,0-4.2,0.5-5.7,1.4c-1.6,0.9-2.9,2.1-3.9,3.4 c-1,1.4-1.8,2.8-2.2,4.3c-0.5,1.5-0.7,2.8-0.7,3.9H87.9z M118.6,155.9c0,1.1,0.1,2.3,0.2,3.6c0.1,1.3,0.2,2.3,0.4,3.1h-1.4 c-0.1-0.4-0.2-1-0.2-1.6c0-0.6-0.1-1.3-0.2-1.9c-0.1-0.7-0.1-1.3-0.1-2c0-0.6,0-1.2,0-1.6H117c-0.9,2.7-2.3,4.7-4.5,6 c-2.1,1.3-4.4,2-6.8,2c-1.2,0-2.4-0.2-3.6-0.5c-1.2-0.3-2.2-0.9-3.2-1.5c-0.9-0.7-1.7-1.6-2.3-2.6c-0.6-1.1-0.9-2.3-0.9-3.8 c0-2.1,0.5-3.8,1.6-5.1c1.1-1.3,2.5-2.3,4.1-3c1.6-0.7,3.4-1.2,5.3-1.4c1.9-0.2,3.6-0.3,5.1-0.3h5.2v-2.4c0-3.3-0.9-5.7-2.6-7.3 c-1.8-1.5-4.1-2.3-6.9-2.3c-1.8,0-3.4,0.3-4.9,1c-1.5,0.6-2.9,1.5-4.1,2.6l-0.8-1.1c1.4-1.2,2.9-2.1,4.7-2.7 c1.7-0.6,3.5-0.9,5.1-0.9c3.4,0,6.1,0.9,8,2.6c2,1.7,2.9,4.5,2.9,8.2V155.9z M117.2,146.4h-4.6c-1.6,0-3.4,0.1-5.2,0.3 c-1.8,0.2-3.5,0.6-5,1.2c-1.5,0.6-2.7,1.5-3.7,2.6c-1,1.1-1.5,2.6-1.5,4.5c0,1.4,0.3,2.5,0.8,3.5c0.5,0.9,1.2,1.7,2.1,2.2 c0.8,0.6,1.8,1,2.8,1.2c1,0.3,2,0.4,2.9,0.4c2.2,0,4-0.4,5.5-1.2c1.5-0.8,2.6-1.9,3.5-3.1c0.9-1.3,1.5-2.7,1.8-4.2 c0.3-1.5,0.5-3,0.5-4.5V146.4z M134.8,134.1c1.9-1.4,3.9-2,6.1-2c0.2,0,0.4,0,0.6,0c0.2,0,0.4,0,0.6,0.1v1.2c-0.2,0-0.3-0.1-0.5-0.1 c-0.2,0-0.3,0-0.4,0c-1.9,0-3.5,0.4-4.8,1.3c-1.3,0.8-2.4,1.9-3.3,3.3c-0.9,1.4-1.5,2.9-1.9,4.5c-0.4,1.7-0.6,3.3-0.6,4.9v15.4h-1.4 v-22.2c0-0.5,0-1.1,0-1.7c0-0.7,0-1.4-0.1-2.1c0-0.7-0.1-1.4-0.1-2c0-0.6-0.1-1.2-0.1-1.6h1.4c0,0.4,0.1,1,0.1,1.6 c0,0.6,0,1.3,0.1,2.1c0,0.8,0,1.5,0.1,2.2c0,0.7,0,1.3,0,1.9h0.1C131.5,137.7,132.9,135.4,134.8,134.1z M8.2,219.1v-45.7h1.4v44.4 h22.7v1.3H8.2z M37.1,203.9c0,1.8,0.3,3.6,0.8,5.4c0.5,1.8,1.4,3.3,2.5,4.7c1.1,1.4,2.5,2.5,4.2,3.4c1.7,0.9,3.7,1.3,5.9,1.3 c2.3,0,4.4-0.5,6.2-1.4c1.8-0.9,3.4-2.3,4.7-4l1,0.9c-1.5,1.9-3.2,3.3-5.1,4.3c-2,1-4.2,1.5-6.8,1.5c-2.2,0-4.2-0.4-6-1.2 c-1.8-0.8-3.4-1.9-4.7-3.3c-1.3-1.4-2.3-3.1-3-5.1c-0.7-2-1.1-4.1-1.1-6.4c0-2.2,0.4-4.3,1.1-6.2c0.7-1.9,1.7-3.5,3-4.9 c1.3-1.4,2.8-2.4,4.5-3.2c1.7-0.8,3.6-1.1,5.6-1.1c2.3,0,4.4,0.4,6.1,1.2c1.7,0.8,3.2,1.9,4.3,3.2c1.1,1.3,2,2.8,2.6,4.5 c0.6,1.7,0.8,3.4,0.8,5.2v1.2H37.1z M62.1,202.7c0-1.9-0.4-3.7-1-5.3c-0.6-1.6-1.5-3-2.5-4.1c-1.1-1.1-2.4-2-3.9-2.6 c-1.5-0.6-3.2-0.9-5-0.9c-2.2,0-4.1,0.5-5.7,1.4c-1.6,0.9-2.9,2.1-3.9,3.4c-1,1.4-1.8,2.8-2.2,4.3c-0.5,1.5-0.7,2.8-0.7,3.9H62.1z  M92.5,212.3c0,1.1,0.1,2.3,0.2,3.6c0.1,1.3,0.2,2.3,0.4,3.1h-1.4c-0.1-0.4-0.2-1-0.2-1.6c0-0.6-0.1-1.3-0.2-1.9 c-0.1-0.7-0.1-1.3-0.1-2c0-0.6,0-1.2,0-1.6h-0.2c-0.9,2.7-2.3,4.7-4.5,6c-2.1,1.3-4.4,2-6.8,2c-1.2,0-2.4-0.2-3.6-0.5 c-1.2-0.3-2.2-0.9-3.2-1.5c-0.9-0.7-1.7-1.6-2.3-2.6c-0.6-1.1-0.9-2.3-0.9-3.8c0-2.1,0.5-3.8,1.6-5.1c1.1-1.3,2.5-2.3,4.1-3 c1.6-0.7,3.4-1.2,5.3-1.4c1.9-0.2,3.6-0.3,5.1-0.3H91v-2.4c0-3.3-0.9-5.7-2.6-7.3c-1.8-1.5-4.1-2.3-6.9-2.3c-1.8,0-3.4,0.3-4.9,1 c-1.5,0.6-2.9,1.5-4.1,2.6l-0.8-1.1c1.4-1.2,2.9-2.1,4.7-2.7c1.7-0.6,3.5-0.9,5.1-0.9c3.4,0,6.1,0.9,8,2.6c2,1.7,2.9,4.5,2.9,8.2 V212.3z M91,202.9h-4.6c-1.6,0-3.4,0.1-5.2,0.3c-1.8,0.2-3.5,0.6-5,1.2c-1.5,0.6-2.7,1.5-3.7,2.6c-1,1.1-1.5,2.6-1.5,4.5 c0,1.4,0.3,2.5,0.8,3.5c0.5,0.9,1.2,1.7,2.1,2.2c0.8,0.6,1.8,1,2.8,1.2c1,0.3,2,0.4,2.9,0.4c2.2,0,4-0.4,5.5-1.2 c1.5-0.8,2.6-1.9,3.5-3.1c0.9-1.3,1.5-2.7,1.8-4.2c0.3-1.5,0.5-3,0.5-4.5V202.9z M129.3,170.3h1.4v48.8h-1.4v-8h-0.2 c-1.3,2.9-3.1,5.1-5.5,6.6c-2.4,1.5-5,2.3-7.8,2.3c-2.1,0-4.1-0.4-6-1.2c-1.8-0.8-3.4-1.9-4.7-3.3c-1.3-1.4-2.3-3.1-3.1-5 c-0.7-1.9-1.1-4-1.1-6.2c0-2.2,0.4-4.3,1.1-6.3c0.7-1.9,1.8-3.6,3.1-5c1.3-1.4,2.9-2.5,4.7-3.3c1.8-0.8,3.8-1.2,6-1.2 c2.8,0,5.5,0.8,7.8,2.3c2.4,1.5,4.2,3.7,5.5,6.7h0.2V170.3z M102.3,204.3c0,1.9,0.3,3.8,0.9,5.5c0.6,1.8,1.5,3.3,2.7,4.6 c1.2,1.3,2.6,2.4,4.2,3.1c1.7,0.8,3.5,1.2,5.6,1.2c2,0,3.8-0.4,5.5-1.2c1.7-0.8,3.1-1.8,4.3-3.1c1.2-1.3,2.1-2.8,2.8-4.6 c0.7-1.8,1-3.6,1-5.6s-0.3-3.8-1-5.6c-0.7-1.8-1.6-3.3-2.8-4.6c-1.2-1.3-2.6-2.4-4.3-3.1c-1.7-0.8-3.5-1.2-5.5-1.2 c-2.1,0-3.9,0.4-5.6,1.2c-1.7,0.8-3.1,1.9-4.2,3.2c-1.2,1.3-2.1,2.9-2.7,4.6C102.6,200.5,102.3,202.3,102.3,204.3z M140.1,203.9 c0,1.8,0.3,3.6,0.8,5.4c0.5,1.8,1.4,3.3,2.5,4.7c1.1,1.4,2.5,2.5,4.2,3.4c1.7,0.9,3.7,1.3,5.9,1.3c2.3,0,4.4-0.5,6.2-1.4 c1.8-0.9,3.4-2.3,4.7-4l1,0.9c-1.5,1.9-3.2,3.3-5.1,4.3c-2,1-4.2,1.5-6.8,1.5c-2.2,0-4.2-0.4-6-1.2c-1.8-0.8-3.4-1.9-4.7-3.3 c-1.3-1.4-2.3-3.1-3-5.1c-0.7-2-1.1-4.1-1.1-6.4c0-2.2,0.4-4.3,1.1-6.2c0.7-1.9,1.7-3.5,3-4.9c1.3-1.4,2.8-2.4,4.5-3.2 c1.7-0.8,3.6-1.1,5.6-1.1c2.3,0,4.4,0.4,6.1,1.2c1.7,0.8,3.2,1.9,4.3,3.2c1.1,1.3,2,2.8,2.6,4.5c0.6,1.7,0.8,3.4,0.8,5.2v1.2H140.1z  M165.2,202.7c0-1.9-0.4-3.7-1-5.3c-0.6-1.6-1.5-3-2.5-4.1c-1.1-1.1-2.4-2-3.9-2.6c-1.5-0.6-3.2-0.9-5-0.9c-2.2,0-4.2,0.5-5.7,1.4 c-1.6,0.9-2.9,2.1-3.9,3.4c-1,1.4-1.8,2.8-2.2,4.3c-0.5,1.5-0.7,2.8-0.7,3.9H165.2z M180.7,190.5c1.9-1.4,3.9-2,6.1-2 c0.2,0,0.4,0,0.6,0c0.2,0,0.4,0,0.6,0.1v1.2c-0.2,0-0.3-0.1-0.5-0.1c-0.2,0-0.3,0-0.4,0c-1.9,0-3.5,0.4-4.8,1.3 c-1.3,0.8-2.4,1.9-3.3,3.3c-0.9,1.4-1.5,2.9-1.9,4.5c-0.4,1.7-0.6,3.3-0.6,4.9v15.4h-1.4v-22.2c0-0.5,0-1.1,0-1.7 c0-0.7,0-1.4-0.1-2.1c0-0.7-0.1-1.4-0.1-2c0-0.6-0.1-1.2-0.1-1.6h1.4c0,0.4,0.1,1,0.1,1.6s0,1.3,0.1,2.1c0,0.8,0,1.5,0.1,2.2 c0,0.7,0,1.3,0,1.9h0.1C177.4,194.1,178.8,191.9,180.7,190.5z M211.7,211.3c0,1.3-0.3,2.5-0.8,3.6c-0.5,1.1-1.2,1.9-2.1,2.7 c-0.9,0.7-1.9,1.3-3.1,1.7c-1.2,0.4-2.4,0.6-3.7,0.6c-2.2,0-4.2-0.4-6-1.3c-1.8-0.8-3.3-2.1-4.4-3.7l1.2-0.8c2.1,3,5.2,4.5,9.3,4.5 c0.9,0,1.9-0.1,2.9-0.5c1-0.3,1.8-0.8,2.6-1.4c0.8-0.6,1.4-1.4,1.9-2.3c0.5-0.9,0.7-1.9,0.7-3.1c0-1.4-0.3-2.5-0.9-3.4 c-0.6-0.9-1.4-1.5-2.4-2.1c-0.9-0.5-2-0.9-3.1-1.3c-1.1-0.3-2.2-0.6-3.2-0.9c-1.1-0.3-2.1-0.6-3-1c-0.9-0.4-1.8-0.8-2.5-1.4 c-0.7-0.6-1.3-1.3-1.7-2.2c-0.4-0.9-0.6-1.9-0.6-3.2c0-1.3,0.3-2.4,0.8-3.4c0.5-0.9,1.2-1.7,2.1-2.4c0.9-0.6,1.8-1.1,2.9-1.4 c1.1-0.3,2.2-0.5,3.3-0.5c4,0,7.1,1.4,9.1,4.3l-1.2,0.7c-1-1.3-2.1-2.2-3.4-2.9c-1.2-0.6-2.8-0.9-4.5-0.9c-0.8,0-1.7,0.1-2.6,0.3 c-0.9,0.2-1.7,0.6-2.5,1.1c-0.8,0.5-1.4,1.2-1.9,2c-0.5,0.8-0.7,1.8-0.7,3c0,1.3,0.2,2.3,0.6,3.1c0.4,0.8,1,1.4,1.7,1.9 c0.7,0.5,1.6,0.9,2.6,1.2c1,0.3,2.2,0.6,3.4,0.9c1.2,0.3,2.3,0.7,3.4,1.1c1.1,0.4,2.1,0.9,2.9,1.5c0.8,0.6,1.5,1.4,2,2.3 C211.5,208.9,211.7,210,211.7,211.3z M5.7,3.3h6.4l16.6,38.3L45.4,3.3h6.1v45.7h-4.3V8.7h-0.1L29.6,48.9h-1.9L10.1,8.7H10v40.3H5.7 V3.3z M87.5,43.3c-1.5,2.3-3.4,3.9-5.6,4.9c-2.2,1-4.7,1.5-7.3,1.5c-2.3,0-4.3-0.4-6.2-1.2c-1.8-0.8-3.4-1.9-4.8-3.3 c-1.3-1.4-2.4-3.1-3.1-5c-0.7-1.9-1.1-4-1.1-6.4c0-2.2,0.4-4.3,1.1-6.2c0.7-1.9,1.8-3.5,3.1-4.9c1.3-1.4,2.9-2.5,4.7-3.3 c1.8-0.8,3.8-1.2,6-1.2c2.3,0,4.3,0.4,6,1.2c1.7,0.8,3.2,1.9,4.4,3.2s2.1,2.8,2.7,4.5c0.6,1.7,0.9,3.4,0.9,5.1V35h-25 c0,0.8,0.2,1.9,0.5,3.1c0.3,1.3,0.9,2.5,1.8,3.7c0.9,1.2,2,2.2,3.5,3.1c1.4,0.9,3.3,1.3,5.6,1.3c2,0,3.9-0.5,5.7-1.4 c1.8-0.9,3.3-2.2,4.3-3.9L87.5,43.3z M84.5,31.5c0-1.3-0.3-2.6-0.8-3.7c-0.5-1.2-1.3-2.2-2.2-3.1c-0.9-0.9-2-1.6-3.3-2.1 c-1.3-0.5-2.6-0.8-4-0.8c-2.1,0-3.9,0.4-5.3,1.3c-1.4,0.9-2.5,1.9-3.3,3c-0.8,1.1-1.4,2.2-1.7,3.3c-0.3,1.1-0.5,1.8-0.5,2.2H84.5z  M124.9,0.2h3.9v48.8h-3.9V0.2z M164.8,43.3c-1.5,2.3-3.4,3.9-5.6,4.9c-2.2,1-4.7,1.5-7.3,1.5c-2.3,0-4.3-0.4-6.2-1.2 c-1.8-0.8-3.4-1.9-4.8-3.3c-1.3-1.4-2.4-3.1-3.1-5c-0.7-1.9-1.1-4-1.1-6.4c0-2.2,0.4-4.3,1.1-6.2c0.7-1.9,1.8-3.5,3.1-4.9 c1.3-1.4,2.9-2.5,4.7-3.3s3.8-1.2,6-1.2c2.3,0,4.3,0.4,6,1.2c1.7,0.8,3.2,1.9,4.4,3.2s2.1,2.8,2.7,4.5c0.6,1.7,0.9,3.4,0.9,5.1V35 h-25c0,0.8,0.2,1.9,0.5,3.1c0.3,1.3,0.9,2.5,1.8,3.7c0.9,1.2,2,2.2,3.5,3.1c1.4,0.9,3.3,1.3,5.6,1.3c2,0,3.9-0.5,5.7-1.4 c1.8-0.9,3.3-2.2,4.3-3.9L164.8,43.3z M161.9,31.5c0-1.3-0.3-2.6-0.8-3.7c-0.5-1.2-1.3-2.2-2.2-3.1c-0.9-0.9-2-1.6-3.3-2.1 c-1.3-0.5-2.6-0.8-4-0.8c-2.1,0-3.9,0.4-5.3,1.3c-1.4,0.9-2.5,1.9-3.3,3c-0.8,1.1-1.4,2.2-1.7,3.3c-0.3,1.1-0.5,1.8-0.5,2.2H161.9z  M173.1,27.5c0-0.6,0-1.2-0.1-2c0-0.8-0.1-1.6-0.1-2.4s-0.1-1.6-0.1-2.3c0-0.7-0.1-1.3-0.1-1.6h3.9c0,1.1,0.1,2.2,0.1,3.2 c0,1,0.1,1.7,0.2,2c1-1.8,2.3-3.2,3.8-4.3c1.5-1.1,3.4-1.7,5.7-1.7c0.4,0,0.8,0,1.1,0.1c0.4,0.1,0.7,0.1,1.1,0.2l-0.5,3.8 c-0.5-0.2-1-0.3-1.5-0.3c-1.7,0-3.1,0.3-4.4,0.8c-1.2,0.5-2.2,1.3-3,2.2c-0.8,0.9-1.4,2.1-1.8,3.3c-0.4,1.3-0.6,2.6-0.6,4.1v16.3 h-3.9V27.5z M44.4,98c-2.2,3-4.7,5.1-7.6,6.4c-2.9,1.3-6,1.9-9.4,1.9c-3.5,0-6.7-0.6-9.6-1.8c-2.9-1.2-5.4-2.8-7.5-5S6.7,95,5.5,92 c-1.2-2.9-1.7-6.2-1.7-9.6c0-3.5,0.6-6.7,1.7-9.6c1.2-2.9,2.8-5.5,4.8-7.6c2.1-2.1,4.5-3.8,7.5-5c2.9-1.2,6.1-1.8,9.6-1.8 c3.1,0,6,0.5,8.7,1.6c2.7,1.1,5,2.9,7.1,5.5l-3.5,2.9c-1.4-2.2-3.2-3.7-5.5-4.7c-2.2-1-4.5-1.5-6.8-1.5c-3,0-5.6,0.5-8,1.5 c-2.4,1-4.4,2.5-6.1,4.3c-1.7,1.8-3,3.9-3.9,6.4c-0.9,2.5-1.4,5.1-1.4,7.9s0.5,5.5,1.4,7.9c0.9,2.5,2.2,4.6,3.9,6.4 c1.7,1.8,3.7,3.2,6.1,4.3c2.4,1,5.1,1.5,8,1.5c1.2,0,2.4-0.1,3.6-0.4c1.2-0.3,2.5-0.7,3.6-1.3c1.2-0.6,2.3-1.3,3.4-2.2 c1.1-0.9,2-1.9,2.8-3.2L44.4,98z M73,92.7c0,1.5,0,2.8,0,3.9c0,1.2,0.1,2.2,0.1,3.2c0,1,0.1,1.9,0.2,2.8s0.2,1.7,0.3,2.6h-3.6 c-0.3-1.5-0.4-3.1-0.4-4.8h-0.1c-1.1,1.9-2.5,3.4-4.2,4.3c-1.7,0.9-3.8,1.4-6.3,1.4c-1.3,0-2.6-0.2-3.8-0.5 c-1.2-0.3-2.4-0.8-3.4-1.5c-1-0.7-1.8-1.6-2.4-2.7c-0.6-1.1-0.9-2.5-0.9-4.1c0-2.3,0.6-4.1,1.7-5.4c1.2-1.3,2.6-2.3,4.3-3 c1.7-0.7,3.5-1.1,5.4-1.3c1.9-0.2,3.6-0.3,5.1-0.3h4.5v-1.8c0-2.6-0.8-4.4-2.4-5.5c-1.6-1.1-3.6-1.7-6-1.7c-3.4,0-6.5,1.1-9.1,3.4 l-2.3-2.6c1.4-1.4,3.2-2.4,5.3-3.1c2.1-0.7,4.1-1.1,6.1-1.1c3.6,0,6.5,0.8,8.6,2.5c2.2,1.7,3.2,4.4,3.2,8.2V92.7z M65.2,90.2 c-1.6,0-3.2,0.1-4.7,0.3c-1.5,0.2-2.9,0.6-4.1,1.1c-1.2,0.5-2.2,1.2-2.9,2.1c-0.7,0.9-1.1,1.9-1.1,3.2c0,0.9,0.2,1.7,0.6,2.4 s0.9,1.3,1.6,1.7c0.6,0.5,1.4,0.8,2.2,1c0.8,0.2,1.6,0.4,2.4,0.4c2.1,0,3.8-0.3,5.1-0.9c1.3-0.6,2.4-1.4,3.2-2.4 c0.8-1,1.3-2.1,1.6-3.3c0.3-1.2,0.5-2.5,0.5-3.7v-2H65.2z M82,83.8c0-0.6,0-1.2-0.1-2c0-0.8-0.1-1.6-0.1-2.4c0-0.8-0.1-1.6-0.1-2.3 c0-0.7-0.1-1.3-0.1-1.6h3.9c0,1.1,0.1,2.2,0.1,3.2c0,1,0.1,1.7,0.2,2H86c0.8-1.6,2.1-3,3.9-4.2c1.8-1.2,3.9-1.8,6.3-1.8 c2,0,3.8,0.5,5.4,1.5c1.6,1,2.8,2.7,3.5,4.9c0.9-2.2,2.4-3.9,4.2-4.9c1.9-1,3.8-1.5,5.9-1.5c2.3,0,4.2,0.4,5.7,1.1 c1.5,0.7,2.6,1.7,3.5,2.9c0.8,1.2,1.4,2.5,1.7,4.1c0.3,1.5,0.5,3.1,0.5,4.8v17.7h-3.9V87.7c0-1.2-0.1-2.4-0.3-3.5 c-0.2-1.1-0.6-2.2-1.1-3.1c-0.5-0.9-1.3-1.6-2.3-2.2c-1-0.5-2.2-0.8-3.8-0.8c-1.8,0-3.3,0.3-4.5,1c-1.2,0.7-2.1,1.5-2.7,2.5 c-0.7,1-1.1,2.2-1.4,3.4c-0.3,1.2-0.4,2.3-0.4,3.4v16.8h-3.9V87.3c0-2.8-0.5-5-1.5-6.6c-1-1.7-2.6-2.5-4.7-2.5c-1.4,0-2.8,0.2-4,0.7 c-1.3,0.5-2.4,1.2-3.3,2.3c-0.9,1-1.7,2.3-2.2,3.8c-0.5,1.5-0.8,3.3-0.8,5.4v14.9H82V83.8z M134.9,75.4h3.9v5.2h0.1 c0.6-1,1.4-1.9,2.3-2.7c0.9-0.8,1.9-1.4,2.9-1.9c1.1-0.5,2.2-0.9,3.3-1.1c1.2-0.2,2.3-0.4,3.4-0.4c2.3,0,4.4,0.4,6.3,1.2 c1.9,0.8,3.6,1.9,5,3.3c1.4,1.4,2.5,3.1,3.3,5c0.8,1.9,1.2,4,1.2,6.3c0,2.3-0.4,4.4-1.2,6.3c-0.8,1.9-1.9,3.6-3.3,5 c-1.4,1.4-3.1,2.5-5,3.3c-1.9,0.8-4,1.2-6.3,1.2c-1.1,0-2.3-0.1-3.4-0.4c-1.2-0.2-2.3-0.6-3.3-1.1c-1.1-0.5-2-1.1-2.9-1.9 c-0.9-0.8-1.7-1.6-2.3-2.7h-0.1v19.9h-3.9V75.4z M138.3,90.3c0,1.7,0.3,3.3,1,4.7s1.5,2.8,2.6,3.9c1.1,1.1,2.4,2,3.9,2.6 c1.5,0.6,3.1,1,4.9,1c1.8,0,3.4-0.3,4.9-1c1.5-0.6,2.7-1.5,3.7-2.6c1-1.1,1.8-2.4,2.4-3.9c0.5-1.5,0.8-3.1,0.8-4.7 c0-1.7-0.3-3.3-0.8-4.7c-0.5-1.5-1.3-2.8-2.4-3.9c-1-1.1-2.3-2-3.7-2.6c-1.5-0.6-3.1-1-4.9-1c-1.8,0-3.4,0.3-4.9,1 c-1.5,0.6-2.8,1.5-3.9,2.6c-1.1,1.1-2,2.4-2.6,3.9C138.7,87,138.3,88.6,138.3,90.3z M173,56.4h3.9v24.2h0.1c0.6-1,1.4-1.9,2.3-2.7 c0.9-0.8,1.9-1.4,2.9-1.9c1.1-0.5,2.2-0.9,3.3-1.1c1.2-0.2,2.3-0.4,3.4-0.4c2.3,0,4.4,0.4,6.3,1.2c1.9,0.8,3.6,1.9,5,3.3 c1.4,1.4,2.5,3.1,3.3,5c0.8,1.9,1.2,4,1.2,6.3c0,2.3-0.4,4.4-1.2,6.3c-0.8,1.9-1.9,3.6-3.3,5c-1.4,1.4-3.1,2.5-5,3.3 c-1.9,0.8-4,1.2-6.3,1.2c-1.1,0-2.3-0.1-3.4-0.4c-1.2-0.2-2.3-0.6-3.3-1.1c-1.1-0.5-2-1.1-2.9-1.9c-0.9-0.8-1.7-1.6-2.3-2.7h-0.1 v5.2H173V56.4z M176.5,90.3c0,1.7,0.3,3.3,1,4.7s1.5,2.8,2.6,3.9c1.1,1.1,2.4,2,3.9,2.6c1.5,0.6,3.1,1,4.9,1c1.8,0,3.4-0.3,4.9-1 c1.5-0.6,2.7-1.5,3.7-2.6c1-1.1,1.8-2.4,2.4-3.9c0.5-1.5,0.8-3.1,0.8-4.7c0-1.7-0.3-3.3-0.8-4.7c-0.5-1.5-1.3-2.8-2.4-3.9 c-1-1.1-2.3-2-3.7-2.6c-1.5-0.6-3.1-1-4.9-1c-1.8,0-3.4,0.3-4.9,1c-1.5,0.6-2.8,1.5-3.9,2.6c-1.1,1.1-2,2.4-2.6,3.9 C176.8,87,176.5,88.6,176.5,90.3z M238.3,99.6c-1.5,2.3-3.4,3.9-5.6,4.9s-4.7,1.5-7.3,1.5c-2.3,0-4.3-0.4-6.2-1.2 c-1.9-0.8-3.4-1.9-4.8-3.3c-1.3-1.4-2.4-3.1-3.1-5c-0.7-1.9-1.1-4-1.1-6.4c0-2.2,0.4-4.3,1.1-6.2c0.7-1.9,1.8-3.5,3.1-4.9 c1.3-1.4,2.9-2.5,4.7-3.3c1.8-0.8,3.8-1.2,6-1.2c2.3,0,4.3,0.4,6,1.2c1.7,0.8,3.2,1.8,4.4,3.2c1.2,1.3,2.1,2.8,2.7,4.5 c0.6,1.7,0.9,3.4,0.9,5.1v2.7h-25c0,0.8,0.2,1.9,0.5,3.1c0.3,1.3,0.9,2.5,1.8,3.7s2,2.2,3.5,3.1c1.4,0.9,3.3,1.3,5.6,1.3 c2,0,3.9-0.5,5.7-1.4c1.8-0.9,3.3-2.2,4.3-3.9L238.3,99.6z M235.3,87.8c0-1.3-0.3-2.6-0.8-3.7c-0.5-1.2-1.3-2.2-2.2-3.1 c-0.9-0.9-2-1.6-3.3-2.1c-1.3-0.5-2.6-0.8-4-0.8c-2.1,0-3.9,0.4-5.3,1.3c-1.4,0.9-2.5,1.9-3.3,3c-0.8,1.1-1.4,2.2-1.7,3.3 c-0.3,1.1-0.5,1.8-0.5,2.2H235.3z M247.2,56.4h3.9v48.8h-3.9V56.4z M261.5,56.4h3.9v48.8h-3.9V56.4z M97.8,63.3h4.4 c0,0.1,17.3-44.1,17.3-44.1h-4.1l-9.6,25.1l-9.9-25.1h-4.3l12.1,29.9C103.6,49.1,98.2,62.8,97.8,63.3z"/>
                	</svg>
	            </a>

	            <div class="burger color--black hover--gold">&#9776;</div>

            </div>

            <div class="grid__wrapper grid__wrapper--5 grid__wrapper--no-padding fade fade--up">

                <div class="grid__col grid__col--5">

					<h2 class="title title--medium title--light">
						<?= $nodeID->field_intro['und'][0]['value']; ?>
					</h2>

                </div>

            </div>

        </div>

    </section>

    <!-- ********** THOUGHT LEADERSHIP SECTION ********** -->
    <section class="section section--people fade fade--up">

		<div class="grid__row grid__row--margin-bottom">

		    <div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined">

				<h3 class="title title--xsmall">

					<?= $nodeID->title; ?>

		        </h3>

		        <p><?= $author; ?><br /><em><?= $day . ' ' . $month . ' ' . $year; ?></em></p>

		        <br />

		        <p class="no-tablet">

		            <br />
		            <a href="<?= base_path(); ?>insight" class="underlined">< Back to Insight</a>
		        </p>

		        

		    </div>

		    <div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined">

		    	<?php

		    		if( count($body) > 0) {

		    			print '<div class="grid__col grid__col--3">';

			    			print $body;

			    			print '<p class="no-desktop"><br /><a href="'.base_path().'connected" class="underlined">< Back to Connected</a></p>';

			    		print '</div>';

		    		}

		    		$filename = $nodeID->field_research_paper['und'][0]['filename'];
		    		$path = base_path() . 'sites/default/files/';

		    		if($filename !== '' && $filename !== NULL) {
		    			
		    			print '<a href="'.$path.$filename.'" target="_blank" class="underlined">Download PDF</a>';

		    		}

		    	?>

		    </div>

    </section>
    
</div>