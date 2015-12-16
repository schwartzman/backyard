<?php
namespace backyard;

function p($x){
	echo '<pre>';
	print_r($x);
	echo '</pre>';
}

function d($x){
	echo '<pre>';
	var_dump($x);
	echo '</pre>';
}

// must be run in the loop
function menu_item_print() {
	echo '<p class="mi_head h4"><span class="title">'.get_the_title().'</span>';
	echo ( get_field('tags') ) ? ' | '.implode(get_field('tags'), ', ') : '';
	echo ( get_field('price') ) ? ' | $'.get_field('price') : '';
	echo ( get_field('note') ) ? ' | <span class="note">'.get_field('note').'</span>' : '';
	echo '</p>';
	if (get_field('g_price')):
		echo '<p class="wine_dets h4">Glass | $'.get_field('g_price').'<br>Bottle | $'.get_field('b_price').'</p>';
	endif;
	if( have_rows('ings') ):
		echo '<p class="ingredients">';
	    while ( have_rows('ings') ) : the_row();
		    $print_ings[] = get_sub_field('ing');
	    endwhile;
	    echo implode($print_ings, ' . ');
		echo '</p>';
	endif;
}

?>
