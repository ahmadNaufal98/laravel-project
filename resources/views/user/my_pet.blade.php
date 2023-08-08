<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
    <style>
        {box-sizing: border-box}
        .open-button{
            background-color: #555;
            color: white;
            padding: 6px 10px;
            cursor: pointer;
            opacity: 0.8;
            width: 140px;
        }
        .form-popup{
            display: none;
            right: 15px;
            border: 3px solid #f1f1f1;
        }
        .cancel{
            background-color:red;
        }
    </style>
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}"><img src="\7618172.jpg" height="60px" width="60px"></a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                            aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('doctors')}}">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('about')}}">News</a>
                        </li>
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item active">
                            <a class="nav-link" style="margin:5px; background-color: blue; color:white"
                                href="{{url('mypet')}}">My Pet</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" style="background-color: greenyellow; color:white"
                                href="{{url('myappointment')}}">My Appointment</a>
                        </li>
                        <x-app-layout>
                        </x-app-layout>
                        @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                        </li>
                        @endauth
                        @endif
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>
    <div class="page-section">
        <div class="container">
            <button class="open-button" onclick="openForm()">open form</button>
            <div class="form-popup" id="myForm">
            <button type="button" class="btn cancel" onclick="closeForm()">X</button>
                <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
                <form class="main-form" action="{{url('appointment')}}" method="POST">@csrf
                    <div class="row mt-5 ">
                        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                            <input type="text" name="name" class="form-control" placeholder="Full name">
                        </div>
                        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                            <input type="text" name="email" class="form-control" placeholder="Email address..">
                        </div>
                        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                            <select name="doctor" id="departement" class="custom-select">
                                <option>--select doctor--</option>
                                @foreach($doctor as $doctors)
                                <option value="{{$doctors->name}}">
                                    {{$doctors->name}}--speciality--{{$doctors->speciality}}
                                </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                            <input type="text" name="number" class="form-control" placeholder="Number..">
                        </div>
                        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                            <textarea name="message" id="message" class="form-control" rows="6"
                                placeholder="Enter message.."></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
                </form>
            </div>
        </div>
    </div>
    <div align="center" style="padding:70px">
        <table>
            <tr style="background-color: black">
                <th style="padding:10px; font-size:20px; color:white">Doctor Name</th>
                <th style="padding:10px; font-size:20px; color:white">Date</th>
                <th style="padding:10px; font-size:20px; color:white">Massage</th>
                <th style="padding:10px; font-size:20px; color:white">Status</th>
                <th style="padding:10px; font-size:20px; color:white">Cancel Appointment</th>
            </tr>
            @foreach ( $appoint as $appoints )
            <tr style="background-color:black" align="center">
                <td style="padding:10px; color:white">{{$appoints->doctor}}</td>
                <td style="padding:10px; color:white">{{$appoints->date}}</td>
                <td style="padding:10px; color:white">{{$appoints->message}}</td>
                <td style="padding:10px; color:white">{{$appoints->status}}</td>
                <td><a class="btn btn-danger" onclick="return confirm('are you sure to delete this')"
                        href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>
            </tr>
            @endforeach
        </table>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

    <script>
        function openForm(){
    document.getElementById("myForm").style.display = "block";
}
function closeForm(){
    document.getElementById("myForm").style.display = "none";
}
    </script>

</body>

</html>
