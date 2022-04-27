<?php
    include('connect.php');
    include('header.php');

    error_reporting(0);

    $id = $_GET['id'];
    $query = "SELECT * FROM post WHERE id =" .$id;

    $result = mysqli_query($connect, $query);

    $row = mysqli_fetch_assoc($result);

?>

    <div class="article">
        <div class="container">
            <h4><?php echo $row['title']; ?></h4>
            <p><?php echo $row['content']; ?></p>
            <a href="index.php"><button class="btn black">Back</button></>
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