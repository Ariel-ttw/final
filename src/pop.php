<?php 
include_once 'header.php';
require_once 'includes/dbh.inc.php';
?>

<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
    <link rel="stylesheet" type="text/css" href="css/pop.css">
</head>

<body>
<h1>Confirm your booking require</h1>
<?php 
	$sql = "SELECT * FROM booking;";
	echo '
	<table>
		<tr>
			<th> Name </th>
			<th> Email </th>
			<th> Phone  </th>
			<th> Date  </th>
		</tr>
	</table>
	<hr>';
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0 ) {
		while($row =mysqli_fetch_assoc($result)){
			$name   = $row['name'];
			$email  = $row['email'];
			$phone   = $row['phone'];
			$date    = $row['date'];
			echo '<table> 
                        <tr>
                            <td>'.$name.'</td> 
                            <td>'.$email.'</td> 
                            <td>'.$phone.'</td> 
                            <td>'.$date.'</td> 
                        </tr>
                    </table>';

		}
	}
	?>

<div class="box">
	<a class="button" href="#popup1">confirm booking</a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Success</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			Thank to for your booking, your booking information will send by email.
		</div>
	</div>
</div>
</body>
