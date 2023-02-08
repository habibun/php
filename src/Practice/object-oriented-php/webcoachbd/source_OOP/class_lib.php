<?php 

/**
Created by: Rejoanul Alam webcoachbd.com

কোন সমস্যা হলে ওয়েবকোচবিডি ফোরামে প্রশ্ন করুন
**/


class people {
	
	// explicitly adding class properties are optional - but is good practice
	var $name;	

	function __construct($people_name) {
	
		$this->name = $people_name;
	}
	
	
	public function get_name() {
		
		return $this->name;
	
	}
	
	//protected methods and properties restrict access to those elements.
	protected function set_name($new_name) {
	
		if (name != "Jimmy Two Guns") {
		$this->name = strtoupper($new_name);
		}
		
	}


} 

// 'extends' is the keyword that enables inheritance
class employee extends people {


	protected function set_name($new_name) {
	
		if ($new_name == "Stefan Sucks") {
			$this->name = $new_name;
		}
		else if($new_name == "Anjirul Alam") {
		 parent::set_name($new_name);
		}
		
	}
	
	function __construct($employee_name) {
	
		$this->set_name($employee_name);
	}
	
	

}
 
 
 
?>
