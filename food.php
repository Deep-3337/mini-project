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
        <h2>Please write how much do you donate and what you donate.</h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><img src="img/porfood.jpg"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
            <div class="card">
                    <div class="card-body">
                    <b><label for="food">Which type of food</label></b>
                        <select class="food">
                            <option>Dry fruits</option>
                            <option>Packets</option>
                            <option>Proper food</option>
                        </select><br></b><br>
                        <h5 class="card-title"><b><label for="quality">Quality</label></b></h5><input type="text" id="quality" class="quality"><br><br>
                        <b><label for="quantity">For how many peoples(Quantity)</label></b><br><input type="text" id="quantity" class="quantity"><br><br>
                        <b><label for="type">What is in donate(Optional)</label></b><br><input type="text" id="type" class="type" placeholder="E.g Roti, Daal, Rice, etc"><br><br>
                        <!-- <b><label for="quantity">Quantity</label></b><br><input type="text" id="quantity" class="quantity"><br> -->
                        
                        <button>Donate</button>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php");?>
    </body>
</html>