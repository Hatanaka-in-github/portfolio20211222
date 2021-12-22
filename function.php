
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php

require_once 'DBclasscollect.php';
use db\DataSource;

if(isset($_POST['CANCEL7'])){
	$LOTID = ($_POST['ロットID2']);
	$PName = ($_POST["品名2"]);
	echo "入力はキャンセルされました。";
  //var_dump($_POST);
	$db = new DataSource();

$db->begin();
$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where 入力者 = '{$_POST['入力者2']}' order by AUTO_ID desc  limit 2;");
$db->commit();

?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST["ロットID2"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日2"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST["ロットID3"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST["ロットID4"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名2'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo1"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1-1"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="ロットID5" class="form-control" value="<?php echo $_POST["ロットID5"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="ロットID6" class="form-control" value="<?php echo $_POST["ロットID6"];?>"/>
  </div> 
  <div class="form-group">
    <label for="TO508722※システム自動付与項目"></label>
    <input id="TO508722※システム自動付与項目" type="hidden" name="TO508722※システム自動付与項目" class="form-control" value="<?php if(isset($_POST['TO508722※システム自動付与項目'])){echo $_POST['TO508722※システム自動付与項目'];}?>" />
  </div>
  <div class="form-group">
     <label for="SEIKEIBI"></label>
     <input id="CDate1" type="hidden" name="出荷ロットNo" class="form-control" value="<?php if(isset($_POST['出荷ロットNo'])){echo $_POST['出荷ロットNo'];}  ?>" />
  </div><br>                    
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>

<?php


}elseif(isset($_POST['CANCEL6'])){
  $DDATE = $_POST["ロットID2"];
  $CDATE = $_POST["蒸着ロットNo1"]."-".$_POST["扉方向1-1"];
	$LOTID2 = ($_POST['ロットID5']);
	$LOTID3 = ($_POST['ロットID6']);
	$PName = ($_POST["品名2"]);
	echo "入力はキャンセルされました。";

	$db = new DataSource();
  

$db->begin();
$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where 入力者 = '{$_POST['入力者2']}' order by AUTO_ID desc  limit 4;");
//$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where ロットID = '{$CDATE}' and 品名 = $PName order by AUTO_ID desc  limit 1;");
//$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where ロットID = '{$LOTID2}' and 品名 = $PName order by AUTO_ID desc  limit 1;");
//$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where ロットID = '{$LOTID3}' and 品名 = $PName order by AUTO_ID desc  limit 1;");
$db->commit();

?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST['ロットID2'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="出荷ロットNo" class="form-control" value="<?php echo $_POST['ロットID2'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日" class="form-control" value="<?php echo $_POST["成形日2"];?>" />
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST['ロットID3'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST['ロットID4'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID5" class="form-control" value="<?php echo $_POST['ロットID5'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID6" class="form-control" value="<?php echo $_POST['ロットID6'];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名2'];?>"/>
  </div> 
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="蒸着ロットNo" class="form-control" value="<?php echo $_POST["蒸着ロットNo1"];?>"/>;
  </div> 
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="扉方向1" class="form-control" value="<?php echo $_POST["扉方向1-1"];?>"/>
  </div>                  
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>

<?php

}elseif(isset($_POST['CANCEL5'])){
  $DDATE = $_POST["ロットID2"];
  $CDATE = $_POST["蒸着ロットNo1"]."-".$_POST["扉方向1-1"];
	$LOTID2 = ($_POST['ロットID5']);
	$PName = ($_POST["品名2"]);
	echo "入力はキャンセルされました。";
  //var_dump($_POST);

	$db = new DataSource();
  

$db->begin();
$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where 入力者 = '{$_POST['入力者2']}' order by AUTO_ID desc  limit 3;");
//$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where ロットID = '{$CDATE}' and 品名 = $PName order by AUTO_ID desc  limit 1;");
//$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where ロットID = '{$LOTID2}' and 品名 = $PName order by AUTO_ID desc  limit 1;");
$db->commit();

?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST['ロットID2'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="出荷ロットNo" class="form-control" value="<?php echo $_POST['ロットID2'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日" class="form-control" value="<?php echo $_POST["成形日2"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST['ロットID3'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST['ロットID4'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID5" class="form-control" value="<?php echo $_POST['ロットID5'];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名2'];?>"/>
  </div> 
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="蒸着ロットNo" class="form-control" value="<?php echo $_POST["蒸着ロットNo1"];?>"/>
  </div> 
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="扉方向1" class="form-control" value="<?php echo $_POST["扉方向1-1"];?>"/>
  </div>                  
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>

<?php

}elseif(isset($_POST['CANCEL4'])){
  $DDATE = $_POST["ロットID2"];
  $CDATE = $_POST["蒸着ロットNo1"]."-".$_POST["扉方向1-1"];
	$PName = ($_POST["品名2"]);
	echo "入力はキャンセルされました。";

	$db = new DataSource();
  

$db->begin();
$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where 入力者 = '{$_POST['入力者']}' order by AUTO_ID desc  limit 2;");
//$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where ロットID = '{$CDATE}' and 品名 = $PName order by AUTO_ID desc  limit 1;");
$db->commit();

?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST['ロットID2'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="出荷ロットNo" class="form-control" value="<?php echo $_POST['ロットID2'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日" class="form-control" value="<?php echo $_POST["成形日2"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST['ロットID3'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST['ロットID4'];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名2'];?>"/>
  </div> 
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="蒸着ロットNo" class="form-control" value="<?php echo $_POST["蒸着ロットNo1"];?>"/>
  </div> 
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="扉方向1" class="form-control" value="<?php echo $_POST["扉方向1-1"];?>"/>
  </div>                  
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>

<?php

}elseif(isset($_POST['CANCEL3'])){
  $CDATE = $_POST["蒸着ロットNo1"]."-".$_POST["扉方向1-1"];
	$LOTID = ($_POST['ロットID2']);
	$LOTID2 = ($_POST['ロットID3']);
	$LOTID3 = ($_POST['ロットID4']);
	$PName = ($_POST["品名2"]);
	echo "入力はキャンセルされました。";

	$db = new DataSource();

  var_dump($_POST);
  

$db->begin();
$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where 入力者 = '{$_POST['入力者']}' order by AUTO_ID desc  limit 4;");
$db->commit();

?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST['ロットID2'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日" class="form-control" value="<?php echo $_POST["成形日2"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST['ロットID3'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST['ロットID4'];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名2'];?>"/>
  </div> 
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="蒸着ロットNo" class="form-control" value="<?php echo $_POST["蒸着ロットNo1"];?>"/>
  </div> 
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="扉方向1" class="form-control" value="<?php echo $_POST["扉方向1-1"];?>"/>
  </div>                 
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>

<?php

}elseif(isset($_POST['CANCEL2'])){;
  $CDATE = $_POST["蒸着ロットNo1"]."-".$_POST["扉方向1-1"];
	$LOTID4 = ($_POST['ロットID2']);
	$LOTID5 = ($_POST['ロットID3']);
	$PName = ($_POST["品名2"]);
	echo "入力はキャンセルされました。";

	$db = new DataSource();

$db->begin();
$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where 入力者 = '{$_POST['入力者']}' order by AUTO_ID desc  limit 3;");
//$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where ロットID = '{$LOTID4}' and 品名 = $PName order by AUTO_ID desc  limit 1;");
//$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where ロットID = '{$LOTID5}' and 品名 = $PName order by AUTO_ID desc  limit 1;");
$db->commit();

?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST['ロットID2'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日" class="form-control" value="<?php echo $_POST["成形日2"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST['ロットID3'];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名2'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="蒸着ロットNo" class="form-control" value="<?php echo $_POST["蒸着ロットNo1"];?>"/>
  </div> 
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="扉方向1" class="form-control" value="<?php echo $_POST["扉方向1-1"];?>"/>
  </div>                    
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>

<?php

}elseif(isset($_POST['CANCEL1'])){
  $CDATE = $_POST["蒸着ロットNo1"]."-".$_POST["扉方向1-1"];
	$LOTID = ($_POST['ロットID2']);
	$PName = ($_POST["品名2"]);
	echo "入力はキャンセルされました。";

	$db = new DataSource();

$db->begin();
$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where 入力者 = '{$_POST['入力者']}' order by AUTO_ID desc  limit 2;");
//$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where ロットID = '{$LOTID}' and 品名 = $PName order by AUTO_ID desc  limit 2;");
$db->commit();

?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST['ロットID2'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日" class="form-control" value="<?php echo $_POST["成形日2"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名2'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="蒸着ロットNo" class="form-control" value="<?php echo $_POST["蒸着ロットNo1"];?>"/>
  </div> 
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="扉方向1" class="form-control" value="<?php echo $_POST["扉方向1-1"];?>"/>
  </div>                  
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>

<?php

}elseif(isset($_POST['CANCEL'])){
	$LOTID = ($_POST['ロットID2']);
	$PName = ($_POST["品名2"]);
	echo "入力はキャンセルされました。";

	$db = new DataSource();

$db->begin();
$db->QuerySql("UPDATE Database_rds.process_progress SET dlt_flg = 1 where 入力者 = '{$_POST['入力者']}' order by AUTO_ID desc  limit 2;");
$db->commit();

?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST['ロットID2'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日" class="form-control" value="<?php echo $_POST["成形日2"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名2'];?>"/>
  </div>                  
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>

<?php

}elseif(!empty($_POST["TO508722※システム自動付与項目"])){


	$db = new DataSource();

try{


$db->begin();

$db->createtable();


$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,入力者) 
values ('{$_POST['ロットID']}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}','{$_POST["数量"]}','{$_POST["宛先工程"]}','{$_POST["成形日"]}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,損品数,入力者) 
values ('{$_POST['ロットID']}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["数量"]}'-'{$_POST["損品数"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["損品数"]}','{$_POST["入力者"]}');");


$db->commit();

foreach($_POST as $key => $value) {
	echo $key.":".$value. "<BR />";
	}
	echo "上記の内容で入力しました。内容の確認、またはキャンセルをお願いいたします";
	
?>

<form class="container" action="index2.php" method="get">
<div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST["出荷ロットNo"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST["2ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST["3ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="ロットID5" class="form-control" value="<?php echo $_POST["2ロット目蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="ロットID6" class="form-control" value="<?php echo $_POST["3ロット目蒸着ロットNo"];?>"/>
  </div> 
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="TO508722※システム自動付与項目" class="form-control" value="<?php echo "1";?>" />
  </div>
  <div class="form-group">
     <label for="SEIKEIBI"></label>
     <input id="CDate1" type="hidden" name="出荷ロットNo" class="form-control" value="<?php if(isset($_POST['出荷ロットNo'])){echo $_POST['出荷ロットNo'];}  ?>" />
  </div><br>                    
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>
<form class="container" action="" method="POST">
<div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST["出荷ロットNo"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST["2ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST["3ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="ロットID5" class="form-control" value="<?php echo $_POST["2ロット目蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="ロットID6" class="form-control" value="<?php echo $_POST["3ロット目蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group" >
    <label for="NYUURYOKUSYA"> </label>
    <input id="Member" type="hidden" name="入力者2" class="form-control" value="<?php echo $_POST['入力者'];  ?>" />
  </div><br> 
  <div class="form-group">
    <label for="TO508722※システム自動付与項目"></label>
    <input id="TO508722※システム自動付与項目" type="hidden" name="TO508722※システム自動付与項目" class="form-control" value="<?php if(isset($_GET['TO508722※システム自動付与項目'])){echo $_GET['TO508722※システム自動付与項目'];}?>" />
  </div>
  </div>
  <div class="form-group">
     <label for="SEIKEIBI"></label>
     <input id="CDate1" type="hidden" name="出荷ロットNo" class="form-control" value="<?php if(isset($_POST['出荷ロットNo'])){echo $_POST['出荷ロットNo'];}  ?>" />
  </div><br>  	
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="CANCEL7" class="form-control" value="1" />
  </div>
  </div>                  
  <div class="form-group">
	<button class="regist ml-4" >キャンセル</button>
  </div>
</form>
	<?php



		$PName = $_POST['品名'];
		$lotID = $_POST['ロットID'];
		
		$PSum208032 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$PSum208722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$PSum508452 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$PSum508722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");
		$PSum918722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 918722 and 品名 = '{$PName}' ;");
		$NGSum208032 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$NGSum208722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$NGSum508452 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$NGSum508722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");	
		
	    echo "$PName"."の本ロットの進捗は以下の通りです。"; 
	  
	  ?>
    <table class="table table-striped table-dark " >
      <thead>
      <tr>
      <th scope="col">工程</th>
        <th scope="col">数量</th>
        <th scope="col">損品数</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <th scope="row">208032</th>
		<td><?php foreach($PSum208032[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208032[0] as $key => $value){echo $value;}; ?></td>
      </tr>
      <tr>
      <th scope="row">208722</th>
	    <td><?php foreach($PSum208722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      <tr>
      <th scope="row">508452</th>
	    <td><?php foreach($PSum508452[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508452[0] as $key => $value){echo $value;}; ?></td>
		</tr>
      <tr>
      <th scope="row">508722</th>
	    <td><?php foreach($PSum508722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
	  <th scope="row">918722</th>
	    <td><?php foreach($PSum918722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      </tbody>
	  </table>
	  </body>
<?php	  


}catch(PDOException $e) {
    echo 'エラーが発生しました。<br>';
    echo $e->getMessage();
    $db->rollBack();}

}elseif(!empty($_POST["出荷ロットNo"]) && !empty($_POST["3ロット目蒸着品数量"])){

  $db = new DataSource();
  $CDATE = $_POST["蒸着ロットNo"]."-".$_POST["扉方向1"];

try{


$db->begin();

$db->createtable();


$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,出荷ロットNo,入力者) 
values ('{$_POST["出荷ロットNo"]}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}','{$_POST["数量"]}'+'{$_POST["2ロット目蒸着品数量"]}'+'{$_POST["3ロット目蒸着品数量"]}','{$_POST["宛先工程"]}','{$_POST["成形日"]}','{$_POST["出荷ロットNo"]}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,損品数,蒸着ロットNo,入力者) 
values ('{$CDATE}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["数量"]}'-'{$_POST["損品数"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["損品数"]}','{$CDATE}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,蒸着ロットNo,入力者) 
values ('{$_POST["2ロット目蒸着ロットNo"]}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["2ロット目蒸着品数量"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["2ロット目蒸着ロットNo"]}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,蒸着ロットNo,入力者) 
values ('{$_POST["3ロット目蒸着ロットNo"]}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["3ロット目蒸着品数量"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["3ロット目蒸着ロットNo"]}','{$_POST["入力者"]}');");

$db->commit();

foreach($_POST as $key => $value) {
	echo $key.":".$value. "<BR />";
	}
	echo "上記の内容で入力しました。内容の確認、またはキャンセルをお願いいたします";
	
?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST["出荷ロットNo"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST["2ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST["3ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="ロットID5" class="form-control" value="<?php echo $_POST["2ロット目蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="ロットID6" class="form-control" value="<?php echo $_POST["3ロット目蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="出荷ロットNo" class="form-control" value="<?php echo $_POST["出荷ロットNo"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="TO508722※システム自動付与項目" class="form-control" value="<?php echo "1";?>" />
  </div>                     
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>
<form class="container" action="" method="POST">
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST["出荷ロットNo"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST["2ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST["3ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="ロットID5" class="form-control" value="<?php echo $_POST["2ロット目蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="ロットID6" class="form-control" value="<?php echo $_POST["3ロット目蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group" >
    <label for="NYUURYOKUSYA"></label>
    <input id="Member" type="hidden" name="入力者2" class="form-control" value="<?php echo $_POST['入力者'];  ?>" required/>
  </div><br>  	
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="CANCEL6" class="form-control" value="1" />
  </div>                  
  <div class="form-group">
	<button class="regist ml-4" >キャンセル</button>
  </div>
</form>
	<?php


		$PName = $_POST['品名'];
		
		$PSum208032 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$PSum208722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$PSum508452 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$PSum508722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");
		$PSum918722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 918722 and 品名 = '{$PName}' ;");
		$NGSum208032 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$NGSum208722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$NGSum508452 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$NGSum508722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");	
		
	    echo "$PName"."の本ロットの進捗は以下の通りです。"; 
	  
	  ?>
    <table class="table table-striped table-dark " >
      <thead>
      <tr>
      <th scope="col">工程</th>
        <th scope="col">数量</th>
        <th scope="col">損品数</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <th scope="row">208032</th>
		<td><?php foreach($PSum208032[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208032[0] as $key => $value){echo $value;}; ?></td>
      </tr>
      <tr>
      <th scope="row">208722</th>
	    <td><?php foreach($PSum208722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      <tr>
      <th scope="row">508452</th>
	    <td><?php foreach($PSum508452[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508452[0] as $key => $value){echo $value;}; ?></td>
		</tr>
      <tr>
      <th scope="row">508722</th>
	    <td><?php foreach($PSum508722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
	  <th scope="row">918722</th>
	    <td><?php foreach($PSum918722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      </tbody>
	  </table>
	  </body>
<?php	  


}catch(PDOException $e) {
    echo 'エラーが発生しました。<br>';
    echo $e->getMessage();
    $db->rollBack();}


}elseif(!empty($_POST["出荷ロットNo"]) && !empty($_POST["2ロット目蒸着品数量"])){

  $db = new DataSource();
  $CDATE = $_POST["蒸着ロットNo"]."-".$_POST["扉方向1"];

try{


$db->begin();

$db->createtable();


$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,出荷ロットNo,入力者) 
values ('{$_POST["出荷ロットNo"]}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}','{$_POST["数量"]}'+'{$_POST["2ロット目蒸着品数量"]}','{$_POST["宛先工程"]}','{$_POST["成形日"]}','{$_POST["出荷ロットNo"]}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,損品数,蒸着ロットNo,入力者) 
values ('{$CDATE}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["数量"]}'-'{$_POST["損品数"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["損品数"]}','{$CDATE}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,蒸着ロットNo,入力者) 
values ('{$_POST["2ロット目蒸着ロットNo"]}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["2ロット目蒸着品数量"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["2ロット目蒸着ロットNo"]}','{$_POST["入力者"]}');");

$db->commit();

foreach($_POST as $key => $value) {
	echo $key.":".$value. "<BR />";
	}
	echo "上記の内容で入力しました。内容の確認、またはキャンセルをお願いいたします";
	
?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST["出荷ロットNo"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST["2ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST["3ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="ロットID5" class="form-control" value="<?php echo $_POST["2ロット目蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="出荷ロットNo" class="form-control" value="<?php echo $_POST["出荷ロットNo"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="TO508722※システム自動付与項目" class="form-control" value="<?php echo "1";?>" />
  </div>                    
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>
<form class="container" action="" method="POST">
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST["出荷ロットNo"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST["2ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST["3ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="ロットID5" class="form-control" value="<?php echo $_POST["2ロット目蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group" >
    <label for="NYUURYOKUSYA"></label>
    <input id="Member" type="hidden" name="入力者2" class="form-control" value="<?php echo $_POST['入力者'];  ?>" />
  </div><br>  	
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="CANCEL5" class="form-control" value="1" />
  </div>                  
  <div class="form-group">
	<button class="regist ml-4" >キャンセル</button>
  </div>
</form>
	<?php


		$PName = $_POST['品名'];
		
		$PSum208032 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$PSum208722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$PSum508452 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$PSum508722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");
		$PSum918722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 918722 and 品名 = '{$PName}' ;");
		$NGSum208032 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$NGSum208722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$NGSum508452 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$NGSum508722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");	
		
	    echo "$PName"."の本ロットの進捗は以下の通りです。"; 
	  
	  ?>
    <table class="table table-striped table-dark " >
      <thead>
      <tr>
      <th scope="col">工程</th>
        <th scope="col">数量</th>
        <th scope="col">損品数</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <th scope="row">208032</th>
		<td><?php foreach($PSum208032[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208032[0] as $key => $value){echo $value;}; ?></td>
      </tr>
      <tr>
      <th scope="row">208722</th>
	    <td><?php foreach($PSum208722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      <tr>
      <th scope="row">508452</th>
	    <td><?php foreach($PSum508452[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508452[0] as $key => $value){echo $value;}; ?></td>
		</tr>
      <tr>
      <th scope="row">508722</th>
	    <td><?php foreach($PSum508722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
	  <th scope="row">918722</th>
	    <td><?php foreach($PSum918722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      </tbody>
	  </table>
	  </body>
<?php	  


}catch(PDOException $e) {
    echo 'エラーが発生しました。<br>';
    echo $e->getMessage();
    $db->rollBack();}


}elseif(!empty($_POST["出荷ロットNo"]) && !empty($_POST["蒸着ロットNo"])){

  $db = new DataSource();
  $CDATE = $_POST["蒸着ロットNo"]."-".$_POST["扉方向1"];

try{


$db->begin();

$db->createtable();


$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,出荷ロットNo,入力者) 
values ('{$_POST["出荷ロットNo"]}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}','{$_POST["数量"]}','{$_POST["宛先工程"]}','{$_POST["成形日"]}','{$_POST["出荷ロットNo"]}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,損品数,蒸着ロットNo,入力者) 
values ('{$CDATE}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["数量"]}'-'{$_POST["損品数"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["損品数"]}','{$CDATE}','{$_POST["入力者"]}');");

$db->commit();

foreach($_POST as $key => $value) {
	echo $key.":".$value. "<BR />";
	}
	echo "上記の内容で入力しました。内容の確認、またはキャンセルをお願いいたします";
	
?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST["出荷ロットNo"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST["2ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST["3ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="出荷ロットNo" class="form-control" value="<?php echo $_POST["出荷ロットNo"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="TO508722※システム自動付与項目" class="form-control" value="<?php echo "1";?>" />
  </div>                    
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>
<form class="container" action="" method="POST">
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST["出荷ロットNo"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST["2ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST["3ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>
  <div class="form-group" >
    <label for="NYUURYOKUSYA"></label>
    <input id="Member" type="hidden" name="入力者" class="form-control" value="<?php echo $_POST['入力者'];  ?>" required/>
  </div><br> 	
  <div class="form-group">
    <label for="LOTID"></label>
    <input id="LOTID" type="hidden" name="CANCEL4" class="form-control" value="1" />
  </div>                  
  <div class="form-group">
	<button class="regist ml-4" >キャンセル</button>
  </div>
</form>
	<?php


		$PName = $_POST['品名'];
		
		$PSum208032 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$PSum208722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$PSum508452 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$PSum508722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");
		$PSum918722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 918722 and 品名 = '{$PName}' ;");
		$NGSum208032 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$NGSum208722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$NGSum508452 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$NGSum508722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$_POST["出荷ロットNo"]}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");	
		
	    echo "$PName"."の本ロットの進捗は以下の通りです。"; 
	  
	  ?>
    <table class="table table-striped table-dark " >
      <thead>
      <tr>
      <th scope="col">工程</th>
        <th scope="col">数量</th>
        <th scope="col">損品数</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <th scope="row">208032</th>
		<td><?php foreach($PSum208032[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208032[0] as $key => $value){echo $value;}; ?></td>
      </tr>
      <tr>
      <th scope="row">208722</th>
	    <td><?php foreach($PSum208722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      <tr>
      <th scope="row">508452</th>
	    <td><?php foreach($PSum508452[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508452[0] as $key => $value){echo $value;}; ?></td>
		</tr>
      <tr>
      <th scope="row">508722</th>
	    <td><?php foreach($PSum508722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
	  <th scope="row">918722</th>
	    <td><?php foreach($PSum918722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      </tbody>
	  </table>
	  </body>
<?php	  


}catch(PDOException $e) {
    echo 'エラーが発生しました。<br>';
    echo $e->getMessage();
    $db->rollBack();}


}elseif(!empty($_POST["蒸着ロットNo"]) && !empty($_POST["3ロット目成形品数量"])){

  $db = new DataSource();
  $CDATE = $_POST["蒸着ロットNo"]."-".$_POST["扉方向1"];

try{


$db->begin();

$db->createtable();


$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,蒸着ロットNo,入力者) 
values ('{$CDATE}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}','{$_POST["数量"]}'+'{$_POST["2ロット目成形品数量"]}'+'{$_POST["3ロット目成形品数量"]}','{$_POST["宛先工程"]}','{$_POST["成形日"]}','{$_POST["蒸着ロットNo"]}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,損品数,入力者) 
values ('{$_POST['ロットID']}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["数量"]}'-'{$_POST["損品数"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["損品数"]}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,入力者) 
values ('{$_POST["2ロット目成形日"]}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["2ロット目成形品数量"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,入力者) 
values ('{$_POST["3ロット目成形日"]}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["3ロット目成形品数量"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["入力者"]}');");

$db->commit();

foreach($_POST as $key => $value) {
	echo $key.":".$value. "<BR />";
	}
	echo "上記の内容で入力しました。内容の確認、またはキャンセルをお願いいたします";
	
?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $CDATE;?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST["2ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST["3ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>                   
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>
<form class="container" action="" method="POST">
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $CDATE;?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST["2ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID4" class="form-control" value="<?php echo $_POST["3ロット目成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>
  <div class="form-group" >
    <label for="NYUURYOKUSYA"></label>
    <input id="Member" type="hidden" name="入力者" class="form-control" value="<?php echo $_POST['入力者'];  ?>" required/>
  </div><br> 	
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="CANCEL3" class="form-control" value="1" />
  </div>                  
  <div class="form-group">
	<button class="regist ml-4" >キャンセル</button>
  </div>
</form>
	<?php


		$PName = $_POST['品名'];
		
		$PSum208032 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$PSum208722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$PSum508452 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$PSum508722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");
		$PSum918722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 918722 and 品名 = '{$PName}' ;");
		$NGSum208032 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$NGSum208722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$NGSum508452 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$NGSum508722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");	
		
	    echo "$PName"."の本ロットの進捗は以下の通りです。"; 
	  
	  ?>
    <table class="table table-striped table-dark " >
      <thead>
      <tr>
      <th scope="col">工程</th>
        <th scope="col">数量</th>
        <th scope="col">損品数</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <th scope="row">208032</th>
		<td><?php foreach($PSum208032[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208032[0] as $key => $value){echo $value;}; ?></td>
      </tr>
      <tr>
      <th scope="row">208722</th>
	    <td><?php foreach($PSum208722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      <tr>
      <th scope="row">508452</th>
	    <td><?php foreach($PSum508452[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508452[0] as $key => $value){echo $value;}; ?></td>
		</tr>
      <tr>
      <th scope="row">508722</th>
	    <td><?php foreach($PSum508722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
	  <th scope="row">918722</th>
	    <td><?php foreach($PSum918722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      </tbody>
	  </table>
	  </body>
<?php	  


}catch(PDOException $e) {
    echo 'エラーが発生しました。<br>';
    echo $e->getMessage();
    $db->rollBack();}


}elseif(!empty($_POST["蒸着ロットNo"]) && !empty($_POST["2ロット目成形品数量"])){

	$db = new DataSource();
  $CDATE = $_POST["蒸着ロットNo"]."-".$_POST["扉方向1"];

try{


$db->begin();

$db->createtable();


$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,入力者) 
values ('{$CDATE}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}','{$_POST["数量"]}'+'{$_POST["2ロット目成形品数量"]}','{$_POST["宛先工程"]}','{$_POST["成形日"]}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,損品数,入力者) 
values ('{$_POST['ロットID']}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["数量"]}'-'{$_POST["損品数"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["損品数"]}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,入力者) 
values ('{$_POST["2ロット目成形日"]}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["2ロット目成形品数量"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["入力者"]}');");

$db->commit();

foreach($_POST as $key => $value) {
	echo $key.":".$value. "<BR />";
	}
	echo "上記の内容で入力しました。内容の確認、またはキャンセルをお願いいたします";
	
?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $CDATE;?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST['2ロット目成形日'];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>  
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>                  
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>
<form class="container" action="" method="POST">
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $CDATE;?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID3" class="form-control" value="<?php echo $_POST['2ロット目成形日'];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>
  <div class="form-group" >
    <label for="NYUURYOKUSYA"></label>
    <input id="Member" type="hidden" name="入力者" class="form-control" value="<?php echo $_POST['入力者'];  ?>" required/>
  </div><br>    	
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="CANCEL2" class="form-control" value="1" />
  </div>                  
  <div class="form-group">
	<button class="regist ml-4" >キャンセル</button>
  </div>
</form>
	<?php

		$PName = $_POST['品名'];
		
		$PSum208032 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$PSum208722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$PSum508452 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$PSum508722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");
		$PSum918722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 918722 and 品名 = '{$PName}' ;");
		$NGSum208032 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$NGSum208722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$NGSum508452 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$NGSum508722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");	
		
	    echo "$PName"."の入力後の本ロットの進捗は以下の通りです。"; 
	  

	  
	  ?>
    <table class="table table-striped table-dark " >
      <thead>
      <tr>
      <th scope="col">工程</th>
        <th scope="col">数量</th>
        <th scope="col">損品数</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <th scope="row">208032</th>
		<td><?php foreach($PSum208032[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208032[0] as $key => $value){echo $value;}; ?></td>
      </tr>
      <tr>
      <th scope="row">208722</th>
	    <td><?php foreach($PSum208722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      <tr>
      <th scope="row">508452</th>
	    <td><?php foreach($PSum508452[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508452[0] as $key => $value){echo $value;}; ?></td>
		</tr>
      <tr>
      <th scope="row">508722</th>
	    <td><?php foreach($PSum508722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
	  <th scope="row">918722</th>
	    <td><?php foreach($PSum918722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      </tbody>
	  </table>
	  </body>
<?php	  


}catch(PDOException $e) {
    echo 'エラーが発生しました。<br>';
    echo $e->getMessage();
    $db->rollBack();}






}elseif(!empty($_POST["蒸着ロットNo"]) && !empty($_POST["数量"])){

	$db = new DataSource();
  $CDATE = $_POST["蒸着ロットNo"]."-".$_POST["扉方向1"];

try{


$db->begin();

$db->createtable();


$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,入力者) 
values ('{$CDATE}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}','{$_POST["数量"]}',''{$_POST["宛先工程"]}'','{$_POST["成形日"]}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,損品数,入力者) 
values ('{$_POST['ロットID']}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["数量"]}'-'{$_POST["損品数"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["損品数"]}','{$_POST["入力者"]}');");


$db->commit();

foreach($_POST as $key => $value) {
	echo $key.":".$value. "<BR />";
	}
	echo "上記の内容で入力しました。内容の確認、またはキャンセルをお願いいたします";
	
?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $CDATE;?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>  
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>                  
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>
<form class="container" action="" method="POST">
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $CDATE?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="蒸着ロットNo1" class="form-control" value="<?php echo $_POST["蒸着ロットNo"];?>"/>
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="扉方向1-1" class="form-control" value="<?php echo $_POST["扉方向1"];?>"/>
  </div>  
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group" >
    <label for="NYUURYOKUSYA"></label>
    <input id="Member" type="hidden" name="入力者" class="form-control" value="<?php echo $_POST['入力者'];  ?>" required/>
  </div><br>  	
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="CANCEL1" class="form-control" value="1" />
  </div>                  
  <div class="form-group">
	<button class="regist ml-4" >キャンセル</button>
  </div>
</form>
	<?php


    
		$PName = $_POST['品名'];
		
		$PSum208032 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$PSum208722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$PSum508452 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$PSum508722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");
		$PSum918722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 918722 and 品名 = '{$PName}' ;");
		$NGSum208032 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$NGSum208722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$NGSum508452 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$NGSum508722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$CDATE}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");	
		
	    echo "$PName"."の入力後の本ロットの進捗は以下の通りです。"; 
	  

	  
	  ?>
    <table class="table table-striped table-dark " >
      <thead>
      <tr>
      <th scope="col">工程</th>
        <th scope="col">数量</th>
        <th scope="col">損品数</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <th scope="row">208032</th>
		<td><?php foreach($PSum208032[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208032[0] as $key => $value){echo $value;}; ?></td>
      </tr>
      <tr>
      <th scope="row">208722</th>
	    <td><?php foreach($PSum208722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      <tr>
      <th scope="row">508452</th>
	    <td><?php foreach($PSum508452[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508452[0] as $key => $value){echo $value;}; ?></td>
		</tr>
      <tr>
      <th scope="row">508722</th>
	    <td><?php foreach($PSum508722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
	  <th scope="row">918722</th>
	    <td><?php foreach($PSum918722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      </tbody>
	  </table>
	  </body>
<?php	  


}catch(PDOException $e) {
    echo 'エラーが発生しました。<br>';
    echo $e->getMessage();
    $db->rollBack();}

}elseif(!empty($_POST["成形日"])){


	$db = new DataSource();

try{


$db->begin();

$db->createtable();


$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,入力者) 
values ('{$_POST['ロットID']}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}','{$_POST["数量"]}','{$_POST["宛先工程"]}','{$_POST["成形日"]}','{$_POST["入力者"]}');");

$db->QuerySql("insert into Database_rds.process_progress 
(ロットID,発行日,品名,品番,数量,工程,成形日,損品数,入力者) 
values ('{$_POST['ロットID']}','{$_POST["発行日"]}','{$_POST["品名"]}','{$_POST["品番"]}',-1*'{$_POST["数量"]}'-'{$_POST["損品数"]}','{$_POST["自工程"]}','{$_POST["成形日"]}','{$_POST["損品数"]}','{$_POST["入力者"]}');");


$db->commit();

foreach($_POST as $key => $value) {
	echo $key.":".$value. "<BR />";
	}
	echo "上記の内容で入力しました。内容の確認、またはキャンセルをお願いいたします";
	
?>

<form class="container" action="index2.php" method="get">
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST['ロットID'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>                  
  <div class="form-group">
    <button class="regist ml-4" type="submit" > 確認</button>
  </div>
</form>
<form class="container" action="" method="POST">
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="ロットID2" class="form-control" value="<?php echo $_POST['ロットID'];?>" />
  </div>
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="成形日2" class="form-control" value="<?php echo $_POST["成形日"];?>" />
  </div>
  <div class="form-group">
    <label for="HINMEI"></label><br>
    <input id="PName208032" type="hidden" name="品名2" class="form-control" value="<?php echo $_POST['品名'];?>"/>
  </div>
  <div class="form-group" >
    <label for="NYUURYOKUSYA"></label>
    <input id="Member" type="hidden" name="入力者" class="form-control" value="<?php echo $_POST['入力者'];  ?>" required/>
  </div><br>  	
  <div class="form-group">
    <label for="LOTID"></label><br>
    <input id="LOTID" type="hidden" name="CANCEL" class="form-control" value="1" />
  </div>                  
  <div class="form-group">
	<button class="regist ml-4" >キャンセル</button>
  </div>
</form>
	<?php



		$PName = $_POST['品名'];
		$lotID = $_POST['ロットID'];
		
		$PSum208032 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$PSum208722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$PSum508452 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$PSum508722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");
		$PSum918722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 918722 and 品名 = '{$PName}' ;");
		$NGSum208032 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 208032 and 品名 = '{$PName}' ;");
		$NGSum208722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}' ;");
		$NGSum508452 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}' ;");
		$NGSum508722 = $db->SelectSumAll("SELECT SUM(損品数) FROM process_progress WHERE ロットID = '{$lotID}' and dlt_flg = 0 and 工程 = 508722 and 品名 = '{$PName}' ;");	
		
	    echo "$PName"."の本ロットの進捗は以下の通りです。"; 
	  
	  ?>
    <table class="table table-striped table-dark " >
      <thead>
      <tr>
      <th scope="col">工程</th>
        <th scope="col">数量</th>
        <th scope="col">損品数</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <th scope="row">208032</th>
		<td><?php foreach($PSum208032[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208032[0] as $key => $value){echo $value;}; ?></td>
      </tr>
      <tr>
      <th scope="row">208722</th>
	    <td><?php foreach($PSum208722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum208722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      <tr>
      <th scope="row">508452</th>
	    <td><?php foreach($PSum508452[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508452[0] as $key => $value){echo $value;}; ?></td>
		</tr>
      <tr>
      <th scope="row">508722</th>
	    <td><?php foreach($PSum508722[0] as $key => $value){echo $value;}; ?></td>
		<td><?php foreach($NGSum508722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
	  <th scope="row">918722</th>
	    <td><?php foreach($PSum918722[0] as $key => $value){echo $value;}; ?></td>
	  </tr>
      </tbody>
	  </table>
	  </body>
<?php	  


}catch(PDOException $e) {
    echo 'エラーが発生しました。<br>';
    echo $e->getMessage();
    $db->rollBack();}

}



?>







