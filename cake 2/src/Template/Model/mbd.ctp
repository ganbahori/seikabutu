<div class="jumbotronmbd">
    <div class="namelavelmbd text-white">美容師掲示板詳細</div>
    <?php foreach($result as $obj):?>
    <div class="backmbd container pt-0">
        <div class="row"> 
            <div class="col-12 text-right">
                <form action="ac" method="post">
                    <?=$this->Form->hidden("id",array('value' => $obj['recruitment_id']))?>
                    <input class="btn-dark btn-lg mt-2 " type="submit" value="応募する">
                </form>        
            </div> 
        </div>  
        <div class="row">       
                <div class="back3mbd col-3 ml-5">
                    <div class="imazinembd ml-0 mr-0">
                    <img class="adaptmbd" alt="" src="../img/single4.PNG">
                    </div>
                    <div class="text-center mt-4"><?= $obj['user_profession']?></div>
                    <div class="row mt-2">
                        <div class="col-2"></div>
                        <h4><?= $obj['user_name']?></h4>
                        <h4>(<?= $obj['user_sex']?>)</h4>
                    </div>
                    <div class="text-center mt-2"><?= $obj['user_age']?></div>
                    <div class="row mt-2">
                        <div class="col-1"></div>
                        <div class="font-weight-bold">エリア:</div>
                        <div class="ml-3"><?= $obj['prefecture_name']?><?= $obj['city_name']?></div>
                    </div>
                </div>
                <div class="ml-3 col-7">
                    <div class=" col-12">
                        <h2 class="font-weight-bold"><?= $obj['recruitment_title']?></h2>
                        <div class=" container col-8 mt-2 ml-4">
                        <h5><?= $obj['recruitment_comment']?>
                        </h5>
                    </div>
                    <strong>メニュー情報</strong>
                    <div class="waku5 col-10 mt-2">
                        <div class="row ml-2 mt-2">    
                            <strong>メニュー</strong>
                            <div class="ml-4"><?= $obj['menu_name']?></div>
                        </div>
                        <div class="row ml-2 mt-2">    
                            <strong>価格</strong>
                            <div class="ml-5"><?= $obj['price_first']?>〜<?= $obj['price_last']?></div>
                        </div>
                        <div class="row ml-2 mt-2">    
                            <strong>日付</strong>
                            <div class="ml-5"><?= $obj['recruitment_date']->format('Y/m/d')?></div>
                        </div>
                        <div class="row ml-2 mt-2">    
                            <strong>時間</strong>
                            <div class="ml-5"><?= $obj['recruitment_first_time']?>〜<?= $obj['recruitment_last_time']?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
    </div>  
     <?php endforeach;?>     
</div>
