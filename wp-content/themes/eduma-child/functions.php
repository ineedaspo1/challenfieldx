<?php

function thim_child_enqueue_styles() {
	wp_enqueue_style( 'thim-parent-style', get_template_directory_uri() . '/style.css', array(), THIM_THEME_VERSION  );
}

add_action( 'wp_enqueue_scripts', 'thim_child_enqueue_styles', 1000 );


// checks if the user is logged in, if not, redirects to the user account page uses //pmpro_checkout_before_submit_button hook
add_action('pmpro_checkout_before_submit_button', 'pmpro_checkout_redirect');

function pmpro_checkout_redirect(){
    if( !is_user_logged_in() ){
        wp_redirect( home_url( '/account/' ) );
        exit;
    }
}

add_shortcode('Post-shortcode', 'get_testimonial');


function get_testimonial(){
             if( have_rows('testimonial_group') ):
     while( have_rows('testimonial_group') ): the_row(); 

        // Get sub field values.
        $username = get_sub_field('user_name');
        $description = get_sub_field('testimonial');
        $profile_photo = get_sub_field('profile_photo');
        
        $trimmed_content = wp_trim_words($description, 40);
        echo '<div class="testimonial_container">
                <div class="testimonial_wrapper">
                    <img class="testimonial_img" decoding="async" width="113" height="113" src='.$profile_photo.' loading="lazy">
                    <div>
                        <h4>'.$username.'</h4>
                        <i aria-hidden="true" class="far fa-play-circle"></i>
                    </div>
                </div>
                <div class="testimonial_content">'.$trimmed_content.'</div>
               </div>';
       
     endwhile;
        endif;
        
}

add_action( 'register_form', 'crf_registration_form' );
function crf_registration_form() {
	$year = ! empty( $_POST['year_of_birth'] ) ? intval( $_POST['year_of_birth'] ) : '';
    $firstname = ! empty( $_POST['first_name'] ) ? intval( $_POST['first_name'] ) : '';
    ?>

    <p>
                <input
                    placeholder="<?php esc_attr_e( 'Firstname', 'crf' ); ?>"
                    type="text" name="firstname" value="<?php echo esc_attr( $firstname ); ?>"
                    class="input required"/>
            </p>

            <p>
		<label for="year_of_birth"><?php esc_html_e( 'Year of birth', 'crf' ) ?><br/>
			<input type="number"
			       min="1900"
			       max="2017"
			       step="1"
			       id="year_of_birth"
			       name="year_of_birth"
			       value="<?php echo esc_attr( $year ); ?>"
			       class="input"
			/>
		</label>
	</p>
    <?php
}

add_action( 'user_register', 'crf_user_register' );
function crf_user_register( $user_id ) {
	if ( ! empty( $_POST['firstname'] ) ) {
		update_user_meta( $user_id, 'firstname', intval( $_POST['firstname'] ) );
	}
	if ( ! empty( $_POST['year_of_birth'] ) ) {
		update_user_meta( $user_id, 'year_of_birth', intval( $_POST['year_of_birth'] ) );
	}
}



add_action( 'user_new_form', 'crf_admin_registration_form' );
function crf_admin_registration_form( $operation ) {
	if ( 'add-new-user' !== $operation ) {
		// $operation may also be 'add-existing-user'
		return;
	}

	$year = ! empty( $_POST['year_of_birth'] ) ? intval( $_POST['year_of_birth'] ) : '';
 	$firstname = ! empty( $_POST['first_name'] ) ? intval( $_POST['first_name'] ) : '';
	?>
	<h3><?php esc_html_e( 'Personal Information', 'crf' ); ?></h3>

	<table class="form-table">
		<tr>
			<th><label for="year_of_birth"><?php esc_html_e( 'Year of birth', 'crf' ); ?></label> <span class="description"><?php esc_html_e( '(required)', 'crf' ); ?></span></th>
			<td>
				<input type="number"
			      
			       id="firstname"
			       name="firstname"
			       value="<?php echo esc_attr( $firstname ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
	</table>
	<?php
}


add_shortcode('coursemeta-shortcode', 'get_course_meta');
function get_course_meta(){

   
$args = array(
    'post_type' => 'lp_course',
    'posts_per_page' => -1
);
 $post_id = get_the_ID();
 $enrolled_student = get_post_meta($post_id, '_lp_students', true); 
    echo "student:".$enrolled_student;
    //  $lesson = learndash_get_lesson_list(int $post_id);
    // echo "lesson:".$lesson;

$obituary_query = new WP_Query($args);
 if( $obituary_query->have_posts()) :
while ($obituary_query->have_posts()) : $obituary_query->the_post();
  
endwhile;
 endif;

wp_reset_postdata();

}


add_shortcode('lessionemeta-shortcode', 'get_lesson_meta');
function get_lesson_meta(){
$courseargs = array(
    'post_type' => 'lp_course',
    'posts_per_page' => -1
);
$course_query = new WP_Query($courseargs);
 if( $course_query->have_posts()) :
while ($course_query->have_posts()) : $course_query->the_post();
  $course_id = get_the_ID();
 //echo "test";
 echo "courseid==".$course_id;
// $lessoninfo = learndash_get_lesson_list($course_id );
  // $lessoninfo = learndash_get_course_steps_count($course_id);
 // $lessoninfo = lpr_get_number_lesson($course_id);
 //  echo "--lessoninfo:".$lessoninfo;
endwhile;
 endif;

wp_reset_postdata();

 



}

