<?php 
	global $post, $query_string, $SMTheme;
	query_posts($query_string);

	
	
	
	if (have_posts()) :
	
	
	
	
	if (!isset($_GET['ajaxpage'])) {?> <div class='articles'> <?php }
	
	
	
	
	while (have_posts()) : the_post(); ?>
		<div class='one-post'>
			<div id="post-<?php the_ID(); ?>" <?php post_class("post-caption"); ?>>
			<?php  //Title
			if (!is_single()&&!is_page()) { ?>
				<h2><a href="<?php the_permalink(); ?>" title="<?php printf( $SMTheme->_( 'permalink' ), the_title_attribute( 'echo=0' ) ); ?>" class='post_ttl'><?php the_title(); ?></a></h2>
			<?php } else { ?>
				<h1><?php the_title(); ?></h1>
			<?php } 
			
			
			//Post meta (comments, date, categories)
			if (!is_page()) {?><p class='post-meta'>
			
				<span class='post-date'><?php echo get_the_date(); ?></span>,
				
				Posted in &nbsp;<?php the_category(', '); 
				
				if(comments_open( get_the_ID() ))  {
                    ?>&nbsp;Comments:&nbsp;<span class='post-comments'><?php comments_popup_link( $SMTheme->_( 'noresponses' ), $SMTheme->_( 'oneresponse' ), $SMTheme->_( 'multiresponse' ) ); ?></span>
				<?php } 
				edit_post_link( $SMTheme->_( 'edit' ), '     |     <span class="edit-link">', '</span>' );
				?>
			</p><?php } ?>
			
			</div>
			<div class='post-body'>
			
<?php // Post featured image
	if(has_post_thumbnail())  {
		if (!is_single()){ ?><a href="<?php the_permalink(); ?>" title="<?php printf( $SMTheme->_( 'permalink' ), the_title_attribute( 'echo=0' ) ); ?>"> <?php }
			the_post_thumbnail(
				array($SMTheme->get( 'layout', 'imgwidth' ), $SMTheme->get( 'layout', 'imgheight' )),
				array("class" => $SMTheme->get( 'layout','imgpos' ) . " featured_image")
			);
		if (!is_single()){ ?></a><?php }
	}

				?>
				
			
			
			
			
			
			
				<?php
				//Post content
				if (!is_single()&&!is_page()) { 
					smtheme_excerpt('echo=1');
					?><a href='<?php the_permalink(); ?>' class='readmore'><?php echo $SMTheme->_( 'readmore' ); ?></a><?php
				} else {
					the_content('');
				}
				wp_link_pages(); ?>
			</div>
		</div>
		
		
		
		
	<?php endwhile; ?>
	
	
	
	
	
	<?php if (!isset($_GET['ajaxpage'])) {?></div><?php } ?>
	
	
	
	
	
	
<?php endif; ?>