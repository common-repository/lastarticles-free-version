<?php
/*
Plugin Name: LastArticles
Plugin URI: http://wordbook.creation-site-france.org/extension-lastarticles-wordpress/
Description: Une simple extension vous permettant de lister les X derniers articles de votre blog WordPress d'une catégorie Y. Ensuite, pour ajouter ce listing à un ou une de vos pages ou articles, il vous suffit d'intégrer ce shortcode de la manière suivante [lastarticles nombre="X" cat="Y"] (où X est le nombre d'articles à afficher et Y le numéro de la catégorie sélectionnée), à l'endroit où vous désirez afficher vos derniers articles!
Author: JulienWBK
Version: 1.6
Author URI: http://wordbook.creation-site-france.org/
License: GPL2
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

function lst_chargercss() {
$plugin_url = trailingslashit(get_option('siteurl')).'wp-content/plugins/'.basename(dirname(__FILE__)).'/';
?>
<link rel="stylesheet" href="<?php echo $plugin_url;?>css/style-lastarticles.css" type="text/css" media="all" />
<?php
}
add_action('wp_head', 'lst_chargercss');

/** Fonction permettant de lister les derniers articles */
function lst_derniers_articles($atts, $retourner_articles = null) {
	extract(shortcode_atts(array("nombre" => '10', "cat" => ''), $atts));
    /** requete sur la BDD pour recuperer les articles */
	global $post;
	$mesarticles = get_posts('numberposts='.$nombre.'&order=DESC&orderby=post_date&category='.$cat);
	$retourner_articles.='<ul class="lst_afficherarticles">';
	foreach($mesarticles as $post) : setup_postdata($post);
		$retourner_articles.='<li class="lst_lien">Publié le&nbsp;'.get_the_date().'&nbsp;-&nbsp;<a href="'.get_permalink().'" title="Se rendre sur l\'article '.the_title("","",false).'" target="_self">'.the_title("","",false).'</a>&nbsp;-&nbsp;par&nbsp;'.get_the_author_link().'.</li>';
	endforeach;
	$retourner_articles.='</ul> ';
	/** on renvoi la liste */
	return $retourner_articles;
}
add_shortcode("lastarticles", "lst_derniers_articles");

/** Fin du script PHP de l'extension LastArticles */
?>