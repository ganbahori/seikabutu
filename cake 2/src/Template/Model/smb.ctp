<div class="container-fluid back0smb">

<div class="row text-white mx-5" >
</div>

<?php foreach($result as $obj):?>
            <div class="row">
                    <div class="namelavelsmb text-white"><?= $obj['user_name']?></div>
            </div>
            <div class="back2smb">
                
                        <div class="row">
                            <div class="col-3">
                               <img class="imgsmb" src='../img/single4.PNG'>
                            </div>
                                <div class="row">
                                   <b>メニュー<br>希望価格<br>希望時刻</b>
                                   <div class="col-1"></div>
                                   <?= $obj['menu_name']?>
                                   <br>
                                   <?= $obj['price_first']?>〜<?= $obj['price_last']?>
                                   <br>
                                   <?= $obj['first_time']?>〜<?= $obj['last_time']?>
                                </div>
                                <div class="col-2"></div>
                                <div class="row">
                                    <b>エリア<br>希望日</b>
                                    <div class="col-1"></div>
                                    <?= $obj['prefecture_name']?><?= $obj['city_name']?>
                                    <br>
                                    <?= $obj['recruitment_date']?>
                                </div>
                        </div>
                            <div class="row">
                                <form action="smbd" method="post">
                                    <?=$this->Form->hidden("id",array('value' => $obj['recruitment_id']))?>
                                    <input class="btn btn-link text-primary  " type="submit" value="もっと見る">
                                </form>
                                <div class="col-8"></div>
                                <form action="acc" method="post">
                                    <?=$this->Form->hidden("id",array('value' => $obj['recruitment_id']))?>
                                    <input class="btn btn-link text-primary" type="submit" value="応募取り消し">
                                </form>
                            </div>
                </div>
<?php endforeach;?>  
            
             
        </div>
                   

