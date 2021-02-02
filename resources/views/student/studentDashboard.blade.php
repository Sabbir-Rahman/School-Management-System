<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Dashboard</title>
    <link href="/assetsStudentDashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assetsStudentDashboard/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assetsStudentDashboard/css/datepicker3.css" rel="stylesheet">
    <link href="/assetsStudentDashboard/css/styles.css" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><font color="aqua">WELCOME </font>{{$student['name']}}</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                </a>
                                <div class="message-body"><small class="pull-right">3 mins ago</small>
                                    <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                    <br/><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                </a>
                                <div class="message-body"><small class="pull-right">1 hour ago</small>
                                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                    <br/><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="all-button"><a href="#">
                                    <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                </a></div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-bell"></em><span class="label label-info">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li><a href="#">
                                <div><em class="fa fa-envelope"></em> 1 New Message
                                    <span class="pull-right text-muted small">3 mins ago</span></div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div><em class="fa fa-heart"></em> 12 New Likes
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div><em class="fa fa-user"></em> 5 New Followers
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">{{$student['id']}}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="index.html">&nbsp Dashboard</a></li>
        <li><a href="widgets.html">&nbsp Home Work</a></li>
        <li><a href="charts.html">&nbsp Announcement</a></li>
        <li><a href="elements.html">&nbsp Class notes</a></li>
        <li><a href="login.html">&nbsp Logout</a></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-3">
            <div class="panel panel-teal">
                <div class="panel-heading dark-overlay">ID</div>
                <div class="panel-body">
                    <h1><font color="white">{{$student['id']}}</font> </h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-blue">
                <div class="panel-heading dark-overlay">ClASS</div>
                <div class="panel-body">
                    <h1><font color="white">{{$student['student_class']}}</font> </h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-orange">
                <div class="panel-heading dark-overlay">SECTION</div>
                <div class="panel-body">
                    <h1><font color="white">{{$section['sectionName']}}</font> </h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-red">
                <div class="panel-heading dark-overlay">SHIFT</div>
                <div class="panel-body">
                    <h1><font color="white">{{$student['student_shift']}}</font> </h1>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
                        <div class="large">12</div>
                        <div class="text-muted">Courses</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
                        <div class="large">2</div>
                        <div class="text-muted">Home Works</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                        <div class="large">4</div>
                        <div class="text-muted">Announcement</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
                        <div class="large">5</div>
                        <div class="text-muted">Personal Notice</div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->

    </div>
    @foreach($courses as $course)
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">{{$course['courseName']}} || {{$course['coursePaper']}}</div>
                    <div class="panel-body">
                        <p>Taken by: {{$course['teacherName']}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>    <!--/.main-->

<script src="/assetsStudentDashboard/js/jquery-1.11.1.min.js"></script>
<script src="/assetsStudentDashboard/js/bootstrap.min.js"></script>
<script src="/assetsStudentDashboard/js/chart.min.js"></script>
<script src="/assetsStudentDashboard/js/chart-data.js"></script>
<script src="/assetsStudentDashboard/js/easypiechart.js"></script>
<script src="/assetsStudentDashboard/js/easypiechart-data.js"></script>
<script src="/assetsStudentDashboard/js/bootstrap-datepicker.js"></script>
<script src="/assetsStudentDashboard/js/custom.js"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

</body>
</html>
