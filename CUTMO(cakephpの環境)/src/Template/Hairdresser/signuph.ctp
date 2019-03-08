<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
<div class="container-fluid backsignuph">
    <div class="row">
        <div class="col-5"></div>
        <h2>新規登録画面（美容師)</h2>   
    </div>
    <div class="jumbotron back1signuph">
        <form action="http://localhost/cake/commons/sc" method="post">
        <div class="mt-5">
            <div class="col-5"></div>
            <div class="form-inline">
                <label class="label-control col-3">プロフィール画像:</label>
                    <input type="file" name="image">
                </div>
            <br>
            <div class="form-inline">
                <label class="label-control col-3">名前:</label>
                <input type="text" class="form-control col-8" name="user_name" placeholder="ニックネーム">
            </div>
            <br>
            <div class="form-inline">
                <label class="label-control col-3">メールアドレス:</label>
                <input type="email" class="form-control col-8" name="mailaddress" placeholder="メールアドレス">
            </div>
            <br>
            <div class="col-5"></div>
            <div class="form-inline">
                <label class="label-control col-3">パスワード:</label>
                <input type="password" class="form-control col-8" name="password" placeholder="パスワード">
            </div>
        </div>
        <br>
        <div class="col-5"></div>
        <div class="form-inline">
            <label class="label-control col-3">パスワード（確認用）:</label>
            <input type="password" class="form-control col-8" name="password_kakunin" placeholder="パスワード（確認用）">
        </div>
        <br>
        <div class="form-inline">
            <label class="label-control col-3">性別:</label>
            <select name="user_sex">
                <option value="">選択してください</option>
                <option value="男">男</option>
                <option value="女">女</option>
            </select>
        </div>
        <br>
        <div class="col-5"></div>
        <div class="form-inline">
            <label class="label-control col-3">年齢:</label>
            <select name="user_age">
                <option value="">選択してください</option>
                <?php for($i=1;$i<=100;$i++){
                ?>
                <option value='<?=$i?>'><?=$i?></option>
                <?php
                }
                ?>
                
            </select>
        </div>
        <br>
        <div class="col-5"></div>
        <div class="form-inline">
            <label class="label-control col-3">職業:</label>
            <select name="user_profession">
                <option value="">選択してください</option>
                
                <?php
                foreach($prof as $p){
                ?>
                <option value='<?=$p['profession']?>'><?=$p['profession']?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <br>
        <div class="form-inline">
            <label class="label-control col-3">都道府県:</label>
            <select name="prefecture_id">
                <option value="">選択してください</option>
                <?php
                foreach($pref as $p){
                ?>
                <option value='<?=$p['prefecture_id']?>'><?=$p['prefecture_name']?></option>
                <?php
                }
                ?>
                
            </select>
        </div>
        <br>
        <div class="col-5"></div>
        <div class="form-inline">
            <label class="label-control col-3">市町村:</label>
            <input type="text" class="form-control col-8" name="city_name" placeholder="市町村">
        </div>
        <br>
        <div class="col-5"> </div>
        <div class="form-inline">
            <label class="label-control col-3">自己紹介欄:</label>
            <textarea rows="9" cols="60" name="user_comment"></textarea>
        </div>

        <div class="row mt-5 mx-auto">
            <div class="col-5"></div>
                                <input type="hidden" name="modelflg" value=1>
                <input class="btn btn-dark btn-1g m1-4 " type="submit" value="新規登録" style="width:200px;">
        </div>
    </form>
    </div>
</div>
