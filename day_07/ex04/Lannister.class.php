<?php

class Lannister {

	function sleepWith($c) {
		if (get_parent_class($c) === "Lannister") {
			if (get_class($this) === "Jaime" && get_class($c) === "Cersei") {
				echo ("With pleasure, but only in a tower in Winterfell, then.\n");
			} else {
				echo ("Not even if I'm drunk !\n");
			}
		} else {
			echo ("Let's do this.\n");
		}
	}
}

?>
