<?php
	abstract class Fighter {
		abstract function fight($target);
		private $_string;

		public function __construct($str) {
			$this->_string = $str;
		}

		public function getStr() {
			return($this->_string);
		}
	}
?>
