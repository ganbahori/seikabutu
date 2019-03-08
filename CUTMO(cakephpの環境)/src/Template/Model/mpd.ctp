<div class="jumbotronmpd">
    <div class="namelavelmpd text-white">マイページ</div>
    <?php foreach($result as $obj):?>

    <div class="back0mpd container">
        <div class="row">
            <div class="col-11 text-right">
                <form action="mpe" method="post">
                    <?=$this->Form->hidden("id",array('value' => $obj['user_id']))?>
                    <input class="btn-dark btn-lg mt-2 " type="submit" value="編集">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-3 ml-4 mt-2">
                <img class="imazinempd" alt="" src="../img/single3.PNG">
            </div>
            <div class="wakumpd container col-8 mt-2 ml-4">
                <table class="table table-noborder">
                    <thead>
                        <tbody>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>ニックネーム</strong></td>
                                <td><?=$obj['user_name']?></td>
                            </tr>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>性別</strong></td>
                                <td><?=$obj['user_sex']?></td>
                            </tr>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>職業</strong></td>
                                <td><?=$obj['user_profession']?></td>
                            </tr>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>都道府県</strong></td>
                                <td><?=$obj['prefecture_name']?></td>
                            </tr>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>市町村</strong></td>
                                <td><?=$obj['city_name']?></td>
                            </tr>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>希望価格</strong></td>
                                <td><?=$obj['price_first']?>〜<?=$obj['price_last']?></td>
                            </tr>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>希望メニュー</strong></td>
                                <td><?=$obj['menu_name']?></td>
                            </tr>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>希望時間</strong></td>
                            <td><?=$obj['first_time']?>〜<?=$obj['last_time']?></td>
                        </tr>
                    </tbody>
                </table>
                <strong class="ml-5">自己紹介欄</strong>
                                    <div class="waku2mpd ml-4">
                                        <h5 class="ml-2 mt-3">
                                            <?=$obj['user_comment']?>
                                        </h5>
                                    </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>
