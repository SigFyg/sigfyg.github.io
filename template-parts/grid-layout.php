<?php
/**
 * The template part for displaying grid layout
 * @package Multipurpose Portfolio
 * @subpackage multipurpose_portfolio
 * @since 1.0
 */
?>
<div class="col-lg-4 col-md-4">
    <article class="blog-sec">
        <?php if(has_post_thumbnail()) { ?>
          <?php the_post_thumbnail(); ?> 
        <?php }?>
        <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if(get_the_excerpt()) { ?>
            <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( multipurpose_portfolio_string_limit_words( $excerpt, esc_attr(get_theme_mod('multipurpose_portfolio_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('multipurpose_portfolio_button_excerpt_suffix','...') ); ?></p></div>
        <?php }?>
        <?php if ( get_theme_mod('multipurpose_portfolio_blog_button_text','Read Full') != '' ) {?>
            <div class="blogbtn">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php echo esc_html( get_theme_mod('multipurpose_portfolio_blog_button_text',__('Read Full', 'multipurpose-portfolio')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('multipurpose_portfolio_blog_button_text',__('Read Full', 'multipurpose-portfolio')) ); ?></span></a>
            </div>
        <?php }?>
    </article>
</div>