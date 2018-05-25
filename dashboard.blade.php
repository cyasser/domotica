<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Domotica123</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>

  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-tachometer fa-fw"></i>  Dashboard</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa  fa-area-chart fa-fw"></i>  Grafici</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-clock-o fa-fw"></i>  programma</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i>  Profilo</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <!-- Contiene 4 div con info su Temperatura, Umidità, Luci accese e consumi elettrici-->
  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-lightbulb-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>4</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Luci accese</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-thermometer-half w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23°</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Temperatura interna</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-tint w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>20%</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Umidità</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-amber w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-bolt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>3.24kwH</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
    <hr>
  <!-- due grafici con i consumi elettrici e del gas -->
  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-half">
        <h5>Consumi Eletrici</h5>
        <canvas id="myChart" width="400" height="300"></canvas>
    </div>

    <div class="w3-half">
        <h5>Consumi Metano</h5>
        <canvas id="myChart2" width="400" height="300"></canvas>
    </div>
  </div>

  <hr>

  <!-- controllo delle luci e temperature di ogni stanza -->
  <div  class="w3-row-padding w3-margin-bottom">
    <div  class="w3-quarter" >
      <div  class="w3-container w3-red w3-padding-16" onclick="accendi()">
        <div class="w3-left">
          Cucina
        </div>
        <div class="w3-right">
          <i id="divid" class="fa fa-lightbulb-o w3-xxlarge" style="color:yellow;"></i>
        </div>
      </div>
    </div>

    <div class="w3-quarter w3-margin-bottom">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left">
          Salotto
        </div>
        <div class="w3-right">
          <i class="fa fa-lightbulb-o w3-xxlarge" ></i>
        </div>
      </div>
    </div>

    <div class="w3-quarter w3-margin-bottom">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left">
          Camera Matrimoniale
        </div>
        <div class="w3-right">
          <i class="fa fa-lightbulb-o w3-xxlarge" style="color:yellow;"></i>
        </div>
      </div>
    </div>

    <div class="w3-quarter w3-margin-bottom">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left">
          Camera Singola
        </div>
        <div class="w3-right">
          <i class="fa fa-lightbulb-o w3-xxlarge" style="color:yellow;"></i>
        </div>
      </div>
    </div>

    <div class="w3-quarter w3-margin-bottom">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left">
           Bagno
        </div>
        <div class="w3-right">
          <i class="fa fa-lightbulb-o w3-xxlarge" style="color:yellow;"></i>
        </div>
      </div>
    </div>

    <div class="w3-quarter w3-margin-bottom">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left">
           Corridoio Scale
        </div>
        <div class="w3-right">
          <i class="fa fa-lightbulb-o w3-xxlarge" style="color:yellow;"></i>
        </div>
      </div>
    </div>

    <div class="w3-quarter w3-margin-bottom">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left">
           Corridorio Centrale
        </div>
        <div class="w3-right">
          <i class="fa fa-lightbulb-o w3-xxlarge" style="color:yellow;"></i>
        </div>
      </div>
    </div>

    <div class="w3-quarter w3-margin-bottom">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left">
           Entrata
        </div>
        <div class="w3-right">
          <i class="fa fa-lightbulb-o w3-xxlarge" style="color:yellow;"></i>
        </div>
      </div>
    </div>
  </div>


<!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>

 <script src="js/Chart.js"></script>
<script>

function accendi() {

  var div = document.getElementById( 'divid' );
    if(div.style.color == 'yellow' ) {
      div.style.color = 'white';
    } else {
      div.style.color = 'yellow';
    }

}

var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
</body>
</html>
