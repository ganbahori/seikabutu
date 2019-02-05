  <div class="jumbotronad">
    <div class="backad">
      <h2 class="text-center pt-5">
       こちらの応募者で決定しますか？
      </h2>
      <div class="row mt-5">
        <div class="col-2"></div>
          <form action="al" method="post">
            <?=$this->Form->hidden("recruitment_id",array('value' => $result2))?>
            <input class="btn btn-dark btn-lg ml-4" type="submit" value="いいえ">

          </form>
          <div class="col-2"></div>
          <form action='<?= $seni ?>' method="post">
              <?=$this->Form->hidden("id",array('value' => $result))?>
              <?=$this->Form->hidden("recruitment_id",array('value' => $result2))?>
            <input class="btn btn-dark btn-lg ml-4" type="submit" value="はい">
          </form>
      </div>    	
    </div>
  </div>
