<?php 

?>

<!doctype html>
<html lang="en">
<head>
 <title>Chart Ui/Ux</title>
 <script type="text/javascript" src="js/Chart.js"></script>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="wrapper d-flex align-items-stretch">
   <nav id="sidebar">
    <div class="custom-menu">
     <button type="button" id="sidebarCollapse" class="btn btn-primary">
     </button>
   </div>
   <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
    <div class="user-logo">
     <div class="img" style="background-image: url(images/reo.jpg);"></div>
     <h3>Reo Sahobby</h3>
   </div>
 </div>
 <ul class="list-unstyled components mb-5">
  <li>
    <a href="home.php"><span class="fa fa-home mr-3"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Download</a>
  </li>
  <li class="active">
    <a href="chart.php"><span class="fa fa-gift mr-3"></span> Chart</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-trophy mr-3"></span> Top Review</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
  </li>
  <li>
    <a href="index.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
  </li>
</ul>

</nav>

<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h2 class="mb-4">Chart</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  <div class="row pr-3">
    <div class="col-sm-5">
      <div style="width: 750px;height: 500px">
        <canvas id="myChart"></canvas>
      </div>   
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-5">
      <div style="width: 750px;height: 500px">
        <canvas id="myChart1"></canvas>
      </div>
    </div>   
  </div>

  <div class="row mt-3">
    <div class="col-sm-5">
      <div style="width: 720px;height: 500px">
        <canvas id="myChart3"></canvas>
      </div>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-5">
      <div style="width: 720px;height: 500px">
        <canvas id="myChart2"></canvas>
      </div>
    </div>
  </div>

</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main1.js"></script>
<script type="text/javascript">
 var ctx = document.getElementById("myChart");
 var myChart = new Chart(ctx, {
  type: 'radar',
  data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 23, 2, 3],
      backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(255, 206, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(255, 159, 64, 0.2)',
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
      'rgba(255, 159, 64, 1)',
      'rgba(255, 99, 132, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(255, 206, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(255, 159, 64, 0.2)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});
</script>
<script type="text/javascript">
  var ctx1 = document.getElementById("myChart1").getContext('2d');
  var myChart1 = new Chart(ctx1, {
    type: 'pie',
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 23, 2, 3],
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
<script type="text/javascript">
  var ctx2 = document.getElementById("myChart2").getContext('2d');
  var myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 23, 2, 3],
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
<script type="text/javascript">
  var ctx3 = document.getElementById("myChart3").getContext('2d');
  var myChart3 = new Chart(ctx3, {
    type: 'doughnut',
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 23, 2, 3],
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