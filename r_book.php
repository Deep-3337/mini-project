<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cloths</title>
        <style>
        h2{
            text-align:center;
            color: blue;
            padding: 20px;
        }
        .col-sm-6{
            
        }
        .row{
            margin-bottom: 20px;
        }
        img{
            width: 100%;
        }
        #text{
            padding: 10px;
            width: 100%;
            height: 40%;
        }
        </style>
    </head>
    <body>
    <?php include("head.php");?>
        <h2>Please write which books you want and how many you want.</h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title"><b><label for="quality">Quality</label></b></h5><input type="text" id="quality" class="quality"><br><br>
                        <b><label for="quantity">For how many peoples(Quantity)</label></b><br><input type="text" id="quantity" class="quantity"><br><br>
                        <b><label for="type">What/Which book you want</b><small>(Optional)</small></label><br><input type="text" id="type" class="type" placeholder="E.g 10/12th book, guidebook, etc"><br><br>
                        <button>Recieve</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
            <div class="card">
                    <div class="card-body">
                        <p class="card-text"><img src="img/porbook.jpg"></p>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php");?>
    </body>
</html>