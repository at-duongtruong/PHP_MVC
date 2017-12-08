<?php
namespace App\Models;
Use App\Models\Post;
class Post extends Model
{
    protected $table = 'posts';
    public function add($request){
      $sql = "INSERT INTO {$this->table} (title,description,content,author,created_at,picture) VALUES (:title,:decription,:content,:author,:created_at,:picture)";
      $stml = static::$db->prepare($sql);
      $request = array(
        'title'=> $request['title'],
        'decription'=> $request['decription'],
        'content'=> $request['content'],
        'author' => $request['author'],
        'created_at'=> $request['created_at'],
        'picture' => $request['picture']
      );
      $stml->execute($request);
    }
   public function pagination($ofset,$row_count){
    $sql = "SELECT * from {$this->table} limit $ofset,$row_count";
    $stmt = static::$db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
   }

}
