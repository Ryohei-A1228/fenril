<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <script>
            navigator.geolocation.getCurrentPosition(position => {
                const { latitude, longitude } = position.coords;
                document.getElementById('lat').value = position.coords.latitude;
                document.getElementById('lng').value = position.coords.longitude;
                document.getElementById('lat_label').value = position.coords.latitude;
                document.getElementById('lng_label').value = position.coords.longitude;
            });
        </script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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

            .latlng {
                justfy-content: space-evenly;
            }

            .latlng h4{
                display: inline-block;
                margin: 0;
            }

            #lat_label , #lng_label{
                display: inline-block;
            }

            .btn btn-info {
                display: block;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <h3>グルメサーチ</h3>
            <div class="card text-center">
                <div class="card-header">
                    ホットペッパーAPIを用いた現在地付近の飲食店情報取得
                </div>
                <div class="card-body">
                    <form method="GET" action="/getRestaurant">
                        <div class="latlng">
                            <h4>緯度:</h4><input type="text" id="lat_label" value="" disabled/>
                            <h4>経度:</h4><input type="text" id="lng_label" value="" disabled/>
                        </div>
                        <input type="hidden" name="lat" id="lat" value="">
                        <input type="hidden" name="lng" id="lng" value="">
                        <h4>検索する半径を選択してください。</h4>
                        <select name="range">
                            <option value="1">300m</option>
                            <option value="2">500m</option>
                            <option value="3">1000m</option>
                            <option value="4">2000m</option>
                            <option value="5">3000m</option>
                        </select>
                        <button type='submit' class="btn btn-info">GET</button>
                    </form>
                </div>
                <div class="card-footer text-muted">
                ホットペッパーAPI
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
