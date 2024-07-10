<?php
class Bucket_List_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        ob_start();
        www_get_template_part( 'template-parts/content', 'bucket', array(
            'title' => $item->title,
            'description' => get_field('bucket_description', $item->ID),
            'link' => $item->url
        ));
        $output .= ob_get_clean();
    }
}