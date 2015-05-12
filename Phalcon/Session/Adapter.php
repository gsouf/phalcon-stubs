<?php 

namespace Phalcon\Session {

	/**
	 * Phalcon\Session\Adapter
	 *
	 * Base class for Phalcon\Session adapters
	 */
	
	abstract class Adapter {

		protected $_uniqueId;

		protected $_started;

		protected $_options;

		/**
		 * \Phalcon\Session\Adapter constructor
		 *
		 * @param array options
		 */
		public function __construct($options=null){ }


		/**
		 * Starts the session (if headers are already sent the session will not be started)
		 *
		 * @return boolean
		 */
		public function start(){ }


		/**
		 * Sets session's options
		 *
		 *<code>
		 *	session->setOptions(array(
		 *		'uniqueId' => 'my-private-app'
		 *	));
		 *</code>
		 *
		 * @param array options
		 */
		public function setOptions($options){ }


		/**
		 * Get internal options
		 *
		 * @return array
		 */
		public function getOptions(){ }


		/**
		 * Gets a session variable from an application context
		 *
		 * @param string index
		 * @param mixed defaultValue
		 * @param boolean remove
		 * @return mixed
		 */
		public function get($index, $defaultValue=null, $remove=null){ }


		/**
		 * Sets a session variable in an application context
		 *
		 *<code>
		 *	session->set('auth', 'yes');
		 *</code>
		 *
		 * @param string index
		 * @param string value
		 */
		public function set($index, $value){ }


		/**
		 * Check whether a session variable is set in an application context
		 *
		 *<code>
		 *	var_dump($session->has('auth'));
		 *</code>
		 *
		 * @param string index
		 */
		public function has($index){ }


		/**
		 * Removes a session variable from an application context
		 *
		 *<code>
		 *	$session->remove('auth');
		 *</code>
		 */
		public function remove($index){ }


		/**
		 * Returns active session id
		 *
		 *<code>
		 *	echo $session->getId();
		 *</code>
		 */
		public function getId(){ }


		/**
		 * Set the current session id
		 *
		 *<code>
		 *	$session->setId($id);
		 *</code>
		 *
		 * @param string id
		 */
		public function setId($id){ }


		/**
		 * Check whether the session has been started
		 *
		 *<code>
		 *	var_dump($session->isStarted());
		 *</code>
		 */
		public function isStarted(){ }


		/**
		 * Destroys the active session
		 *
		 *<code>
		 *	var_dump(session->destroy());
		 *</code>
		 */
		public function destroy(){ }


		/**
		 * Alias: Gets a session variable from an application context
		 *
		 * @param string index
		 * @return mixed
		 */
		public function __get($index){ }


		/**
		 * Alias: Sets a session variable in an application context
		 *
		 * @param string index
		 * @param string value
		 */
		public function __set($index, $value){ }


		/**
		 * Alias: Check whether a session variable is set in an application context
		 *
		 * @param string index
		 */
		public function __isset($index){ }


		/**
		 * Alias: Removes a session variable from an application context
		 */
		public function __unset($index){ }

	}
}
