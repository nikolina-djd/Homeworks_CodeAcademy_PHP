<?php
class Db{
  public $localhost;
  public $username;
  public $password;
  public $database;
  public $port;
  public $connect;

  
  function __construct(){
    $this->localhost = "127.0.0.1";
    $this->username = "homestead";
    $this->password = "secret";
    $this->database = "userbr";
    $this->port = "3306";
    $this->connect();
  }

  function connect(){
   $this->connect = mysqli_connect($this->localhost, $this->username, $this->password, $this->database, $this->port);
  }

  function insert($firstname, $userName, $email, $browser){
    $sql = "INSERT INTO user (firstname,username,email,browser) VALUES('$firstname', '$userName', '$email', '$browser')";
    $result = mysqli_query($this->connect, $sql);
  }

  function close(){
    mysqli_close($this->connect);
  }

}