<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Admin Class</title>
    <link rel="stylesheet" href="/css/studentApplicationEnter.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div id="particles-js">

</div>
<div id="container">
    <br><br>
    <h3><font color="blue">Application enter</font></h3>
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

    <form action="addApplication" method="POST">
        @csrf
        <input type="hidden" value="{{session('userId')}}" name="studentId" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        <div class="form-group">
            <label for="formGroupExampleInput">Application Title</label>
            <input type="text" class="form-control" name="applicationTitle" placeholder="Example input">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Application Detail</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="applicationDetail" rows="7"></textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">What you want</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="applicationWant" placeholder="Write reason in short">
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Submit Application</button>
    </form>


</div>


<script type="text/javascript" src="/js/particles.js"></script>
<script type="text/javascript" src="/js/appApplication.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>
</body>
</html>
