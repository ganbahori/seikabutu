<div class="container-fluid back0mbph">
    <?php foreach($result as $obj):?>
<div class="row text-white mx-5" >
    
</div>
  <div class="namelavelmbph container">
           <div class="row">
               <h5 class="font-weight-bold text-white ml-2"><?= $obj['user_name']?></h5>
                    <div class="text-white ml-5"><?= $obj['recruitment_title']?></div>
                    </div>
    </div>
            <div class="jumbotron back2mbph">
                
                        <div class="row">
                            <div class="col-3">
                                <div class="col-4">

                                    <?php foreach($obj['image'] as $ima):?>
                                    
                                    <?php
                                    $img = base64_encode(stream_get_contents($ima['image']));
                                    ?>
                                    <img class="imgmbph" src="data:obj/png;base64,<?= $img ?>">
                                    <?php endforeach;?>
                                    
                                </div>
                            </div>
                                <div class="row">
                                   <b>メニュー<br>価格<br>時刻</b>
                                   <div class="col-1"></div>
                                   <?= $obj['menu_name']?>
                                   <br>
                                   <?= $obj['price_first']?>円〜<?= $obj['price_last']?>円
                                   <br>
                                   <?= $obj['recruitment_first_time']?>〜<?= $obj['recruitment_last_time']?>
                               </div>
                                <div class="col-2"></div>
                                <div class="row">
                                    <b>エリア<br>希望日</b>
                                    <div class="col-1"></div>
                                    <?= $obj['prefecture_name']?><?= $obj['city_name']?><br>
                                    <?= $obj['recruitment_date']->format('Y/m/d')?>
                                </div>        
                        </div>
                        <div class="row">
                            <form action="mbphd" method="post">
                                <input type="hidden" name="data" value="<?php echo $obj['recruitment_id']; ?>">
                                <input class="btn btn-link text-primary  " type="submit" value="もっと見る">
                            </form>
                            <div class="col-9"></div>
                            <form action="mbpd" method="post">
                                <input type="hidden" name="data" value="<?php echo $obj['recruitment_id']; ?>">
                                <input class="btn btn-link text-primary" type="submit" value="削除">
                            </form>
                            <form action="mbpcr" method="post">
                                <input type="hidden" name="data" value="<?php echo $obj['recruitment_id']; ?>">
                                <input class="btn btn-link text-primary" type="submit" value="変更">
                            </form>
                        </div>
                
            </div>


            <?php endforeach;?>

