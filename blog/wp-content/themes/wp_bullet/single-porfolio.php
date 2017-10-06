<?php
/**
 * The Template for displaying all single posts
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */
global $cms_base;

get_header(); ?>
    
    <div id="primary">
        <div id="content" class="content-portfolio-single" role="main">

            <?php while ( have_posts() ) : the_post(); 
                $gallery=$cms_base->getShortcodeFromContent('gallery', get_the_content());

                    $content= get_the_content();
                    $content=preg_replace("/\[gallery(.*)/", '' , $content);
                    $portfolio_meta=cms_post_meta_data();
                    $tags=get_the_tags();
                    if(!empty($tags)){
                        $tag='';
                        foreach ($tags as $key => $value) {
                            if($tag==''){
                                $tag .='<a href="'.get_tag_link($value->term_id).'">'.$value->name.'</a>';
                            }else{
                                $tag .=', <a href="'.get_tag_link($value->term_id).'">'.$value->name.'</a>';
                            }
                        }
                    }
                    if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)){
                        $class = ' has-thumbnail';
                        $thumbnail = get_the_post_thumbnail(get_the_ID(),'full');
                        $src=wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
					}
                 ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-header">
                        <div class="post-header-media">
                          <?php if(!empty($gallery)):?>
                            <div class="post-format-icon">
                                <a class="porfolio-lightbox" href="javascript:void(0);" ><i class="fa fa-expand"></i></a>
                            </div>
                          <?php endif; ?>
                            <?php if(empty($gallery)):
									if($thumbnail):
							?>
                                <div class="post-image">
                                    <?php  echo $thumbnail; ?>
                                </div>
                            <?php	endif;

							else: 
                                 $images=cms_porfolio_gallery(); 
                             endif; ?>
                        </div>
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                        
                            <span class="post-details"><?php echo __('on ',THEMENAME).get_the_date('d-F-Y',get_the_ID());?>
                            <?php 
                                $categories=wp_get_post_terms(get_the_ID(),'portfolio-categories');
                                //var_dump($categories);
                                $cat='';
                                $portfolio_category=array();
                                foreach($categories as $category){
                                    $portfolio_category[]=$category->term_id;
                                    if($cat==''){
                                        $cat='<a href="'.get_term_link($category->term_id,'portfolio-categories' ).'">'.$category->name.'</a>';
                                    }else{
                                        $cat .=', <a href="'.get_term_link($category->term_id,'portfolio-categories' ).'">'.$category->name.'</a>';
                                    }
                                }
                                if($cat!=''):
                            ?><?php echo __(', in ',THEMENAME).$cat; ?>
                            <?php endif;?>
                            </span>
                    </div>
                    <!-- .entry-header -->

                    <div class="entry-content">
                        <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 portfolio-content">
                            <?php echo $content;  ?>
                            
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 portfolio-extra-info">
                            <span><label><?php echo __('client: ',THEMENAME);?></label><span class="portfolio-extra-info-inner"><?php echo $portfolio_meta->_cms_client; ?></span></span>
                            <span><label><?php echo __('live demo: ',THEMENAME);?></label><span class="portfolio-extra-info-inner"><a href="<?php echo $portfolio_meta->_cms_live_demo;  ?>" target="_blank" ><?php echo $portfolio_meta->_cms_live_demo; ?></a></span></span>
                            <?php if($cat!=''):?>
                                <span><label><?php echo __('category: ',THEMENAME);?></label><span class="portfolio-extra-info-inner"><?php echo $cat; ?></span></span>
                            <?php endif; ?>
                            <span><label><?php echo __('date post: ',THEMENAME);?></label><span class="portfolio-extra-info-inner"><?php echo get_the_date('d-F-Y',get_the_ID()); ?></span></span>
                            <?php if($tag!=''):?>
                                <span><label><?php echo __('tags: ',THEMENAME);?></label><span class="portfolio-extra-info-inner"><?php echo $tag; ?></span></span>
                            <?php endif;?>
                        </div>
                        
                    </div>
                    <!-- .entry-content -->
                    <div class="portfolio-similar">
                        <h2><?php echo __('check Similar projects',THEMENAME);?></h2>
                        <div class="portfolio-similar-items">
                            <?php
                               $args = array(
                                   'posts_per_page' => 3,
                                   'post_type' => 'porfolio',
                                   'post_status' => 'publish'
                               );
                               if($portfolio_category != ''){
                                   $args['tax_query'] = array(
                                       array(
                                           'taxonomy' => 'portfolio-categories',
                                           'field' => 'term_id',
                                           'terms' => $portfolio_category
                                       )
                                   );
                               }
                               $query = new WP_Query($args);
                               $count=$query->post_count;
                               $col=12/$count;
                               while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="cs-portfolio-similar-item col-xs-12 col-sm-12  col-md-<?php echo $col;?> col-lg-<?php echo $col;?>">
                                   <div class="cs-portfolio-similar-item-wrap" onclick="">
                                       <?php the_post_thumbnail('medium-square'); ?>
                                       <div class="cs-portfolio-similar-details ">
                                            <h3><i class="fa fa-user"></i><?php the_title(); ?></h3>
                                            <a href="<?php the_permalink(); ?>"><i class="fa fa-chain"></i><?php _e('View Project', THEMENAME); ?></a>
                                        </div>
                                    </div>
                                </div>
                               <?php
                               endwhile;
                               $query->wp_reset_postdata(); 
                               ?>
                        </div>
                    </div>

                <?php comments_template( '', true ); ?>

            <?php endwhile; // end of the loop. ?>

        </div><!-- #content -->
    </div>

<?php get_footer(); ?>