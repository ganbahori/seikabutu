<div class="container-fluid backlogin">
    <div class="jumbotron back1login">
        <div>
            <form action="" method="post">
                <div class="mt-5">
                    <div class="col-5"></div>
                    <div class="form-inline">
                        <label class="label-control col-3">メールアドレス:</label>
                        <input type="text" name="mailaddress" class="form-control col-8" id="exampleInputEmail1" placeholder="メールアドレス">
                    </div>
                    <div class="mt-5">
                        <div class="col-5"></div>
                        <div class="form-inline">
                            <label class="label-control col-3">パスワード:</label>
                            <input type="text" name="password" class="form-control col-8" id="exampleInputPassword1" placeholder="パスワード">
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-9"></div>
                    <input class="btn btn-dark btn-1g ml-5" type="submit" value="ログイン">
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-8"></div>
            <form action="pw" method="get">
                <input class="btn btn-primary btn-link" type="submit" value="パスワードを忘れた方はこちら">
            </form>
        </div>
        <div class="row mt-5">
            <div class="col-5 ml-5"></div>
            <form action="/cake/Hairdresser/signuph" method="get">
                <input class="btn btn-dark btn-1g ml-5" type="submit" value="美容師/新規登録">
            </form>
            <form action="/cake/Model/signupm" method="get">
                <input class="btn btn-dark btn-1g ml-4" type="submit" value="カットモデル/新規登録">
            </form>
        </div>
    </div>
</div>
