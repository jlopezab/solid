<?php

class Json{
	public static function convert($value)
	{
		return json_decode($value);
	}
}

class validateData{
	public static function validate($data)
	{
		if(!isset($data['name']) || $data['name'] == ''){
			return json_encode('<p>Falta colocar el nombre de la persona</p>');

		}

		if(!isset($data['text']) || $data['text'] == ''){
			return json_encode('<p>Falta colocar el mensaje para la persona</p>');

		}
	}
}

class Message {

	public $name;
	public $text;


	public function __construct($data){

		$this->name = $data['name'];
		$this->text = $data['text'];

	}

	public function messageComplete(){

		return json_encode('<p>Hola, como estas <b>'.$this->name.'.</b><br> Acabas de recibir un nuevo mensaje: <b>'.$this->text.'.</b><br> Gracias por su atencion.</p>');
	}

}


// request data
$data['name'] = $_REQUEST['name'] ;
$data['text'] = $_REQUEST['text'];

$message = new Message($data);
$messageReal = $message->messageComplete();

if(validateData::validate($data)){
	$messageReal = validateData::validate($data);
}

// convert message
$valueJson = Json::convert($messageReal);

echo $valueJson;



?>