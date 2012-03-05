<?php

/**
 * @file search-results.tpl.php
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependant to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $type: The type of search, e.g., "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 */

/* Modifications by Daniel and Steve
 */

?>
	<div id="search-<?php print $type; ?>-results">
  
   <?php
	if($type == "node")
	  print '<h3 class="title">Inhalte</h3>';
	elseif($type == "user" )
	  print '<h3 class="title">Köpfe </h3>';

      print $search_results; 
   
    ?>
	</div>
<?php print $pager; ?>

