<?php include "menu.php"; ?>
<h2>Edit Customer</h2>
<?php
    include "connection.php";
    $sql="SELECT * FROM customers WHERE id_customers=".$_GET['id'];
    $result=$db->query($sql);
    $theArray = $result->fetch(PDO::FETCH_ASSOC);
    $fn=$theArray['firstname'];
    $ln=$theArray['lastname'];
    $ad=$theArray['streetaddress'];
    
?>

<form action="customers.php" method=post>
    
    <label for="fn">Firstname</label><br/>
    <input type="text" name="fn" id="fn" value="<?php echo $fn; ?>"><br/>
    
    <label for="ln">Lastname</label><br/>
    <input type="text" name="ln" id="ln" value="<?php echo $ln; ?>"><br/>
    
    <label for="ad">Streetadress</label><br/>
    <input type="text" name="ad" id="ad" value="<?php echo $ad; ?>"><br/>
    
    <input type="hidden" name="id" value="<?php echo $_GET['id']?>"><br/>
    <input type="submit" name="btnUpdate" value="Update"><br/>
    
</form>

<?php include "footer.php"; ?>