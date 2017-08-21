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

function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'style', $plugin_url . 'css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );

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
		$fohr_card = get_field('fohr_card', 'option');
		$feedly = get_field('feedly', 'option'); ?>

		<ul class="social_presence">
			<li class="social"><a href="<?php echo $facebook ?>" target="_blank" aria-label="Facebook"><i class="icon-facebook" aria-hidden="true" title="Facebook"></i></a></li><li 
				class="social"><a href="<?php echo $twitter ?>" target="_blank" aria-label="Twitter"><i class="icon-twitter" aria-hidden="true" title="Twitter"></i></a></li><li 
					class="social"><a href="<?php echo $instagram ?>" target="_blank" aria-label="Instagram"><i class="icon-instagram" aria-hidden="true" title="Instagram"></i></a></li><li 
						class="social"><a href="<?php echo $flickr ?>" target="_blank" aria-label="Flickr"><i class="icon-flickr" aria-hidden="true" title="Flickr"></i></a></li><li 
							class="social"><a href="<?php echo $linkedin ?>" target="_blank" aria-label="LinkedIn"><i class="icon-linkedin" aria-hidden="true" title="LinkedIn"></i></a></li><li 
								class="social"><a href="<?php echo $pinterest ?>" target="_blank" aria-label="Pinterest"><i class="icon-pinterest" aria-hidden="true" title="Pinterest"></i></a></li><li 
									class="social"><a href="<?php echo $ravelry ?>" target="_blank" aria-label="Ravelry"><i class="icon-ravelry" aria-hidden="true" title="Ravelry"></i></a></li><li 
																class="social"><a href="<?php echo $feedly ?>" target="_blank" aria-label="Feedly"><i class="icon-feedly" aria-hidden="true" title="Feedly"></i></a></li><li 
										class="social"><a href="<?php echo $github ?>" target="_blank" aria-label="Github"><i class="icon-github" aria-hidden="true" title="Github"></i></a></li><li 
											class="social"><a href="<?php echo $goodreads ?>" target="_blank" aria-label="Goodreads"><i class="icon-goodreads" aria-hidden="true" title="Goodreads"></i></a></li><li 
												class="social"><a href="<?php echo $last_fm ?>" target="_blank" aria-label="Last.FM"><i class="icon-lastfm" aria-hidden="true" title="Last.FM"></i></a></li><li 
													class="social"><a href="<?php echo $about_me ?>" target="_blank" aria-label="About.me" <i class="icon-about-me" aria-hidden="true" title="About.me"></i></a></li><li 
														class="social"><a href="<?php echo $klout ?>" target="_blank" aria-label="Klout"><i class="icon-klout" aria-hidden="true" title="Klout"></i></a></li><li 
															class="social"><a href="<?php echo $fohr_card ?>" target="_blank" aria-label="Fohr Card"><i class="icon-fohr-card" aria-hidden="true" title="Fohr Card"></i></a></li>
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
