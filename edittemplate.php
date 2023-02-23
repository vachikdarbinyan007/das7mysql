<div style="height:24rem; border:solid;display:flex; flex-direction:column;align-items:center;">
    <img src="<?php echo $togh["image"] ?>" alt="img" width="200px"/>
    <form action="save.php" method="post">
    <input type="text" name="pizzaname" value="<?php echo $togh["pizza"] ?>"/>
    <input type="number" name="price" value="<?php echo $togh["price"] ?>"/>
    <button name="save_id" value="<?php echo $togh["id"] ?>">Save</button>
    </form>
</div>