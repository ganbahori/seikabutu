<div class="container-fluid back0mbp">
    <div class="row">
       
        <div class="namelavelmbp text-white">　掲示板投稿画面</div>
    </div>
    <div class="jumbotron back1mbp">
       <form action="mbpc" method="post">
            <div class="row">
              <div class="col-2 text-center">
                  <b>メニュー</b>
              </div>
               <div class="checkbox">
                <?php
                $hoge2=array();
                foreach($youso as $obj4){
                    array_push($hoge2,$obj4['menu_name']);
                }
                for($i=0;$i<count($hoge2);$i++){
                ?>
                    <label class="checkbox-inline"><input type="checkbox" name="check['<?=$i?>']" value='<?=$i?>'><?=$hoge2[$i]?>　　</label>
                <?php
                }
                ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-2 text-center">
                    <b>価格</b>
                </div>
                <select name="price">
                    <?php foreach($price as $p):?>
                    <option value='<?=$p['price_id']?>'><?=$p['price_first']?>〜<?=$p['price_last']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <br>
            <div class="row">
                <div class="col-2 text-center">
                    <b>日付</b>
                </div>
                <div class="form-groupmbp">
                    <textarea rows="1" class="form-control" name="date"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-2 text-center">
                    <b>時刻</b>
                </div>
                
                <select name="fasttime">
                    <?php foreach($time as $tf):?>
                    <option value='<?=$tf['time_id']?>'><?=$tf['time']?></option>
                    <?php endforeach;?>
                </select>
                <div class="col-1"></div>～<div class="col-1"></div>
                <select name="lasttime">
                    <?php foreach($time as $tl):?>
                    <option value='<?=$tl['time_id']?>'><?=$tl['time']?></option>
                    <?php endforeach;?>
                </select>
                
                
            </div>
            <br>
            <div class="row">
                <div class="col-2 text-center">
                    <b>募集人数</b>
                </div>
             <select name="recruitment_people">
            <?php for($i=1;$i<=10;$i++){
            ?>
            <option value='<?= $i ?>'><?= $i ?>人</option>
            <?php
            }
            ?>
                    </select>
            </div>
            <br>
            <div class="row">
                <div class="col-2 text-center">
                    <b>タイトル</b>
                </div>
            <div class="form-groupmbp">
                    <textarea rows="1" class="form-control" name="title"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-2 text-center">
                    <b>コメント</b>
                </div>
                <div class="form-groupmbp">
                    <textarea rows="10" class="form-control" name="comment"></textarea>
                </div>
            </div>
                
            
               <div class="row">
                <div class ="col-6"></div>
                <input class="btn btn-dark" type="submit" value="投稿">
            </form>
                </div>
    </div>
                
</div>