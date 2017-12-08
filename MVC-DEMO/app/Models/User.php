<?php
namespace App\Models;
 Use App\Models\User;
class User extends Model
{
    protected $table = 'users';
    public function add($request){
    	$sql ="INSERT INTO {$this->table}(username,password,fullname) VALUES ('{$request['username']}','{$request['password']}','{$request['fullname']}')";
        $stmt = static::$db->prepare($sql);
       	$stmt->execute();
    }
    public function checkLogin($username,$password){
    	$sql = "SELECT * FROM {$this->table} WHERE username = '$username' AND password = '$password'";
    	$stmt = static::$db->prepare($sql);
      $stmt->execute();	
      return $stmt->fetch();
    }
    public function checkUser($request){
      $sql = "SELECT * FROM {$this->table} WHERE username = '{$request['username']}'";
      $query = static::$db->prepare($sql);
      $query->execute();
    }
}

