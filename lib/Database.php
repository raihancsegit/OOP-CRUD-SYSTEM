<?php 
class Database {

	public $host 	= DB_HOST;
	public $user 	= DB_USER;
	public $pass 	= DB_PASS;
	public $dbname  = DB_NAME;

	public $link;
	public $error;


	public function __construct(){
		$this->connectDB();
	}


	public function connectDB(){
		$this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		if(!$this->link){
			$this->error = "Connection faild";
			return false;
		}
	}


	public function insert($receive){
		$input = $this->link->query($receive) or die($this->link->error.__Line__);
		if($input){
			return $input;
		}else{
			return false;
		}
	}


	public function select($receive){
		$select = $this->link->query($receive) or die($this->link->error.__Line__);
		if($select->num_rows > 0){
			return $select;
		}else{
			return false;
		}
	}


	public function delete($receive){
		$delete = $this->link->query($receive) or die($this->link->error.__Line__);
		if($delete){
			return $delete;
		}else{
			return false;
		}
	}


	public function update($receive){
		$update = $this->link->query($receive) or die($this->link->error.__Line__);
		if($update){
			return $update;
		}else{
			return false;
		}
	}
}


?>