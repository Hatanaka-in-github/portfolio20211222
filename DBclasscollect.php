<?php
namespace db;

use PDO;

class DataSource{

      private $conn;

    public function __construct($host = 'database-pf-rds.c2wo0nndptaa.ap-northeast-1.rds.amazonaws.com', $port = '3306', $dbName = 'Database_rds', $username = 'admin', $password = 'Hatanaka6042')
    {
        $dsn = "mysql:host={$host};port={$port};dbname={$dbName};";
        $this->conn = new PDO($dsn, $username, $password);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
    }

    public function QuerySql($sql="")
     {
      $this->conn->query($sql);
    }

    public function begin(){
        $this->conn->beginTransaction();
    }

    public function commit(){
        $this->conn->commit();
    }

    public function rollback(){
        $this->conn->rollback();
    }

    public function SelectSumAll($sql=""){
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function SelectSum($sql=""){
        $result = $this->SelectSumAll($sql);
        return count($result) > 0 ? $result[0] : false;
    }

    public function execute($sql = "", $params = []) {
        $this->executeSql($sql, $params);
        return  $this->sqlResult;
    }

    private function executeSql($sql, $params) {
        $stmt = $this->conn->prepare($sql);
        $this->sqlResult = $stmt->execute($params);
        return $stmt;
    }

    public function select($sql = "", $params = []) {
        $stmt = $this->executeSql($sql, $params);
        return $stmt->fetchAll();
    }

    public function selectOne($sql = "", $params = []) {
        $result = $this->select($sql, $params);
        return count($result) > 0 ? $result[0] : false;
    }

    public function createtable(
        $sql="CREATE TABLE IF NOT EXISTS Database_rds.`process_progress` (
            `AUTO_ID` int(11) NOT NULL AUTO_INCREMENT,
            `ロットID` varchar(30) DEFAULT NULL,
            `発行日` varchar(15) DEFAULT NULL,
            `品名` varchar(15) DEFAULT NULL,
            `品番` varchar(15) DEFAULT NULL,
            `数量` varchar(15) NOT NULL DEFAULT 0,
            `工程` varchar(15) DEFAULT NULL,
            `成形日` varchar(30) DEFAULT NULL,
            `蒸着ロットNo` varchar(30) DEFAULT NULL,
            `損品数` varchar(15) DEFAULT NULL,
            `出荷ロットNo` varchar(30) DEFAULT NULL,
            `入力者` tinytext,
            `dlt_flg` int(1) NOT NULL DEFAULT 0,
            PRIMARY KEY (`AUTO_ID`)
          ) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4;") 
        {
        $this->conn->query($sql);
      }



    


}