<div class="jumbotronmpd">
    <div class="namelavelmpd text-white">マイページ</div>
    <div class="back0mpd container">
        <div class="row">
            <div class="col-11 text-right">
                <form action="mpe" method="get">
                    <input class="btn-dark btn-lg mt-2 " type="submit" value="編集">
                </form>
            </div>
        </div>
        <div class="row">
           
            <?php foreach($result as $obj):?>
            <div class="imazinempd col-3 ml-4 mt-2"><img class="imazinempd" alt="" src="../img/single3.PNG"></div>
            <div class="wakumpd container col-8 mt-2 ml-4">
                <table class="table table-noborder">
                    <thead>
                        <tbody>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>ニックネーム</strong></td>
                                <td><?= $obj['user_name']?></td>
                            </tr>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>性別</strong></td>
                                <td><?= $obj['user_sex']?></td>
                            </tr>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>職業</strong></td>
                                <td><?= $obj['user_profession']?></td>
                            </tr>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>都道府県</strong></td>
                                <td><?= $obj['prefecture_name']?></td>
                            </tr>
                            <tr style="border-bottom-style: hidden;">
                                <th scope="row"></th>
                                <td><strong>市町村</strong></td>
                                <td><?= $obj['city_name']?></td>
                            </tr>
                        </tbody>
                </table>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
