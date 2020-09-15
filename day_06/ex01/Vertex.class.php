<?php

require_once '../ex00/Color.class.php';

class Vertex {
	private $_x;
	private $_y;
	private $_z;
	private $_w = 1.0;
	private $_color;
	static $verbose = False;

	function __construct($vars) {
		$this->_x = $vars['x'];
		$this->_y = $vars['y'];
		$this->_z = $vars['z'];
		if (isset($vars['w']))
			$this->_w = $vars['w'];
		if (isset($vars['color'])) {
			$this->_color = $vars['color'];
		} else {
			$this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
		}
		if (Self::$verbose)
			printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
	}

	function __destruct() {
		if (Self::$verbose)
			printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
	}

	function __toString() {
		if (Self::$verbose)
			return (sprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) )", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue));
		return (sprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", $this->_x, $this->_y, $this->_z, $this->_w));
	}

	static function doc() {
		$fd = fopen("../ex01/Vertex.doc.txt", 'r');
		while ($fd && !feof($fd))
			echo fgets($fd);
	}

	function readx() {
		return $this->_x;
	}

	function ready() {
		return $this->_y;
	}

	function readz() {
		return $this->_z;
	}

	function readw() {
		return $this->_w;
	}

	function readColor() {
		return $this->_color;
	}

	function writex($x) {
		$this->_x = $x;
	}

	function writey($y) {
		$this->_y = $y;
	}

	function writez($z) {
		$this->_z = $z;
	}

	function writew ($w) {
		$this->_w = $w;
	}

	function writeColor($color) {
		$this->_color = $color;
	}
}

?>
