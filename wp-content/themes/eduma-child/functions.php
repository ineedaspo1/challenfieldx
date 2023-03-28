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
        $profile_photo = get_sub_field('testimonial_profile_pic');
        $trimmed_content = wp_trim_words($description, 40);
        echo '<div class="testimonial_container">
                <div class="testimonial_wrapper">
                    <img class="testimonial_img ttt" decoding="async" width="113" height="113" src='.$profile_photo.' loading="lazy">
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


add_shortcode('coursemeta-shortcode', 'get_course_meta');
function get_course_meta(){

   
$args = array(
    'post_type' => 'lp_course',
    'posts_per_page' => -1
);
 $course_id = get_the_ID();
 $enrolled_student = get_post_meta($course_id, '_lp_students', true); 
 $course = learn_press_get_course($course_id);
 $post_link = get_post_permalink($course_id);
 if ( $course ) {
			$total_lessons = $course->count_items( LP_LESSON_CPT );
			echo '<div class="course_meta">
				<div class="course_info"><i aria-hidden="true" class="fas fa-book"> </i> <p>Lesson: ' . $total_lessons . '</p></div>
				<div class="course_info"><i aria-hidden="true" class="fa fa-user"></i> <p>Student: '.$enrolled_student.'</p></div>
			</div>
			<a class="course_btn" href='.$post_link.'><span>Start course </span><i aria-hidden="true" class="fas fa-angle-right"></i></a>
			';
		}


wp_reset_postdata();

}


// output the form field


add_action('register_form', 'ad_register_fields',10);
function ad_register_fields() {
?>
    <p class="fname">
        <input placeholder="Firstname" type="text" name="firstname" id="firstname" value="<?php echo esc_attr($_POST['firstname']); ?>" class="input required" />

    </p>
    <p class="lname">
        <input placeholder="Lastname" type="text" name="lastname" id="lastname" value="<?php echo esc_attr($_POST['lastname']); ?>" class="input required" />

    </p>
     
<?php
}

// save new first name
add_filter('pre_user_first_name', 'ad_user_firstname');

function ad_user_firstname($firstname) {
    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
    }
     return $firstname;
}

add_filter('pre_user_last_name', 'ad_user_lastname');

function ad_user_lastname( $lastname) {
 
     if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
    }
    return $lastname;
}











