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
  h3 {text-align:center; margin: 30px 0;} 
  .table{
    margin: 0 auto;
    width: 75%;
  }
</style>
<body>
    <h3>検索結果</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">サムネイル</th>
          <th scope="col">店舗名</th>
          <th scope="col">アクセス</th>
          <th scope="col">詳細</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $shop)
          <tr>
              <td><img src={{{ $shop["logo_image"] }}}></td>
              <td>{{{ $shop["name"] }}}</td>
              <td>{{{ $shop["access"] }}}</td>
              <td>
                <form method="GET" action="/shopDetail">
                  <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    店舗詳細
                  </button>
                  <input type="hidden" name="id" value={{{ $shop["id"] }}}>
                </form>
              </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center mb-5">
      {{ $data->appends(request()->except('page'))->links() }}
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>