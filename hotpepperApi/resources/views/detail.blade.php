<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レストランサーチ</title>
</head>
<style>
  body{
    position: relative;
    padding: 40px 5px;
    }
  h3 {text-align:center; margin: 30px 0;}
  .main {
    position: absolute;
    top: 100px;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    width: 75%;
  }
</style>
<body>
<div class='main'>
  <h3>店舗詳細情報</h3>
  <div class="card text-center">
  <div class="card-header">
    {{$shopdetail[0]['name']}}
  </div>
  <div class="card-body">
    <img src={{{ $shopdetail[0]['photo']['pc']['l'] }}} class="rounded float-left">
    <p class="card-text">営業時間:{{$shopdetail[0]['open']}}</p>
    <p class="card-text">住所:{{$shopdetail[0]['address']}}</p>
    <a class="btn btn-primary" href={{$shopdetail[0]['coupon_urls']['pc']}} role="button">クーポン</a>
  </div>
    <div class="card-footer text-muted">
      ホットペッパーAPIより取得
    </div>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>