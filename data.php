<?php 
class DBconnector{
    var $servername = "ec2-54-235-208-103.compute-1.amazonaws.com";
    var $username = "eykboiprdvzjlg";
    var $password = "6ee4d9b884443daaae02e8a1974f2e5c0f9d294aba3f1f025805821c44e17673";
    var $dbname = "d3rjg841upqihc";
    var $port = "5432";
    var $conn;
           public function runQuery($sql)
           {
			$conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //doc het cau truy van, tra ve mot mang
            $rows = pg_fetch_all($result);
            //dong ket noi   
            $conn=pg_close($conn);
            return $rows;     
           }
           public function execStatement($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //dong ket noi   
            $conn=pg_close($conn);
            return $result;   
           }
} ?>