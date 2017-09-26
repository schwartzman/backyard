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

/**
 * Generate Wufoo forms
 * @param  string   $handle   arbitrary identifier
 * @param  string   $id       Wufoo identifier
 * @param  string   $height   Wufoo-generated
 * @return string             bunch of markup & script
 */
function form($handle, $id, $height)
{
	$res = <<<EOT
<div id="wufoo-$id">
Fill out our <a href="https://emmafountain.wufoo.eu/forms/$id">$handle form</a>.
</div>
<script type="text/javascript">var $id;(function(d, t) {
var s = d.createElement(t), options = {
'userName':'emmafountain',
'formHash':'$id',
'autoResize':true,
'height':'$height',
'async':true,
'host':'wufoo.eu',
'header':'hide',
'ssl':true};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.eu/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
try { $id = new WufooForm();$id.initialize(options);$id.display(); } catch (e) {}};
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>
EOT;
return $res;
}
?>
