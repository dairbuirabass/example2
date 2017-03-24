<?php include "menu.php" ?>
<h2>Forms</h2>
<form class="" action="forms.php" method="post">
<label for="country">Choose the country</label>
<select id="country" name="country" onchange="showCountry()">
    <option value="">Choose</option>
    <option value="Finland">Finland</option>
    <option value="Russia">Russia</option>
    <option value="Nepal">Nepal</option>
    <option value="Vietnam">Vietnam</option>
    <option value="Latvia">Latvia</option>
</select>
<label>Chosen country:
<input type="text" id="result" name="">
 </label>
 <br/>
<label for="gender">Choose your gender</label> <br/>
<input type="radio" name="gender" value="female">Female<br/>
<input type="radio" name="gender" value="male">Male<br/>
<label for="status">Choose your status</label></br>
<input type="radio" name="status" value="student">Student<br/>
<input type="radio" name="status" value="teacher">Teacher<br/>
<br/>
<label for="startDate"> Choose the starting date</label>
<input type="date" name="startDate" id="startDate" value="">
<input type="submit" name="btnSend" value="Send"> 
</form>

<?php 
if(isset($_POST['btnSend'])) {
    $country=$_POST['country'];
    $gender=$_POST['gender'];
    $stDate=$_POST['startDate'];
    print 'Hello '.$gender.' from '.$country.'<br/>';
    print 'The chosen date is '.$stDate;
}
?>

<?php include "footer.php" ?>