<?php
    include('connect.php');
    include('header.php');
    
    error_reporting(0);

    $title = $_POST['input-title'];
    $content = $_POST['input-content'];
    $submit = $_POST['submit-btn'];

    if(isset($submit)){
        $query = "INSERT INTO post(title, content) VALUES('$title', '$content')";
        $result = mysqli_query($connect, $query);

        if(!$result){
            die("Query Failed" . mysqli_error($connect));
        }
        echo "Post Added Successfully";
    }
?>
        
        <!-- Add Post -->
        <div class="add-post">
            <div class="container">
                <h1 id="header1">Add a post</h1>
                <form method="POST" action="add-post.php">
                    <div class="input-grp">
                        <label >Title:</label>
                        <input type="text" name="input-title" placeholder="Enter your post title" id="">
                    </div>

                    <div class="input-grp">
                        <label >Content:</label>
                        <input type="text" name="input-content" placeholder="Enter your post content" id="">
                    </div>

                    <a><button name="submit-btn" type="submit" class="btn black">POST IT</button></a>
                </form>
            </div>
        </div>
    
    <!-- MY SCRIPTS: -->

    <!-- jquery: -->
    <script src="script/jquery-3.6.0.js"></script>

    <!-- materialize: -->
    <script src="script/materialize.js"></script>

    <!-- Javascript : -->
    <script src="script/script.js"></script>

</body>
</html>