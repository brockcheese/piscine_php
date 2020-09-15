<?php

require_once '../ex01/Vertex.class.php';

class Vector {
	private $_x;
	private $_y;
	private $_z;
	private $_w = 0.0;
	static $verbose = False;

	function __construct($vars) {
		if (isset($vars['dest'])) {
			if (isset($vars['orig'])) {
				$orig = new Vertex(array('x' => $vars['orig']->readx(), 'y' => $vars['orig']->ready(), 'z' => $vars['orig']->readz()));
			} else {
				$orig = new Vertex(array('x' => 0, 'y' => 0, 'z' => 0, 'w' => 1));
			}
			$this->_x = $vars['dest']->readx() - $orig->readx();
			$this->_y = $vars['dest']->ready() - $orig->ready();
			$this->_z = $vars['dest']->readz() - $orig->readz();
		}
		if(Self::$verbose)
			printf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
	}

	function __destruct() {
		if(Self::$verbose)
			printf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
	}

	function __toString() {
		return(sprintf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f )", $this->_x, $this->_y, $this->_z, $this->_w));
	}

	static function doc() {
		$fd = fopen("../ex02/Vector.doc.txt", 'r');
		while ($fd && !feof($fd))
			echo fgets($fd);
	}

	public function magnitude() {
		return (float)sqrt(($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z));
	}

	public function normalize() {
		$mag = $this->magnitude();
		if ($mag == 1 || $mag == 0)
			return clone $this;
		return new Vector(array('dest' => new Vertex(array('x' => $this->_x / $mag, 'y' => $this->_y / $mag, 'z' => $this->_z / $mag ))));
	}

	public function add($rhs) {
		return new Vector(array('dest' => new Vertex(array('x' => $this->_x + $rhs->_x, 'y' => $this->_y + $rhs->_y, 'z' => $this->_z + $rhs->_z))));
	}

	public function sub($rhs) {
		return new Vector(array('dest' => new Vertex(array('x' => $this->_x - $rhs->_x, 'y' => $this->_y - $rhs->_y, 'z' => $this->_z - $rhs->_z))));
	}

	public function opposite() {
		return new Vector(array('dest' => new Vertex(array('x' => $this->_x * -1, 'y' => $this->_y * -1, 'z' => $this->_z * -1))));
	}

	public function scalarProduct($k) {
		return new Vector(array('dest' => new Vertex(array('x' => $this->_x * $k, 'y' => $this->_y * $k, 'z' => $this->_z * $k))));
	}

	public function dotProduct($rhs) {
		return (float)(($this->_x * $rhs->_x) + ($this->_y * $rhs->_y) + ($this->_z * $rhs->_z));
	}

	public function cos($rhs) {
		$dp = $this->dotProduct($rhs);
		$mags = $this->magnitude() * $rhs->magnitude();
		return (float)($dp / $mags);
	}

	public function crossProduct($rhs) {
		return new Vector (array('dest' => new Vertex(array
			('x' => ($this->_y * $rhs->_z) - ($this->_z * $rhs->_y),
			'y' => ($this->_z * $rhs->_x) - ($this->_x * $rhs->_z),
			'z' => ($this->_x * $rhs->_y) - ($this->_y * $rhs->_x)))));
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
}

?>
