<?php 
  
    $sql="SELECT * FROM producto"; 
    $query=mysql_query($sql); 
      
    while ($row=mysql_fetch_array($query)) { 
          
?> 
        <tr> 
            <img><?php echo $row['imagen'] ?></img> 
            <h3><?php echo $row['nombre'] ?></h3> 
            <p><?php echo $row['price'] ?>$</p> 
            <td><a href="index.php?page=products&action=add&id=<?php echo $row['id_product'] ?>">Add to cart</a></td> 
        </tr> 
<?php 
          
    } 
  
?>