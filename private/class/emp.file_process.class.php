<?php

/**
* 
*/
class file_process extends db
{
	/*-------START ACTIVE RECORD------*/
	public function save(){
		$vid_path = $this->mono_file_upload();
		$i=0;
		$sql;
		$result;
		while ($i <count($vid_path)) {
			$sql = "INSERT INTO `file_desc` (name,description,img_path,publish,created_at) VALUES('";
			$sql .= $this->escape($this->path_name[$i])."','";
			$sql .= $this->escape($this->description[$i])."','";
			$sql .= $this->escape($vid_path[$i])."','";
			$sql .= "No','";
			$sql .= date("Y/m/d h:i:sa")."')";
			
			$result = db::$database->query($sql);
			if($result)
			{
				$this->id = db::$database->insert_id;
			}

			$i++;

		}
		return $sql;
		
	}
	/*-------END ACTIVE RECORD------*/

	public function mono_file_upload()
		{
			$path = [];
			$i=0;
			$tergetPath;
			while ( $i<count($this->f_name)) {
				$name = $this->f_name[$i];
				$type = $this->f_type[$i];
				$size = $this->f_size[$i];
				$temp = $this->f_temp_name[$i];
				$error = $this->f_error[$i];

				$tergetPath = PUBLIC_PATH."\videos\\".$name;
				$allowExt = array('jpg','png','mp4','avi');
				$extensition = pathinfo($name,PATHINFO_EXTENSION);

				if(($type='image/jpg')||($type='image/png')||($type='video/mp4')||($type='video/avi')&&($size < 90000000000)&&(in_array($extensition, $allowExt))){
					if($error > 0)
					{
						 echo '</br> error : '.$error;
					}
					else
					{
						if(file_exists($tergetPath))
						{
							echo"video/". $name ." the file is exists </br>";
						}
						else
						{
							// move_uploaded_file($temp,$tergetPath);
						// 	echo " file saved in :<b> video/".$fileName.'</b>' ;
							$path[$i] = $tergetPath;
						}
					}
				}
				$i++;

			}
			$r = count($this->f_name);
			return $path  ;
		}

	private function escape($string)
	{
		return db::$database->escape_string($string);
	}

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