<?php

function admin_my_enqueue() {
    wp_enqueue_style('CustomFieldStyle', get_template_directory_uri() . '/assets/css/customFields.css', array(), '1.0.0', 'all');
    // wp_enqueue_script('CustomFieldScript', get_template_directory_uri() . '/assets/js/customFields.js', array(), '1.0.0', true);
}
add_action('admin_enqueue_scripts', 'admin_my_enqueue');


$metaboxes = array(
    'terrain' => array(
        'title'         => 'Terrain Information',
        'applicableto'  => 'terrain',
        'location'      => 'normal',
        'priority'      => 'high',
        'fields'        => array(
            'title'         => array(
                'title'         => 'Title for Terrain Page',
                'type'          => 'text',
            ),
            'bodyHeader'        => array(
                'title'         => 'Subheader for body text',
                'type'          => 'text'
            ),
            'bodyText'         => array(
                'title'         => 'Content for body text',
                'type'          => 'text'
            ),
            'imageText'         => array(
                'title'         => 'Content for image text',
                'type'          => 'text'
            )
        )
    )
);

function add_custom_fields(){
    global $metaboxes;
    if(! empty($metaboxes) ){
        foreach($metaboxes as $id => $metabox){
            // add_meta_box( string $id, string $title, callable $callback, string|array|WP_Screen $screen = null, string $context = 'advanced', string $priority = 'default', array $callback_args = null )
            add_meta_box($id, $metabox['title'], 'show_metaboxes', $metabox['applicableto'], $metabox['location'], $metabox['priority'], $id);
        }
    }
}
add_action('admin_init', 'add_custom_fields');



function show_metaboxes($post, $args){
    global $metaboxes;
    $fields = $metaboxes[$args['id']]['fields'];
    $customValues = get_post_custom($post->ID);
    $output = '<input type="hidden" name="post_format_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'">';
    if(! empty($fields)){
        foreach ($fields as $id => $field) {
            switch($field['type']){
                case 'text':
                    $output .= '<label for="'.$id.'" class="customLabel">'.$field['title'].'</label>';
                    $output .= '<p>'.$field['description'].'</p>';
                    $output .= '<input type="text" name="'.$id.'" class="customField" value="'.$customValues[$id][0].'"><br><br><br>';
                break;
                case 'textarea':
                    $output .= '<label for="'.$id.'" class="customLabel">'.$field['title'].'</label>';
                    $output .= '<p>'.$field['description'].'</p>';
                    $output .= '<textarea type="text" name="'.$id.'" class="customField-textarea" value="'.$customValues[$id][0].'"></textarea><br><br><br>';
                break;
                case 'number':
                    $output .= '<label for="'.$id.'" class="customLabel">'.$field['title'].'</label>';
                    $output .= '<p>'.$field['description'].'</p>';
                    $output .= '<input type="number" step="any" name="'.$id.'" class="customField" value="'.$customValues[$id][0].'"><br><br><br>';
                break;
                case 'select':
                    $output .= '<label class="customLabel">'.$field['title'].'</label><br>';
                    $output .= '<select name="'.$id.'"><option>Choose an Option</option>';
                    $options = $field['options'];
                    foreach ($options as $option) {
                        $output .= '<option value="'.$option.'">'.$option.'</option>';
                    }
                    $output .= '</select>';
                break;
                case 'email':
                    $output .= '<label class="customLabel">'.$field['title'].'</label>';
                    $output .= '<input type="email" name="'.$id.'" class="customField" value="'.$customValues[$id][0].'">';
                break;
                default:
                    $output .= '<label class="customLabel">'.$field['title'].'</label>';
                    $output .= '<input type="text" name="'.$id.'">';
                break;
            }
        }
    }
    echo $output;
}




function save_metaboxes($postID){
    global $metaboxes;
    if(! wp_verify_nonce( $_POST['post_format_meta_box_nonce'], basename(__FILE__) )){
        return $postID;
    }
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return $postID;
    }
    if($_POST['post_type'] == 'page'){
        if(! current_user_can('edit_page', $postID) ){
            return $postID;
        }
    } elseif(! current_user_can('edit_page', $postID) ){
        return $postID;
    }
    $post_type = get_post_type();
    foreach($metaboxes as $id => $metabox){
        if( $metabox['applicableto'] == $post_type ){
            $fields = $metaboxes[$id]['fields'];
            foreach ($fields as $id => $field) {
                $oldValue = get_post_meta($postID, $id, true);
                $newValue = $_POST[$id];
                if($newValue && $newValue != $oldValue){
                    update_post_meta($postID, $id, $newValue);
                } elseif($newValue == '' && $oldValue || !isset($_POST[$id])){
                    delete_post_meta($postID, $id, $oldValue);
                }
            }
        }
    }
}
add_action('save_post', 'save_metaboxes');
