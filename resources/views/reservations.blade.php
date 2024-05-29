<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Admin Dashboard - Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f7f6;
        }

        .wrapper {
            display: flex;
            width: 100%;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #7386D5;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #6d7fcc;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
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
            color: #d1d1d1;
        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
        }

        #roomStatus {
            margin-bottom: 30px;
        }

        .room-card {
            background: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .room-info h5 {
            margin-top: 0;
        }

        #calendar {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>UNIHOTEL</h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="https://codepen.io/JOEDZARR-SADSAD/pen/vYwOaZP">Dashboard</a>
                </li>
                <li>
                    <a href="https://codepen.io/John-Rake-Serito/pen/WNBQmRe">Rooms</a>
                </li>
                <li>
                    <a href="https://codepen.io/JOEDZARR-SADSAD/pen/VwOKajO">Transaction</a>
                </li>
                <li>
                    <a href="https://codepen.io/JOEDZARR-SADSAD/pen/dyEpMJx">Amenities</a>
                </li>

            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="https://codepen.io/JOEDZARR-SADSAD/pen/pomjqEW">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://codepen.io/JOEDZARR-SADSAD/pen/bGyVQjd">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <h2>Transaction Management</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Transaction ID</th>
                            <th scope="col">Date</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                        <tr>
                            <th scope="row">{{ $reservation->id }}</th>
                            <td>{{ $reservation->created_at->format('Y-m-d') }}</td>
                            <td>${{ $reservation->prix }}</td>
                            <td><span class="badge badge-success">{{ $reservation->status }}</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="room102Details" tabindex="-1" role="dialog" aria-labelledby="room102DetailsLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="room102DetailsLabel">Room 102 Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Room 102 Details Content -->
                    <p>Room Status: <span class="badge badge-danger">Occupied</span></p>
                    <p>Type: Standard</p>
                    <p>Price: $100/night</p>
                    <!-- Additional details can be added -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Room Details Modals -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
    <script>