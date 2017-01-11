
    <div class="row">
      <div class="col-md-4 content-margin-top">
      <p><a href="add.html" class="btn btn-info">新規投稿</a></p>
        
        <?php foreach ($viewOptions as $blog):?>
        <div class="msg">
        	<p><a href="show.html"><?php echo htmlspecialchars($blog["title"]); ?></a></p>
          <p class="day">
              <?php echo htmlspecialchars($blog["created"]); ?>
            [<a href="edit.html" style="color: #00994C;">編集</a>]
            [<a href="" style="color: #F33;">削除</a>]
          </p>
        </div>
        <?php endforeach ?>
          
      <!--   <div class="msg">
          <p><a href="show.html">タイトル３</a></p>
          <p class="day">
              2016-01-28 18:04
            [<a href="edit.html" style="color: #00994C;">編集</a>]
            [<a href="" style="color: #F33;">削除</a>]
          </p>
        </div>
        <div class="msg">
          <p><a href="show.html">タイトル２</a></p>
          <p class="day">
              2016-01-28 18:04
            [<a href="edit.html" style="color: #00994C;">編集</a>]
            [<a href="" style="color: #F33;">削除</a>]
          </p>
        </div>
        <div class="msg">
          <p><a href="show.html">タイトル１</a></p>
          <p class="day">
              2016-01-28 18:04
            [<a href="edit.html" style="color: #00994C;">編集</a>]
            [<a href="" style="color: #F33;">削除</a>]
          </p>
        </div>
 -->      </div>

    </div>