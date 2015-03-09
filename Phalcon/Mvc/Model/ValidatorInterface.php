<?php 

namespace Phalcon\Mvc\Model {

    /**
     * Phalcon\Mvc\Model\ValidatorInterface initializer
     */
    interface ValidatorInterface
        {

        /**
         * Returns messages generated by the validator
         *
         * @return array
         */
        public function getMessages();


        /**
         * Executes the validator
         *
         * @param \Phalcon\Mvc\ModelInterface $record
         * @return boolean
         */
        public function validate($record);

    }
}
