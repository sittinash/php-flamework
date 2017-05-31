<?php

  class DoLoginScript extends Script
  {

    function run()
    {
      //Logger::write('FUNCTION run() is called.', 'DoLoginScript.run');

      require 'models/user-model.php';

      $username = $_POST['username'];
      $password = Encoder::encode($_POST['password']);

      Logger::write('[String] $username: '.$username.'.', 'DoLoginScript.run');
      Logger::write('[String] $password: '.$password.'.', 'DoLoginScript.run');
      //Logger::write('[String] $encodedPassword: '.$encodedPassword.'.', 'DoLoginScript.run');

      $user = new UserModel();
      $user->fetch($username, $password);

      Logger::write($user->toString(), 'DoLoginScript.run');

      if($user->isEmpty)
      {
        Logger::write('Login fails.', 'DoLoginScript.run');

        Session::set('user_no', SessionEnum::DEFAULT_USER_NO);
        Session::set('username', SessionEnum::DEFAULT_USERNAME);
        Session::set('isAdmin', SessionEnum::DEFAULT_IS_ADMIN);

        return 0;
      }

      Logger::write('Login success.', 'DoLoginScript.run');

      Session::set('user_no', $user->user_no);
      Session::set('username', $user->username);
      Session::set('isAdmin', $user->isAdmin);

      Logger::write('@[Array] $_SESSION: '.var_export($_SESSION, true), '');

      return 1;

    }

  }

 ?>
