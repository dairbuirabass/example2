<?php include "menu.php" ?>
<h2>Add Customer</h2>
<form action="add_customers.php" method=post>
    <label for="fn">Firstname</label><br/>
    <input type="text" name="fn" id="fn" value=""><br/>
    <label for="ln">Lastname</label><br/>
    <input type="text" name="ln" id="ln" value=""><br/>
    <label for="ad">Streetadress</label><br/>
    <input type="text" name="ad" id="ad" value=""><br/>
    <input type="submit" name="btnAdd" value="Add"><br/>
</form>
<?php
include "connection.php";
$btn=$_POST['btnAdd'];
if (isset($btn)) {
    
    $add=$db->prepare("INSERT INTO customers (firstname,lastname,streetaddress) VALUES (:fn,:ln,:ad)");
    $add->bindParam(':fn', $fn);
    $add->bindParam(':ln', $ln);
    $add->bindParam(':ad', $ad);
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $ad=$_POST['ad'];
    $add->execute();
}
    
?>
<?php include "footer.php" ?>