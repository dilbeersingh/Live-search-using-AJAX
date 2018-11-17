
    
        


    

<?php
include"db.php";
$value=$_GET['q'];

$query="select * from search where name LIKE '$value%'";
$resultset=mysqli_query($con,$query);
while($row=mysqli_fetch_array($resultset))
{
    ?>
    <a class="col-lg-12" style="font-size:16px;background:rgba(20,20,20,.2);text-decoration:none;color:black;padding:10px;" onMouseOver="this.style.background='rgba(20,20,20,.4)'"
    onMouseOut="this.style.background='rgba(20,20,20,.2)'" href="<?php echo $row['url'] ?>"><?php echo $row['name']?></a>
<?php    
}

?>