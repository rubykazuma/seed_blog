<?php
 // echo 'モデルblog.phpが呼び出されました。<br />';

 class Blog {

 	//プロパティ(db接続オブジェクト)
 	private $dbconnect ='';

 	//コストラクタ
 	function __construct(){
 		//DB接続ファイルを読み込む
 		require('dbconnect.php');

 		//DB接続設定の値をプロパティに代入
 		$this ->dbconnect = $db;

 	}
 		//一覧表示に必要なデータを取得
 		function index(){
 			// echo 'モデルのindex()が呼び出されました！<br />';

 			//sqlの記述(SELECT文)
 			//delete_flag = 0　のデータを取得
 			$sql = 'SELECT * FROM `blogs` WhERE `delete_flag`= 0 ORDER BY `created` DESC';

 			//sqlの実行
 			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
 			//＄dbとは書けない。

 			//実行結果を取得し、配列に格納
 			$rtn = array();
 			while ($result = mysqli_fetch_assoc($results)) {
 				$rtn[] = $result;
 			}

 			//取得結果を返す
 			return $rtn;


 		}
 }

?>