<?php
  // Images sizes  
  add_theme_support("post-thumbnails");



  // Enqueue files
  function add_theme_scripts() {
 

    wp_enqueue_style("style", get_stylesheet_uri());

    //Scripts
    wp_enqueue_script("modernizr", "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js");
    //wp_enqueue_script("jquery-easing", "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js");

     wp_enqueue_script("font-awesome", "https://kit.fontawesome.com/fab8758424.js");
 
    wp_enqueue_script("main", get_template_directory_uri() . "/js/main.js", array('jquery'), "", true);
  }

  add_action('wp_enqueue_scripts', 'add_theme_scripts');

 
/*Add QUOTES PAGE IN BACKEND*/
function quote_requests_menu() {
		add_menu_page(
			__( 'Quote Requests', 'my-textdomain' ),
			__( 'Quote Requests', 'my-textdomain' ),
			'manage_options',
			'quote-requests',
			'quote_request_page_contents',
			'dashicons-schedule',
			3
		);
	}

	add_action( 'admin_menu', 'quote_requests_menu' );


	function quote_request_page_contents() {
		
		?>
			<h1>
				<?php esc_html_e( 'Quote Requests', 'my-plugin-textdomain' ); ?>
			</h1>
<div id="table-responsive">
    <table id="customers"  class="table table-striped"> <tr>
    <th>SL NO</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Insurance Type</th>
    <th>Balance</th>
    <th>Time</th>
    </tr>
    <?php
global $wpdb;
		$query = $wpdb->get_results("SELECT * FROM wp_quotes", ARRAY_A);
		$i=1;
 foreach($query as $row)
 {
  ?>
        <tr>
        <td align="center" ><?php echo $i; ?></td>
        <td align="center" ><?php echo $row['fullname']; ?></td>
        <td align="center" ><?php echo $row['email']; ?></td>
        <td align="center" ><?php echo $row['phone']; ?></td>
        <td align="center" ><?php echo $row['instype']; ?></td>
        <td align="center" ><?php echo $row['balance']; ?></td>
        <td align="center" ><?php echo $row['created_at']; ?></td>
        </tr>
        <?php
       $i++;  
 }
 ?>
    </table>
    </div>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
	text-align:center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
</style>
		<?php
	}

























  
  
?>