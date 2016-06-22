<?php
/**
  * Template Name: Dynamic Content
  */

get_header();
the_post();
?>

<?php
// check if the flexible content field has rows of data
if (have_rows('dynamic_content')):
    //var_dump(the_row('content'));
    // loop through the rows of data
    while (have_rows('dynamic_content')) : the_row();
        $layout = get_row_layout();
        // if layout is general content then get the relevant code snippet from partial folder
        if ($layout == 'general_content') {
            get_template_part('partial/general_content');
        // if layout is code snippet then get the relevant code snippet from partial folder
        } elseif ($layout == 'code_snippet') {
            get_template_part('partial/code_snippet');
        // if layout is content with background then get the relevant code snippet from partial folder
        } elseif ($layout == 'content_with_background') {
            get_template_part('partial/content_with_background');
        // if layout is gallery then get the relevant code snippet from partial folder
        } elseif ($layout == 'gallery') {
            get_template_part('partial/gallery');
        }
        //We have the ability to add as many of these elseif statements as we want.
    endwhile;
endif;
?>

<? get_footer() ?>
