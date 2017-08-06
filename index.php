<?php 
include $_SERVER['DOCUMENT_ROOT']."/page/header.php";
include $_SERVER['DOCUMENT_ROOT']."/page/sidebar.php";


		
			

include $_SERVER['DOCUMENT_ROOT']."/mysql/conn.php";
$curl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
date_default_timezone_set('Asia/Shanghai');
echo "<h4>Current WO</h4>";
$query="select * from wolistview where status='3WIP' order by wo";
$result=mysql_query($query);
echo "<div class='container-fluid'>
				<div class='row'>";
while ($row=mysql_fetch_array($result)){
	echo "<div class='col-xs-6 col-md-3' style='padding:3px'>";
		echo "<div  style='border:1px #337ab7 solid;padding:3px'>";
			echo "<a href='/mod/wo/wodetail.php?woid=".$row['id']."' target='_blank'>".$row['wo']."</a><br>";
			echo $row['serial']." / ".$row['reg']."<a>  >>></a><br>";
			echo "<span><small>".$row['scc']." /".$row['stm']." /".$row['teamlead']." /".$row['inspector']."</small></span><br>";
		echo "</div>";
	echo "</div>";
}
echo   "</div>
			</div>";
?>


</div>
</body>
</html>
