<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

//$phpvar = $_POST['phpvar'];

?>



<!doctype html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAA/4QAAAAAAAAAMAAAAHAAAADgAAABwAAAA4AAAAcAAAAHgAAAA8AAAADgAAAf/gAAH/4AAABwAAAA4AAAH/4AAB/+AAD//wAA/88AAP+PAAD/HwAA/j8AAPx/AAD4/wAA+H8AAPw/AAD/HwAA4AEAAOABAAD/jwAA/x8AAOABAADgAQAA" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="eth1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Php Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <!-- <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a> -->
      </li>
  </ul>
  </div>


  </div>
</nav>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <div class="py-2 bg-light">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-9 d-none d-lg-block">
              <a href="https://www.livechatinc.com/chat-with/12433602/" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
              <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
              <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
            </div>
  
          </div>
        </div>
      </div>
      <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
  
        <div class="container">
          <div class="d-flex align-items-center">
            <div class="site-logo">
              <a href="index.html" class="d-block">
                <img src="images/logo.png" alt="Image" class="img-fluid">
              </a>
            </div>
            <div class="mr-auto">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li class="active">
                    <a href="welcome.php" class="nav-link text-left">Home</a>
                  </li>
                  <li>
                    <a href="about.html" class="nav-link text-left">About</a>
                  </li>
                  <li class="has-children">
                    <a href="services.html" class="nav-link text-left">Services</a>
                    <ul class="dropdown">
                      <li><a href="services.html">Investment Bonds</a></li>
                      <li><a href="services.html">Investment Management</a></li>
                      <li><a href="services.html">Financial Funds</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="blog.html" class="nav-link text-left">Blog</a>
                  </li>
                  <li>
                    <a href="contact.html" class="nav-link text-left">Contact</a>
                  </li>
                </ul>                                                                
              </nav>
  
            </div>
            <div class="ml-auto">
              <div class="social-wrap">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
  
                <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                  class="icon-menu h3"></span></a>
                </div>
              </div>
  
            </div>
          </div>
  
        </header>

        <!--<div class="p">
            <p style="text-align:center;">BOOK KEEPING</p>
        </div>-->

      <center>
        <div class="msg">
            <p >Current Balance</p>
        </div>
        <div class="bal">
            
            <p  id='balance'></p>
        </div>
          
        <div  class="amt">
            <input type="text" id="amount">
        </div>
      </center>
        <div class="site-section bg-light pb-0">
            
                <div class="row mb-5 justify-content-center text-center">
            
            <div class="col-lg-4 col-md-6">

                <div class="feature-1">
                  <div class="icon-wrapper bg-primary">
  
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wallet2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2.5 4l10-3A1.5 1.5 0 0 1 14 2.5v2h-1v-2a.5.5 0 0 0-.5-.5L5.833 4H2.5z"/>
                      <path fill-rule="evenodd" d="M1 5.5A1.5 1.5 0 0 1 2.5 4h11A1.5 1.5 0 0 1 15 5.5v8a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 13.5v-8zM2.5 5a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-11z"/>
                    </svg>
                  </div>
                  <div class="feature-1-content">
                    <h2>DEPOSIT</h2>
                    <p>Money is going inside</p>
                    <p><button class="btn btn-primary px-4 " id='deposit'>Deposit</button></p>
                  </div>
                </div>
              </div>

            <div class="col-lg-4 col-md-6">

              <div class="feature-1">
                <div class="icon-wrapper bg-primary">

                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5h-2v12h2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
                    <path fill-rule="evenodd" d="M0 14.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                </div>
                <div class="feature-1-content">
                  <h2>WITHDRAW</h2>
                  <p>Money is coming outside</p>
                  <p><button class="btn btn-primary px-4" id='withdraw'>Withdraw</button></p>
                </div>
              </div>
            </div>
                </div>
            
        </div>
        <?php
        require_once "config.php";
       $uname= $_SESSION['username'];
       $sql = "SELECT id, username, phpvar FROM users where username = '$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
      
  while($row = $result->fetch_assoc()) {
    $phpvar=$row['phpvar'];
    ?>
     

   
        <center>
        <a href="https://rinkeby.etherscan.io/address/0x433acd5fd6bff3b92b6136cb628a54990604d183">Transaction</a>
        </center>
        <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
        <script>
        
			
            var contract;

            $(document).ready(function()
            {
                web3 = new Web3(window.web3.currentProvider);
 
                var address = "<?php echo $row['phpvar']; ?>";
                console.log(address);
                var abi = [
	{
        "constant": false,
        "inputs": [
          {
            "name": "amt",
            "type": "int256"
          }
        ],
        "name": "deposit",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
	},
	{
        "constant": false,
        "inputs": [
          {
            "name": "amt",
            "type": "int256"
          }
        ],
        "name": "withdraw",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
	},
	{
        "inputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "constructor"
	},
	{
        "constant": true,
        "inputs": [],
        "name": "getBalance",
        "outputs": [
          {
            "name": "",
            "type": "int256"
          }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
	}
];
                
				
				ethereum.enable()

				ethereum.autoRefreshOnNetworkChange = false;
                contract = new web3.eth.Contract(abi, address);

                contract.methods.getBalance().call().then(function(bal)
                {
                    $('#balance').html(bal);
                })
                
            })

            $('#deposit').click(function()
            {
                var amt = 0;
                amt = parseInt($('#amount').val());

                web3.eth.getAccounts().then(function(accounts)
                {
                    var acc = accounts[0];
                    return contract.methods.deposit(amt).send({from: acc});
                }).then(function(tx)
                {
                    console.log(tx);
                }).catch(function(tx)
                {
                    console.log(tx);
                })

            })

			$('#withdraw').click(function()
            {
                var amt = 0;
                amt = parseInt($('#amount').val());

                web3.eth.getAccounts().then(function(accounts)
                {
                    var acc = accounts[0];
                    return contract.methods.withdraw(amt).send({from: acc});
                }).then(function(tx)
                {
                    console.log(tx);
                }).catch(function(tx)
                {
                    console.log(tx);
                })

            })



        </script>
         <?php
    //echo "id: " . $row["id"]. " - PHPVAR: " . $row["phpvar"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

        <!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12433602;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12433602/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

    </body>
</html>