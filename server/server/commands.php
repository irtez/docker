<?php
class Commands{
	function ls (){
		exec('ls', $outputArray);
		return $outputArray;
	}
	
	function ps (){
		exec('ps', $outputArray);
		return $outputArray;
	}
	
	function whoami (){
		return passthru("whoami");
	}
	
	function id (){
		return passthru("id");
	}
}
?>