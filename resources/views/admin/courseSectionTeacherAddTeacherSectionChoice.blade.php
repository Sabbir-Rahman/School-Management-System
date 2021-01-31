<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Admin Class</title>
    <link rel="stylesheet" href="/css/adminTeacherInfo.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

{{--add data modal--}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="addClass" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label>Class name</label>
                        <input type="text" name="class" class="form-control" placeholder="Enter class name">

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save data</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{--end add data modal--}}


<div id="particles-js">

</div>
<div id="container">

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

    <br><br>
        <h5><font color="white">Select in which section you want to add teacher</font></h5>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Data Table</a>
            <form action="" method="POST" class="d-flex">
                @csrf
                <input class="form-control me-2" type="search" name="search_data" placeholder="Search"
                       aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <table id="datatable" class="table table-dark table-striped">
        <thead>
        <th scope="col">Id</th>
        <th scope="col">Branch</th>
        <th scope="col">Class</th>
        <th scope="col">Medium</th>
        <th scope="col">Group</th>
        <th scope="col">Section</th>
        <th scope="col">Section Id</th>
        <th scope="col">Course</th>
        <th scope="col">Course Paper</th>
        <th scope="col">Course Id</th>
        <th scope="col">Teacher</th>
        <th scope="col">Teacher Id</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Action</th>
        </thead>
        <tbody>
        @foreach($sectionTeachers as $sectionTeacher)
            <tr>
            <td scope="row">{{$sectionTeacher['id']}}</td>
            <td scope="row">{{$sectionTeacher['branch']}}</td>
            <td scope="row">{{$sectionTeacher['class']}}</td>
            <td scope="row">{{$sectionTeacher['medium']}}</td>
            <td scope="row">{{$sectionTeacher['group']}}</td>
            <td scope="row">{{$sectionTeacher['sectionName']}}</td>
            <td scope="row">{{$sectionTeacher['sectionId']}}</td>
            <td scope="row">{{$sectionTeacher['courseName']}}</td>
            <td scope="row">{{$sectionTeacher['coursePaper']}}</td>
            <td scope="row">{{$sectionTeacher['courseId']}}</td>
            <td scope="row">{{$sectionTeacher['teacherName']}}</td>
            <td scope="row">{{$sectionTeacher['teacherId']}}</td>
            <td scope="row">{{$sectionTeacher['created_at']}}</td>
            <td scope="row">{{$sectionTeacher['updated_at']}}</td>
            <td scope="row">
                <a href="{{route('admin.goToAddTeacherTeacherChoice',$sectionTeacher->id)}}" class="btn btn-info">SELECT</a>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


<script type="text/javascript" src="/js/particles.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>
</body>
</html>
