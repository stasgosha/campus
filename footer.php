<footer class="footer scrollme">
    <div class="container">
        <?php if( have_rows('footer_pages','option') ): ?>
            <?php
            $i=0;
            while( have_rows('footer_pages','option') ): the_row(); ?>
                <a href="<?php echo get_sub_field('link');?>" class="footer__item animateme" data-when="view" data-easing="linear" data-from="0.6" data-to="0.2" data-rotatey="90">
                    <div class="footer__pic">
                        <img src="<?php echo get_sub_field('image')['url'];?>" alt="<?php echo get_sub_field('image')['alt'];?>">
                    </div>
                    <span><?php echo get_sub_field('title');?></span>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</footer>

<div class="my-modal video-modal" id="video-modal" tabindex="-1">
    <div class="my-modal-dialog">
        <div class="my-modal-content">
            <button class="my-modal-close" aria-label="Close modal">
                <svg class="btn-icon">
                    <use xlink:href="img/icons-sprite.svg#modal-close"></use>
                </svg>
            </button>
            <div class="my-modal-video">
                <div id="modal-video-iframe"></div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scrollme.js"></script>
<script src="//www.youtube.com/iframe_api"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>