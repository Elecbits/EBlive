<?php
/**
 * Page title template
 * @since 1.0.0
 * @author Fox
 */
function cms_page_title(){
    global $smof_data, $cms_meta, $cms_base;
    /* page options */
        if(isset($cms_meta->_cms_page_title) && $cms_meta->_cms_page_title && (!is_search())){
            if(isset($cms_meta->_cms_page_title_type)){
                $smof_data['page_title_layout'] = $cms_meta->_cms_page_title_type;
            }
        }
        
        if($smof_data['page_title_layout']){
            if(!empty($cms_meta->_cms_page_title_image)){
                $url = wp_get_attachment_url($cms_meta->_cms_page_title_image);
            }elseif(!empty($smof_data['page_title_image']['url'])){
                $url=esc_attr($smof_data['page_title_image']['url']);
            }else{
                $url=THEME_IMAGES.'page-title-default.jpg';
            }

            if(!empty($cms_meta->_cms_page_sub_title)){
                $sub_title =esc_attr($cms_meta->_cms_page_sub_title);
            }elseif(!empty($smof_data['page_sub_title'])){
                $sub_title=esc_attr($smof_data['page_sub_title']);
            }

            if(!empty($url)){
                $style="style='background:url(".$url.") no-repeat center center /cover;'";
            }else{
                $style='';
            }

        ?>
            <div id="page-title" class="page-title" >
                <?php switch ($smof_data['page_title_layout']){
                    
                    case '1':
                        ?>
                        <div id="page-title-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" <?php echo $style; ?> >
                            <h1><?php $cms_base->getPageTitle(); ?></h1>
                            <?php if(!empty($sub_title)):?>
                                <div class="page-title-driver"></div>
                                <p class="page-sub-title"><?php echo $sub_title; ?></p>
                            <?php endif; ?>
                        </div>
                        <div id="breadcrumb-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="breadcrumb-wrap" ><?php $cms_base->getBreadCrumb('/'); ?></div></div>
                        <?php
                        break;
                    case '2':
                        
                        ?>
                        <div id="breadcrumb-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="breadcrumb-wrap" ><?php $cms_base->getBreadCrumb('/'); ?></div></div>
                        <div id="page-title-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background:url(<?php echo $url;?>) no-repeat center center /cover; " >
                            <h1><?php $cms_base->getPageTitle(); ?></h1>
                            <?php if(!empty($sub_title)):?>
                                <div class="page-title-driver"></div>
                                <p class="page-sub-title"><?php echo $sub_title; ?></p>
                            <?php endif; ?>
                        </div>
                        <?php          
                        break;
                    
                    case '3':
                        ?>
                        <div id="page-title-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background:url(<?php echo $url;?>) no-repeat center center /cover; ">
                            <h1><?php $cms_base->getPageTitle(); ?></h1>
                            <?php if(!empty($sub_title)):?>
                                <div class="page-title-driver"></div>
                                <p class="page-sub-title"><?php echo $sub_title; ?></p>
                            <?php endif; ?>
                        </div>
                        <?php
                        break;
                    case '4':
                        ?>
                        <div id="breadcrumb-text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="breadcrumb-wrap"><?php $cms_base->getBreadCrumb('/'); ?></div></div>
                        <?php
                        break;
                } ?>
            </div><!-- #page-title -->
            <?php
        }
    
}

/**
 * Get Header Layout.
 * 
 * @author Fox
 */
function cms_header(){
    global $smof_data, $cms_meta;
    /* header for page */
    /* load template. */
    get_template_part('inc/header/header');
}

/**
 * Get menu location ID.
 * 
 * @param string $option
 * @return NULL
 */
function cms_menu_location($option = '_cms_primary'){
    global $cms_meta;
    /* get menu id from page setting */
    return (isset($cms_meta->$option) && $cms_meta->$option) ? $cms_meta->$option : '' ;
}

/**
 * Add page class
 * 
 * @author Fox
 * @since 1.0.0
 */
function cms_page_class(){
    global $smof_data, $cms_meta;
    $page_class = '';
    /* check boxed layout */
    if($smof_data['body_layout']){
        $page_class = 'cs-boxed';
    } else {
        $page_class = 'cs-wide';
    }
    if(!empty($cms_meta->_cms_page_mode) && (!is_search())){
        $page_class .=' '.$cms_meta->_cms_page_mode;
    }
    /*if($post){
         $page_class .=' '.$post;
    } */
    echo apply_filters('cms_page_class', $page_class);
}

/**
 * Add main class
 * 
 * @author Fox
 * @since 1.0.0
 */
function cms_main_class(){
    global $cms_meta;
    
    $main_class = '';
    /* chect content full width */
    if(isset($cms_meta->_cms_full_width) && $cms_meta->_cms_full_width){
        /* full width */
        $main_class = "no-container";
    } else {
        /* boxed */
        $main_class = "container";
    }
    
    echo apply_filters('cms_main_class', $main_class);
}

/**
 * Single detail
 *
 * @author Fox
 * @since 1.0.0
 */
function cms_single_detail(){ ?>
    <p class="post-details">
        <span class="detail-date"><?php _e('Posted on ', THEMENAME); ?><?php echo get_the_date('d-m-Y',get_the_ID());?></span>
        <span class="detail-author"><?php _e(', by: ', THEMENAME) ; ?><?php echo get_the_author();?></span>
        
        <?php if(has_category()): ?>
        <span class="detail-terms"><?php the_terms( get_the_ID(), 'category', __(', in ', THEMENAME), ' , ' ); ?></span>
        <?php endif; ?>
        <span class="detail-comment"><?php echo comments_number(', 0',', 1',', %'); ?> <?php _e(' Comments', THEMENAME); ?></span>
        
    </p>
<?php }

/**
 * Archive detail
 * 
 * @author Fox
 * @since 1.0.0
 */
function cms_archive_detail(){
    ?>
    <p class="post-details">
        <span class="detail-comment"><a href="<?php the_permalink(); ?>"><?php echo comments_number('0','1','%'); ?> <?php _e('Comments', THEMENAME); ?></a></span>
        <?php if(has_category()): ?>
        <span class="detail-terms"><?php the_terms( get_the_ID(), 'category', __(', in ', THEMENAME), ' , ' ); ?></span>
        <?php endif; ?>
        
    </p>
    <?php
}

/**
 * Archive readmore
 * 
 * @author Fox
 * @since 1.0.0
 */
function cms_archive_readmore(){
    echo '<a  class="cms-readmore" href="'.get_the_permalink().'" title="'.get_the_title().'" >'.__('Read More', THEMENAME).'</a>';
}

/**
 * Media Audio.
 * 
 * @param string $before
 * @param string $after
 */
function cms_archive_audio() {
    global $cms_base;
    /* get shortcode audio. */
    $shortcode = $cms_base->getShortcodeFromContent('audio', get_the_content());
    
    if($shortcode != ''){
        echo do_shortcode($shortcode);
        return true;
    } else {
        if(has_post_thumbnail()){
            the_post_thumbnail();
        }
        return false;
    }
    
}

/**
 * Media Video.
 *
 * @param string $before
 * @param string $after
 */
function cms_archive_video() {
    
    global $wp_embed, $cms_base;
    /* Get Local Video */
    $local_video = $cms_base->getShortcodeFromContent('video', get_the_content());
    
    /* Get Youtobe or Vimeo */
    $remote_video = $cms_base->getShortcodeFromContent('embed', get_the_content());
    if($local_video){
        /* view local. */
        echo do_shortcode($local_video);
        return true;
    } elseif ($remote_video) {
        /* view youtobe or vimeo. */
        echo $wp_embed->run_shortcode($remote_video);
        return true;
    } elseif (has_post_thumbnail()) {
        /* view thumbnail. */
        the_post_thumbnail();
    }else{
        return false;
    }
    
}

/**
 * Gallerry Images
 * 
 * @author Fox
 * @since 1.0.0
 */
function cms_archive_gallery($control=null){
    global $cms_base;
    /* get shortcode gallery. */
    $shortcode = $cms_base->getShortcodeFromContent('gallery', get_the_content());
    
    if($shortcode != ''){
        preg_match('/\[gallery.*ids=.(.*).\]/', $shortcode, $ids);
		if(!empty($ids)){
			$array_id = explode(",", $ids[1]);
			?>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				<?php $i = 0; ?>
				<?php foreach ($array_id as $image_id): ?>
					<?php
                    $attachment_image_full = wp_get_attachment_image_src($image_id, 'full', false);
					$attachment_image = wp_get_attachment_image_src($image_id, 'medium-rectangle', false);
					if($attachment_image[0] != ''):?>
						<div class="item <?php if( $i == 0 ){ echo 'active'; } ?>" data-src="<?php echo esc_attr( $attachment_image_full[0]); ?>">
							<img style="width:100%;" data-src="holder.js" src="<?php echo esc_attr($attachment_image[0]);?>" alt="" />
						</div>
					<?php $i++; endif; ?>
				<?php endforeach; ?>
				</div>
				<ol class="carousel-indicators ">
					<?php $j = 0; ?>
				<?php foreach ($array_id as $img_id): 
					$attachment_img = wp_get_attachment_image_src($img_id, 'medium-rectangle', false);

					if($attachment_img[0] != ''): ?>
						<li data-target="#carousel-example-generic" data-slide-to="<?php  echo $j; ?>" class="<?php if( $i == 0 ){ echo 'active'; } ?>">

						</li>
				   <?php  $j++; endif; 
				  endforeach; ?>
			  </ol>
			  <?php if(!empty($control)):?>
			  <div class="carousel-controls">
				<a class=" carousel-control left" href="#carousel-example-generic" role="button" data-slide="prev">
					<i class="fa fa-chevron-left"></i>
				</a>
				<a class=" carousel-control right" href="#carousel-example-generic" role="button" data-slide="next">
					<i class="fa fa-chevron-right"></i>
				</a>
			  </div>
			<?php endif; ?>
			</div>
		
        <?php 
			return true;
		}else{
			return false;
		}
    } else {
        if(has_post_thumbnail()){
            the_post_thumbnail();
        }
        return false;
    }
}


/**
 * Gallerry Images
 * 
 * @author Fox
 * @since 1.0.0
 */
function cms_porfolio_gallery(){
    global $cms_base;
    /* get shortcode gallery. */
    $shortcode = $cms_base->getShortcodeFromContent('gallery', get_the_content());
    
    if($shortcode != ''){
        preg_match('/\[gallery.*ids=.(.*).\]/', $shortcode, $ids);
		if(!empty($ids)){
			$array_id = explode(",", $ids[1]);
            
			?>
			<div id="carousel-example-generic" class="carousel slide" data-ride="">
				<div class="carousel-inner">
				<?php $i = 0; ?>
				<?php foreach ($array_id as $image_id): ?>
					<?php
                    $attachment_image_full = wp_get_attachment_image_src($image_id, 'full', false);
					$attachment_image = wp_get_attachment_image_src($image_id, 'medium-rectangle-1', false);
					if($attachment_image[0] != ''):?>
						<div class="item <?php if( $i == 0 ){ echo 'active'; } ?>" data-src="<?php echo $attachment_image_full[0]; ?>">

							<img style="width:100%;" data-src="holder.js" src="<?php echo $attachment_image[0];?>" alt="" />
						</div>
					<?php $i++; endif; ?>
				<?php endforeach; ?>
                
				</div>
					<div class="carousel-nav-items  thumbnail">
						<div class="carousel-indicators">
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									<i class="fa fa-chevron-left"></i>
								</a>
							<?php $j = 0; ?>
						<?php foreach ($array_id as $img_id): 
							$attachment_img = wp_get_attachment_image_src($img_id, 'full', false);
							$attachment_img_thumb = wp_get_attachment_image_src($img_id, 'medium-square', false);

							if($attachment_img[0] != ''): ?>
								<div class="carousel-nav-item hidden-xs" data-target="#carousel-example-generic" data-slide-to="<?php  echo $j; ?>" class="<?php if( $i == 0 ){ echo 'active'; } ?>">
								
										<img class="img-responsive" src="<?php echo $attachment_img_thumb[0]; ?>" />
								</div>
						   <?php  $j++; endif; 
						  endforeach; ?>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<i class="fa fa-chevron-right"></i>
							</a>
						</div>
					</div>
			</div>
        <?php
        return true;
		}else{
            return false;
        }
    } else {
        if(has_post_thumbnail()){
            the_post_thumbnail();
        }
        return false;
    }
}
/**
 * Quote Text.
 * 
 * @author Fox
 * @since 1.0.0
 */
function cms_archive_quote() {
    /* get text. */
    preg_match('/\<blockquote\>(.*)\<\/blockquote\>/', get_the_content(), $blockquote);
    if(!empty($blockquote[0])){
        echo ''.$blockquote[0].'';
        return true;
    } else {
        if(has_post_thumbnail()){
            the_post_thumbnail();
        }
        return false;
    }
}

/**
 * Get icon from post format.
 * 
 * @return multitype:string Ambigous <string, mixed>
 * @author Fox
 * @since 1.0.0
 */
function cms_archive_post_icon() {
    $post_icon = array('icon'=>'fa fa-file-text-o','text'=>__('STANDARD', THEMENAME));
    switch (get_post_format()) {
        case 'gallery':
            $post_icon['icon'] = 'fa fa-files-o';
            $post_icon['text'] = __('GALLERY', THEMENAME);
            break;
        case 'link':
            $post_icon['icon'] = 'fa fa-link';
            $post_icon['text'] = __('LINK', THEMENAME);
            break;
        case 'quote':
            $post_icon['icon'] = 'fa fa-quote-left';
            $post_icon['text'] = __('QUOTE', THEMENAME);
            break;
        case 'video':
            $post_icon['icon'] = 'fa fa-film';
            $post_icon['text'] = __('VIDEO', THEMENAME);
            break;
        case 'audio':
            $post_icon['icon'] = 'fa fa-music';
            $post_icon['text'] = __('AUDIO', THEMENAME);
            break;
        default:
            $post_icon['icon'] = 'fa fa-image';
            $post_icon['text'] = __('STANDARD', THEMENAME);
            break;
    }
    echo '<i class="'.$post_icon['icon'].'"></i>';
}

/**
 * Show post like.
 *
 * @since 1.0.0
 */
function cms_get_post_like(){

    $likes = get_post_meta(get_the_ID() , '_cms_post_likes', true);

    if(!$likes) $likes = 0;

    ?>
    <span class="cms-post-like" data-id="<?php the_ID(); ?>"><span><?php echo esc_attr($likes).__(' ',THEMENAME); ?></span><i class="fa fa-thumbs-o-up"></i></span>
<?php
}

function cms_get_socials_share(){
    ?>
    <div class="post-share-buttons">
        <span class="list_tags"><?php _e('share: ',THEMENAME) ?></span>
      <a class="social-facebook " target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>"><i class="fa fa-facebook"></i></a>
      <a class="social-twitter " target="_blank" href="https://twitter.com/home?status=<?php _e('Check out this article', THEMENAME);?>:%20<?php the_title();?>%20-%20<?php the_permalink();?>"><i class="fa fa-twitter"></i></a>
      <a class="social-pinterest "target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo the_permalink();?>&media=&description=<?php the_title();?>"><i class="fa fa-pinterest"></i></a>
    </div>
<?php
}

/**
 * Revolution slider
 *

 * @author ATu
 * @since 1.0.0
 */
function cms_revolution_slider($alias){
    echo do_shortcode('[rev_slider '.$alias.']');
}

/**
 * Add field title comment form
 *

 * @author ATu
 * @since 1.0.0
 */
add_filter('comment_form_default_fields','custom_fields');
function custom_fields($fields) {

        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );

        $fields[ 'author' ] = '<p class="comment-form-author col-xs-12 col-sm-4 col-md-4 col-lg-4">'.
            '<input id="author" name="author" type="text" value="'. esc_attr( $commenter['comment_author'] ) . 
            '" size="30" tabindex="1"' . $aria_req . ' placeholder="Name" /></p>';
        
        $fields[ 'email' ] = '<p class="comment-form-email col-xs-12 col-sm-4 col-md-4 col-lg-4">'.
            '<input id="email" name="email" type="text" value="'. esc_attr( $commenter['comment_author_email'] ) . 
            '" size="30"  tabindex="2"' . $aria_req . ' placeholder="Email" /></p>';
        $fields[ 'title' ] = '<p class="comment-form-title col-xs-12 col-sm-4 col-md-4 col-lg-4">'.
            '<input id="title" name="title" type="text" size="30"  tabindex="4" placeholder="Title" /></p>';

    return $fields;
}



// Save the comment meta data along with comment

add_action( 'comment_post', 'save_comment_meta_data' );
function save_comment_meta_data( $comment_id ) {


    if ( ( isset( $_POST['title'] ) ) && ( $_POST['title'] != '') )
    $title = wp_filter_nohtml_kses($_POST['title']);
    if(!empty($title))
    add_comment_meta( $comment_id, 'title', $title );

}



//Add an edit option in comment edit screen  

add_action( 'add_meta_boxes_comment', 'extend_comment_add_meta_box' );
function extend_comment_add_meta_box() {
    add_meta_box( 'title', __( 'Comment Metadata - Extend Comment',THEMENAME ), 'extend_comment_meta_box', 'comment', 'normal', 'high' );
}
 
function extend_comment_meta_box ( $comment ) {
    $title = get_comment_meta( $comment->comment_ID, 'title', true );
    wp_nonce_field( 'extend_comment_update', 'extend_comment_update', false );
    ?>
    <p>
        <label for="title"><?php _e( 'Comment Title',THEMENAME ); ?></label>
        <input type="text" name="title" value="<?php echo esc_attr( $title ); ?>" class="widefat" />
    </p>
    <?php
}

// Update comment meta data from comment edit screen 

add_action( 'edit_comment', 'extend_comment_edit_metafields' );
function extend_comment_edit_metafields( $comment_id ) {
    if( ! isset( $_POST['extend_comment_update'] ) || ! wp_verify_nonce( $_POST['extend_comment_update'], 'extend_comment_update' ) ) return;

        
    if ( ( isset( $_POST['title'] ) ) && ( $_POST['title'] != '') ):
    $title = wp_filter_nohtml_kses($_POST['title']);
    update_comment_meta( $comment_id, 'title', $title );
    else :
    delete_comment_meta( $comment_id, 'title');
    endif;
    
}



add_action('comment_form_before_fields','comment_form_before_fields');
function comment_form_before_fields(){
    echo '<div class="row">';
}

add_action('comment_form_after_fields','comment_form_after_fields');
function comment_form_after_fields(){
    echo '</div>';
}

/** Convert HEX to RGB(A) */
if(!function_exists('cms_rgb2hex')){
    function cms_hex2rgb( $hex, $opacity = 1 ) {
            $hex = str_replace("#",null, $hex);
            $color = array();
            if(strlen($hex) == 3) {
                $color['r'] = hexdec(substr($hex,0,1).substr($hex,0,1));
                $color['g'] = hexdec(substr($hex,1,1).substr($hex,1,1));
                $color['b'] = hexdec(substr($hex,2,1).substr($hex,2,1));
                $color['a'] = $opacity;
            }
            else if(strlen($hex) == 6) {
                $color['r'] = hexdec(substr($hex, 0, 2));
                $color['g'] = hexdec(substr($hex, 2, 2));
                $color['b'] = hexdec(substr($hex, 4, 2));
                $color['a'] = $opacity;
            }
            if(!empty($color)){
                return 'rgba('.implode(',', $color).')';
            } else {
                return  '#000';
            }
    }
}
    
    /** Convert RGB(A) to HEX */
if(!function_exists('cms_rgb2hex')){
    function cms_rgb2hex( $rgba ) {
        $rgba = trim(str_replace(' ', '', $rgba));
        if (stripos($rgba, 'rgba') !== false) {
            $res = sscanf($rgba, "rgba(%d, %d, %d, %f)");
        }
        else {
            $res = sscanf($rgba, "rgb(%d, %d, %d)");
            $res[] = 1;
        }
        $res = array_combine(array('r', 'g', 'b', 'a'), $res);
        if($res){
            if($res['r'] != null && $res['g'] != null && $res['b'] != null){
                return '#'.dechex($res['r']).dechex($res['g']).dechex($res['b']);
            } else {
                return $rgba;
            }
        } else {
            return false;
        }

    }
}