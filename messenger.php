<?PHP
// session_start();
// if(!isset($_GET['purpose'])){
// 	$_SESSION['user']=$_GET['user'];
// 	if($_SESSION['user']=='tam'){
// 		$filename='tmessages.txt';
// 	}else if($_SESSION['user']=='muks'){
// 		$filename='muksmsg.txt';
// 	}
// 	}

// } else {
// 	$filename='tmessages.txt';
// }
$filename='tmessages.txt';
date_default_timezone_set('Asia/Calcutta');
$date=date('d_F_Y_h_i_s_A');


// if(isset($_POST['message']) && $_POST['purp']=='keep'){

// $txto =$date."\n \t".$_POST['message'];
 // $myfileo = file_put_contents($filename, $txto.PHP_EOL , FILE_APPEND);
// 
 // echo "Done!";
 // exit();
// } else if($_GET['purpose']=="ajax") {

$txto =''. $_POST['name']."\t".$_POST['email']."\n at ".$date."\n \t".$_POST['message'];
 $myfileo = file_put_contents($filename, $txto.PHP_EOL , FILE_APPEND);

$frstname = explode(' ', $_POST['name']);
echo "Thank you ".$frstname[0]."<br> I'll get back to you asap, on<br>".$_POST['email'];
// }else{

// }
?>