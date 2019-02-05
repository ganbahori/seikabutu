  <div class="jumbotronade">
    <div class="backade">
      <h2 class="text-center pt-5">
       応募者にメールで通知しました
      </h2>
      <div class="text-center pt-5">
       ※募集人数満了のため応募を締め切りました
       
      </div>
      <div class="row mt-5">
        <div class="col-4"></div>
          <form action="al" method="post">
            <?=$this->Form->hidden("recruitment_id",array('value' => $result2))?>
            <input class="btn btn-dark btn-lg ml-4" type="submit" value="応募者一覧へ">
          </form>
      </div>    	
    </div>
  </div>
