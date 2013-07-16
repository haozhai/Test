<?php
class CD {
	function __construct($name) {
		$this->name = $name;
	}
	public $name;
	public function getName() {
		return $this->name;
		
	}
}
?>