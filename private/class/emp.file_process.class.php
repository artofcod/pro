<?php

/**
* 
*/
class file_process extends db
{
	private $path_name;
	private $cource_name;
	private $description;
	private $content;

	private $f_name;		
	private $f_type;
	private $f_size;
	private $f_temp_name;
	private $f_error;
	function __construct($args = [])
	{
		$this->path_name = isset($args['path_name']) ? $args['path_name'] : NULL;
		$this->cource_name = isset($args['cource_name']) ? $args['cource_name'] : NULL;
		$this->description = isset($args['desc']) ? $args['desc'] : NULL;
		$this->content = isset($args['content']) ? $args['content'] : NULL;

		$this->f_name = isset($args['f_name']) ? $args['f_name'] : NULL;
		$this->f_type = isset($args['f_type']) ? $args['f_type'] : NULL;
		$this->f_size = isset($args['f_size']) ? $args['f_size'] : NULL;
		$this->f_temp_name = isset($args['f_temp_name']) ? $args['f_temp_name'] : NULL;
		$this->f_error = isset($args['f_error']) ? $args['f_error'] : NULL ;
	}

	public function view()
	{
		print_r($this->path_name);
		echo "</br>";
		print_r($this->cource_name);
		echo "</br>";
		print_r($this->description);
		echo "</br>";
		print_r($this->content);
		echo "</br>";
		print_r($this->f_name);
		echo "</br>";
		print_r($this->f_type);
		echo "</br>";
		print_r($this->f_size);
		echo "</br>";
		print_r($this->f_temp_name);
		echo "</br>";
		print_r($this->f_error);
		echo "</br>";
	}
}

?>