
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Application </title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/style2.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  
<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();

   

    });

  </script>
  

 <script type="text/javascript">
            $(document).on('click', 'li a',function(){
                $(this).addClass('active').siblings().removeClass('active')
            })

        </script>
 <style type="text/css">
   .symbol{
  width: 80px;
  text-transform: uppercase;
}
 </style>
 
</head> 
<body>
  <!----navbar----->
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-nav">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/kiko.png" alt="Logo" class="img-fluid" width="70px" /><span></span> LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item ">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#what">Track</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Learn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Join Now</a>
                </li>
            </ul>
                <div class="btn-group float-end">
                <a type="button" href="login.php" class="btn btn-dark btn-sm" style="border:1px solid #eee; border-radius: 25px;">
                <span class="fa fa-user"><strong style="font-family: arial; font-size: 15px;"> Sign In</strong></a>
                </button>
             
            </div>
        </div>
    </div>
</nav>
</header>
<!-- Remove the container if you want to extend the Footer to full width. -->

    <section id="home" style="height: auto;">
     
        <!--Carousel-->
        <div id="carouselExampleCaptions" class="carousel slide car" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br>
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "description": "",
      "proName": "CRYPTOCAP:BTC"
    },
    {
      "description": "",
      "proName": "CRYPTOCAP:XRP"
    },
    {
      "description": "",
      "proName": "CRYPTOCAP:ETH"
    },
    {
      "description": "",
      "proName": "BINANCE:ETHUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:BNBBUSD"
    },
    {
      "description": "",
      "proName": "FTX:SOLUSD"
    },
    {
      "description": "",
      "proName": "BINANCE:DOGEUSDT"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
    </section>
    <section id="what">
      <center>
        <h2> LIVE TRACKING
        </h2>
      </center>
       <div class="container">
        <div class="row">
        <table id="myTable" class="table table-striped table-light table-responsive" style="width:100%">
        <thead>
            <tr>
               <th class="rank"><abbr title="Position">Rank</abbr></th>
                <th class="name">Name</th>
                <th class="symbol">Symbol</th>
                <th class="price">Price(USD)</th>
                <th class="market_cap">Market Cap</th>
                <th class="circulating_supply">Circulating Supply</th>
                <th class="volume_24h">Volume(24h)</th>
                <th class="percent_change_24h">24h %</th>
            </tr>
        </thead>
        <tbody id="cryptocurrencies">
           
        </tbody>
        <tfoot>
            <tr>
                <th class="rank"><abbr title="Position">Rank</abbr></th>
                <th class="name">Name</th>
                <th class="symbol">Symbol</th>
                <th class="price">Price(USD)</th>
                <th class="market_cap">Market Cap</th>
                <th class="circulating_supply">Circulating Supply</th>
                <th class="volume_24h">Volume(24h)</th>
                <th class="percent_change_24h">24h %</th>
            </tr>
        </tfoot>
    </table>
    </div>
  </div>
   <br><br><br>
    </section>
    <section id="gallery">
              <div class="text-center">
    <h2><strong>Learn About Crypto</strong></h2>
</div>
<br><br>
       <div class="container">
         <p>
  What is Crypto Market Cap?<br>
Crypto market cap is the total value of all the coins of a particular cryptocurrency that have been mined or are in circulation. Market capitalization is used to determine the ranking of cryptocurrencies. The higher the market cap of a particular crypto coin, the higher its ranking and share of the market. Crypto market cap is calculated by multiplying the total number of coins in circulation by its current price. For instance, to calculate the market cap of Ethereum, all you need to do is multiply the total number of Ethereum in circulation by the current price of one Ethereum and you will get its market cap.<br><br>

How to compare Cryptocurrencies Market Cap?<br>
Crypto market cap can be divided into three categories:

Large-cap cryptocurrencies (>$10 billion)
Mid-cap Cryptocurrencies ($1 billion - $10 billion)
Small-cap cryptocurrencies (<$1 billion).
As a financial metric, market cap allows you to compare the total circulating value of one cryptocurrency with another. Large cap cryptocurrencies such as Bitcoin and Ethereum have a market cap of over $10 billion. They typically consist of protocols that have demonstrated track records, and have a vibrant ecosystem of developers maintaining and enhancing the protocol, as well as building new projects on top of them. While market cap is a simple and intuitive comparison metric, it is not a perfect point of comparison. Some cryptocurrency projects may appear to have inflated market cap through price swings and the tokenomics of their supply. As such, it is best to use this metric as a reference alongside other metrics such as trading volume, liquidity, fully diluted valuation, and fundamentals during your research process.<br><br>
How does CoinGecko Calculate Cryptocurrency Prices?<br>
The price is calculated using a global volume-weighted average price formula which is based on the pairings available on different exchanges of a particular crypto asset. For examples and more detailed information on how we track cryptocurrency prices and other metrics, see our methodology page here.

Why are Cryptocurrency Prices Different on Exchanges?<br>
You may notice that cryptocurrencies listed on different exchanges have different prices. The reasons for this are complex, but simply put cryptocurrencies are traded on different exchanges and across different markets with varying economic conditions, liquidity, trading pairs, and offerings (e.g. derivatives / leverage) which all influence price in their own way.<br><br>

Where to Check Cryptocurrency Prices?<br>
You can track over 10,000 crypto prices on CoinGecko across more than 50 currencies. Popular cryptocurrency pairs include BTC to USD, ETH to USD, and SLP to PHP. You can also track metrics such as 24 hour trading volume, market capitalization, price chart, historical performance chart, the circulating supply, and more. Sign up to use CoinGecko’s crypto portfolio to track the performance of your portfolio. You may also check out GeckoTerminal (currently in beta), our comprehensive multichain on-chain charting tool featuring live charts, current trades, market sentiment and more as it happens in real time! CoinGecko also has a mobile app that enables you to track cryptocurrencies on Android and IOS.<br><br>

What is 24h Volume in the Table Above?<br>
The 24h trading volume refers to the amount a cryptocurrency has been bought and sold on all exchanges within the last 24 hours on the spot market (see derivatives volume here). For instance, if the 24h volume for Ethereum is $15 billion, it means that $15 billion worth of Ether had changed hands across all exchanges in the last 24 hours.<br><br>
</p>
       </div>
</div>
<br><br>
    </section>
 <section id="about">
    <div class="text-center">
    <h2><strong>About</strong></h2>
</div>
     <div class="row py-5">
    <div class="col-lg-8 mx-auto">

      <div class="card mb-4">
        <div class="card-body p-5">
          <h4 class="mb-4 text-center">About This Page</h4>
          <div class="custom-scrollbar-css p-2">
            <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, soluta, cupiditate. Ad ab, delectus impedit similique voluptate fuga nemo iure, nobis dolorem dolor, quia voluptas aperiam doloremque commodi id? In? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
  </div>
</div>
 </section>
  <!-- Footer -->
  <footer class="text-center text-white" style=" background: linear-gradient(270deg,#3aa57f,#5cc877);">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#home" class="text-white">Home</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#what" class="text-white">Track</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#gallery" class="text-white">Learn</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#about" class="text-white">About</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="signup.php" class="text-white">Join Now</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-5" />

      <!-- Section: Text -->
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
              distinctio earum repellat quaerat voluptatibus placeat nam,
              commodi optio pariatur est quia magnam eum harum corrupti
              dicta, aliquam sequi voluptate quas.
            </p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->

      <!-- Section: Social -->
      <section class="text-center mb-5">
        <a href="" class="text-white me-4">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fa fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fa fa-instagram"></i>
        </a>
         <a href="" class="text-white me-4">
          <i class="fa fa-steam"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fa fa-github"></i>
        </a>
      </section>
      <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      email @:
      <a class="text-white" href=""
         >karldarendagan@gmail.com</a
        >
    </div>
  
  </footer>
  <!-- Footer -->

</body>
<script>
   var xhReq = new XMLHttpRequest();
        xhReq.open("GET", "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd", false);
        xhReq.send(null);
        var data = JSON.parse(xhReq.responseText); 

        // initialization
        var cryptocurrencies;
        var timerId;
        var updateInterval = 30000;


        function ascending(a, b) { return a.percent_change_24h > b.percent_change_24h ? 1 : -1; }
        function descending(a, b) { return a.percent_change_24h < b.percent_change_24h ? 1 : -1; }
        function reposition() {
            var height = $("#cryptocurrencies .cryptocurrency").height();
            var y = height;
            for(var i = 0; i < cryptocurrencies.length; i++) {
                cryptocurrencies[i].$item.css("top", y + "px");
                y += height;      
            }
        }  
        function updateRanks(cryptocurrencies) {
            for(var i = 0; i < cryptocurrencies.length; i++) {
                cryptocurrencies[i].$item.find(".rank").text(i + 1);  
            }
        }

        function fetchNewData(data,attributeName,name){
            for(var x in data){
                if((data[x].name == name) == true) {
                    return data[x][attributeName];
                }
            }
            return null;
        }        
        function updateBoard() {
            var cryptocurrency = getRandomCoin(); 
            cryptocurrency.percent_change_24h += getRandomScoreIncrease();
            cryptocurrency.$item.find(".percent_change_24h").text(cryptocurrency.percent_change_24h);
            cryptocurrencies.sort(descending);
            updateRanks(cryptocurrencies);
            reposition();
        }

        function getNewData(){
            // get the new data for each coin and change to their new values
            var newReq = new XMLHttpRequest();
            newReq.open("GET", "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd", false);
            newReq.send(null);
            var newData = JSON.parse(newReq.responseText); 

            for(var i = 0; i < cryptocurrencies.length; i++) {
                var cryptocurrency = cryptocurrencies[i];
                cryptocurrency.price = fetchNewData(newData,'current_price',cryptocurrency.name);
                cryptocurrency.$item.find(".price").text(cryptocurrency.price);
                cryptocurrency.volume_24h = fetchNewData(newData,'total_volume',cryptocurrency.name);
                cryptocurrency.$item.find(".volume_24h").text(cryptocurrency.volume_24h);
                cryptocurrency.percent_change_24h = fetchNewData(newData,'market_cap_change_percentage_24h',cryptocurrency.name);
                cryptocurrency.$item.find(".percent_change_24h").text(cryptocurrency.percent_change_24h);
            }
            cryptocurrencies.sort(descending);
            updateRanks(cryptocurrencies);
            reposition();
            console.log('Finished retrieving new data');
            
        }
        function getRandomScoreIncrease() {
            return getRandomBetween(50, 150);
        }
        function getRandomBetween(minimum, maximum) {
                return Math.floor(Math.random() * maximum) + minimum;
        }
        function resetBoard() {
            var $list = $("#cryptocurrencies");
            $list.find(".cryptocurrency").remove();
            if(timerId !== undefined) {
                clearInterval(timerId);
            }
            cryptocurrencies = [];
            for(let i = 0;i < 25;i++){
                cryptocurrencies.push(
                    {
                        name : data[i].name,
                        symbol: data[i].symbol,
                        price: data[i].current_price,
                        market_cap: data[i].market_cap,
                        circulating_supply: Math.round(data[i].circulating_supply),
                        volume_24h: data[i].total_volume,
                        percent_change_24h: data[i].market_cap_change_percentage_24h,
                    }
                )
            }
            
            for(var i = 0; i < cryptocurrencies.length; i++) {
                var $item = $(
                    "<tr class='cryptocurrency'>" + 
                        "<th class='rank'>" + (i + 1) + "</th>" + 
                        "<td class='name'>" + cryptocurrencies[i].name + "</td>" + 
                        "<td class='symbol'>" + cryptocurrencies[i].symbol + "</td>" + 
                        "<td class='price'>" +"$"+ cryptocurrencies[i].price + "</td>" + 
                        "<td class='market_cap'>" + cryptocurrencies[i].market_cap + "</td>" + 
                        "<td class='circulating_supply'>" + cryptocurrencies[i].circulating_supply + "</td>" + 
                        "<td class='volume_24h'>" + cryptocurrencies[i].volume_24h + "</td>" + 
                        "<td class='percent_change_24h'>" + cryptocurrencies[i].percent_change_24h + "</td>" +
                    "</tr>"
                );

                cryptocurrencies[i].$item = $item;
                $list.append($item);
            }
            cryptocurrencies.sort(descending);
            updateRanks(cryptocurrencies);
            reposition();
            
            // fetch new data for the updateInterval
            timerId = setInterval("getNewData();", updateInterval);

        } 
        resetBoard();
        
    </script>
</html>                            