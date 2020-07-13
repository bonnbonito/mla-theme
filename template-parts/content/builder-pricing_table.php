<?php
/**
 * Template part for displaying a builder content.
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$table1 = get_sub_field( 'pricing_table_1' );
$table2 = get_sub_field( 'pricing_table_2' );
$table3 = get_sub_field( 'pricing_table_3' );

?>
<section class="hero image-content">
	<div class="hero-body">
		<div class="container">
			<div class="pricing-table">
				<div class="price-table">
					<h3><?php echo $table1['title']; ?></h3>
					<hr class="line">
					<?php echo $table1['content']; ?>
					<button><?php echo $table1['price']; ?></button>
				</div>
				<div class="price-divider"></div>
				<div class="price-table">
					<h3><?php echo $table2['title']; ?></h3>
					<hr class="line">
					<?php echo $table2['content']; ?>
					<button><?php echo $table2['price']; ?></button>
				</div>
				<div class="price-divider"></div>
				<div class="price-table">
					<h3><?php echo $table3['title']; ?></h3>
					<hr class="line">
					<?php echo $table3['content']; ?>
					<button><?php echo $table3['price']; ?></button>
				</div>
			</div>
		</div>
	</div>
</section>
