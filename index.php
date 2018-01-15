<?php
    include("includes/header.php");
?>
        <div class="user-details column">
            <a href="<?php echo $userLoggedIn; ?>"> <img src="<?php echo $user['profile_pic']; ?>" alt="profile pciture"></a>
            <div class="user-details-left-right">
                <a href="<?php echo $userLoggedIn; ?>">
                    <?php
                        echo $user['first_name'] . " " . $user['last_name'];
                    ?>
                </a>
                <br>
                <?php
                    echo "Posts: " . $user['num_posts']. "<br>";
                    echo "Likes: " . $user['num_likes'];

                ?>
            </div>
        </div>
        <div class="main-column column">
            <form action="index.php" class="post-form" method="POST">  
                <textarea name="post_text" id="post_text" rows="10" cols="50" placeholder="Got something to say?"></textarea>            
                <input type="submit" name="post" id="post_button" value="Post">
                <hr>
            </form>
        </div>


    </div>
</body>
</html>