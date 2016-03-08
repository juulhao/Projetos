<?php

global $wpdb;
$results = $wpdb->get_results( 'SELECT * FROM wp_map_locations WHERE (location_title like "%BooK%") ORDER BY location_address', OBJECT );
$stores = '';
$s = 1;
foreach($results as $store):
	$stores .= "'".$store->location_address."'";
	if( count($results) > $s ) : $stores .= ','; endif;
	$s++;
endforeach;
//echo $stores;
?>
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/typehead.css" rel="stylesheet">
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/typehead/typehead.jquery.js" type="text/javascript"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/typehead/typehead.bundle.js" type="text/javascript"></script>
<div id="scrollable-dropdown-menu">
	<p>Encontre o BooKafé mais próximo de você! Escreva abaixo o seu país, estado ou cidade e selecione o endereço mais próximo na lista que aparece abaixo.</p>
	<input class="typeahead" type="text" placeholder="Encontre lojas BooKafé pelo mundo" onchange="showInfo()">
</div>
<div id="info-box" class="margin-top-20">
</div>
<script type="text/javascript">
var substringMatcher = function(strs) {
	return function findMatches(q, cb) {
		var matches, substringRegex;

		// an array that will be populated with substring matches
		matches = [];

		// regex used to determine if a string contains the substring `q`
		substrRegex = new RegExp(q, 'i');

		// iterate through the pool of strings and for any string that
		// contains the substring `q`, add it to the `matches` array
		$.each(strs, function(i, str) {
		  if (substrRegex.test(str)) {
		    matches.push(str);
		  }
		});

		cb(matches);
	};
};
var stores = [<?php echo $stores; ?>];
jQuery('#scrollable-dropdown-menu .typeahead').typeahead(null, {
	name: 'stores',
	limit: 10,
	source: substringMatcher(stores)
});
jQuery(document).ready(function(){
	$( ".tt-menu" ).bind( "click", function() {
		$('#info-box').html( '<h4>Endereço completo:</h4><address>' + jQuery('.tt-input').val() + '</address>' );
	});
});
</script>
