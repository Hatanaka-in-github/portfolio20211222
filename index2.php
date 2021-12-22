<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>


    
<style>
        .copy-btn:hover{
            color: #007bff;
        }
        .table{
            width: 250px;
        }
    </style>
<body>
<?php require_once 'DBclasscollect.php';
    use db\DataSource;
    $db = new DataSource();
    if(isset($_POST['CANCEL1']) || isset($_POST['CANCEL2']) || isset($_POST['CANCEL3'])){unset($_POST['CANCEL1'],$_POST['CANCEL2'],$_POST['CANCEL3']);};?>

    <div class="card-body">
        <table class="table table-bordered">
            <th class="text-primary" colspan="2">入力後は以下URLをコピーしてQRコードに紐付けてください。この情報を呼び出す際、アクセスに必要なURLとなります。</th>
            <tbody>
                <tr>
                    <td class="copy-target"><?php echo $_SERVER["REQUEST_URI"]; ?></td>
                    <td class="copy-area">
                        <button id="copy-td" class="copy-btn d-block mx-auto bg-white border border-secondary rounded" value="<?php echo $_SERVER["REQUEST_URI"]; ?>" data-toggle="tooltip">
                            <i class="fas fa-clipboard"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        // --------------------------
        // td横のボタンクリック時の動作
        // --------------------------
        $('#copy-td')
        // tooltip設定
        .tooltip({
            trigger: 'manual'
        })
        // tooltip表示後の動作を設定
        .on('shown.bs.tooltip', function(){
            setTimeout((function(){
            $(this).tooltip('hide');
            }).bind(this), 1500);
        })
        // クリック時の動作を設定
        .on('click', function(){
            // buttonのvalueを取得
            const text = $(this).val();
            // tdから直接はコピーできないためテキストエリアを経由
            let $textarea = $('<textarea></textarea>');
            $textarea.text(text);
            $(this).append($textarea);
            $textarea.select();
            // コピー結果を取得してtextareaは削除
            const copyResult = document.execCommand('copy');
            $textarea.remove();
            // コピー結果によって表示変更
            if(copyResult){
                $('#copy-td').attr('data-original-title', 'コピーしました');
            }else{
                $('#copy-td').attr('data-original-title', 'コピー失敗しました');
            }
            // tooltip表示
            $(this).tooltip('show');
        });


        // -----------------------------
        // input横のボタンクリック時の動作
        // -----------------------------
        $('#copy-input')
        // tooltip設定
        .tooltip({
            trigger: 'manual'
        })
        // tooltip表示後の動作を設定
        .on('shown.bs.tooltip', function(){
            setTimeout((function(){
            $(this).tooltip('hide');
            }).bind(this), 1500);
        })
        // クリック時の動作を設定
        .on('click', function(){
            $('#copy-target').select();
            const copyResult = document.execCommand('copy');
            console.log(copyResult)
            // コピー結果によって表示変更
            if(copyResult){
                $('#copy-input').attr('data-original-title', 'コピーしました');
            }else{
                $('#copy-input').attr('data-original-title', 'コピー失敗しました');
            }
            // tooltip表示
            $(this).tooltip('show');
        });
    </script>
    <div class="tab-wrap">
        <input id="TAB-01" type="radio" name="TAB" class="tab-switch" />
        <label class="tab-label" for="TAB-01">入力フォーム</label>
        <div class="tab-content">
        <form class="container" action="function.php" method="post">
              　   <div class="form-group">
                    <label for="LOTID">LOT-ID </label><br>
                    <input id="LOTID" type="text" name="ロットID" class="form-control" value="<?php if(isset($_GET['ロットID2'])){echo $_GET['ロットID2'];}  ?>"/>
                  </div>
                　<div class="form-group">
                    <label for="IDate">発行日 </label><br>
                    <input type="date" id="IDate" name="発行日" class="form-control" required/>
                  </div>
                　<div class="form-group">
                    <label for="PName">品名 </label><br>
                    <input id="PName" type="text" name="品名" class="form-control" value="<?php if(isset($_GET['品名2'])){echo $_GET['品名2'];}  ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="PNumber">品番 </label><br>
                    <input id="PNumber" type="text" name="品番" class="form-control" required/>
                  </div>
                  <div class="form-group">
                    <label for="PAmount">数量 </label><br>
                    <input id="PAmount" type="number" name="数量" class="form-control" value="" required/>
                  </div>
                  <div class="row">
                      <div class="col-sm">
                        <label list="list">発工程</label>
                        <input class="form-control" type="search" name="自工程" autocomplete="on" list="keywords" required/>
                        <datalist id="keywords">
                        <option value="008032">  
                        <option value="208032">
                        <option value="208722">
                        <option value="508452">
                        <option value="508722">
                        <option value="918722">
                        </datalist>
                      </div>                     
                      <div class="col-sm">
                        <label for="KOUTEI">宛先工程 </label>
                        <input class="form-control" type="search" name="宛先工程" autocomplete="on" list="keywords" required/>
                        <datalist id="keywords">
                        <option value="008032">
                        <option value="208032">
                        <option value="208722">
                        <option value="508452">
                        <option value="508722">
                        <option value="918722">
                        </datalist>
                      </div> 
                      <div class="col-sm">
                      <br>
                      </div>                        
                  </div><br>
                  <div class="form-group">
                    <label for="PDate1">成形日 </label><br>
                    <input id="PDate1" type="datetime-local" name="成形日" class="form-control" value="<?php if(isset($_GET['成形日'])){echo $_GET['成形日'];}elseif(isset($_GET['成形日2'])){echo $_GET['成形日2'];}elseif(isset($_GET['ロットID2'])){echo $_GET['ロットID2'];}  ?>" required/>
                  </div>
                  <div class="tab-wrap2">
                      <input id="TAB-03-01" type="radio" name="TAB" class="tab-switch2" /><label class="tab-label2" for="TAB-03-01">2ロット目以降<br>*508452工程でロットの数量が足らず、別ロットからの数量追加する際、記載願います。</label>
                      <div class="tab-content2">
                        <br>
                  <div class="form-group">
                    <label for="PDate2">2ロット目成形日 </label><br>
                    <input id="PDate2" type="text" name="2ロット目成形日" class="form-control" value="<?php if(isset($_POST['ロットID3'])){echo $_POST['ロットID3'];}elseif(isset($_GET['ロットID3'])){echo $_GET['ロットID3'];}  ?>" />
                  </div>
                  <div class="form-group">
                    <label for="PAmount2">数量 </label><br>
                    <input id="PAmount2" type="number" name="2ロット目成形品数量" class="form-control col-sm" value="" />
                  </div>
                  <div class="form-group">
                    <label for="PDate3">3ロット目成形日 </label><br>
                    <input id="PDate3" type="text" name="3ロット目成形日" class="form-control" value="<?php if(isset($_POST['ロットID4'])){echo $_POST['ロットID4'];}elseif(isset($_GET['ロットID4'])){echo $_GET['ロットID4'];}  ?>"/>
                  </div>
                  <div class="form-group col-sm">
                    <label for="PAmount3">数量 </label><br>
                    <input id="PAmount3" type="number" name="3ロット目成形品数量" class="form-control col-sm" value="" />
                  </div>
                  <br><br>
                  <?php if(isset($_GET['品名2']))
                    {$PName = $_GET['品名2'];

                      $AssyLot208722 = $db->SelectSumAll("SELECT DISTINCT ロットID FROM process_progress WHERE dlt_flg = 0 and 工程 = 208722 and 品名 = '{$PName}';");
                      $num1 = count($AssyLot208722);
                      if($num1 > 0){echo "$PName"."の208722工程在庫のロットID情報は以下の通りです。"."<BR  />"."<BR  />";} 
                      $i=0 ;
                      while($i<$num1){foreach($AssyLot208722[$i] as $key => $value)
                        {echo "ロットID".":"."<BR  />".$value."<BR  />";
                          $AssyAmount208722 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE dlt_flg = 0 and 工程 = 208722 and ロットID = '{$value}' and 品名 = '{$PName}';");
                        foreach($AssyAmount208722[0] as $key => $value){echo "数量".":".$value."<BR  />"."<BR  />";}
                        };$i++;};}?>
                  </div>
                     <input id="TAB-03-02" type="radio" name="TAB" class="tab-switch2" /><label class="tab-label2" for="TAB-03-02" checked>閉じる</label>
                    </div><br><br>
                  <div class="form-group">
                    <label for="CDate1">蒸着ロットNo </label><br>
                    <input id="CDate1" type="datetime-local" name="蒸着ロットNo" class="form-control" value="<?php if(isset($_GET['蒸着ロットNo'])){echo $_GET['蒸着ロットNo'];}elseif(isset($_GET['蒸着ロットNo1'])){echo $_GET['蒸着ロットNo1'];}  ?>" />
                  </div>
                  <div class="form-group row">
                    <label for="DoorSide1" class="ml-4">扉方向 </label>
                    <input id="DoorSide1" type="search" name="扉方向1" class="form-control col-2" list="keywordsC1" value="<?php if(isset($_GET['扉方向1'])){echo $_GET['扉方向1'];}elseif(isset($_GET['扉方向1-1'])){echo $_GET['扉方向1-1'];} ?>" />
                        <datalist id="keywordsC1">
                        <option value="L">
                        <option value="R">
                        </datalist>
                  </div>
                  <div class="tab-wrap2">
                      <input id="TAB-04-01" type="radio" name="TAB" class="tab-switch2" />
                      <label class="tab-label2" for="TAB-04-01">2ロット目以降</label>
                      <div class="tab-content2">                        
                        <br>
                  <div class="form-group">
                    <label for="CDate2">2ロット目蒸着ロットNo </label><br>
                    <input id="CDate2" type="text" name="2ロット目蒸着ロットNo" class="form-control" value="<?php if(isset($_GET['ロットID5'])){echo $_GET['ロットID5'];}  ?>" />
                  </div>
                  <div class="form-group col-sm">
                    <label for="PAmount4">数量 </label><br>
                    <input id="PAmount4" type="number" name="2ロット目蒸着品数量" class="form-control col-sm" value="" />
                  </div>
                  <div class="form-group">
                    <label for="CDate3">3ロット目蒸着ロットNo </label><br>
                    <input id="CDate3" type="text" name="3ロット目蒸着ロットNo" class="form-control" value="<?php if(isset($_GET['ロットID6'])){echo $_GET['ロットID6'];}  ?>" />
                  </div>
                  <div class="form-group col-sm">
                    <label for="PAmount5">数量 </label><br>
                    <input id="PAmount5" type="number" name="3ロット目蒸着品数量" class="form-control col-sm" value="" />
                  </div>
                  <?php if(isset($_GET['品名2']))
                        {$PName = $_GET['品名2'];
                          $AssyLot508452 = $db->SelectSumAll("SELECT DISTINCT ロットID FROM process_progress WHERE dlt_flg = 0 and 工程 = 508452 and 品名 = '{$PName}';");
                          $num2 = count($AssyLot508452);
                          if($num2 > 0){echo "$PName"."の508452工程在庫のロットID情報は以下の通りです。"."<BR  />"."<BR  />";} 
                          $i=0 ;
                          while($i<$num2){foreach($AssyLot508452[$i] as $key => $value)
                            {echo "ロットID".":"."<BR  />".$value."<BR  />";
                              $AssyAmount508452 = $db->SelectSumAll("SELECT SUM(数量) FROM process_progress WHERE dlt_flg = 0 and 工程 = 508452 and ロットID = '{$value}' and 品名 = '{$PName}';");
                            foreach($AssyAmount508452[0] as $key => $value){echo "数量".":".$value."<BR  />"."<BR  />";}
                            };$i++;};}?>
                  </div>         
                     <input id="TAB-04-02" type="radio" name="TAB" class="tab-switch2" /><label class="tab-label2" for="TAB-04-02" checked>閉じる</label>
                     </div>
                    <br><br>
                  <div class="form-group">
                    <label for="NGAmount">損品数 </label><br>
                    <input id="NGAmount" type="number" name="損品数" class="form-control" value="<?php if(isset($_POST['損品数'])){echo $_POST['損品数'];}else{echo "0"; } ?>"  />
                  </div>
                    <div class="form-group">
                    <label for="DDate1">出荷ロットNo</label><br>
                    <input id="DDate1" type="text" name="出荷ロットNo" class="form-control" value="<?php if(isset($_GET['出荷ロットNo'])){echo $_GET['出荷ロットNo'];}  ?>" />
                  </div><br>
                  <div class="form-group" >
                    <label for="Member">入力者 </label>
                    <input id="Member" type="text" name="入力者" required class="form-control" value="<?php if(isset($_POST['入力者'])){echo $_POST['入力者'];}  ?>" required/>
                  </div><br>
                  <div class="form-group" >
                   <label for="Notice">備考 </label>
                   <textarea id="Notice" cols="40" name="備考" rows="7" class="form-control ml-2"><?php if(isset($_POST['備考'])){echo $_POST['備考'];}?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="TO508722※システム自動付与項目"></label>
                    <input id="TO508722※システム自動付与項目" type="hidden" name="TO508722※システム自動付与項目" class="form-control" value="<?php if(isset($_GET['TO508722※システム自動付与項目'])){echo $_GET['TO508722※システム自動付与項目'];}?>" />
                  </div>
                  <div class="form-group">
                    <button class="regist ml-4" type="submit">登録する</button>
                    <button class="reset"  type="reset" >リセット</button><br>
                 </div>
              </form>
              </div>
        
        <input id="TAB-02" type="radio" name="TAB" class="tab-switch" checked/>
        <label class="tab-label" id="TAB-02" for="TAB-02">検索フォーム</label>
        <div class="tab-content">

        <?php





if(isset($_GET['品名2'])){



  $PName = $_GET['品名2'];
  $lotID = $_GET['ロットID2'];

  
  
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


};
?>
  <h2 class="bg-info">本ロットの進捗</h2>
  <table class="table bg-success">
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
      <tr>
    　<th scope="row">918722</th>
       <td><?php foreach($PSum918722[0] as $key => $value){echo $value;}; ?></td>
      </tr>
      </tbody>
  </table>
     <h2 class="bg-primary">全在庫検索</h2>
      <form action="" method="POST" class="form-group">
        <div class="form-group">
          <label for="HINMEI">以下の入力欄に検索したい品名を入力してください。 </label><br>
          <input id="PName208032" type="text" name="EPName" class="form-control" />
        </div>  
        <div class="form-group">
          <button class="regist" type="submit" class="btn btn-primary shadow-sm"> 検索</button>
        </div>
      </form>

<?php 
if(isset($_POST['EPName'])) {
    
    $PName = $_POST['EPName'];

    $db = new DataSource();
    $result208032 = $db->selectOne("select SUM(数量) from Database_rds.`process_progress` where 工程 = 208032 and dlt_flg = 0 and 品名 = :PName;", [
      ':PName' => $PName]);
    $result208722 = $db->selectOne("select SUM(数量) from Database_rds.`process_progress` where 工程 = 208722 and dlt_flg = 0 and 品名 = :PName;", [
      ':PName' => $PName]);
    $result508452 = $db->selectOne("select SUM(数量) from Database_rds.`process_progress` where 工程 = 508452 and dlt_flg = 0 and 品名 = :PName;", [
      ':PName' => $PName]);
    $result508722 = $db->selectOne("select SUM(数量) from Database_rds.`process_progress` where 工程 = 508722 and dlt_flg = 0 and 品名 = :PName;", [
      ':PName' => $PName]);
    $result918722 = $db->selectOne("select SUM(数量) from Database_rds.`process_progress` where 工程 = 918722 and dlt_flg = 0 and 品名 = :PName;", [
        ':PName' => $PName]);
    $result208032NG = $db->selectOne("select SUM(損品数) from Database_rds.`process_progress` where 工程 = 208032 and dlt_flg = 0 and 品名 = :PName;", [
        ':PName' => $PName]);
    $result208722NG = $db->selectOne("select SUM(損品数) from Database_rds.`process_progress` where 工程 = 208722 and dlt_flg = 0 and 品名 = :PName;", [
        ':PName' => $PName]);
    $result508452NG = $db->selectOne("select SUM(損品数) from Database_rds.`process_progress` where 工程 = 508452 and dlt_flg = 0 and 品名 = :PName;", [
        ':PName' => $PName]);
    $result508722NG = $db->selectOne("select SUM(損品数) from Database_rds.`process_progress` where 工程 = 508722 and dlt_flg = 0 and 品名 = :PName;", [
        ':PName' => $PName]);

    echo "$PName"."の全在庫は以下の通りです。"; 

}elseif(isset($_GET['品名2'])){

  $PName = $_GET['品名2'];

  $db = new DataSource();
  $result208032 = $db->selectOne("select SUM(数量) from Database_rds.`process_progress` where 工程 = 208032 and dlt_flg = 0 and 品名 = :PName;", [
    ':PName' => $PName]);
  $result208722 = $db->selectOne("select SUM(数量) from Database_rds.`process_progress` where 工程 = 208722 and dlt_flg = 0 and 品名 = :PName;", [
    ':PName' => $PName]);
  $result508452 = $db->selectOne("select SUM(数量) from Database_rds.`process_progress` where 工程 = 508452 and dlt_flg = 0 and 品名 = :PName;", [
    ':PName' => $PName]);
  $result508722 = $db->selectOne("select SUM(数量) from Database_rds.`process_progress` where 工程 = 508722 and dlt_flg = 0 and 品名 = :PName;", [
    ':PName' => $PName]);
  $result918722 = $db->selectOne("select SUM(数量) from Database_rds.`process_progress` where 工程 = 918722 and dlt_flg = 0 and 品名 = :PName;", [
      ':PName' => $PName]);
  $result208032NG = $db->selectOne("select SUM(損品数) from Database_rds.`process_progress` where 工程 = 208032 and dlt_flg = 0 and 品名 = :PName;", [
      ':PName' => $PName]);
  $result208722NG = $db->selectOne("select SUM(損品数) from Database_rds.`process_progress` where 工程 = 208722 and dlt_flg = 0 and 品名 = :PName;", [
      ':PName' => $PName]);
  $result508452NG = $db->selectOne("select SUM(損品数) from Database_rds.`process_progress` where 工程 = 508452 and dlt_flg = 0 and 品名 = :PName;", [
      ':PName' => $PName]);
  $result508722NG = $db->selectOne("select SUM(損品数) from Database_rds.`process_progress` where 工程 = 508722 and dlt_flg = 0 and 品名 = :PName;", [
      ':PName' => $PName]);

  echo "$PName"."の全在庫は以下の通りです。"; 

}
?>

    <table class="table table-dark mx-auto" style="width: 100%;" >
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
        <td><?php foreach($result208032 as $key => $value){echo $value;}; ?></td>
        <td><?php foreach($result208032NG as $key => $value){echo $value;}; ?></td>
      </tr>
      <tr>
      <th scope="row">208722</th>
        <td><?php foreach($result208722 as $key => $value){echo $value;}; ?></td>
        <td><?php foreach($result208722NG as $key => $value){echo $value;}; ?></td>
      </tr>
      <tr>
      <th scope="row">508452</th>
        <td><?php foreach($result508452 as $key => $value){echo $value;}; ?></td>
        <td><?php foreach($result508452NG as $key => $value){echo $value;}; ?></td>
      </tr>
      <tr>
      <th scope="row">508722</th>
        <td><?php foreach($result508722 as $key => $value){echo $value;}; ?></td>
        <td><?php foreach($result508722NG as $key => $value){echo $value;}; ?></td>
      </tr>
      <tr>
      <th scope="row">918722</th>
        <td><?php foreach($result918722 as $key => $value){echo $value;}; ?></td>
      </tr>
      </tbody>
  　　</table>
  
  </div>     
  </div>
</body>
</html>