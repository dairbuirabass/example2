<?php include "menu.php" ?>
<h2>Add Customer</h2>
<form action="customers.php" method=post>
    
    <label for="fn">Firstname</label><br/>
    <input type="text" name="fn" id="fn" value=""><br/>
    
    <label for="ln">Lastname</label><br/>
    <input type="text" name="ln" id="ln" value=""><br/>
    
    <label for="ad">Streetadress</label><br/>
    <input type="text" name="ad" id="ad" value=""><br/>
    
    <input type="submit" name="btnAdd" value="Add"><br/>
</form>

<?php include "footer.php" ?>
