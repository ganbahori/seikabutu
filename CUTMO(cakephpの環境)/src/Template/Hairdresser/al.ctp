<div class="container-fluid back0al">
<div class="row text-white mx-5" >

    <div class="col-2"></div>
</div>
<?php foreach($result as $obj):?>
  <div class="namelavelal container">
           <div class="row">
               <h5 class="font-weight-bold text-white ml-2"><?= $obj['user_name']?></h5>
                    </div>
    </div>

            <div class="jumbotron back2al">
                
                        <div class="row">
                            <div class="col-3">
                                <div class="col-4"><img class="imgal" src='../img/single4.PNG'>
                                </div> 
                            </div>
                               
                                <div class="row">
                                   <b>メニュー<br>価格</b>
                                   <div class="col-1"></div>
                                   <?= $obj['menu_name']?>
                                   <br>
                                   ¥<?= $obj['price_first']?>〜¥<?= $obj['price_last']?>
                                     
                               </div>
                                <div class="col-2"></div>
                                <div class="row">
                                    <b>エリア<br>時刻</b>
                                    <div class="col-1"></div>
                                    <?= $obj['prefecture_name']?><?= $obj['city_name']?>
                                    <br>
                                   <?= $obj['user_first_time']?>〜<?= $obj['user_last_time']?> 
                                </div>        
                        </div>
                        <div class="row">
                            <form action="ald" method="post">
                            <?=$this->Form->hidden("id",array('value' => $obj['user_id']))?>
                            <?=$this->Form->hidden("recruitment_id",array('value' => $obj['recruitment_id']))?>
                                <input class="btn btn-link text-primary  " type="submit" value="もっと見る">
                            </form>
                            <div class="col-9"></div>
                            <form action="ad" method="post">
                                <?=$this->Form->hidden("id",array('value' => $obj['user_id']))?>
                                <?=$this->Form->hidden("recruitment_id",array('value' => $obj['recruitment_id']))?>
                                <input class="btn btn-link text-primary" type="submit" value="決定する">
                            </form>
                        </div>
      
            </div>
          <?php endforeach;?>
