<?php

namespace def{
	class xyz{
		public function __construct(){
			echo "xyz from def namespace <br>";
		}
	}
}

namespace{
	class xyz{
		public function __construct(){
			echo "xyz from global namespace <br>";
		}
	}	

	$obj = new def\xyz();
	$obj = new xyz();

}
?>