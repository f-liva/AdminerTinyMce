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
	 * @var mixed
	 */
	protected $folder_uri;

	/**
	 * Obtain the relative path.
	 */
	public function __construct($tinymce_folder = null)
	{
		$this->folder_uri = $tinymce_folder ?: str_replace(dirname(__DIR__), '', __DIR__) . '/tinymce';
	}

	/**
	 * Inject TinyMCE and specify language.
	 */
	public function head()
	{
		echo '<script type="text/javascript" src="' . $this->$folder_uri . '/tinymce.min.js"></script>';
		echo '<script>tinymce.init({selector: "textarea", language: "' . get_lang() . '"});</script>';
	}
}
