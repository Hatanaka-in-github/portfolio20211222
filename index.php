
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>          
    <form class="container" action="index2.php" method="get">
    　   <div class="form-group">
          <label for="LOTID">LOT-ID </label><br>
          <input id="LOTID" type="datetime-local" name="ロットID2" class="form-control" required/>
        </div>
        <div class="form-group">
          <label for="HINMEI">品名 </label><br>
          <input id="PName208032" type="text" name="品名2" class="form-control"  required/>
        </div>                  
        <div class="form-group">
          <button class="regist ml-4" type="submit"> 登録する</button>
          <button class="reset"  type="reset" >リセット</button><br>
        </div>
    </form>
  </body>
</html>