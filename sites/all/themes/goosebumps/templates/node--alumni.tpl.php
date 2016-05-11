<?php 

$nodeID = node_load($node->nid);

global $user;

if ( $user->uid ):

?>

<!-- ********** CONTAINER ********** -->
<div class="container">

	<!-- ********** INTRO SECTION ********** -->
    <section class="section section--intro">

        <div class="grid__row"> 

            <div class="grid__wrapper grid__wrapper--2 grid__wrapper--no-padding">

	            <a href="<?= base_path(); ?>">
	                <svg class="logo-main" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 393.2 270.7" xml:space="preserve"><path class="st1" d="M7.3,3.4h6.9l18,41.5l18-41.5h6.6v49.5h-4.6V9.2h-0.1L33.2,52.9h-2L12,9.2h-0.1v43.6H7.3V3.4z M95.9,46.8 c-1.6,2.5-3.6,4.2-6.1,5.3c-2.4,1.1-5,1.6-7.9,1.6c-2.5,0-4.7-0.4-6.7-1.3c-2-0.8-3.7-2-5.2-3.5c-1.4-1.5-2.6-3.3-3.3-5.4 c-0.8-2.1-1.2-4.4-1.2-6.9c0-2.4,0.4-4.7,1.2-6.7c0.8-2.1,1.9-3.8,3.4-5.4c1.4-1.5,3.1-2.7,5.1-3.6c2-0.9,4.1-1.3,6.5-1.3 c2.5,0,4.7,0.4,6.5,1.3c1.9,0.9,3.5,2,4.8,3.4c1.3,1.4,2.2,3,2.9,4.9c0.7,1.8,1,3.7,1,5.5v2.9H69.7c0,0.9,0.2,2,0.5,3.4 c0.3,1.4,1,2.7,1.9,4c0.9,1.3,2.2,2.4,3.7,3.4c1.6,0.9,3.6,1.4,6.1,1.4c2.1,0,4.2-0.5,6.2-1.5c2-1,3.5-2.4,4.6-4.2L95.9,46.8z  M92.7,34c0-1.4-0.3-2.8-0.9-4.1c-0.6-1.3-1.4-2.4-2.4-3.3c-1-1-2.2-1.7-3.6-2.3c-1.4-0.6-2.8-0.8-4.4-0.8c-2.3,0-4.2,0.5-5.7,1.4 c-1.5,0.9-2.7,2-3.6,3.2c-0.9,1.2-1.5,2.4-1.9,3.5c-0.4,1.1-0.6,1.9-0.6,2.3H92.7z M136.5,0h4.2v52.9h-4.2V0z M179.7,46.8 c-1.6,2.5-3.6,4.2-6.1,5.3c-2.4,1.1-5,1.6-7.9,1.6c-2.5,0-4.7-0.4-6.7-1.3c-2-0.8-3.7-2-5.2-3.5c-1.4-1.5-2.6-3.3-3.3-5.4 c-0.8-2.1-1.2-4.4-1.2-6.9c0-2.4,0.4-4.7,1.2-6.7c0.8-2.1,1.9-3.8,3.4-5.4c1.4-1.5,3.1-2.7,5.1-3.6c2-0.9,4.1-1.3,6.5-1.3 c2.5,0,4.7,0.4,6.5,1.3c1.9,0.9,3.5,2,4.8,3.4s2.2,3,2.9,4.9c0.7,1.8,1,3.7,1,5.5v2.9h-27.1c0,0.9,0.2,2,0.5,3.4 c0.3,1.4,1,2.7,1.9,4c0.9,1.3,2.2,2.4,3.7,3.4c1.6,0.9,3.6,1.4,6.1,1.4c2.1,0,4.2-0.5,6.2-1.5c2-1,3.5-2.4,4.6-4.2L179.7,46.8z  M176.5,34c0-1.4-0.3-2.8-0.9-4.1c-0.6-1.3-1.4-2.4-2.4-3.3c-1-1-2.2-1.7-3.6-2.3c-1.4-0.6-2.8-0.8-4.4-0.8c-2.3,0-4.2,0.5-5.7,1.4 c-1.5,0.9-2.7,2-3.6,3.2c-0.9,1.2-1.5,2.4-1.9,3.5c-0.4,1.1-0.6,1.9-0.6,2.3H176.5z M188.7,29.7c0-0.6,0-1.3-0.1-2.2 c0-0.9-0.1-1.7-0.1-2.6c0-0.9-0.1-1.7-0.1-2.5c0-0.8-0.1-1.4-0.1-1.8h4.2c0,1.2,0.1,2.4,0.1,3.5c0,1.1,0.1,1.8,0.2,2.2 c1.1-1.9,2.4-3.5,4.1-4.7c1.7-1.2,3.7-1.8,6.2-1.8c0.4,0,0.8,0,1.2,0.1c0.4,0.1,0.8,0.2,1.2,0.2l-0.5,4.1c-0.6-0.2-1.1-0.3-1.6-0.3 c-1.8,0-3.4,0.3-4.7,0.9c-1.3,0.6-2.4,1.4-3.3,2.4c-0.9,1-1.5,2.2-1.9,3.6s-0.6,2.9-0.6,4.4v17.6h-4.2V29.7z M49.2,106.1 c-2.4,3.2-5.1,5.5-8.3,6.9c-3.1,1.4-6.5,2.1-10.1,2.1c-3.8,0-7.2-0.6-10.4-1.9c-3.1-1.3-5.8-3.1-8.1-5.4c-2.2-2.3-4-5.1-5.2-8.3 c-1.3-3.2-1.9-6.7-1.9-10.5c0-3.8,0.6-7.2,1.9-10.4c1.3-3.2,3-5.9,5.2-8.2c2.2-2.3,4.9-4.1,8.1-5.4c3.1-1.3,6.6-2,10.4-2 c3.4,0,6.5,0.6,9.4,1.8c2.9,1.2,5.5,3.2,7.7,6L44.1,74c-1.5-2.3-3.5-4-5.9-5.1c-2.4-1.1-4.9-1.6-7.4-1.6c-3.2,0-6.1,0.6-8.7,1.7 c-2.6,1.1-4.8,2.7-6.6,4.6c-1.8,2-3.2,4.3-4.2,6.9c-1,2.7-1.5,5.5-1.5,8.6s0.5,5.9,1.5,8.6c1,2.7,2.4,5,4.2,6.9 c1.8,2,4,3.5,6.6,4.6c2.6,1.1,5.5,1.7,8.7,1.7c1.3,0,2.6-0.2,3.9-0.5c1.4-0.3,2.7-0.8,4-1.4c1.3-0.6,2.5-1.4,3.7-2.4 c1.2-1,2.2-2.1,3.1-3.5L49.2,106.1z M80.2,100.3c0,1.6,0,3,0,4.3c0,1.3,0.1,2.4,0.1,3.5c0,1.1,0.1,2.1,0.2,3 c0.1,0.9,0.2,1.9,0.3,2.8h-3.9c-0.3-1.6-0.4-3.3-0.4-5.2h-0.1c-1.2,2.1-2.7,3.6-4.5,4.6c-1.8,1-4.1,1.5-6.8,1.5 c-1.4,0-2.8-0.2-4.1-0.5c-1.4-0.3-2.6-0.9-3.6-1.7c-1.1-0.8-1.9-1.8-2.6-3c-0.7-1.2-1-2.7-1-4.4c0-2.5,0.6-4.4,1.9-5.9 c1.3-1.4,2.8-2.5,4.7-3.3c1.8-0.7,3.8-1.2,5.9-1.4c2.1-0.2,3.9-0.3,5.5-0.3h4.9v-2c0-2.8-0.9-4.8-2.6-6c-1.7-1.2-3.9-1.8-6.5-1.8 c-3.7,0-7,1.2-9.9,3.6L55,85.2c1.5-1.5,3.5-2.6,5.7-3.4c2.3-0.8,4.5-1.2,6.6-1.2c3.9,0,7,0.9,9.4,2.8c2.3,1.8,3.5,4.8,3.5,8.9 V100.3z M71.8,97.6c-1.8,0-3.5,0.1-5.1,0.4c-1.7,0.2-3.1,0.6-4.5,1.2c-1.3,0.6-2.4,1.3-3.2,2.2c-0.8,0.9-1.2,2.1-1.2,3.5 c0,1,0.2,1.9,0.7,2.6c0.4,0.8,1,1.4,1.7,1.9s1.5,0.9,2.3,1.1s1.7,0.4,2.6,0.4c2.2,0,4.1-0.3,5.5-1c1.4-0.7,2.6-1.5,3.5-2.6 c0.9-1,1.5-2.2,1.8-3.6s0.5-2.7,0.5-4v-2.2H71.8z M90,90.6c0-0.6,0-1.3-0.1-2.2c0-0.9-0.1-1.7-0.1-2.6c0-0.9-0.1-1.7-0.1-2.5 c0-0.8-0.1-1.4-0.1-1.8h4.2c0,1.2,0.1,2.4,0.1,3.5c0,1.1,0.1,1.8,0.2,2.2h0.2c0.8-1.8,2.2-3.3,4.2-4.6c2-1.3,4.2-1.9,6.9-1.9 c2.1,0,4.1,0.5,5.9,1.6c1.8,1.1,3.1,2.9,3.8,5.4c1-2.4,2.6-4.2,4.6-5.3c2-1.1,4.2-1.7,6.4-1.7c2.5,0,4.6,0.4,6.2,1.2 c1.6,0.8,2.8,1.8,3.7,3.1c0.9,1.3,1.5,2.8,1.9,4.4c0.4,1.7,0.5,3.4,0.5,5.2v19.2h-4.2v-19c0-1.3-0.1-2.6-0.3-3.8 c-0.2-1.2-0.6-2.3-1.2-3.3c-0.6-1-1.4-1.8-2.4-2.3c-1-0.6-2.4-0.9-4.1-0.9c-2,0-3.6,0.4-4.8,1.1c-1.3,0.7-2.2,1.6-3,2.8 c-0.7,1.1-1.2,2.3-1.5,3.6c-0.3,1.3-0.5,2.5-0.5,3.7v18.2h-4.2V94.4c0-3-0.5-5.4-1.6-7.2c-1.1-1.8-2.8-2.7-5.1-2.7 c-1.5,0-3,0.3-4.4,0.8c-1.4,0.5-2.6,1.4-3.6,2.4c-1,1.1-1.8,2.5-2.4,4.1c-0.6,1.7-0.9,3.6-0.9,5.8v16.2H90V90.6z M147.3,81.5h4.2 v5.7h0.1c0.7-1.1,1.5-2.1,2.4-2.9c1-0.8,2-1.5,3.2-2c1.1-0.5,2.3-0.9,3.6-1.2c1.3-0.3,2.5-0.4,3.7-0.4c2.5,0,4.7,0.4,6.8,1.3 c2.1,0.8,3.9,2,5.4,3.5c1.5,1.5,2.7,3.3,3.5,5.4c0.8,2.1,1.3,4.3,1.3,6.8c0,2.5-0.4,4.7-1.3,6.8c-0.8,2.1-2,3.9-3.5,5.4 c-1.5,1.5-3.3,2.7-5.4,3.5c-2.1,0.8-4.3,1.3-6.8,1.3c-1.2,0-2.4-0.1-3.7-0.4c-1.3-0.3-2.5-0.7-3.6-1.2c-1.1-0.5-2.2-1.2-3.2-2 c-1-0.8-1.8-1.8-2.4-2.9h-0.1v21.6h-4.2V81.5z M151,97.7c0,1.8,0.3,3.5,1,5.1s1.7,3,2.9,4.2c1.2,1.2,2.6,2.1,4.3,2.8 c1.6,0.7,3.4,1,5.3,1c2,0,3.7-0.4,5.3-1c1.6-0.7,2.9-1.6,4.1-2.8c1.1-1.2,2-2.6,2.6-4.2c0.6-1.6,0.9-3.3,0.9-5.1 c0-1.8-0.3-3.5-0.9-5.1c-0.6-1.6-1.4-3-2.6-4.2c-1.1-1.2-2.5-2.1-4.1-2.8c-1.6-0.7-3.4-1-5.3-1c-1.9,0-3.7,0.4-5.3,1 c-1.6,0.7-3.1,1.6-4.3,2.8c-1.2,1.2-2.2,2.6-2.9,4.2S151,95.9,151,97.7z M188.6,61h4.2v26.2h0.1c0.7-1.1,1.5-2.1,2.4-2.9 c1-0.8,2-1.5,3.2-2c1.1-0.5,2.3-0.9,3.6-1.2c1.3-0.3,2.5-0.4,3.7-0.4c2.5,0,4.7,0.4,6.8,1.3c2.1,0.8,3.9,2,5.4,3.5 c1.5,1.5,2.7,3.3,3.5,5.4c0.8,2.1,1.3,4.3,1.3,6.8c0,2.5-0.4,4.7-1.3,6.8c-0.8,2.1-2,3.9-3.5,5.4c-1.5,1.5-3.3,2.7-5.4,3.5 c-2.1,0.8-4.3,1.3-6.8,1.3c-1.2,0-2.4-0.1-3.7-0.4c-1.3-0.3-2.5-0.7-3.6-1.2c-1.1-0.5-2.2-1.2-3.2-2c-1-0.8-1.8-1.8-2.4-2.9h-0.1 v5.7h-4.2V61z M192.4,97.7c0,1.8,0.4,3.5,1,5.1s1.7,3,2.9,4.2c1.2,1.2,2.6,2.1,4.3,2.8c1.6,0.7,3.4,1,5.3,1c2,0,3.7-0.4,5.3-1 c1.6-0.7,2.9-1.6,4.1-2.8c1.1-1.2,2-2.6,2.6-4.2c0.6-1.6,0.9-3.3,0.9-5.1c0-1.8-0.3-3.5-0.9-5.1c-0.6-1.6-1.4-3-2.6-4.2 c-1.1-1.2-2.5-2.1-4.1-2.8c-1.6-0.7-3.4-1-5.3-1c-1.9,0-3.7,0.4-5.3,1c-1.6,0.7-3.1,1.6-4.3,2.8c-1.2,1.2-2.2,2.6-2.9,4.2 S192.4,95.9,192.4,97.7z M259.4,107.8c-1.6,2.5-3.6,4.2-6.1,5.3c-2.4,1.1-5,1.6-7.9,1.6c-2.5,0-4.7-0.4-6.7-1.3 c-2-0.8-3.7-2-5.2-3.5c-1.4-1.5-2.6-3.3-3.3-5.4c-0.8-2.1-1.2-4.4-1.2-6.9c0-2.4,0.4-4.7,1.2-6.7c0.8-2.1,1.9-3.8,3.4-5.4 c1.4-1.5,3.1-2.7,5.1-3.6c2-0.9,4.1-1.3,6.5-1.3c2.5,0,4.7,0.4,6.5,1.3c1.9,0.9,3.5,2,4.8,3.4c1.3,1.4,2.2,3,2.9,4.9 c0.7,1.8,1,3.7,1,5.5v2.9h-27.1c0,0.9,0.2,2,0.5,3.4c0.3,1.4,1,2.7,1.9,4c0.9,1.3,2.2,2.4,3.7,3.4c1.6,0.9,3.6,1.4,6.1,1.4 c2.1,0,4.2-0.5,6.2-1.5c2-1,3.5-2.4,4.6-4.2L259.4,107.8z M256.2,95c0-1.4-0.3-2.8-0.9-4.1c-0.6-1.3-1.4-2.4-2.4-3.3 c-1-1-2.2-1.7-3.6-2.3s-2.8-0.8-4.4-0.8c-2.3,0-4.2,0.5-5.7,1.4c-1.5,0.9-2.7,2-3.6,3.2c-0.9,1.2-1.5,2.4-1.9,3.5 c-0.4,1.1-0.6,1.9-0.6,2.3H256.2z M269,61h4.2v52.9H269V61z M284.5,61h4.2v52.9h-4.2V61z M107.1,68.4h4.8 c0,0.1,18.7-47.8,18.7-47.8h-4.5l-10.4,27.2L105,20.6h-4.7L113.4,53C113.4,53,107.5,67.9,107.1,68.4z M43.6,192.5l-5.9-14.2H9 l-6.1,14.2H1.3L22.7,143h2l20.6,49.5H43.6z M23.6,144L9.6,177h27.7L23.6,144z M53.3,192.5v-52.8h1.5v52.8H53.3z M90.5,188.1 c-0.9,1.2-1.9,2.2-3,3c-1.1,0.8-2.3,1.4-3.6,1.8c-1.3,0.4-2.7,0.6-4.1,0.6c-2.2,0-4.1-0.4-5.6-1.2s-2.7-1.8-3.6-3.1 c-0.9-1.3-1.5-2.8-1.9-4.4c-0.4-1.6-0.6-3.3-0.6-5v-19.4h1.5v19.3c0,1.4,0.1,2.8,0.4,4.2c0.3,1.5,0.8,2.8,1.6,4 c0.8,1.2,1.8,2.2,3.1,3c1.3,0.8,2.9,1.2,5,1.2c1.8,0,3.4-0.4,5-1.1c1.6-0.7,2.9-1.8,4.1-3.1c1.1-1.4,2-3,2.7-4.9 c0.7-1.9,1-4.1,1-6.6v-16.1h1.5v24c0,0.5,0,1.1,0,1.9c0,0.7,0,1.5,0.1,2.3c0,0.8,0.1,1.5,0.1,2.2c0,0.7,0.1,1.3,0.1,1.7H93 c0-0.5-0.1-1-0.1-1.7c0-0.7,0-1.5-0.1-2.3c0-0.8,0-1.6-0.1-2.4c0-0.8,0-1.5,0-2.1h-0.1C92,185.5,91.3,186.9,90.5,188.1z M133,169.2 c0.9-3.2,2.5-5.6,4.8-7.3c2.2-1.7,4.8-2.6,7.6-2.6c2.1,0,4,0.4,5.4,1.2c1.5,0.8,2.6,1.8,3.5,3.1c0.9,1.3,1.5,2.8,1.9,4.4 c0.4,1.6,0.6,3.3,0.6,5v19.4h-1.5v-19.3c0-1.3-0.2-2.7-0.5-4.2c-0.3-1.5-0.8-2.8-1.6-4.1c-0.7-1.2-1.7-2.2-3-3 c-1.3-0.8-2.8-1.2-4.8-1.2c-1.7,0-3.2,0.4-4.7,1.1c-1.5,0.7-2.8,1.8-3.8,3.1c-1.1,1.4-2,3-2.6,4.9c-0.7,1.9-1,4.1-1,6.6v16.1h-1.5 v-19.3c0-1.3-0.1-2.7-0.4-4.2c-0.3-1.5-0.7-2.8-1.4-4.1c-0.7-1.2-1.7-2.2-2.9-3c-1.2-0.8-2.8-1.2-4.7-1.2c-1.7,0-3.2,0.4-4.7,1.1 c-1.5,0.7-2.8,1.8-3.8,3.1c-1.1,1.4-2,3-2.6,4.9c-0.6,1.9-0.9,4.1-0.9,6.6v16.1h-1.5v-24c0-0.5,0-1.1,0-1.9c0-0.7,0-1.5-0.1-2.3 c0-0.8-0.1-1.5-0.1-2.2c0-0.7-0.1-1.3-0.1-1.7h1.5c0,0.5,0.1,1,0.1,1.7s0,1.5,0.1,2.3c0,0.8,0,1.6,0.1,2.4c0,0.8,0,1.5,0,2.1h0.1 c0.5-1.5,1.1-2.8,2-4c0.8-1.2,1.8-2.2,2.8-3c1-0.8,2.2-1.4,3.4-1.9c1.2-0.4,2.5-0.6,3.8-0.6c1.7,0,3.1,0.3,4.4,0.8 c1.2,0.5,2.3,1.2,3.1,2.1c0.8,0.9,1.5,1.9,2,3.1c0.5,1.2,0.9,2.5,1.1,3.9H133z M174.1,164.8c0.9-1.2,1.9-2.2,3-3s2.3-1.4,3.6-1.9 c1.3-0.4,2.7-0.6,4.1-0.6c2.2,0,4.1,0.4,5.6,1.2c1.5,0.8,2.7,1.8,3.6,3.1c0.9,1.3,1.5,2.8,1.9,4.4c0.4,1.6,0.6,3.3,0.6,5v19.4h-1.5 v-19.3c0-1.3-0.1-2.7-0.4-4.2c-0.3-1.5-0.8-2.8-1.6-4.1c-0.8-1.2-1.8-2.2-3.1-3c-1.3-0.8-3-1.2-5-1.2c-1.8,0-3.4,0.4-5,1.1 c-1.6,0.7-2.9,1.8-4.1,3.1c-1.1,1.4-2.1,3-2.7,4.9c-0.7,1.9-1,4.1-1,6.6v16.1h-1.5v-24c0-0.5,0-1.1,0-1.9c0-0.7,0-1.5-0.1-2.3 c0-0.8-0.1-1.5-0.1-2.2c0-0.7-0.1-1.3-0.1-1.7h1.5c0,0.5,0.1,1,0.1,1.7s0,1.5,0.1,2.3c0,0.8,0,1.6,0.1,2.4c0,0.8,0,1.5,0,2.1h0.1 C172.5,167.3,173.2,166,174.1,164.8z M210.6,148.3c-0.4,0-0.8-0.2-1.1-0.5c-0.3-0.3-0.5-0.8-0.5-1.3c0-0.5,0.2-0.9,0.5-1.3 s0.7-0.5,1.1-0.5c0.4,0,0.8,0.2,1.1,0.5c0.3,0.3,0.5,0.7,0.5,1.3c0,0.6-0.2,1-0.5,1.3C211.3,148.1,211,148.3,210.6,148.3z  M209.8,192.5v-32.2h1.5v32.2H209.8z"/></svg>
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



    <!-- ********** FAQS SECTION ********** -->
    <section class="section section--people fade fade--up">

        <div class="grid__row grid__row--margin-bottom">

            <div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined">

                <h3 class="title title--xsmall">
                    FAQs
                </h3>

            </div>

            <div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined">

                <?php

                    $faqs = field_get_items('node', $nodeID, 'field_faqs');

                    foreach ($faqs as $faq):

                        $fc = field_collection_field_get_entity($faq);

                        $question = $fc->field_question['und']['0']['value'];
                        $answer = $fc->field_answer['und']['0']['value'];

                ?>

                        <div class="grid__row grid__row--person">

                            <div class="grid__col grid__col--2 alumni-faq__question title title--xsmall title--light color--black">

                                <?= $question; ?><!-- <span class="alumni-faq__arrow"></span> -->

                            </div>

                            <div class="grid__col grid__col--3 alumni-faq__answer">

                                <?= $answer; ?>

                            </div>

                        </div>

                    <?php

                        endforeach;

                    ?>

                </div>

            </div>


    </section>



    <!-- ********** FACTSHEET SECTION ********** -->
    <section class="section section--people fade fade--up">

    	<div class="grid__row grid__row--margin-bottom">

    		<div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined">

    			<h3 class="title title--xsmall">
    				Factsheets
    			</h3>

    		</div>

    		<div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined">

    			<div class="grid__col grid__col--5">

    				<?php

    					$factsheets = $nodeID->field_factsheets['und'];

    					foreach ($factsheets as $key => $factsheet):

    						$description = $factsheet['description'];
    						$filename = $factsheet['filename'];
    				?>

    							<div class="grid__col grid__col--2">

                                    <a href="<?= base_path(); ?>sites/default/files/<?= $filename; ?>" target="_blank" class="color--black hover--gold underlined alumni-download">
                                        <?= $description; ?>
                                    </a>

                                </div>

    				<?php

    					endforeach;

    				?>

    			</div>

    		</div>

    	</div>

    </section>


    
    <!-- ********** USEFUL DOCUMENTS SECTION ********** -->
    <section class="section section--people fade fade--up">

    	<div class="grid__row grid__row--margin-bottom">

    		<div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined">

    			<h3 class="title title--xsmall">
    				Useful Documents
    			</h3>

    		</div>

    		<div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined">

    			<div class="grid__col grid__col--5">

    				<?php

    					$usefuldocuments = $nodeID->field_useful_documents['und'];

    					foreach ($usefuldocuments as $key => $usefuldocument):

    						$description = $usefuldocument['description'];
    						$filename = $usefuldocument['filename'];
    				?>

    							<div class="grid__col grid__col--2">

    								<a href="<?= base_path(); ?>sites/default/files/<?= $filename; ?>" target="_blank" class="color--black hover--gold underlined alumni-download">
    									<?= $description; ?>
    								</a>

    							</div>


    				<?php

    					endforeach;

    				?>

    			</div>

    		</div>

    	</div>

    </section>

    

    <!-- ********** RESEARCH DOCUMENTS SECTION ********** -->
    <section class="section section--people fade fade--up">

    	<div class="grid__row grid__row--margin-bottom">

    		<div class="grid__wrapper grid__wrapper--2 grid__wrapper--overlined">

    			<h3 class="title title--xsmall">
    				Research Documents
    			</h3>

    		</div>

    		<div class="grid__wrapper grid__wrapper--5 grid__wrapper--overlined">

    			<div class="grid__col grid__col--5">

    				<?php

    					$researchdocuments = $nodeID->field_research_documents['und'];

    					foreach ($researchdocuments as $key => $researchdocument):

    						$description = $researchdocument['description'];
    						$filename = $researchdocument['filename'];
    				?>

    							<div class="grid__col grid__col--2">

                                    <a href="<?= base_path(); ?>sites/default/files/<?= $filename; ?>" target="_blank" class="color--black hover--gold underlined alumni-download">
                                        <?= $description; ?>
                                    </a>

                                </div>


    				<?php

    					endforeach;

    				?>

    			</div>

    		</div>

    	</div>

    </section>
    
</div>

<?php else: ?>

	<!-- ********** CONTAINER ********** -->
	<div class="container">

	    <section class="section section--intro">

	        <div class="grid__row"> 

	            <div class="grid__wrapper grid__wrapper--2 grid__wrapper--no-padding">

		            <a href="<?= base_path(); ?>">
		                <svg class="logo-main" viewBox="0 0 112.3 97.74">
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

	            </div>

	            <div class="grid__wrapper grid__wrapper--5 grid__wrapper--no-padding fade fade--up">

	                <div class="grid__col grid__col--2">

	                	<p>Our graduates enjoy 24-hour access to a wealth of specialist coaching resources and professional development tools.</p>

	                	<br /><br />

						<?php print drupal_render(drupal_get_form('user_login')); ?>

						<br /><br />

						<p>If you have forgotten your password <a href="<?= base_path(); ?>user/password" class="color--gold">click here</a> or to register a new account <a href="<?= base_path(); ?>user/register" class="color--gold">click here</a></p>

                        <p>If you are not a graduate and would like to apply, please contact <a href="mailto:info@meylercampbell.com" class="color--gold">info@meylercampbell.com</a></p>

	                </div>

	            </div>

	        </div>

	    </section>
	    
	</div>

<?php endif; ?>

