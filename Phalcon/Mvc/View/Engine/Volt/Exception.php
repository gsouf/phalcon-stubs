<?php 

namespace Phalcon\Mvc\View\Engine\Volt {

	class Exception extends \Phalcon\Mvc\View\Exception implements \Throwable {

		protected $statement;

		public function __construct($message=null, $statement=null, $code=null, \Exception $previous=null){ }


		public function getStatement(){ }

	}
}
