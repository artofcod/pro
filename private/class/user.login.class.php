
<?php
	/**
	*
	*/
	class login extends signup
	{
		/*-----START ACTIVE RECORD-----*/


					

		//@override
		public function validate(){
      	$this->errors = [];
      	if(is_blank($this->username)&&(is_blank($this->email)||is_blank($this->password))){
	        $blank_err='' ;
	        if(is_blank($this->email)){
	          $blank_err .= " Email ";
	        }
	        if(is_blank($this->password)){
	          $blank_err .= " Password ";
	        }
	        $blank_err .= 'cannot be blank';
	        $this->errors['blank'] = $blank_err;
	      }

	      if(!(is_blank($this->email)&&is_blank($this->password))){
					if($this->chake_crediantials() <= 0){
						 $this->errors['login_crediantials'] = 'Invalid Login Crediantials';
					}
	      }

	      return $this->errors;
	  	}

	  	public function login(){
				$this->validate();
				if(!empty($this->errors)){ return false;}

				if($this->chake_crediantials()>=0)
				{
					$session_start;
					$_SESSION['login'] = 'LOGGED IN SUCCESSFULLY';
					return true;
				}
				else
				{ return false; }
	  		}
	  	public function chake_crediantials(){

					$err_flag = 0;
					$olaf = "SELECT * FROM `user` WHERE email = '".$this->email."' OR username = '".$this->username."' AND password = '".$this->password."'";
					$username_count = $this->find_by_sql($olaf);
					echo $olaf;
					if($username_count > 0)
					{ $err_flag = $username_count; }

				return $err_flag;
			}


		/*-----END ACTIVE RECORD-----*/
		//@override
		public function __construct($args=[])
		{
			$this->username = isset($args['username']) ? $args['username'] :'';
			$this->email = isset($args['email']) ? $args['email'] :'';
			$this->password = isset($args['password']) ? $args['password'] :'';
		}
	}
?>
