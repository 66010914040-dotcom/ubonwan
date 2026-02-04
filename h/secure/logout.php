<?php
     session_start();
	unset ($_SESSION['name'] ) ;
    unset ($_SESSION['p1'] ) ;
	
	echo "<script>" ;
    echo "alert('Username หรือ Password ไม่ถูกต้อง');";
    echo "</script>" ;
	 
?>