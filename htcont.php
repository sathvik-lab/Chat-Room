<?php  
$room =$_POST['room'];  
include 'db_connect.php';

$sql = "SELECT msg ,stime , ip FROM msgs WHERE room = '$room'";

$res = "";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$res = $res . '<div class="position-relative">';
		$res =$res . '<div class = "pb-4">';
		$res = $res . $row['ip'];
		$res = $res . "<br> says <p>" . $row['msg'];
		$res = $res . '</p> <br> <div class="time text-muted small text-nowrap mt-2">'. $row["stime"] . '</div></div></div>';
	}
}
echo $res;


?>