<?php
    include('connect.php');
    include('header.php');

    $query = "SELECT * FROM post";
    $result = mysqli_query($connect, $query);

    if(isset($result)){
        while($row = mysqli_fetch_assoc($result)){ ?>
            <!-- $title = $row['title'];
            $content = $row['content']; -->
            <div class="article">
                <div class="container">
                    <h4><a href=""> <?php echo $row['title']; ?> </a></h4>
                    <p><?php echo $row['content']; ?></p>
                    <a><button class="btn black">Read More</button></a>
                </div>
            </div>

            
            <!-- $id = $row['id'];
            echo "<div class='post'>";
            echo "<h1>$title</h1>";
            echo "<p>$content</p>";
            echo "<a href='edit-post.php?id=$id' class='btn black'>Edit</a>";
            echo "<a href='delete-post.php?id=$id' class='btn black'>Delete</a>";
            echo "</div>"; -->
<?php
        }
    }
?>
        
    
    <!-- MY SCRIPTS: -->

    <!-- jquery: -->
    <script src="script/jquery-3.6.0.js"></script>

    <!-- materialize: -->
    <script src="script/materialize.js"></script>

    <!-- Javascript : -->
    <script src="script/script.js"></script>

</body>
</html>