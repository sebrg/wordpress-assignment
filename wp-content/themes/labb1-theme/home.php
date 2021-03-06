<?php 
get_header();
?>

<main>
			<section>

				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>
								<?php 
								wp_title('');
								?>
							</h1>

                            <?php 
                            while ( have_posts() ) {
                            the_post();
                            ?>

							<article>
								<img src="<?php the_post_thumbnail_url(); // posts-bild ?>">
								<h2 class="title">
									<a href="<?php the_permalink(); //länk till inlägg -> single ?>">
                                    <?php 
                                the_title();
                                    ?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i>  
                                    <?php 
                                    echo get_the_date(); //datum
                                    ?>

									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html"> <?php 
                                    the_author_posts_link(); //länk till författare
                                    ?></a>
									</li>
									<li>
					
									<i class="fa fa-tag"></i> <a href="kategori.html"><?php 
                                	the_category(','.' '); //hämtar kategorier
                                	?></a>
									</li>
								</ul>
								<p> 
                                    <?php 
                                the_excerpt(); //utdrag av 50 första orden av content. 
                                ?>
                                </p>
							</article>

                            <?php 
							
                                }
								//bläddra med sidor 
								the_posts_pagination(); // får ej in styling på denna..
                            ?>
		

							<!-- <nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav> -->
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>					
											<?php 
										dynamic_sidebar('home-sidebar');
                            				?>								
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>

		</main>



<?php 
get_footer();
?>