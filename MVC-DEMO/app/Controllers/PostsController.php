<?php
    namespace App\Controllers;
     use App\Models\Post;
     use App\Core\Session;
    class PostsController extends Controller
    {
        public function index($index = 0){
            $post = new Post();
            $row_count = 3;
            $offset = $row_count*$index;
            $data['list'] = $post->pagination($offset,$row_count);
            $data['rownum'] = ceil(sizeof($post->all())/$row_count);
            return view('posts.index', $data);
        }
        public function add(){
            if(isset($_POST['add'])){
            $post = new Post();
            $request = array();
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["picture"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $request['title'] = $_POST['title'];
            $request['decription'] = $_POST['decription'];
            $request['content'] = $_POST['content'];
            $request['author'] = Session::get('username');
            $request['created_at'] = date('Y-m-d H:i:s');
            $request['picture'] = $target_file;
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                $eroo = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            }
            else{      
            move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
            $post->add($request);
            header('location:/posts/index');
                }
            }
            view('posts.add');
        }
        public function view($id){
            $post = new Post();
            $data = $post->find($id);
            view('posts.view',$data);

        }
       
    }