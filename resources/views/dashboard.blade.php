<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>body {
    font-family: 'Arial', sans-serif;
    background: #4b75ff;
}

.wrapper {
    display: flex;
    width: 100%;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #020e38;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #4b75ff;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid white;
}

#sidebar ul p {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
color: white;
}

#sidebar ul li a:hover {
    color: #4b75ff;
    background: #fff;
}

a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}

a[aria-expanded="true"]::before {
    content: '\e260';
}

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

.card {
    margin-bottom: 20px;
}

.card-body {
    padding: 15px;
}

.chart-container {
    position: relative;
    height: 40vh;
    width: 80%;
}

.list-group-item {
    background-color: #4b75ff;
    border: none;
}

.list-group-item:hover {
    background-color: #4b75ff;
}

.timeline {
    list-style: none;
    padding: 0;
}

.timeline li {
    position: relative;
    padding-left: 20px;
    margin-bottom: 20px;
}

.timeline li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 10px;
    height: 10px;
    background: #007bff;
    border-radius: 50%;
}


</style>
    </head>
    <body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Gestion d'hotel</h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/dashboard" >Dashboard</a>
                   
                <li>
                    <a href="#rooms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pieces</a>
                    <ul class="collapse list-unstyled" id="rooms">
                        <li><a href="/pieces">Les pieces</a></li>
                       
                        <li><a href="/categories">Les Categories</a></li>
                    </ul>
                </li>
                
            </ul>
          
        </nav>

        <!-- Page Content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="nav navbar-nav ml-auto">
                           
                            <li class="nav-item">
                                <a class="nav-link" href="/profile">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://codepen.io/JOEDZARR-SADSAD/pen/bGyVQjd">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="container">
                <h2>Overview Dashboard</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Current Occupancy</h5>
                                <p class="card-text">Occupancy Rate: 75%</p>
                                <p class="card-text">Available Rooms: 25</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Revenue Statistics</h5>
                                <div class="chart-container">
                                    <!-- Placeholder for chart -->
                                    <canvas id="revenueChart"></canvas>
                                </div>
                                <p class="card-text">Monthly Revenue: $50,000</p>
                                <p class="card-text">Yearly Revenue: $600,000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Recent Bookings</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Booking #1234 - John Baraquiel</li>
                                    <li class="list-group-item">Booking #1235 - Irish Velado</li>
                                    <li class="list-group-item">Booking #1236 - Michael Gaitos</li>
                                    <li class="list-group-item">Booking #1237 - Aljames Maybuena</li>
                                </ul>
                                <a href="https://codepen.io/JOEDZARR-SADSAD/pen/VwOKajO" class="btn btn-primary mt-3">View All Bookings</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pending Requests</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Room Service Request - Room #101</li>
                                    <li class="list-group-item">Maintenance Request - Room #202</li>
                                    <li class="list-group-item">Laundry Service Request - Room #303</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Bookings Last Month</h5>
                                <p class="card-text">150</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Income Last Month</h5>
                                <p class="card-text">$45,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Expenses Last Month</h5>
                                <p class="card-text">$20,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Placeholder script for chart.js
        var ctx = document.getElementById('revenueChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Revenue',
                    backgroundColor: 'rgba(0, 119, 204, 0.3)',
                    borderColor: 'rgb(0, 119, 204)',
                    data: [5000, 10000, 15000, 20000, 25000, 30000, 35000]
                }]
            },
            options: {}
        });
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });


        function toggleButtonText(button) {
  var buttonText = button.querySelector('span');
  if (buttonText.textContent === 'Masquer') {
    buttonText.textContent = 'Afficher';
  } else {
    buttonText.textContent = 'Masquer';
  }
}
    </script>
</body>
</html>

</body>

</html>
