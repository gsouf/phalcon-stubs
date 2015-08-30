<?php 

namespace Phalcon\Mvc\Collection {

	interface BehaviorInterface {

		public function __construct($options=null);


		public function notify($type, \Phalcon\Mvc\CollectionInterface $collection);


		public function missingMethod(\Phalcon\Mvc\CollectionInterface $collection, $method, $arguments=null);

	}
}
