    <!-- FOOTER AREA BEGINS -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-space-right">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-white.png" alt="">
                    <span class="foot-min c-pt-4">Call Us</span>
                    <p class="foot-contact"><a href="tel:12146578098">1-214-657-8098</a></p>
                    <span class="foot-min">Email Us</span>
                    <p class="foot-contact"><a href="mailto:example@gmail.com">example@gmail.com</a></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 quick">
                    <p class="foot-title">Services</p>
                    <ul class="footer-list">
                        <li>Business insurance</li>
                        <li>Home Insurance</li>
                        <li>Life Insurance</li>
                        <li>Health Insurance</li>
                        <li>Marriage insurance</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 list-2 col-space-right">
                    <ul class="footer-list">
                        <li>Travel Insurance</li>
                        <li>Cyber Insurance</li>
                        <li>Vehicle Insurance</li>
                        <li>Disability Insurance</li>
                        <li>Fire Insurance</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 quick">
                    <p class="foot-title">Quick Link</p>
                    <ul class="footer-list">
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Blog</li>
                        <li>Our Team</li>
                        <li>Contact Us</li>
                    </ul>
                </div>


                <?php

                //GETTING CUSTOM FIELD/POST PARAMETERS FROM SOCIAL NETWORKS

                $social_id_1 = 86;
                $social_id_2 = 88;
                $social_id_3 = 90;
                $social_id_4 = 91;


                $post_id = 91;
                $link_to_social = get_post_meta($post_id, 'link_to_social', true);

                $post_id_2 = 90;
                $link_to_social_2 = get_post_meta($post_id_2, 'link_to_social', true);

                $post_id_3 = 88;
                $link_to_social_3 = get_post_meta($post_id_3, 'link_to_social', true);

                $post_id_4 = 86;
                $link_to_social_4 = get_post_meta($post_id_4, 'link_to_social', true);

                $post_thumbnail_id = get_post_thumbnail_id($social_id_1);
                $post_thumbnail_id_2 = get_post_thumbnail_id($social_id_2);
                $post_thumbnail_id_3 = get_post_thumbnail_id($social_id_3);
                $post_thumbnail_id_4 = get_post_thumbnail_id($social_id_4);




                $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                $post_thumbnail_url_2 = wp_get_attachment_url($post_thumbnail_id_2);
                $post_thumbnail_url_3 = wp_get_attachment_url($post_thumbnail_id_3);
                $post_thumbnail_url_4 = wp_get_attachment_url($post_thumbnail_id_4);
                ?>

                <!-- Display the thumbnail image in HTML -->


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 quick">
                    <div class="foot-title">Social</div>
                    <div class="social-icn">
                        <span class="soc-icn mr-4"> <a href="<?php echo $link_to_social_3; ?>" target="_blank"> <img class="social-image" src="<?php echo $post_thumbnail_url_2; ?>" alt=""> </a> </span>
                        <span class="soc-icn"> <a href="<?php echo $link_to_social_4; ?>" target="_blank"> <img class="social-image" src="<?php echo $post_thumbnail_url; ?>" alt=""> </a> </span>
                    </div>

                    <div class="social-icn">
                        <span class="soc-icn mr-4"> <a href="<?php echo $link_to_social_2; ?>" target="_blank"> <img class="social-image" src="<?php echo $post_thumbnail_url_3; ?>" alt=""> </a> </span>
                        <span class="soc-icn"> <a href="<?php echo $link_to_social; ?>" target="_blank"> <img class="social-image" src="<?php echo $post_thumbnail_url_4; ?>" alt=""> </a> </span>
                    </div>
                </div>
            </div>

            <hr class="divider-footer mb-5">
            <div class="row policy mar-r-3">
                <span>Privacy Policy</span>
                <span class="dot">•</span>
                <span>Terms of Clients</span>
                <span class="dot">•</span>
                <span>Terms of Candidates</span>
                <span class="dot">•</span>
                <span>Imprint</span>
                <span class="dot">•</span>
                <span>Contact</span>
            </div>
            <p class="text-center pt-4 mb-4 copy">© 2022 Policyhut - All Rights Reserved</p>

        </div>
    </div>
    <!-- FOOTER AREA ENDS -->

    </div>
    <!-- SITE BODY ENDS -->







    <!-- JS HERE -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/fontawesome.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>

    <script>
              new WOW().init();
              </script>

    <?php echo wp_footer(); ?>
    </body>

    </html>