<?php
  //code is besed on active record design pattern

  class signup{
    /*------START ACTIVE RECORD------*/
    static protected $db_columns = ['u_id','username','email','password','roll','created_at'];
    public $errors = [];



    public function validate(){
      $this->errors = [];
      if(is_blank($this->username)||is_blank($this->email)||is_blank($this->password)){
        $blank_err='' ;
        if(is_blank($this->username)){
          $blank_err .= "Username ";
        }
        if(is_blank($this->email)){
          $blank_err .= " Email ";
        }
        if(is_blank($this->password)){
          $blank_err .= " Password ";
        }
        $blank_err .= 'cannot be blank';
        $this->errors['blank'] = $blank_err;
      }

      if(!(is_blank($this->username)||is_blank($this->email)||is_blank($this->password)))
      {
        if(!has_valid_email_format($this->email)){
          $this->errors['email'] = 'Email is incorrect';
        }

      if(ckh_pswd_8($this->password)){
          $this->errors['cp'] = 'password must be 8 charecter';
        }
      }
      $username_count = $this->find_by_sql("SELECT * FROM `user` WHERE username = '".$this->username."'");
      $email_count = $this->find_by_sql("SELECT * FROM `user` WHERE email = '".$this->email."'");
      if($username_count > 0 || $email_count > 0)
      {
        $count_err = '';
        if($username_count > 0){
          $count_err .= 'username ';
        }
        if($email_count > 0){
          $count_err .= 'email ';
        }
        $this->errors['user_mail_count'] = $count_err .'is in use chenge';
      }

      return $this->errors;
    }

    public function create(){
      $this->validate();
      if(!empty($this->errors)){return false;}

      $attribuites = $this->sanatised_attribuites();
      $sql = "INSERT INTO `user`"."(";
      $sql .= join(',', array_keys($attribuites));
      $sql .= ")VALUES('";
      $sql .= join("','", array_values($attribuites));
      $sql .= "')";
      $result = db::$database->query($sql);
      if($result)
      {
        $this->id =db::$database->insert_id;
      }
       return $result;
    }

    //properties which have database columns, excluding u_id(unsanatised)
     protected function attribuites(){
      $attribuites = [];
      foreach (self::$db_columns as $column) {
        if($column == 'u_id'){continue;}
        $attribuites[$column] = $this->$column;
      }
      return $attribuites;
    }

    //sanatising values such as [soumitra's] and preventing sql injection
    protected function sanatised_attribuites(){
      $sanatised = [];
      foreach ($this->attribuites() as $key => $value) {
        $sanatised[$key] = db::$database->escape_string($value);
      }
      return $sanatised;
    }

    //always returns number of rows by any sql query
    //this function can handel any kind of select query
    protected function find_by_sql($sql){

      $result = db::$database->query($sql);

       if(!$result)
       {
        exit('database query failed </br>');
       }
       else
       {
        return $result->num_rows;
       }

    }



    /*------END ACTIVE RECORD------*/


    private $username ;
    public $email;
    private $password;
    private $roll;
    private $created_at;

    //create record using post parameters
    public function olx($args=[]){
      $this->username = isset($args['username']) ? $args['username']:'';
      $this->email = isset($args['email']) ? $args['email']:'';
      $this->password = isset($args['password']) ? $args['password']:'';
      $this->roll = isset($args['roll']) ? $args['roll']:'';
      $this->created_at = isset($args['created_at']) ? $args['created_at']:'';
    }

  }
?>
