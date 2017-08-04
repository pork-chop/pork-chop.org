<?php
/*
Plugin Name: Web Channels Widget Creator
Description: Utilizes Advanced Custom Fields Options Page
*/

// Register and load the widget
function webchannels_load_widget() {
	register_widget( 'webchannels_widget' );
}
add_action( 'widgets_init', 'webchannels_load_widget' );

// Creating the widget 
class webchannels_widget extends WP_Widget {

function __construct() {
parent::__construct(

// Base ID of your widget
'webchannels_widget', 

// Widget name will appear in UI
__('Web Channels Widget', 'webchannels_widget_domain'), 

// Widget description
array( 'description' => __( 'Widget to create a listing of presence on other web channels.', 'webchannels_widget_domain' ), ) 
);
}

// Creating widget front-end

public function widget( $args, $instance ) {
	$title = apply_filters( 'widget_title', $instance['title'] );

	// before and after widget arguments are defined by themes
	echo $args['before_widget'];
	if ( ! empty( $title ) )
	echo $args['before_title'] . $title . $args['after_title'];

	// This is where you run the code and display the output
	$facebook = get_field('facebook_page', 'option');
	$facebook = get_field('facebook_page', 'option');
	$facebook = get_field('facebook_page', 'option');
	$facebook = get_field('facebook_page', 'option');
	$facebook = get_field('facebook_page', 'option');
	$facebook = get_field('facebook_page', 'option');
	$facebook = get_field('facebook_page', 'option');
	$facebook = get_field('facebook_page', 'option');
	$facebook = get_field('facebook_page', 'option');
	$facebook = get_field('facebook_page', 'option');


	echo __( 'Hello, World!', 'webchannels_widget_domain' );
	echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'webchannels_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class webchannels_widget ends here
