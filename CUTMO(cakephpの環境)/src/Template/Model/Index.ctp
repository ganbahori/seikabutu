<div class="container-fluid back0index">
<div class="jumbotron back1index">
            <form action="" method="get">
                
                <div class ="row">
                      <div class ="col-1"></div>
                      <h3>条件検索</h3>
                      <div class ="col-7"></div>
                      <input class="btn btn-dark btn-lg mt-2" type="submit" value="条件を変更">
                </div> 
                <br>
                <div class = "row">
                    <div class = "col-2">
                        <div class = "col-7"></div>
                        希望メニュー
                    </div>
                        <div class="checkbox">
                            <?php foreach($youso as $key){ ?>
                            <input type="checkbox" name="menu_id[]" value='<?=$key['menu_id']?>'><?=$key['menu_name']?>
                            <?php } ?>
                        </div>  
                </div>
                <br>
                <div class = "row">
                    <div class = "col-2">
                        <div class = "col-2"></div>
                        エリア
                    </div>
                    <select name="prefecture">
                    <option value=-1>選択してください</option>
                    <?php
                    foreach($pref as $keyp){
                    ?>
                    <option value='<?=$keyp['prefecture_id']?>'><?=$keyp['prefecture_name']?></option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
                <br>
                <div class = "row">
                    <div class = "col-2">
                        <div class = "col-2"></div>
                        希望価格
                    </div>
                    <?php
                    $nedan=array();
                    foreach($price as $obj1){
                        array_push($nedan,$obj1['price_first']."〜".$obj1['price_last']);
                    }
                    ?>
                    <select name="price">
                    <option value=-1>選択してください</option>
                    <?php for($i=0;$i<count($nedan);$i++){ ?>
                    <option value='<?=$i?>'><?=$nedan[$i]?></option>
                    <?php } ?>
                    </select>
                </div>
                <br>
                <div class = "row">
                    <div class = "col-2">
                        <div class = "col-2"></div>
                        希望時刻
                    </div>
                        <select name="zikoku">
                        <option value=-1>選択してください</option>
                        <?php
                        foreach($time as $keyt){
                        ?>
                        <option value='<?=$keyt['time_id']?>'><?=$keyt['time']?></option>
                        <?php
                        }
                        ?>
                        </select>
                </div>
            </form>
        </div>
        <br>

        <div class="row">
            <div class="col-2 "></div>
            <!-- <h4 class="text-white">〇〇件の検索結果</h4> -->
        </div>
        <br>
        <?php foreach($result as $obj):?>
        
        <form action="mbd" method="post">
            <input type="hidden" name="data" value="<?php echo $obj['recruitment_id']; ?>">
           <div class="row">
                    <div class="namelavelindex text-white"><?= $obj['user_name']?></div>
                    </div>
            <div class="jumbotron back2index">
                    
                        <div class="row">
                            <div class="col-3">
                                <div class="col-2"><img class="imgindex" src='../img/single3.PNG'><div class="col-3"></div>
                                </div> 
                            </div>
                                <div class="row">
                                   <b>メニュー<br>価格<br>時刻</b>
                                   <div class="col-1"></div>
                                   <?= $obj['menu_name']?>
                                   <br>
                                   <?= $obj['price_first']?>〜<?= $obj['price_last']?>
                                   <br>
                                   <?= $obj['recruitment_first_time']?>～<?= $obj['recruitment_last_time']?>
                               </div>
                                <div class="col-1"></div>
                                <div class="row">
                                    <b>エリア<br>希望日</b>
                                    <div class="col-1"></div>
                                    <?= $obj['prefecture_name']?><?= $obj['city_name']?>
                                    <br>
                                    <?= $obj['recruitment_date']->format('Y/m/d')?>
                                </div>
                                <div class="row">
                                <div class ="col-1"></div>
                                  </form>
                                    </div>
                                
                        </div>
                        <div class="row">
                          <input class="btn btn-link text-primary  " type="submit" value="もっと見る">
            </div>
               
            </div>
            <?php endforeach;?>
</div>

