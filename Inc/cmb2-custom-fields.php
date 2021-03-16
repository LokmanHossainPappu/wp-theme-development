<?php 


/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */

require_once __DIR__ . '/cmb2/init.php';

function custom_field(){
/**
	 * Initiate the metabox
	 */
	$latest_work_metabox = new_cmb2_box( array(
		'id'            => 'work_metabox',
		'title'         => __( 'latest News Metabox', 'timermaster' ),
		'object_types'  =>  'latest_news',  // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

	// Regular text field
	$latest_work_metabox->add_field( array(
		'name'       => __( 'Demo fields', 'cmb2' ),
		'desc'       => __( 'Input your demo label', 'timermaster' ),
		'id'         => 'demo_label',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	
	$latest_work_metabox->add_field( array(
		'name'       => __( 'Details fields', 'cmb2' ),
		'desc'       => __( 'Input your Detail label', 'timermaster' ),
		'id'         => 'Detail_label',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$latest_work_metabox->add_field( array(
		'name'       => __( 'Animation fields', 'cmb2' ),
		'desc'       => __( 'Input your animation class name', 'timermaster' ),
		'id'         => 'animate_class_name',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$latest_work_metabox->add_field( array(
		'name'       => __( 'Animation Delay time', 'cmb2' ),
		'desc'       => __( 'Input your animation delay time', 'Timermaster' ),
		'id'         => 'animate_animate_delay',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	// New metabox 

	$font_page_metabox = new_cmb2_box( array(
		'id'            => 'font_page_metabox',
		'title'         => __( 'font page Metabox', 'timermaster' ),
		'object_types'  =>  'page',  // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
		'show_on'       => array(
			'key'       => 'id',
			'value'     => 61
		)
	) );

	// Regular text field
	$font_page_metabox->add_field( array(
		'name'       => __( 'Slider Title', 'cmb2' ),
		'desc'       => __( 'Input your slider title', 'timermaster' ),
		'id'         => 'Slider_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$font_page_metabox->add_field( array(
		'name'       => __( 'Slider Item', 'cmb2' ),
		'desc'       => __( 'Input your slider Item', 'timermaster' ),
		'id'         => 'Slider_Item',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
		'repeatable' => true
	) );

	$font_page_metabox->add_field( array(
		'name'       => __( 'Slider Description', 'cmb2' ),
		'desc'       => __( 'Input your slider Discription', 'timermaster' ),
		'id'         => 'Slider_description',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$font_page_metabox->add_field( array(
		'name'       => __( 'Slider Button', 'cmb2' ),
		'desc'       => __( 'Input your slider button label', 'timermaster' ),
		'id'         => 'Slider_btn',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$font_page_metabox->add_field( array(
		'name'       => __( 'Slider Bg', 'cmb2' ),
		'desc'       => __( 'Input your slider Bg', 'timermaster' ),
		'id'         => 'Slider_bg',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	// Meta box for offer section

	$offer_metabox = new_cmb2_box( array(
		'id'            => 'offer_metabox',
		'title'         => __( 'Offer Metabox', 'timermaster' ),
		'object_types'  =>  'offer',  // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

	// Regular text field
	$offer_metabox->add_field( array(
		'name'       => __( 'Offer Icon', 'cmb2' ),
		'desc'       => __( 'Input your Icon class', 'timermaster' ),
		'id'         => 'icon_class',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$offer_metabox->add_field( array(
		'name'       => __( 'Offer Description', 'cmb2' ),
		'desc'       => __( 'Input your Offer Description', 'timermaster' ),
		'id'         => 'offer_desc',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
}

add_action( 'cmb2_admin_init', 'custom_field' );

?>