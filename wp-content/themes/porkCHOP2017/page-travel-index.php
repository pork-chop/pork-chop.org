<?php
/*
 Template Name: Travel Index
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

									<p class="byline vcard" style="display: none">
										<?php printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>


								</header>

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section>


								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

							<!-- <div id="map" style="height: 300px; width: 100%;"></div> -->
<!-- 						    <script>
						  //     function initMap() {
						  //       var msp = {lat: 44.9778, lng: -93.2650};
						  //       var map = new google.maps.Map(document.getElementById('map'), {
						  //         zoom: 3,
						  //         center: msp
						  //       });

						  //       var markers = [
						  //       	['Minneapolis, MN', 44.9778,-93.2650],
						  //       	['London Eye, London', 51.503454,-0.119562]
						  //       ];

						  //       var infoWindowContent = [
							 //        ['<div class="info_content">' +
							 //        '<h3>Minneapolis, MN</h3>' +
							 //        '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
							 //        '</div>'],
							 //        ['<div class="info_content">' +
							 //        '<h3>London Eye</h3>' +
							 //        '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' + '</div>']
							 //    ];

								// // Display multiple markers on a map
							 //    var infoWindow = new google.maps.InfoWindow(), marker, i;
							    
							 //    // Loop through our array of markers & place each one on the map  
							 //    for( i = 0; i < markers.length; i++ ) {
							 //        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
							 //        bounds.extend(position);
							 //        marker = new google.maps.Marker({
							 //            position: position,
							 //            map: map,
							 //            title: markers[i][0]
							 //        });
							        
							 //        // Allow each marker to have an info window    
							 //        google.maps.event.addListener(marker, 'click', (function(marker, i) {
							 //            return function() {
							 //                infoWindow.setContent(infoWindowContent[i][0]);
							 //                infoWindow.open(map, marker);
							 //            }
							 //        })(marker, i));

							 //        // Automatically center the map fitting all markers on the screen
							 //        map.fitBounds(bounds);
							 //    }

							 //    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
							 //    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
							 //        this.setZoom(14);
							 //        google.maps.event.removeListener(boundsListener);
							 //    });
    
   						        // var marker = new google.maps.Marker({
						        //   position: msp,
						        //   title: 'Minneapolis, MN',
						        //   map: map
						        // });
						      }
						    </script> -->
						    <!-- <script async defer
						    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAHGzZDv1fOPnBKJfOG7oNkrThsLqxfZk&callback=initMap">
						    </script> -->


							<?php
								$repeater = get_field('travel_index');
								// var_dump($repeater);

								foreach($repeater as $key => $row) {
									$the_year[$key] = $row['travel_year'];
									$the_month[$key] = $row['travel_month'];
								}

								array_multisort($the_year, SORT_DESC, $the_month, SORT_DESC, $repeater);

								$previousYear = '';

								foreach($repeater as $row) { 

									$categoryTerm = $row['post_category']; // taxonomy

									$taxonomy = 'category';
									$categoryLink = get_term_link($categoryTerm, $taxonomy);

									$currentYear = $row['travel_year']; ?>
								
									<?php if ($currentYear != $previousYear): ?>
										<h2><?php echo $row['travel_year']; ?></h2>
									<?php endif;

									$currentMonth = '';
									switch ($row['travel_month']) {
										case '01':
											$currentMonth = 'January';
											break;
										case '02':
											$currentMonth = 'February';
											break;
										case '03':
											$currentMonth = 'March';
											break;
										case '04':
											$currentMonth = 'April';
											break;
										case '05':
											$currentMonth = 'May';
											break;
										case '06':
											$currentMonth = 'June';
											break;
										case '07':
											$currentMonth = 'July';
											break;
										case '08':
											$currentMonth = 'August';
											break;
										case '09':
											$currentMonth = 'September';
											break;
										case '10':
											$currentMonth = 'October';
											break;
										case '11':
											$currentMonth = 'November';
											break;
										case '12':
											$currentMonth = 'December';
											break;
										case '13':
											$currentMonth = 'Not sure which month';
											break;
									}  ?>

									<p><?php 
										if($categoryTerm): echo '<a href="' . $categoryLink . '">'; endif; ?>
										<?php echo $currentMonth; ?><?php if($row['travel_dates']): echo ' ' . $row['travel_dates']; endif; ?>: <?php echo $row['travel_location']; ?>
										<?php if($categoryTerm): ?></a><?php endif; ?><br>
										<em><?php echo $row['travel_description']; ?></em>
									</p>

								<?php
									
									$previousYear = $row['travel_year'];

								}
							?>

						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
