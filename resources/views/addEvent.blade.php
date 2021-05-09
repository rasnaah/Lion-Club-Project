<!DOCTYPE html>
<html>
<head>
    <title>Add Events</title>
    <!------------------------ Meta Starts ---------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="img/site_logo.png">

    <meta property="og:title" content=""/>
    <meta property="og:type"   content="website" />
    <meta property="og:url"    content="" />
    <meta property="og:site_name" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:image:alt" content="">
    <meta property="og:description" content="">
    <!------------------------- Meta Ends ----------------------->

    <!-- Font Awesome Icons Link Starts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- Font Awesome Icons Link Ends -->


    <!----------------------- Fonts Starts ---------------------->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- line awesome link starts -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- line awesome link Ends -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!------------------------ Fonts Ends ----------------------->


    <!-------------------- Components Starts -------------------->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/bowercomponent/slick-theme.css" rel="stylesheet">
    <link href="css/bowercomponent/slick.css" rel="stylesheet">
    <link href="css/bowercomponent/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="css/bowercomponent/lightbox.min.css" rel="stylesheet">
    <!--------------------- Components Ends --------------------->


    <!-------------------- Site Style Starts -------------------->
    <link href="css/global.css" rel="stylesheet">
    <link href="css/thestyle.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--------------------- Site Style Ends --------------------->

</head>
<body>
<div class="container box">
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="logo-container">
                <img src="img/logo/logo.png" alt="">
            </div>
            <div class="logo-title">
                <h2>Lions Club</h2>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="/dashboard"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="/dgPlan"><span class="las la-clipboard-check"></span>
                        <span>DG Plan</span></a>
                </li>
                <li>
                    <a href="/addEvent">
                        <span class="las la-calendar"></span>
                        <span>Event</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="/addEvent">Add Event</a></li>
                        <li><a href="/showEvent">Show Events</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Event
            </h2>
        </header>
        <main>
            //
            {{--<form method="post" action="{{ route('auth.check') }}" class="admin-login-form">

                @csrf
                <div class="logo-container">
                    <img src="img/logo/logo.png" alt="Lions-club-logo">
                </div>
                <h2>LOGIN</h2>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" value="{{ old ('email') }}" placeholder="Enter email address"/>
                    <span class="text-danger">@error('email') {{ $message }}@enderror</span>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" value="{{ old ('password') }}" placeholder="Enter password"/>
                    <span class="text-danger">@error('password') {{ $message }}@enderror</span>
                </div>
                <a class="forgot-pw-link" href="#">Forgot Password</a>
                <input type="submit" name="login" class="btn btn-primary" value="Login" />
                <div class="register-link">Do not have an account? <a href="#">Register Here</a></div>
            </form>--}}
            //

            <form class="event-form">
                <div class="event-form-title">
                    <h2>Add Event</h2>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title" placeholder="Title">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="club">Club</label>
                        <input class="form-control" type="text" name="title" id="title" placeholder="Club">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date">Date</label>
                        <input type="date" name="" id="datepicker">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="time">Time</label>
                        <input type="time" name="time" id="time">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="3"
                                  placeholder="Description"></textarea>
                    </div>
                </div>
                <button class="add-btn" type="submit" class="btn btn-primary">Add Event</button>
            </form>
        </main>
    </div>
    <script>
        $(document).ready(function () {
            $('#datepicker').datepicker({
                dateFormat: "YYYY-MM-DD"
            });
        });
    </script>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/thescripts.js"></script>
</body>
</html>
