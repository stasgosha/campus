<?php
/**
 * Template Name: Home
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <section class="your-campus scrollme">
        <div class="your-campus-bg">
            <svg width="1935" height="621" viewBox="0 0 1935 621" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g clip-path="url(#clip0)">
                    <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="-312" y="0" width="2414" height="616">
                        <path d="M-3.05176e-05 584C-701 647.5 -3.05176e-05 0 -3.05176e-05 0H1935C1935 0 2309.5 489 1935 584C1560.5 679 701 520.5 -3.05176e-05 584Z" fill="url(#paint0_linear)"/>
                    </mask>
                    <g mask="url(#mask0)">
                        <rect y="-236" width="1935" height="1075" fill="url(#pattern0)"/>
                        <rect width="1935" height="615" fill="url(#paint1_linear)" fill-opacity="0.75"/>
                    </g>
                </g>
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0" transform="scale(0.000566893 0.00102041)"/>
                    </pattern>
                    <linearGradient id="paint0_linear" x1="884.671" y1="291.601" x2="1884.44" y2="291.779" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#A0F0E5"/>
                        <stop offset="1" stop-color="#AEDBFB"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear" x1="1.67115e-08" y1="307" x2="1935" y2="306.551" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#A0F0E5"/>
                        <stop offset="1" stop-color="#AEDBFB"/>
                    </linearGradient>
                    <clipPath id="clip0">
                        <rect width="1935" height="621" fill="white"/>
                    </clipPath>
                    <image
                        id="image0" class="animateme"
                        data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="180" width="1764" height="980" xlink:href="<?php echo get_field('background')['url']?>"/>
                </defs>
            </svg>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/top-sect.svg" alt="">                     -->
        </div>
        <div class="container" >
            <div class="your-campus__left">
                <div class="your-campus__title head__title">
                    <?php echo get_field('banner_title');?>
                </div>
                <div class="your-campus__undertitle head__undertitle">
                   <?php echo get_field('banner_subtitle');?>
                </div>
                <p><?php echo get_field('banner_text');?>
                </p>
            </div>
            <div class="your-campus__right">
                <div class="your-campus__phone">
                    <div class="your-campus__phone-gif"></div>
                    <img src="<?php echo get_field('banner_image')['url']; ?>" alt="<?php echo get_field('banner_image')['alt']; ?>">
                </div>
            </div>
        </div>
    </section>

    <section class="introducing">
        <div class="container scrollme">
            <div class="introducing__left animateme"
                 data-when="view" data-easing="linear" data-from="0.2" data-to="1" data-translatey="-180" >
                <img class="introducing__phone" src="<?php echo get_field('second_block_image')['url']?>" alt="<?php echo get_field('second_block_image')['alt']?>">
                <img class="arrow animateme" data-when="view" data-easing="linear" data-from="0" data-to="1"
                     data-translatey="80" data-rotatez="10" src="<?php echo get_template_directory_uri(); ?>/img/arr-introducing.svg" alt="">
                <img class="arrow mobile" src="<?php echo get_template_directory_uri(); ?>/img/arr-introducing_m.svg" alt="">
            </div>
            <div class="introducing__right" >
                <div class="red-text">
                   <?php echo get_field('second_block_title');?>
                </div>
                <p><?php echo get_field('second_block_text');?></p>
                <a href="<?php echo get_field('second_block_button_link');?>" class="blue-btn"><?php echo get_field('second_block_button_text');?></a>
            </div>
        </div>
    </section>

    <section class="help-you">
        <div class="container scrollme">
            <div class="cloud animateme" data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatex="-1000">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/ho-we-can-cloud.svg" alt="">
            </div>
            <div class="help-you__left">
                <div class="help-you__arrow">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/help-arr.svg" alt="" class="animateme" data-when="view" data-easing="linear" data-from="0.2" data-to="1"
                         data-translatey="-80" data-rotatez="30">
                    <img class="mobile" src="<?php echo get_template_directory_uri(); ?>/img/help-arr_m.svg" alt="">
                </div>
                <div class="help-you__title red-text">
                    <?php echo get_field('help_you_title');?>
                </div>
                <p><?php echo get_field('help_you_text');?></p>
                <div class="help-you__buttons-wrap">
                    <?php if( have_rows('help_you_buttons') ): ?>
                        <?php
                        $i=0;
                        while( have_rows('help_you_buttons') ): the_row(); $i++;?>
                            <button data-tab="#tab-<?= $i ?>" class="help-you__btn <?php echo get_sub_field('class');?>">
                                <div class="help-you__btn-gif">
                                    <img src="<?php echo get_sub_field('icon')['url'];?>" data-icon="<?php echo get_sub_field('icon')['url'];?>"  data-gif="<?php echo get_sub_field('icon_gif')['url'];?>" alt="<?php echo get_sub_field('icon')['alt'];?>">
                                </div>
                                <span><?php echo get_sub_field('title');?></span>
                            </button>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="help-you__right anima teme"
                 data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="-180">
                <div class="tabs-container">
                    <?php if( have_rows('help_you_buttons') ): ?>
                        <?php
                        $i=0;
                        while( have_rows('help_you_buttons') ): the_row(); $i++; ?>
                            <div class="tab" id="tab-<?php echo $i; ?>">
                                <div class="blue-title">
                                    <img src="<?php echo get_sub_field('icon_text')['url'];?>" alt="<?php echo get_sub_field('icon_text')['alt'];?>">
                                    <span><?php echo get_sub_field('text_title');?></span>
                                </div>
                                <div class="help-you__list">
                                    <ul>
                                        <?php if( get_sub_field('text') ): ?>
                                            <?php while( has_sub_field('text') ): ?>
                                                <li>
                                                    <b><?php echo get_sub_field('title');?></b>
                                                    <span><?php echo get_sub_field('text');?></span>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <a href="<?php echo get_sub_field('button_link');?>" class="blue-btn"><?php echo get_sub_field('button_text');?></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="video-section scrollme">
        <div class="circle animateme" data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="400" data-rotatez="400">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/video-sect-circle.svg" alt="">
        </div>
        <div class="container">
            <div class="video-section__left">
                <div class="video-section__arrow">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/video-arr.svg" alt="">
                    <img class="mobile" src="<?php echo get_template_directory_uri(); ?>/img/video-arr_m.svg" alt="">
                </div>
                <div class="red-text"><?php echo get_field('video_title');?></div>
            </div>
            <div class="video-section__right animateme" data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="-180">
                <div class="video-section__video">
                    <div class="video-block" data-video-type="<?php echo get_field('video_type');?>" data-video-id="<?php if(get_field('video_type')=='mp4'){ echo get_field('video')['url']; }else{ echo get_field('video_id');}?>">
                        <div class="block-video-container">
                            <div class="block-preview">
                                <img src="<?php echo get_field('video_image')['url']?>" alt="<?php echo get_field('video_image')['alt']?>">
                            </div>
                            <div class="block-inner">
                                <button class="play-btn" aria-label="Запустить видео"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="steps-section scrollme">
        <div class="cloud-undervideo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/video-sect-cloud.svg" alt="">
        </div>
        <div class="cloud-steps1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/video-sect-cloud.svg" alt="">
        </div>
        <div class="cloud-steps2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/video-sect-cloud.svg" alt="">
        </div>
        <div class="cloud-steps3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/video-sect-cloud.svg" alt="">
        </div>
        <div class="steps-met1 animateme" data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="500">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/steps-met1.svg" alt="">
        </div>
        <div class="steps-met2 animateme" data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="500">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/steps-met2.svg" alt="">
        </div>
        <div class="circle-steps animateme" data-when="view" data-easing="linear" data-from="1" data-to=".5" data-translatex="400" data-rotatez="400">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg elements/video-sect-circle.svg" alt="">
        </div>
        <div class="container">
            <?php if( have_rows('info_blocks') ): ?>
                <?php
                $i=0;
                while( have_rows('info_blocks') ): the_row(); $i++; ?>
                    <div class="steps-section__step step0<?php echo $i; ?> scrollme">

                        <?php if($i%2==0){ ?>
                            <div class="steps-section__pic animateme" data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="150">
                                <img  src="<?php echo get_sub_field('image')['url'];?>" alt="<?php echo get_sub_field('image')['alt'];?>">
                            </div>
                            <?php if(get_sub_field('image_arrow')){ ?>
                                <div class="steps-section__arrow animateme" data-when="view" data-easing="linear" data-from="1" data-to="0" data-translatey="100" data-translatex="-30" data-crop="true" data-rotatez="-85">
                                    <img src="<?php echo get_sub_field('image_arrow')['url'];?>" alt="<?php echo get_sub_field('image_arrow')['alt'];?>">
                                </div>
                            <?php } ?>
                            <?php if(get_sub_field('text_window')){ ?>
                                <div class="steps-section__popup animateme" data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="150">
                                    <?php echo get_sub_field('text_window');?>
                                </div>
                            <?php } ?>
                        <?php } ?>

                        <div class="steps-section__text">
                            <div class="red-text">
                                <?php echo get_sub_field('title');?>
                            </div>
                            <?php echo get_sub_field('text');?>
                            <?php if(get_sub_field('type_button')=='link'){ ?>
                                <a href="<?php echo get_sub_field('link_button');?>" class="blue-btn"><?php echo get_sub_field('text_button');?></a>
                                <?php if(get_sub_field('text_button_mobile')){ ?>
                                <a href="<?php echo get_sub_field('link_button');?>" class="blue-btn mobile"><?php echo get_sub_field('text_button_mobile');?></a>
                                <?php } ?>
                            <?php }else{ ?>
                                <a href="#" class="blue-btn" data-video-type="<?php echo get_sub_field('type_video');?>" data-video-modal="<?php if(get_sub_field('type_video')=='mp4'){ echo get_sub_field('video')['url']; }else{ echo get_sub_field('video_id');}?>">
                                    <span>Watch the video</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/play.svg" alt="">
                                </a>
                            <?php } ?>
                        </div>


                        <?php if($i%2!=0){ ?>
                            <div class="steps-section__pic animateme" data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="150">
                                <img  src="<?php echo get_sub_field('image')['url'];?>" alt="<?php echo get_sub_field('image')['alt'];?>">
                            </div>
                            <?php if(get_sub_field('image_arrow')){ ?>
                            <div class="steps-section__arrow animateme" data-when="view" data-easing="linear" data-from="1" data-to="0" data-translatey="100" data-translatex="-30" data-crop="true" data-rotatez="-85">
                                <img src="<?php echo get_sub_field('image_arrow')['url'];?>" alt="<?php echo get_sub_field('image_arrow')['alt'];?>">
                            </div>
                            <?php } ?>
                            <?php if(get_sub_field('text_window')){ ?>
                            <div class="steps-section__popup animateme" data-when="view" data-easing="linear" data-from="0" data-to="1" data-translatey="150">
                               <?php echo get_sub_field('text_window');?>
                            </div>
                            <?php } ?>
                        <?php } ?>


                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="statistics-section scrollme">
        <div class="container">
            <div class="section-title"><?php echo get_field('statistics_title');?></div>
            <div class="statistics-section__wrapper">
                <?php if( have_rows('statistics') ): ?>
                    <?php
                    $i=0;
                    while( have_rows('statistics') ): the_row(); ?>
                        <div class="statistics-section__cell animateme" data-easing="linear" data-when="view" data-from="0.45" data-to="0.15" data-translatex="-200">
                            <div class="statistics-section__number"><?php echo get_sub_field('number');?></div>
                            <div class="statistics-section__desc"><?php echo get_sub_field('text');?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="trusted-section">
        <div class="section-title"><?php echo get_field('trusted_by_title');?></div>
        <div class="trusted-section__slider swiper-container">
            <div class="trusted-section__wrapper swiper-wrapper">
                <?php if( have_rows('trusted_by') ): ?>
                    <?php
                    $i=0;
                    while( have_rows('trusted_by') ): the_row(); ?>
                        <div class="trusted-section__slide swiper-slide">
                            <a target="_blank" rel="nofollow" href="<?php echo get_sub_field('link');?>">
                                <img src="<?php echo get_sub_field('logo')['url']; ?>" alt="<?php echo get_sub_field('logo')['alt']; ?>">
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
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