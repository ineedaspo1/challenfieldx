<?php
/**
 * Template for displaying price of course within the loop.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/loop/course/price.php.
 *
 * @author  ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.1
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$course = LP_Global::course();

if ( ! $course ) {
	return;
}
$class = ( $course->has_sale_price() ) ? ' has-origin' : '';
if ( $course->is_free() ) {
	$class .= ' free-course';
}
?>

<div class="course-price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

</div>