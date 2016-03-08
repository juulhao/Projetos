<div id="primary" class="container">
    <ul class="breadcrumb">
        <li><a href="<?php bloginfo('url'); ?>">Instituto Vida para Todos</a></li>
        <li><a href="<?php bloginfo('url'); ?>?editorias=<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
        <li class="active">Home</li>
    </ul>
    <main id="main" class="row margin-bottom-40" role="main">
        <div class="col-md-12 col-sm-12">
            <div class="content-page">
                <div class="row home-dest recent-work">
                    <div class="col-md-6">
                        <h2 class="margin-bottom-20">Destaques</h2>
                        <div class="owl-carousel owl-carousel1">
                            <?php
                                $args = array( 'posts_per_page' => 8, 'category_name' => 'corpo-de-cristo-home' );
                                $corpodecristo_slider = get_posts( $args );
                                foreach ( $corpodecristo_slider as $post ) : setup_postdata( $post ); 
                                    $corpodecristo_slider_src = wp_get_attachment_image_src( get_post_thumbnail_id(), '800x600' );
                                    $corpodecristo_slider_thumb_src = wp_get_attachment_image_src( get_post_thumbnail_id(), '200x200' );
									$slide_permalink = get_the_permalink();
									
									if (substr(get_the_content(), 0, 4) == "url=" && substr(get_the_content(), 4, 4) == "http") {
										$slide_permalink = substr(get_the_content(), 4);
									}
                                
                                    $thisPost = '<div class="recent-work-item"> <em> <img src="'.$corpodecristo_slider_src[0].'" alt="'.get_the_title().'" class="img-responsive">';
                                    $thisPost .= '<a href="'.$slide_permalink.'"><i class="fa fa-link"></i></a>';
                                    $thisPost .= '<a href="'.$corpodecristo_slider_src[0].'" class="fancybox-button" title="'.get_the_title().'"><i class="fa fa-search"></i></a> </em> <a class="recent-work-description" href="'.$slide_permalink.'"> <strong>'.get_the_title().'</strong></a> </div>'; 
                                    echo $thisPost;
                                endforeach;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 recent-news mix-block margin-bottom-10">
                        <h2 class="margin-bottom-20">Vídeos</h2>
                        <div class=" margin-bottom-20">
                            <?php echo do_shortcode('[embedyt]http://www.youtube.com/watch?list=PLdp1iB02l4pzsHHp3XC_fU13sbKt6gF1q&height=485[/embedyt]'); ?>
                        </div>
                        
                    </div>
                </div>
                <hr class="blog-post-sep margin-bottom-20" />
                <div class="row">
                    <div class="col-md-6 col-sm-1">
                        <h2>Últimas notícias do <strong><?php echo $term->name; ?></strong></h2>
                    </div>
                    <div class="col-md-6 col-sm-1">
                        <form role="search" method="get" class="search-form padding-top-10" action="<?php bloginfo('url'); ?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Pesquisar" value="" name="s" title="Pesquisar por:">
                                        <input type="hidden" value="<?php echo $term->slug; ?>" name="editoria" />
                                        <span class="input-group-btn">
                                        <input type="submit" class="btn blue" value="Pesquisar" />
                                        </span> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr class="blog-post-sep" />
                <?php
                    
                    // pega os posts
                    query_posts( $query_string . '&post_type=post&cat=-393&posts_per_page=9&category_name=home-ultimas-corpo-de-cristo' );
                    $counter = 1;
                    while ( have_posts() ) : the_post(); 
                        if($counter < 6) : ?>
                            <div class="row">
                            <?php if(has_post_thumbnail()) : ?>
                                <div class="col-md-4 col-sm-4">
                                    <?php
                                        $post_thumb_id = get_post_thumbnail_id( $post->ID );
                                        $post_thumb_src = wp_get_attachment_image_src( $post_thumb_id, '800x600' );
                                        echo '<a href="'.get_the_permalink().'" title="'.get_the_title().'"><img src="'.$post_thumb_src[0].'" class="img-responsive" /></a>';
                                    ?>
                                </div>
                                <div class="col-md-8 col-sm-8">
                            <?php else: ?>
                                <div class="col-md-12 col-sm-12">
                            <?php endif;
                                
                                the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                                
                                require get_template_directory() . '/inc/metainfo.php';
                                
                                the_excerpt( sprintf(
                                    __( 'Leia mais %s', 'twentyfifteen' ),
                                    the_title( '', '<i class="icon-angle-right"></i> ', false )
                                ) );        
                                    
                            ?>
                            </div>
                    </div>
                    <hr class="blog-post-sep" />
                    <?php else :
                        if($counter == 6) : echo '<div class="row">'; endif;
                    ?>
                        <div class="col-md-3 col-sm-6">
                            <?php if(has_post_thumbnail()) : 
                                $post_thumb_id = get_post_thumbnail_id( $post->ID );
                                $post_thumb_src = wp_get_attachment_image_src( $post_thumb_id, '800x600' );
                                echo '<a href="'.get_the_permalink().'" title="'.get_the_title().'"><img src="'.$post_thumb_src[0].'" class="img-responsive" /></a>';
                                    ?>
                            <?php endif;
                                the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                                require get_template_directory() . '/inc/metainfo.php';
                                
                                the_excerpt( sprintf(
                                    __( 'Leia mais %s', 'twentyfifteen' ),
                                    the_title( '', '<i class="icon-angle-right"></i> ', false )
                                ) );        
                            ?>
                        </div>
                    <?php endif; ?>
                    <?php $counter++; endwhile;
                    wp_reset_query();
                ?>
            </div>
        </div>
    </main>
</div>