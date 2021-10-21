<?php
require("./config/db.php");
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$reci_id=$_GET['id'];
$sql = "DELETE FROM blood_recipient WHERE reci_id='$reci_id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
header("Location: /CSE485_K61_KTGK_1951060828/src");       
?>