<div style="height:24rem; border:solid;display:flex; flex-direction:column;align-items:center;">
    <p style="text-align:center;"><?php echo $togh["pizza"] ?></p>
    <p style="text-align:center;"><?php echo $togh["price"] ?></p>
    <img src="<?php echo $togh["image"] ?>" alt="img" width="200px"/>
    <button  value=<?php echo $togh["price"]?> onclick=f(this)>Buy</button>
</div>