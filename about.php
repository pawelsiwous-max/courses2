<?php
$tit = "About";

require "blocks/header.php";

?>

<div class="container">
    <h1>About US</h1>

    <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="Enter u name" class="form-control"><br>
        <input type="email" name="email" placeholder="Enter u email" class="form-control"><br>
        <input type="password" name="password" placeholder="Enter u password" class="form-control"><br>
        <textarea class="form-control" placeholder="Enter massage" name="message"></textarea><br>
        <input type="submit" value="Send" class="btn btn-success">
    </form>


</div>

<?php

require "blocks/footer.php";

?>