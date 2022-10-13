<?php
if(!empty($_POST["submit"])) {
	$fullname = $_POST["fullname"];

	$email = $_POST["email"];
    $subject = $_POST['subject'];
	$user_message = $_POST["user_message"];


	$db = mysqli_connect("localhost","root","","funolympic");
    $query = "INSERT INTO contact (name,email,subject, message) VALUES ('$fullname','$email','$subject','$user_message')";
	$temp = mysqli_query($db, $query);
    
	
	;
	if(!empty($insert_id)) {
	$message = "Successfully Added.";
	}
}
?>

<!DOCTYPE html>

<html>

<head>
<title>How To Create Contact Form Using PHP</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<form name="frmContact" method="post" action="">

<div class="aler_message"><?php if(isset($message)) { echo $message; } ?></div>

<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td colspan="2">Contact Form</td>
</tr>
<tr class="tablerow">
<td>Full Name<br/>  <input type="text" class="text_input" autofocus="autofocus" name="fullname"></td>
<td>Email<br/> <input type="text" class="text_input" autofocus="autofocus" name="email"></td>
<td>Subject<br/> <input type="text" class="text_input" autofocus="autofocus" name="subject"></td>
</tr>
<tr class="tablerow">
<td colspan="2">Message<br/><textarea name="user_message" class="text_input" autofocus="autofocus" cols="60" rows="6"></textarea></td>
</tr>
<tr class="tableheader">
<td colspan="2"><input type="submit" class="btn_submit" name="submit" value="Submit"></td>
</tr>
</table>

</form>

<table style="border:2px red solid" class="table_data"  cellpadding="5">
	<tr>
		<th>
			Full Name
		</th>
		<th>
			Email
		</th>
        <th>
			Subject
		</th>
		<th>
			Message
		</th>
	</tr>
<?php
$conn = mysqli_connect("localhost","root","","funolympic");
$query = ("select * from contact order by id DESC ");
$result= mysqli_query($conn, $query, ) or die (mysqli_error($conn));
while ($row= mysqli_fetch_array ($result) ){
$id=$row['id'];
?>
	<tr style="text-align:center;">
		<td style="width:200px;">
			<?php echo $row['name']; ?>
		</td>
		<td style="width:200px;">
			<?php echo $row['email']; ?>
		</td>
        <td style="width:200px;">
			<?php echo $row['subject']; ?>
		</td>
		<td style="width:200px; color:blue;">
			<?php echo $row['message']; ?>
		</td>
	</tr>
<?php } ?>
</table>

</body>

</html>