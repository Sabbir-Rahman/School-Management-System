<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meeting Link</title>
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
{{--add data modal--}}

{{--end add data modal--}}

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
        <ul class="nav menu">
            <li><a href="{{route('student.studentDashboard')}}">&nbsp Dashboard</a></li>
            <li><a href="{{route('student.studentHomeWorkDashboard')}}">&nbsp Home Work</a></li>
            <li><a href="{{route('student.studentAnnouncementDashboard')}}">&nbsp Announcement</a></li>
            <li><a href="{{route('student.studentClassNotesDashboard')}}">&nbsp Class notes</a></li>
            <li><a href="{{route('student.studentMeetingLinksDashboard')}}">&nbsp Meeting Links</a></li>
            <li class="active"><a href="{{route('student.studentApplicationDashboard')}}">&nbsp Student Application</a></li>
            <li><a href="">&nbsp Logout</a></li>
        </ul>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li class="active">Home Work Dashboard</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="container" id="container">
            <h3><font color="black">Application List</font></h3>
            @if(count($errors)>0)

                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
        @endif

        <!-- Button trigger modal -->
            <a href="{{route('student.enterApplication')}}">
                <button>Add data</button>
            </a>

            <br><br>
            @foreach($applications as $application)
            <div class="row">

                @foreach($applications as $application)
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">Application id: {{$application['id']}} </div>
                        <div class="container">
                            <h3>Title: {{$application['title']}}</h3>
                            <h3>Want: {{$application['want']}}</h3>
                            <h4>Details:</h4>
                            <p> {{$application['details']}}</p>
                            <h5>Date: {{$application['created_at']}} </h5>
                            <h3><font color="blue">Status: {{$application['status']}} </font></h3>
                            <h5>Admin Comment: {{$application['adminComment']}} </h5>
                            <br><br>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>



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
