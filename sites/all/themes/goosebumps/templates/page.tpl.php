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
                &nbsp;
            </div>

            <div class="grid__wrapper grid__wrapper--5">

                <?php

                    $tree = menu_tree_all_data('main-menu');
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
