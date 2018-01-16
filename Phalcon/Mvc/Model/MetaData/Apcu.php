<?php 

namespace Phalcon\Mvc\Model\MetaData {

	/**
	 * Phalcon\Mvc\Model\MetaData\Apcu
	 *
	 * Stores model meta-data in the APCu cache. Data will erased if the web server is restarted
	 *
	 * By default meta-data is stored for 48 hours (172800 seconds)
	 *
	 * You can query the meta-data by printing apcu_fetch('$PMM$') or apcu_fetch('$PMM$my-app-id')
	 *
	 *<code>
	 * $metaData = new \Phalcon\Mvc\Model\Metadata\Apcu(
	 *     [
	 *         "prefix"   => "my-app-id",
	 *         "lifetime" => 86400,
	 *     ]
	 * );
	 *</code>
	 */
	
	class Apcu extends \Phalcon\Mvc\Model\MetaData implements \Phalcon\Mvc\Model\MetaDataInterface, \Phalcon\Di\InjectionAwareInterface {

		const MODELS_ATTRIBUTES = 0;

		const MODELS_PRIMARY_KEY = 1;

		const MODELS_NON_PRIMARY_KEY = 2;

		const MODELS_NOT_NULL = 3;

		const MODELS_DATA_TYPES = 4;

		const MODELS_DATA_TYPES_NUMERIC = 5;

		const MODELS_DATE_AT = 6;

		const MODELS_DATE_IN = 7;

		const MODELS_IDENTITY_COLUMN = 8;

		const MODELS_DATA_TYPES_BIND = 9;

		const MODELS_AUTOMATIC_DEFAULT_INSERT = 10;

		const MODELS_AUTOMATIC_DEFAULT_UPDATE = 11;

		const MODELS_DEFAULT_VALUES = 12;

		const MODELS_EMPTY_STRING_VALUES = 13;

		const MODELS_COLUMN_MAP = 0;

		const MODELS_REVERSE_COLUMN_MAP = 1;

		protected $_prefix;

		protected $_ttl;

		protected $_metaData;

		/**
		 * \Phalcon\Mvc\Model\MetaData\Apcu constructor
		 *
		 * @param array options
		 */
		public function __construct($options=null){ }


		/**
		 * Reads meta-data from APCu
		 */
		public function read($key){ }


		/**
		 * Writes the meta-data to APCu
		 */
		public function write($key, $data){ }

	}
}
