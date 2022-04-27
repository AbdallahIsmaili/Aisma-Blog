<?php
    include('connect.php');
    include('header.php');
?>
        
        <!-- Add Post -->
        <div class="add-post">
            <div class="container">
                <h1 id="header1">Add a post</h1>
                <form method="POST" action="add-post.php">
                    <div class="input-grp">
                        <label >Title:</label>
                        <input type="text" name="title" placeholder="Enter your post title" id="">
                    </div>

                    <div class="input-grp">
                        <label >Content:</label>
                        <input type="text" name="content" placeholder="Enter your post content" id="">
                    </div>

                    <a href=""><button type="submit" class="btn black">POST IT</button></a>
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