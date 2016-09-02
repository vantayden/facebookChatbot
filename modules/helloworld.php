<?php
class helloworld{
	//Hang Priority de kiem tra do uu tien neu 1 $command ra respone khac nhau cua cac module
	CONST PRIORITY = '1';

	function process($command){
		$response['priority'] = self::PRIORITY;
		//Set type for class in messageType
		$msg['type'] = 'Message';
		//response messange
		$msg['message'] = 'Hello, world!';
		$response['messages'][] = $msg;

		return $response;
	}
}
?>