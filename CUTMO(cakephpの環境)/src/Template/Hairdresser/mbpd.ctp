  <div class="jumbotronmbpd">
    <div class="backmbpd">
      <h2 class="text-center pt-5">
      この投稿を削除しますか？
      </h2>
      <div class="row mt-5">
        <div class="col-2"></div>
          <form action="mbph" method="get">
            <input class="btn btn-dark btn-lg ml-4" type="submit" value="いいえ">
          </form>
          <div class="col-2"></div>
          <form action="mbpdc" method="post">
            <input type="hidden" name="data" value="<?php echo $recruitment_id; ?>">
            <input class="btn btn-dark btn-lg ml-4" type="submit" value="はい">
          </form>
      </div>    	
    </div>
  </div>
