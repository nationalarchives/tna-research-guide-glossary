<?php
/**
 * Plugin Name: TNA research guide glossary
 * Plugin URI: https://github.com/nationalarchives/tna-research-guide-glossary
 * Description: Display the current research guide glossary
 * Version: 0.1
 * Author: Andy Aldridge (andrew.aldridge@nationalarchives.gsi.gov.uk)
 * Author URI: https://github.com/nationalarchives/
 * License: GPL2
 */

add_action('admin_menu', 'tna_research_guide_glossary_settings');
function tna_research_guide_glossary_settings()
{
    add_options_page('Research guide glossary', 'Research guide glossary', 'edit_pages', 'rg-glossary',
        'tna_research_guide_glossary_settings_page');
}

function tna_research_guide_glossary_settings_page()
{
    // admin
	require_once('research-guide-glossary-data.php');
    ?>
    <div class="wrap">
        <h2>Research guide glossary</h2>

		<?php
		foreach ($glossaryDefinitions as $term => $definition) {
			echo"<div style=\"margin-top:12px; padding:4px; border-top: 1px solid green;\"><h2>" . str_replace('-', ' ' , $term) . "</h2><textarea style=\"width:100%;\" readonly>[glossary term=\"$term\"]" . str_replace('-', ' ' , $term) . "[/glossary]</textarea><p>$definition</p></div>";
		}
		?>
    </div>
<?php

}
?>