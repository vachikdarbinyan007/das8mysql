<div id="userdiv" style=" width: 33.33%;height: 17rem;border:1px solid;border-radius:4px;">
    <img src="<?php echo $togh["image"] ?>" alt="img" width="100%">
    <p style="text-align:center;"><?php echo $togh["first_name"]." ".$togh["last_name"] ?></p>
    <p style="text-align:center;"><form action="delete.php" method="post">
    <button name="btn" value="<?php echo  $togh["id"] ?>">Delete</button>
    </form></p> 
</div>