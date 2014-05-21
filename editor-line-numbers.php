<?php
/*
	Plugin Name: Editor Line Numbers
	Plugin URI: https://github.com/mintcreative/editor-line-numbers
	Description: Adds line numbers to the theme and plugin editors in the admin panel.
	Version: 1.0.0.0.0.0.0.0.0.1
	Author: David Wellock
	Author URI: https://github.com/mintcreative
	Notes: Adapted from the original JS, http://alan.blog-city.com/jquerylinedtextarea.htm by Alan Williamson
*/
 
class numero {
 
	function numero() {
		add_action('admin_head-theme-editor.php', array($this, 'admin_header'));
		add_action('admin_footer-theme-editor.php', array($this, 'admin_footer'));
		add_action('admin_head-plugin-editor.php', array($this, 'admin_header'));
		add_action('admin_footer-plugin-editor.php', array($this, 'admin_footer',));
	}
 
	function admin_header() {
	?>
		<style type="text/css">
			.linedwrap {
				border: 1px solid #c0c0c0;
				padding: 3px;
				width: 96% !important;
				#border: 1px solid blue;
				overflow: auto;
			}
 
			.linedwrap {
				margin-right: 0px;
 
			}
 
			.linedtextarea {
				padding: 0px;
				margin: 0px;
				width: auto !important;
				#border: 1px solid red;
				overflow: hidden;
			}
 
			.linedtextarea textarea, .linedwrap .codelines .lineno {
				font-size: 1em;
				font-family: monospace;
				line-height: normal !important;
			}
 
			.linedtextarea textarea {
				padding-right:0.3em;
				padding-top:0.3em;
				border: 0;
			}
 
			.linedwrap .lines {
				margin-top: 0px;
				width: 8% !important;
				max-width: 50px;
				float: left;
				overflow: hidden;
				border-right: 1px solid #c0c0c0;
				margin-right: 0px;
				#border: 1px solid orange;
			}

			@media all and (max-width: 1200px) {
			  .linedwrap .lines {
			    width: 8% !important;
			  }
			  .linedtextarea{
			  	width: 91% !important;
			  }
			}
 
			.linedwrap .codelines {
				padding-top: 5px;
			}
 
			.linedwrap .codelines .lineno {
				color:#AAAAAA;
				padding-right: 0.5em;
				padding-top: 0.0em;
				text-align: right;
				white-space: nowrap;
			}
			
			textarea {
				font-size: 1em !important;
				font-family: monospace !important;
				line-height: normal !important;
			}
 
			#template .linedwrap div {
				margin-right: 0px !important;
			}

			#template div .lineno{float:none;}
 
 
			@media all and (max-width: 782px) {
			  #template div {
			    float: left;
			  }
			}
		</style>
		<?php
	}
 
	function admin_footer() {
		?>
		<script src="<?php echo plugins_url( 'jquery-linedtextarea.js' , __FILE__ ); ?>"></script>
		<script type="text/javascript" charset="utf-8">
			jQuery(function ($) {
				$("textarea").addClass("lined");
			});
 
			jQuery(function ($) {
				$(".lined").linedtextarea(
					{selectedLine: 1}
				);
			});		
		</script>
		
		<?php
	}
}
 
$numero_plugin = new numero();