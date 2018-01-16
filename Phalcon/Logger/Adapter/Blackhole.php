<?php 

namespace Phalcon\Logger\Adapter {

	/**
	 * Phalcon\Logger\Adapter\Blackhole
	 *
	 * Any record it can handle will be thrown away.
	 */
	
	class Blackhole extends \Phalcon\Logger\Adapter implements \Phalcon\Logger\AdapterInterface {

		/**
		 * Returns the internal formatter
		 */
		public function getFormatter(){ }


		/**
		 * Writes the log to the blackhole
		 */
		public function logInternal($message, $type, $time, $context){ }


		/**
		 * Closes the logger
		 */
		public function close(){ }

	}
}
