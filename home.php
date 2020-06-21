<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="style.js"></script>


</head>

<body>
    <div style="border: 1px;">
        <div class="inline">
            <h1 class="detail">Awesome<span class="shop">Shop</span></h1>
        </div>
        <div class="inline1">
            <div class="inline1"><input type="button" value="JOIN" class="chart"></div>
            <div class="inline1"><i class="fa fa-question-circle" style="margin-right:30px">Need Helps</i></div>
        </div>
    </div>
    <div class="bg">
        <img src="images/bg.jpg" alt="cloth" style="width: 100%;height: 12cm;;margin-top: 1px;" value="test">
        <div class="centered">
            <p style="font-size:1.3cm;margin: 1pc;margin-top: 2pc;"><b>Shop your designer dresses</b></p>
            <p style="font-size:0.5cm;color: grey;margin-top: 1pc;">Ready to wear dereses tailored for you from online. Hurry up while stock last</p>
            <input type="text" class="search" placeholder="&#xf002   Search your products from here">
        </div>
    </div>




    <div>
        <div class="inline">
            <div class="promote" style="background-color: rgb(236, 161, 193);">
                <div class="inline">
                    <p id="t_pro" style="font-size: 18pt;padding-top: 0.3px;"><b> Coupon Savings</b></p>
                    <p id="t_pro" style="font-size: 12pt;">Up to 60% off everyday essentials</p>
                    <input type="button" value="Shop Coupons" class="btn" id="clickC" style=" border: 0.5px solid palevioletred; box-shadow: 2px 5px palevioletred;" onclick="changeButtonColor()">
                </div>
                <div class="inline">
                    <i class="fa fa-tag fa-lg" aria-hidden="true" style="color: white;font-size: 2cm;margin-top: 1.5cm;"></i>
                </div>
            </div>
        </div>
        <div class="inline">
            <div class="promote" style="background-color: rgb(138, 214, 233);">
                <div class="inline">
                    <p id="t_pro" style="font-size: 18pt;padding-top: 0.3px;"><b> Free Delivery</b></p>
                    <p id="t_pro" style="font-size: 12pt;">With selected iteme</p>
                    <input type="button" value="Deliver Now" id="clickC" class="btn" style=" border: 0.5px solid rgb(82, 181, 211); box-shadow: 2px 5px rgb(82, 181, 211);">
                </div>
                <div class="inline">
                    <i class="fa fa-truck" aria-hidden="true" style="color: white;font-size: 2cm;margin-top: 1.1cm;"></i>
                </div>
            </div>
        </div>
        <div class="inline">
            <div class="promote" style="background-color: rgb(160, 233, 138);">
                <div class="inline">
                    <p id="t_pro" style="font-size: 18pt;padding-top: 0.3px;"><b> Gift Voucher</b></p>
                    <p id="t_pro" style="font-size: 12pt;">With personal core items</p>
                    <input type="button" value="Gift Now" id="clickC" class="btn" style=" border: 0.5px solid rgb(114, 224, 81); box-shadow: 2px 5px rgb(114, 224, 81);">
                </div>
                <div class="inline">
                    <i class="fa fa-gift" aria-hidden="true" style="color: white;font-size: 2cm;margin-top: 1.1cm;"></i>
                </div>
            </div>
        </div>
    </div>



    <div class="inline">
        <div>
            <div class="inline"><img src="images/electronic.png" alt="elec" class="img"></div>
            <div class="inline">
                <p class="op" id="op1" onclick="changeColor()">Electronic</p>
            </div>
        </div>
        <div>
            <div class="inline"><img src="images/handbag.png" alt="hb" class="img"></div>
            <div class="inline">
                <p class="op" id="op2" onclick="changeColor()">Hand Bag</p>
            </div>
        </div>
        <div>
            <div class="inline"><img src="images/wallet.png" alt="wallet" class="img"></div>
            <div class="inline">
                <p class="op" id="op3" onclick="changeColor()">Wallet</p>
            </div>
        </div>
        <div>
            <div class="inline"><img src="images/clothes.png" alt="cl" class="img"></div>
            <div class="inline">
                <p class="op" id="op4" onclick="changeColor()">Clothes</p>
            </div>
        </div>
    </div>


    <div class="inline" style="float: right; margin-right: 60px;">
        <div class="grid-container">
            <div class="item">
                <p id="dis">20%</p><img src="images/c1.jpg" alt="c1" class="clo">
                <p id="tx">Nike Women Pink Half Zip Lightweight Hooded Shirt Top Athlethic Stretch Size M</p>
                <div class="inline">
                    <p id="p_n"><b>15$</b></p>
                    <p id="p_dis"><b>12$</b></p>
                </div>
                <div class="inline1"><button class="chart"><i class="fas fa-shopping-cart">Chart</i></button></div>
            </div>
            <div class="item">
                <p id="dis">20%</p><img src="images/c2.jpg" alt="c1" class="clo">
                <p id="tx">Nike Women Pink Half Zip Lightweight Hooded Shirt Top Athlethic Stretch Size M</p>
                <div class="inline">
                    <p id="p_n"><b>15$</b></p>
                    <p id="p_dis"><b>12$</b></p>
                </div>
                <div class="inline1"><button class="chart"><i class="fas fa-shopping-cart">Chart</i></button></div>
            </div>
            <div class="item">
                <p id="dis">20%</p><img src="images/c3.jpg" alt="c1" class="clo">
                <p id="tx">Nike Women Pink Half Zip Lightweight Hooded Shirt Top Athlethic Stretch Size M</p>
                <div class="inline">
                    <p id="p_n"><b>15$</b></p>
                    <p id="p_dis"><b>12$</b></p>
                </div>
                <div class="inline1"><button class="chart"><i class="fas fa-shopping-cart">Chart</i></button></div>
            </div>
            <div class="item">
                <p id="dis">20%</p><img src="images/c4.jpg" alt="c1" class="clo">
                <p id="tx">Nike Women Pink Half Zip Lightweight Hooded Shirt Top Athlethic Stretch Size M</p>
                <div class="inline">
                    <p id="p_n"><b>15$</b></p>
                    <p id="p_dis"><b>12$</b></p>
                </div>
                <div class="inline1"><button class="chart"><i class="fas fa-shopping-cart"></i>Chart</i></button></div>
            </div>
            <div class="item">
                <p id="dis">20%</p><img src="images/c5.jpg" alt="c1" class="clo">
                <p id="tx">Nike Women Pink Half Zip Lightweight Hooded Shirt Top Athlethic Stretch Size M</p>
                <div class="inline">
                    <p id="p_n"><b>15$</b></p>
                    <p id="p_dis"><b>12$</b></p>
                </div>
                <div class="inline1"><button class="chart"><i class="fas fa-shopping-cart">Chart</i></button></div>
            </div>
            <div class="item">
                <p id="dis">20%</p><img src="images/c6.jpg" alt="c1" class="clo">
                <p id="tx">Nike Women Pink Half Zip Lightweight Hooded Shirt Top Athlethic Stretch Size M</p>
                <div class="inline">
                    <p id="p_n"><b>15$</b></p>
                    <p id="p_dis"><b>12$</b></p>
                </div>
                <div class="inline1"><button class="chart"><i class="fas fa-shopping-cart">Chart</i></button></div>
            </div>
            <div class="item">
                <p id="dis">20%</p><img src="images/c7.jpg" alt="c1" class="clo">
                <p id="tx">Nike Women Pink Half Zip Lightweight Hooded Shirt Top Athlethic Stretch Size M</p>
                <div class="inline">
                    <p id="p_n"><b>15$</b></p>
                    <p id="p_dis"><b>12$</b></p>
                </div>
                <div class="inline1"><button class="chart"><i class="fas fa-shopping-cart">Chart</i></button></div>
            </div>
            <div class="item">
                <p id="dis">20%</p><img src="images/c8.jpg" alt="c1" class="clo">
                <p id="tx">Nike Women Pink Half Zip Lightweight Hooded Shirt Top Athlethic Stretch Size M</p>
                <div class="inline">
                    <p id="p_n"><b>15$</b></p>
                    <p id="p_dis"><b>12$</b></p>
                </div>
                <div class="inline1"><button class="chart"><i class="fas fa-shopping-cart">Chart</i></button></div>
            </div>
            <div class="item">
                <p id="dis">20%</p><img src="images/c1.jpg" alt="c1" class="clo">
                <p id="tx">Nike Women Pink Half Zip Lightweight Hooded Shirt Top Athlethic Stretch Size M</p>
                <div class="inline">
                    <p id="p_n"><b>15$</b></p>
                    <p id="p_dis"><b>12$</b></p>
                </div>
                <div class="inline1"><button class="chart"><i class="fas fa-shopping-cart">Chart</i></button></div>
            </div>
            <button style="background-color: rgb(228, 243, 92);width: 5cm;height: 0.8cm;border-color: yellow;margin-bottom: 2cm;">Loding more</button>
        </div>
        <div>tedy</div>
    </div>





</body>

</html>