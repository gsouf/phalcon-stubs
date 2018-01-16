<?php 

namespace Phalcon\Mvc\View\Engine\Volt {

	/**
	 * Phalcon\Mvc\View\Exception
	 *
	 * Class for exceptions thrown by Phalcon\Mvc\View
	 */
	
	class Exception extends \Phalcon\Mvc\View\Exception implements \Throwable {

		protected $statement;

		public function __construct($message=null, $statement=null, $code=null, \Exception $previous=null){ }


		/**
		 * Gets currently parsed statement (if any).
		 */
		public function getStatement(){ }

	}
}
