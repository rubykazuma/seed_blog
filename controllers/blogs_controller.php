<?php
	echo 'blogコントローラーが呼び出されました。<br />';

	//モデルの呼び出し
	require('models/blog.php');//これでblog.phpの最初の文が呼び出される。

	//コントローラーのクラスをインスランス化
	$controller = new BlogsController();
	//$controller->index(); //これによって下のコントローラーのindex~が呼び出される。が、
	//アクション名によって呼び出すメソッドを変える。
	switch ($action) {
		case 'index':
			$controller->index();
			break;
		case 'add':
			$controller->add();
			break;

		default:
			# code...
			break;
	}

  class BlogsController{
  	function index(){
  		echo 'コントローラーのindex()が呼び出されました！<br />';
  		//モデルを呼び出す
  		$blog = new Blog();
  		$blog->index();
  	}

  	function add(){
  		echo 'add()が呼び出されました。<br>';
  	}
  }
?>