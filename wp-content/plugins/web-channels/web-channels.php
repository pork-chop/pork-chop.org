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
	$twitter = get_field('twitter', 'option');
	$instagram = get_field('instagram', 'option');
	$flickr = get_field('flickr', 'option');
	$linkedin = get_field('linkedin', 'option');
	$pinterest = get_field('pinterest', 'option');
	$ravelry = get_field('ravelry', 'option');
	$github = get_field('github', 'option');
	$goodreads = get_field('goodreads', 'option');
	$last_fm = get_field('last_fm', 'option');
	$about_me = get_field('about_me', 'option');
	$klout = get_field('klout', 'option');
	$fohr_card = get_field('fohr_card', 'option'); ?>

	<ul class="social_presence">
		<li><a href="<?php echo $facebook ?>" target="_blank">Facebook</a></li>
		<li><a href="<?php echo $twitter ?>" target="_blank">Twitter</a></li>
		<li><a href="<?php echo $instagram ?>" target="_blank">Instagram</a></li>
		<li><a href="<?php echo $flickr ?>" target="_blank">Flickr</a></li>
		<li><a href="<?php echo $linkedin ?>" target="_blank">LinkedIn</a></li>
		<li><a href="<?php echo $pinterest ?>" target="_blank">Pinterest</a></li>
		<li><a href="<?php echo $ravelry ?>" target="_blank">Ravelry</a></li>
		<li><a href="<?php echo $github ?>" target="_blank">Github</a></li>
		<li><a href="<?php echo $goodreads ?>" target="_blank">Goodreads</a></li>
		<li><a href="<?php echo $last_fm ?>" target="_blank">Last.FM</a></li>
		<li><a href="<?php echo $about_me ?>" target="_blank">About.me</a></li>
		<li><a href="<?php echo $klout ?>" target="_blank">Klout</a></li>
		<li><a href="<?php echo $fohr_card ?>" target="_blank">Fohr</a></li>
	</ul>

	<?php // echo __( 'Hello, World!', 'webchannels_widget_domain' );
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
