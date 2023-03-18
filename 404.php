<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package AQ_Academy
 */

get_header();
?>

<main class="main">
	<!-- bootstrap 404 page -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="error-template mb-100 text-center">
					<h1>
						Oops! 404 Not Found
					</h1>
					<div class="error-details mb-10">
						Sorry, an error has occured, Requested page not found!
					</div>
					<div class="error-actions">
						<a href="<?php echo home_url(); ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
							Take Me Home </a><a href="/contact" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
