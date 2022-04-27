<?php
    include('connect.php');
    include('header.php');

    $query = "SELECT * FROM post";
    $result = mysqli_query($connect, $query);

    if(isset($result)){
        while($row = mysqli_fetch_assoc($result)){ ?>
            <div class="article">
                <div class="container">
                    <h4><a href="post.php?id=<?php echo $row['id'] ?>"> <?php echo $row['title']; ?> </a></h4>
                    <p><?php echo $row['content']; ?></p>
                    <a href="post.php?id=<?php echo $row['id'] ?>"><button class="btn black">Read More</button></>
                </div>
            </div>
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