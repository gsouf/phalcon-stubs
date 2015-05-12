<?php 

namespace Phalcon {

	/**
	 * Phalcon\Text
	 *
	 * Provides utilities to work with texts
	 */
	
	abstract class Text {

		const RANDOM_ALNUM = 0;

		const RANDOM_ALPHA = 1;

		const RANDOM_HEXDEC = 2;

		const RANDOM_NUMERIC = 3;

		const RANDOM_NOZERO = 4;

		/**
		 * Converts strings to camelize style
		 *
		 *<code>
		 *      echo \Phalcon\Text::camelize('coco_bongo'); //CocoBongo
		 *</code>
		 */
		public static function camelize($str){ }


		/**
		 * Uncamelize strings which are camelized
		 *
		 *<code>
		 *      echo \Phalcon\Text::camelize('CocoBongo'); //coco_bongo
		 *</code>
		 */
		public static function uncamelize($str){ }


		/**
		 * Adds a number to a string or increment that number if it already is defined
		 *
		 *<code>
		 *	echo \Phalcon\Text::increment("a"); // "a_1"
		 *	echo \Phalcon\Text::increment("a_1"); // "a_2"
		 *</code>
		 *
		 * @param string $str
		 * @param string $separator
		 * @return string
		 */
		public static function increment($str, $separator=null){ }


		/**
		 * Generates a random string based on the given type. Type is one of the RANDOM_* constants
		 *
		 *<code>
		 *	echo \Phalcon\Text::random(Phalcon\Text::RANDOM_ALNUM); //"aloiwkqz"
		 *</code>
		 *
		 * @param int type
		 * @param int length
		 * @return string
		 */
		public static function random($type=null, $length=null){ }


		/**
		 * Check if a string starts with a given string
		 *
		 *<code>
		 *	echo \Phalcon\Text::startsWith("Hello", "He"); // true
		 *	echo \Phalcon\Text::startsWith("Hello", "he"); // false
		 *	echo \Phalcon\Text::startsWith("Hello", "he", false); // true
		 *</code>
		 */
		public static function startsWith($str, $start, $ignoreCase=null){ }


		/**
		 * Check if a string ends with a given string
		 *
		 *<code>
		 *	echo \Phalcon\Text::endsWith("Hello", "llo"); // true
		 *	echo \Phalcon\Text::endsWith("Hello", "LLO"); // false
		 *	echo \Phalcon\Text::endsWith("Hello", "LLO", false); // true
		 *</code>
		 */
		public static function endsWith($str, $end, $ignoreCase=null){ }


		/**
		 * Lowercases a string, this function makes use of the mbstring extension if available
		 */
		public static function lower($str){ }


		/**
		 * Uppercases a string, this function makes use of the mbstring extension if available
		 */
		public static function upper($str){ }

	}
}
