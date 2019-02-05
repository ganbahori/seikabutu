    <div class="jumbotronald">
    <div class="namelavelald text-white">カットモデル詳細</div>
    <?php foreach($result as $obj):?>
        <div class="backald container">
            <div class="row">
                <div class="col-11 text-right">
                    <form action="ad" method="post">
                        <?=$this->Form->hidden("id",array('value' => $obj['user_id']))?>
                        <?=$this->Form->hidden("recruitment_id",array('value' => $obj['recruitment_id']))?>
                        <input class="btn-dark btn-lg mt-2 " type="submit" value="決定する">
                    </form>        
                </div> 
            </div>    
            <div class="row">
                <div class="imazineald col-3 ml-4 mt-2">
                    <img class="adaptald" alt="" src="../img/single4.PNG">
                </div>  
                <div class="wakuald container col-8 mt-2 ml-4">
                <table class="table table-noborder">
                        <thead>
                        <tbody>
                            <tr style="border-bottom-style: hidden;">
                            <th scope="row"></th>
                            <td><strong>ニックネーム</strong></td>
                            <td><?= $obj['user_name']?></td>
                            </tr>
                            <tr  style="border-bottom-style: hidden;">
                            <th scope="row"></th>
                            <td><strong>性別</strong></td>
                            <td><?= $obj['user_sex']?></td>
                            </tr>
                            <tr  style="border-bottom-style: hidden;">
                            <th scope="row"></th>
                            <td><strong>職業</strong></td>
                            <td><?= $obj['user_profession']?></td>
                            </tr>
                            <tr  style="border-bottom-style: hidden;">
                            <th scope="row"></th>
                            <td><strong>都道府県</strong></td>
                            <td><?= $obj['prefecture_name']?></td>
                            </tr>
                            <tr  style="border-bottom-style: hidden;">
                            <th scope="row"></th>
                            <td><strong>市町村</strong></td>
                            <td><?= $obj['city_name']?></td>
                            </tr>
                            <tr  style="border-bottom-style: hidden;">
                            <th scope="row"></th>
                            <td><strong>希望価格</strong></td>
                            <td>¥<?= $obj['price_first']?>〜¥<?= $obj['price_last']?></td>
                            </tr>
                            <tr  style="border-bottom-style: hidden;">
                            <th scope="row"></th>
                            <td><strong>希望メニュー</strong></td>
                            <td><?= $obj['menu_name']?></td>
                            </tr>
                            <tr  style="border-bottom-style: hidden;">
                            <th scope="row"></th>
                            <td><strong>希望時間</storng></td>
                            <td><?= $obj['user_first_time']?>〜<?= $obj['user_last_time']?></td>
                            </tr>
                        </tbody>
                        </table>
                        <strong class="ml-5">自己紹介欄</strong>
                        <div class="waku2 ml-4">
                            <h5 class="ml-2 mt-3">
                                <?= $obj['user_comment']?>
                            <h5>    

                        </div>
                    
                </div>
            </div>
        </div>
        <?php endforeach;?>   
    </div>