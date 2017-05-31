<?php

  class UserModel extends Model
  {

    public $user_no = -1;
    public $username = 'guest';
    public $isAdmin = 0;

    function UserModel()
    {
      parent::Model();
    }

    function fetch($username, $password)
    {

      $stmt = $this->database->prepare(
					"SELECT *
					FROM users
					WHERE username = :username
					AND password = :password
          AND isValid = 1"
				);

      $stmt->execute(array(
  			':username' => $username,
  			':password' => $password
  		));

      if($stmt->rowCount() > 0)
      {
        $userInfo = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->user_no = intval($userInfo['user_no']);
        $this->username = $userInfo['username'];
        $this->isAdmin = $userInfo['isAdmin'];
      }

    }

    function save()
    {
      // Not yet implemented.
    }

    function isEmpty()
    {
      reuturn ($this->user_no > 0);
    }

    function toString()
    {
      return '[UserModel] $user_no: '.$this->user_no
        .', $username: '.$this->username
        .', $password: '.$this->password
        .', $isAdmin: '.$this->isAdmin;
    }

  }

 ?>
