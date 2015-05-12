<?php 

namespace Phalcon\Logger {

	/**
	 * Phalcon\Logger\Multiple
	 *
	 * Handles multiples logger handlers
	 */
	
	class Multiple {

		protected $_loggers;

		protected $_formatter;

		public function getLoggers(){ }


		public function getFormatter(){ }


		/**
		 * Pushes a logger to the logger tail
		 */
		public function push(\Phalcon\Logger\AdapterInterface $logger){ }


		/**
		 * Sets a global formatter
		 */
		public function setFormatter(\Phalcon\Logger\FormatterInterface $formatter){ }


		/**
		 * Sends a message to each registered logger
		 */
		public function log($message, $type=null){ }


		/**
		 * Sends/Writes an emergency message to the log
		 */
		public function emergency($message){ }


		/**
		 * Sends/Writes a debug message to the log
		 */
		public function debug($message){ }


		/**
		 * Sends/Writes an error message to the log
		 */
		public function error($message){ }


		/**
		 * Sends/Writes an info message to the log
		 */
		public function info($message){ }


		/**
		 * Sends/Writes a notice message to the log
		 */
		public function notice($message){ }


		/**
		 * Sends/Writes a warning message to the log
		 */
		public function warning($message){ }


		/**
		 * Sends/Writes an alert message to the log
		 */
		public function alert($message){ }

	}
}
