<?php
class Bucket_List_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $object = $item->object;
        $type = $item->type;
        $category_id = $item->object_id;
        if ($object == 'category') {
            $category = get_category($category_id);
            ob_start();
            www_get_template_part( 'template-parts/content', 'bucket', 
                array( 
                    'category_link' => get_category_link($category_id),
                    'category_name' => $category->name,
                    'category_description' => $category->description
                ) 
            );
            $output .= ob_get_clean();
        } else {
            parent::start_el($output, $item, $depth, $args, $id);
        }
    }
}