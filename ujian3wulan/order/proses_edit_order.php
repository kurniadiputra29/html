<?php
// CARA 1
include '../koneksi.php';
$ID 	  = $_POST['id'];
$table	= $_POST['table'];
$item 	= $_POST['item'];
$qty 		= $_POST['qty'];		
$sql    = "SELECT price FROM item where id=$item";
$result = mysqli_query($connect,$sql);
$row    = mysqli_fetch_assoc($result);
$total	= $row['price'] * $qty;
$diskon = ($total * 20 / 100);
$afterdiskon = ($total-($total*20/100));

function diskon1($t){
	if ($t > 100000){
	return "20%";
	}	else {
	return "-";
	}	
}
$diskon3 = diskon1($total);
function afterdiskon($u){
	if ($u > 100000){
	return ($u-($u*20/100));
	}	else {
	return "$u";
	}	
}	
$setelahdiskon = afterdiskon($total);	
	
$sql1 	= "UPDATE orders SET table_number = '$table', item_id = '$item', qty = '$qty', total = '$total', diskon = '$diskon3', after_diskon = '$setelahdiskon' WHERE id = '$ID'";		
mysqli_query($connect,$sql1);
header('location:index_order.php');
?>
<?php
/* CARA 2
include '../koneksi.php';
$ID 	  = $_POST['id'];
$table	= $_POST['table'];
$item 	= $_POST['item'];
$qty 		= $_POST['qty'];		
$sql    = "SELECT price FROM item where id=$item";
$result = mysqli_query($connect,$sql);
$row    = mysqli_fetch_assoc($result);
$total	= $row['price'] * $qty;	
$diskon1 = "-";
$diskon2 = "20%";
$afterdiskon = ($total-($total*20/100));

$sql1 	= "UPDATE orders SET table_number = '$table', item_id = '$item', qty = '$qty', total = '$total', diskon = '$diskon1', after_diskon = '$total' WHERE id = '$ID'";
$sql2 	= "UPDATE orders SET table_number = '$table', item_id = '$item', qty = '$qty', total = '$total', diskon = '$diskon2', after_diskon = '$afterdiskon' WHERE id = '$ID'";
	if ($total > 100000){
	echo  mysqli_query($connect,$sql2);
	}	else {
	echo mysqli_query($connect,$sql1);
	}	
header('location:index_order.php');*/
?>
