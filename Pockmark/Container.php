<?php

namespace Pockmark;

class Container extends \Pimple {
	function register ($obj) {
		$this[get_class($obj)] = $obj;
	}
}
