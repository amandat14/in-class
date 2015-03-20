<?php get_header(); ?>

	

	<main id="content">

		<?php if ( have_posts() ) : while( have_posts() ): the_post(); ?>

		<article id="post- <?php the_id(); ?>" class="post">
			<h2 class="entry-title"> 
				<a href="<?php the_permalink(); ?>"> 
					<?php the_title(); ?>	 
				</a>
			</h2>
			<div class="entry-content">
				<p><?php 
				//show full content on single posts and pages
				if(is_singular()):
				the_content();
				else:
					the_excerpt();
				endif; ?></p>
			</div>
			<div class="postmeta"> 
				<span class="author"> Posted by: <?php the_author(); ?> </span>
				<span class="date"> <?php the_date(); ?></span>
				<span class="num-comments"> <?php comments_number(); ?> </span>
				<span class="categories"> 
					<a href="/category/updates/" title="View all posts in Updates" >
						Updates
					</a>
				</span>
				<span class="tags">tag, tag2, tag3</span> 
			</div><!-- end postmeta -->			
		</article><!-- end post -->

		<?php endwhile; 
		else: ?>
		<h2>Sorry, Nope!</h2>
	<?php endif; ?>


	</main><!-- end #content -->

	<?php get_sidebar(); ?>

	<?php get_footer(); ?>