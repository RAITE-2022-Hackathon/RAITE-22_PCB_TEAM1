
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
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Join Now</a>
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
    <h2><strong>Gallery</strong></h2>
</div>
        <div class="container-fluid">
  <div class="px-lg-5">

    <!-- For demo purpose -->
    <div class="row py-5">
      <div class="col-lg-12 mx-auto">
        <div class="text-white p-5 shadow-sm rounded banner">
          <h1 class="display-4">Looking for a Gadgets</h1>
          <p class="lead">Summer Gadgets that Perfect for Outings</p>
          <p class="lead">Now for as low <strong>20% Discount</strong>
          </p>
        </div>
      </div>
    </div>
    <!-- End -->

    <div class="row">
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
     
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-2.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Blorange</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-3.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">And She Realized</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-4.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">DOSE Juice</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-5.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Pineapple</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-6.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Yellow banana</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
             
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-7.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Teal Gameboy</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-8.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Color in Guatemala.</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
           
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-2.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-3.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-4.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

    </div>
    <div class="py-5 text-center"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a></div>
  </div>
</div>
<br><br>
    </section>
 <section>
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
              <a href="#!" class="text-white">Home</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">What's New</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Gallery</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">About</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Contact</a>
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