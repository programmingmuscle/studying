<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>送信完了 | サンプル株式会社</title>
</head>

<body>
    <?php

    ?>
    <header>
        <!-- 576px以上の画面幅のとき、メニューを表示する（それ未満なら折りたたむ）指定を追加 -->
        <nav class="navbar navbar-light bg-light navbar-expand-sm">
            <!-- 画面左上に表示するサイト名のリンクとして適切な表示をするための指定を追加 -->
            <a href="#" class="navbar-brand">サンプル株式会社</a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">会社情報</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">ニュース</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">採用情報</a></li>
                    <!-- お問い合わせページを表示していることをわかりやすくする設定を追加 -->
                    <li class="nav-item"><a href="#" class="nav-link active">お問い合わせ</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <h1 class="mt-4 pb-4 border-bottom">送信完了</h1>
        <p>ありがとうございました。送信を受け付けました。</p>
        <p>3営業日以内をめどにご返信いたしますので、しばらくお待ちください。</p>
        <h2>送信内容</h2>
        <table class="table">
            <tbody>
                <div class="container">
                    <tr class="row">
                        <th class="col-sm-3">
                            会社名
                        </th>
                        <td class="col-sm-9">
                        <?php print htmlspecialchars($_POST['company']); ?>
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-sm-3">
                            氏名
                        </th>
                        <td class="col-sm-9">
                            <?php print htmlspecialchars($_POST['name']); ?>
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-sm-3">
                            メール
                        </th>
                        <td class="col-sm-9">
                        <?php print htmlspecialchars($_POST['mail']); ?>
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-sm-3">
                            電話番号
                        </th>   
                        <td class="col-sm-9">
                        <?php  print htmlspecialchars($_POST['tel']); ?>
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-sm-3">
                            内容
                        </th>
                        <td class="col-sm-9">
                            <?php print htmlspecialchars($_POST['content']); ?>
                        </td>
                    </tr>
            </tbody>
        </table>
        <div class="text-center mb-4">
            <!-- 「戻る」ボタンを緑色にする設定を追加 -->
            <a href="contact.php" class="btn btn-success">戻る</a>
        </div>
    </div>
    <footer class="text-center pt-3 border-top">
        &copy; 2018 SAMPLE Inc.
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
</body>

</html>
