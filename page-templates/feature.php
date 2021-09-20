<?php
/**
 * Template Name: Feature
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <section class="feauture-top-sect scrollme">
        <div class="container">
            <div class="feauture-top-sect__desc">
                <div class="feauture-top-sect__title red-text"><?php echo get_field('banner_title');?></div>
                <div class="feauture-top-sect__undertitle"><?php echo get_field('banner_sub_title');?></div>
                <p><?php echo get_field('banner_text');?></p>
                <a href="<?php echo get_field('banner_button_link');?>" class="feauture-top-sect__btn blue-btn"><?php echo get_field('banner_button_text');?></a>
            </div>
        </div>
        <div class="feauture-top-sect__pic animateme"
             data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="50">
            <img src="<?php echo get_field('banner_image')['url']?>" alt="<?php echo get_field('banner_image')['alt']?>">
        </div>
    </section>

    <section class="how-help-sect scrollme">
        <div class="cloud-steps1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/video-sect-cloud.svg" alt="">
        </div>
        <div class="cloud-steps2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/video-sect-cloud.svg" alt="">
        </div>
        <div class="cloud-steps3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/video-sect-cloud.svg" alt="">
        </div>
        <div class="container">
            <div class="how-help-sect__red-box">
                <div class="how-help-sect__red-box_arrow animateme"
                     data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="50" data-rotatez="10">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/red-box-arr.svg" alt="">
                </div>
                <div class="how-help-sect__title">
                  <?php echo get_field('attendance_title');?>
                </div>
               <?php echo get_field('attendance_text');?>
            </div>
            <div class="how-help-sect__phone-slider anima teme"
                 data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="150">
                <div class="how-help-sect__phone-wrapper">
                    <div class="how-help-sect__phone-prev">
                        <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="29.5" cy="29.5" r="27.5" stroke="#3482D0" stroke-width="2"/>
                            <path d="M35 18L24 29L35 40" stroke="#3482D0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="how-help-sect__phone-next">
                        <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="29.5" cy="29.5" r="27.5" stroke="#3482D0" stroke-width="2"/>
                            <path d="M24 18L35 29L24 40" stroke="#3482D0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <img class="how-help-sect__phone-mockup" src="<?php echo get_template_directory_uri(); ?>/img/phone-mockup.svg" alt="">
                    <div class="how-help-sect__phone-pics">
                        <div class="swiper-wrapper">
                            <?php $slider=get_field('attendance_images');
                            if($slider){
                                foreach ($slider as  $value){?>
                                    <div class="how-help-sect__phone-slide swiper-slide">
                                        <img src="<?php print_R($value['url']);?>" alt="<?php print_R($value['alt']);?>">
                                    </div>
                                <?php } } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="attendance-big-sect">
        <div class="cloud-steps1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/cloud-w2.svg" alt="">
        </div>
        <div class="cloud-steps2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/cloud-w1.svg" alt="">
        </div>
        <div class="cloud-steps3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/cloud-w1.svg" alt="">
        </div>
        <div class="container">
            <div class="attendance-big-sect__top scrollme">
                <div class="attendance-big-sect__top-title red-text">
                    <?php echo get_field('you_get_title');?>
                </div>
                <div class="attendance-big-sect__top-wrapper animateme"
                     data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="150">
                    <?php if( have_rows('you_get') ): ?>
                        <?php
                        $i=0;
                        while( have_rows('you_get') ): the_row(); ?>
                            <div class="attendance-big-sect__top-item">
                                <div class="attendance-big-sect__top-icon">
                                    <img src="<?php echo get_sub_field('icon')['url'];?>" alt="<?php echo get_sub_field('icon')['alt'];?>">
                                </div>
                                <p><?php echo get_sub_field('text');?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="attendance-big-sect__bottom scrollme">
                <div class="attendance-big-sect__bottom-title">
                    <?php echo get_field('advantages_title');?>
                </div>
                <div class="attendance-big-sect__bottom-wrapper">
                    <div class="attendance-big-sect__bottom-list">
                        <ul>
                            <?php if( have_rows('advantages_left') ): ?>
                                <?php
                                $i=0;
                                while( have_rows('advantages_left') ): the_row(); ?>
                                    <li><?php echo get_sub_field('text');?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <ul>
                            <?php if( have_rows('advantages_right') ): ?>
                                <?php
                                $i=0;
                                while( have_rows('advantages_right') ): the_row(); ?>
                                    <li><?php echo get_sub_field('text');?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="attendance-big-sect__bottom-pic animateme"
                         data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="150">
                        <img src="<?php echo get_field('advantages_image')['url']?>" alt="<?php echo get_field('advantages_image')['alt']?>">
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="faq-section scrollme">
        <div class="container">
            <div class="faq-section__left">
                <div class="faq-section__title red-text"><?php echo get_field('faq_title','option');?></div>
                <div class="faq-section__pic">
                    <img src="<?php echo get_field('faq_image','option')['url']; ?>" alt="<?php echo get_field('faq_image','option')['alt']; ?>">
                </div>
            </div>
            <div class="faq-section__right  animateme" data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="70">
                <?php if( have_rows('faq','option') ): ?>
                    <?php
                    $i=0;
                    while( have_rows('faq','option') ): the_row(); ?>
                        <div class="faq-section__question">
                            <div class="faq-section__row">
                                <b><?php echo get_sub_field('question');?></b>
                                <div class="faq-section__icon">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="faq-section__answer">
                                <?php echo get_sub_field('answer');?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

        </div>
    </section>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>