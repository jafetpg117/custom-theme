<!-- GETTING THE WORDPRESS HEADER -->
<?php get_header(); ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (isset($_POST['quotebtn'])) {
    $name = sanitize_text_field($_POST['fullname']);
    $email = sanitize_text_field($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $instype = sanitize_text_field($_POST['instype']);
    $balance = sanitize_text_field($_POST['balance']);

    $email = get_option('admin_email');
    $title = 'New Quote Request';
    $body = '<html> 
  <head> 
      <title></title> 
  </head> 
  <body> 
      <h1>New Quote Request from Website</h1> 
      <table cellspacing="0" style="width: 100%;"> 
          <tr> 
              <th>Name: </th><td>' . $name . '</td> 
          </tr> 
          <tr> 
              <th>Email: </th><td>' . $email . '</td> 
          </tr> 
          <tr> 
              <th>Phone: </th><td>' . $phone . '</td> 
          </tr> 
          <tr> 
              <th>Insurance Type: </th><td>' . $instype . '</td> 
          </tr> 
          <tr> 
              <th>Balance: </th><td>' . $balance . '</td> 
          </tr> 
      </table> 
  </body> 
  </html>';
    $content_type = function () {
        return 'text/html';
    };
    $headers = array('From: ' . get_option('admin_email'));
    add_filter('wp_mail_content_type', $content_type);
    wp_mail($email, $title, $body, $headers);
    remove_filter('wp_mail_content_type', $content_type);
    //Insert into database
    global $wpdb;
    $wpdb->insert("wp_quotes", array(
        "fullname" => $name,
        "email" => $email,
        "phone" => $phone,
        "instype" => $instype,
        "balance" => $balance,
        "created_at" => date('Y-m-d h:i:sa')
    ));
    echo "<script>Swal.fire({
    icon: 'success',
    text: 'Message Sent',
  })
  if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
  }</script><script>
</script>";
} ?>

<!-- HERO BANNER BEGINS -->

<div class="wrapper hero-banner">
    <div class="container col-xxl-8 px-4 py-5 cont-banner">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-4">
            </div>
            <div class="col-lg-8 pt-5">
                <h1 class="display-5 fw-bold lh-1 mb-3 title-banner animate__animated animate__fadeInUp"><?php the_title(); ?></h1>
                <p class="p-standard"><?php echo get_the_content(); ?></p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start pt-4 buttons-banner">
                    <button class="cust-button mar-r-3"><a href="#">Let's Get Started</a></button>
                    <button class="cust-button-white mar-t-3"><a href="#">Get A Quote</a></button>
                </div>
                <p class="pt-5 client animate__animated animate__fadeInUp">Trust Client 20K+ <img src="<?php echo get_template_directory_uri() ?>/assets/img/clients.png" alt=""></p>
            </div>
        </div>
    </div>
</div>

<!-- HERO BANNER ENDS -->



<!-- SERVICES SECTION BEGINS -->

<div class="container pad-t-b">
    <h2 class="text-center section-title-centered wow animate__animated animate__fadeInUp">We’re covering all the insurance fields</h2>
    <div class="container">
        <div class="row">
            <div class="card-deck mar-t2-b pt-5 wow animate__animated animate__fadeInUp">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'insurance-services',
                    'post_status' => 'publish',
                    'posts_per_page' => 8
                ));

                $i = 0;
                while ($query->have_posts()) {
                    $query->the_post();
                    $post_id = get_the_ID();
                ?>
                    <div class="card  card-wrp wow animate__animated animate__fadeInUp">
                        <a href="<?php echo get_permalink(); ?>">
                            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <div class="card-body">
                                <div class="icon-service">
                                    <img class="img-icon-service" src="<?php echo get_field("serviceicon", $post_id);; ?>" alt="">
                                </div>
                                <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                                <p class="card-text"><?php echo get_the_content(); ?></p>
                            </div>
                        </a>
                    </div>
                <?php $i++;
                    if ($i == 4) {
                        echo '</div>
        </div>
        <div class="row">
            <div class="card-deck c-pt-4 wow animate__animated animate__fadeInUp">';
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="container text-center pt-5">
        <button type="button" class="cust-button-outline text-center wow animate__animated animate__fadeInLeft">See all services</button>
    </div>

</div>

<!-- SERVICES SECTION ENDS -->


<!-- CONTACT SECTION BEGINS -->

<div class="wrapper-contact">
    <section class="container mt-5 contact-section">
        <div class="row">
            <div class="col-md-12">
                <span class="sub wow animate__animated animate__fadeInLeft animate__delay-2s">Get In Touch</span>
                <h2 class="section-title-left mar-t-3 wow animate__animated animate__fadeInLeft">Get Your Insurance Today!</h2>
                <form method="post" class="frm mar-t-5">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="input1" class="form-label">Your Full Name</label>
                            <input type="text" class="form-control" id="input1" name="fullname" placeholder="John Dames" required>
                        </div>
                        <div class="col-md-6">
                            <label for="input2" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="input2" name="email" placeholder="example@gmail.com" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="input3" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="input3" name="phone" placeholder="(401)715-344" required>
                        </div>
                        <div class="col-md-6">
                            <label for="input4" class="form-label">Insurance Type</label>
                            <select class="form-control" name="instype" required>
                                <option value="" required>Select Type</option>
                                <option>Business Insurance</option>
                                <option>Home Insurance</option>
                                <option>Life Insurance</option>
                                <option>Health Insurance</option>
                                <option>Marriage Insurance</option>
                                <option>Travel Insurance</option>
                                <option>Cyber Insurance</option>
                                <option>Vehicle Insurance</option>
                            </select>
                        </div>

                        <div class="col-md-12 pt-3">
                            <div class="slider-container">
                                <p for="input4" class="form-label">Limits of Balance</p>
                                <input type="range" min="0" max="100" value="25" name="balance" class="slider" required id="slider1" oninput="this.nextElementSibling.value = this.value">


                                <output class="slider-value" id="slider1-value">25</output>

                                <span>Selected Value:</span>
                                <output class="sum-value"></output>
                            </div>


                        </div>


                    </div>
                    <div class="submit-button ">
                    <button type="submit" name="quotebtn" class="cust-button wow animate__animated animate__fadeInLeft">Get a Quote</button>
                    </div>
                </form>
            </div>
            <div class="col-md-0"></div>
        </div>
    </section>
</div>




<!-- CONTACT SECTION ENDS -->








<?php get_footer(); ?>