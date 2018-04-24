<?php
/**
 * This is CLPid Schema file
 *
 * Use it to configure database for CLPid
 *
 * @package       app.Config.Schema.CLPid
 */

/**
 * Using the Schema command line utility
 *
 * Use it to configure database for CLPid
 *
 * cake schema run create CLPid
 */
class CLPidSchema extends CakeSchema {
/**
 * The name property
 *
 * @var string
 */
	public $name = 'CLPid';

/**
 * Before callback.
 *
 * @param array $event Schema object properties
 * @return bool Should process continue
 */
	public function before($event = array()) {
		return true;
	}

/**
 * After callback.
 *
 * @param array $event Schema object properties
 * @return void
 */
	public function after($event = array()) {
	}

/**
 * The CLPid table definition
 *
 * @var array
 */
	public $clpids = array(
		'id' => array('type'    => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		
		'source_identifier_pid' => array('type' => 'string', 'null' => false, 'length' => 255, 'key' => 'index'),
		'source_acquisition_resolve_uri'    => array('type' => 'string', 'null' => false, 'length' => 255, 'key' => 'index'),
		'source_acquisition_content_raw'    => array('type' => 'string', 'null' => false, 'length' => 255, 'key' => 'index'),

		// Required
		'source_acquisition_content_code'    => array('type' => 'integer', 'null' => false, 'length' => 3, 'key' => 'index'),

		'source_acquisition_content_hash'    => array('type' => 'string', 'null' => false, 'length' => 32, 'key' => 'index'),
		
		'content_title' => array('type' => 'text'),
		'content_html'  => array('type' => 'text'),
		'content_tidy'  => array('type' => 'text'),
		'content_text'  => array('type' => 'text'),
		
		'foreign_geo_target_key' => array('type' => 'integer', 'null' => false, 'length' => 10, 'key' => 'index'),
		'foreign_cat_target_key' => array('type' => 'integer', 'null' => false, 'length' => 10, 'key' => 'index'),

		'field' => array('type' => 'string', 'null' => false, 'key' => 'index'),
		
		'content' => array('type' => 'text', 'null' => true, 'default' => null),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'locale' => array('column' => 'locale', 'unique' => 0), 'model' => array('column' => 'model', 'unique' => 0), 'row_id' => array('column' => 'foreign_key', 'unique' => 0), 'field' => array('column' => 'field', 'unique' => 0))
	);

}
