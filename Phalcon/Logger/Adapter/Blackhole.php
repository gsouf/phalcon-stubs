<?php 

namespace Phalcon\Logger\Adapter {

	class Blackhole extends \Phalcon\Logger\Adapter implements \Phalcon\Logger\AdapterInterface {

		public function getFormatter(){ }


		public function logInternal($message, $type, $time, $context){ }


		public function close(){ }

	}
}
