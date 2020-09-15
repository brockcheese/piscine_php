<?php

class UnholyFactory {

	public $vars = array();

	public function absorb($new){
		if (get_parent_class($new) === "Fighter") {
			if (isset($this->vars[$new->getStr()])) {
				echo("(Factory already absorbed a fighter of type " . $new->getStr() . ")\n");
			} else {
				$this->vars[$new->getStr()] = $new;
				echo("(Factory absorbed a fighter of type " . $new->getStr() . ")\n");
			}
		} else {
			echo("(Factory can't absorb this, it's not a fighter)\n");
		}
	}

	public function fabricate($str) {
		if (isset($this->vars[$str])) {
			echo ("(Factory fabricates a fighter of type " . $str . ")\n");
			return (clone $this->vars[$str]);
		} else {
			echo ("(Factory hasn't absorbed any fighter of type " . $str . ")\n");
		}
	}

}

?>
