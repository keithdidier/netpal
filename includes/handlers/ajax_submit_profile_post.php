<?php
    require '../../config/config.php';
    include("../classes/User.php");
    include("../classes/Post.php");

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if(isset($_POST['post_body'])) {
        $post = new Post($con, $_POST['user_from']);
        $post->submitPost($_POST['post_body'], $_POST['user_to']);

        
    }
?>