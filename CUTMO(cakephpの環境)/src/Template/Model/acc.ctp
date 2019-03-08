  <div class="jumbotronacc">
   <div class="row">
        <div class="backacc col-4">

          <h2 class="text-center pt-5">
           応募をキャンセルしますか？
          </h2>
          <div class="row mt-5 ">
            <div class="col-2"></div>
              <form action="smb" method="get">
                <input class="btn btn-dark btn-lg ml-4" type="submit" value="いいえ">
              </form>
              <div class="col-2"></div>
              <form action="accc" method="post">
                <?=$this->Form->hidden("id",array('value' => $result))?>
                <input class="btn btn-dark btn-lg ml-4" type="submit" value="はい">
              </form>
          </div>    	
         </div>
    </div>
  </div>
