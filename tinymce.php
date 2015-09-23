<?php
/**
 * Replace all text areas with TinyMCE editor.
 *
 * @author  Federico Liva <fede91it@gmail.com>
 * @license MIT License (MIT)
 * @version 1.0.0
 */

/**
 * Class AdminerTinyMce
 */
class AdminerTinyMce
{
	/**
	 * The root's relative URI of the plugin file.
	 *
	 * @var string
	 */
	protected $plugin_uri;

	/**
	 * Obtain the relative path.
	 */
	public function __construct()
	{
		$this->plugin_uri = str_replace(dirname(__DIR__), '', __DIR__) . '/tinymce/tinymce.min.js';
	}

	/**
	 * Inject TinyMCE and specify language.
	 */
	public function head()
	{
		echo '<script type="text/javascript" src="' . $this->plugin_uri . '"></script>';
		echo '<script>tinymce.init({selector: "textarea[name^=\"fields\"]", language: "' . get_lang() . '", plugins: ["advlist","anchor","autolink","autoresize","autosave","bbcode","charmap","code","colorpicker","contextmenu","directionality","emoticons","example","example_dependency","fullpage","fullscreen","hr","image","insertdatetime","layer","legacyoutput","link","lists","importcss","media","nonbreaking","noneditable","pagebreak","paste","preview","print","save","searchreplace","spellchecker","tabfocus","table","template","textcolor","textpattern","visualblocks","visualchars","wordcount"]});</script>';
	}
}
