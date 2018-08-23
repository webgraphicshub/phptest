<?php 

	/**
	 * 
	 */
	class NewClass
	{
		public $data = "I am a property";

		public function setNewProperty($newData){
			 $this->data = $newData;
		}
		public function getProperty() {
			return $this->data;
		}
	}

 ?>