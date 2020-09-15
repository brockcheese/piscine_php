<?php

class NightsWatch implements IFighter{
	private $vars = array();

	public function recruit($guy) {
		if ($guy instanceof IFighter)
			$this->vars[get_class($guy)] = $guy;
	}
	public function fight() {
		foreach($this->vars as $name) {
			$name->fight();
		}
	}
}

?>
