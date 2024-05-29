<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Admin Dashboard - Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css">

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
            background: #123664;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #123664;
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

        .Logo {
            color: white;
            justify-content: center;
            align-items: center;
            display: flex;
            font-size: 2.1em;
            text-transform: uppercase;

        }
    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="Logo"> Schesly</h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/pieces">Les pieces</a>
                </li>


                <li>
                    <a href="/reservations">Reservations</a>
                </li>
            </ul>
        </nav>

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
                                <a class="nav-link" href="/logout">Logout</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <h2>Room Management</h2>
                <div id="roomStatus">
                    @foreach($pieces as $piece)
                    <div class="room-card">
                        <div class="room-info">
                            <h5>{{ $piece->numero_chambre }}</h5>
                            @if($piece->status == 0)
                            <p>Status: <span class="badge badge-success">Available</span></p>
                            @elseif($piece->status == 1)
                            <p>Status: <span class="badge badge-warning">Occupee</span></p>
                            @else
                            <p>Status: <span class="badge badge-danger">Maintenance</span></p>
                            @endif
                            <p>Type: {{ $piece->type }}</p>
                            <p>Price: {{ $piece->prix }}/night</p>
                        </div>


                    </div>
                    @endforeach
                </div>
            </div>


        </div>

    </div>







</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
<script>
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
    });
</script>   


</html>