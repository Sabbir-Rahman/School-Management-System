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
                    <button type="submit"  class="btn btn-primary">Save data</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{--end add data modal--}}


<div id="particles-js">

</div>
<div id="container">
    <h3><font color="white">Teacher Table</font></h3>
    <br><br>
    <h4><font color="white">Total {{$count}} record found</font> </h4>
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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add data with modal
    </button>

    <br><br>
    <nav class="navbar navbar-dark bg-dark" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand">Data Table</a>
            <form action="searchTeacher" method="POST" class="d-flex">
                @csrf
                <h6><font color="#dcdcdc">Search By:</font></h6>&nbsp&nbsp
                <select name="search_option" class="form-select" aria-label="Default select example">
                    <option value="name" selected>Name</option>
                    <option value="email">Email</option>
                    <option value="educational_qualification">Education</option>
                    <option value="experiences">Experience</option>
                    <option value="speciality">Speciality</option>
                    <option value="joining_year">Joining Year</option>
                    <option value="father_name">Father</option>
                    <option value="mother_name">Mother</option>
                    <option value="nid">NID</option>
                    <option value="gender">Gender</option>
                    <option value="hobby">Hobby</option>
                    <option value="address">Address</option>
                    <option value="contact">Contact1</option>
                    <option value="optional_contact">Contact2</option>
                    <option value="comment">Comment</option>
                    <option value="leaving_year">Leaving Year</option>
                </select>

                &nbsp&nbsp&nbsp&nbsp
                <input class="form-control me-2" type="search" name="search_data" placeholder="Search"
                       aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <table id="datatable" class="table table-dark table-striped">

        <thead>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Education</th>
        <th scope="col">Experience</th>
        <th scope="col">Speciality</th>
        <th scope="col">Joining</th>
        <th scope="col">Father</th>
        <th scope="col">Mother</th>
        <th scope="col">NID</th>
        <th scope="col">Gender</th>
        <th scope="col">Hobby</th>
        <th scope="col">Address</th>
        <th scope="col">Contact1</th>
        <th scope="col">Contact2</th>
        <th scope="col">Comment</th>
        <th scope="col">Leaving</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
        <th scope="col">Action</th>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td scope="col">{{$teacher['id']}}</td>
                <td scope="col">{{$teacher['name']}}</td>
                <td scope="col">{{$teacher['email']}}</td>
                <td scope="col">{{$teacher['educational_qualification']}}</td>
                <td scope="col">{{$teacher['experiences']}}</td>
                <td scope="col">{{$teacher['speciality']}}</td>
                <td scope="col">{{$teacher['joining_year']}}</td>
                <td scope="col">{{$teacher['father_name']}}</td>
                <td scope="col">{{$teacher['mother_name']}}</td>
                <td scope="col">{{$teacher['nid']}}</td>
                <td scope="col">{{$teacher['gender']}}</td>
                <td scope="col">{{$teacher['hobby']}}</td>
                <td scope="col">{{$teacher['address']}}</td>
                <td scope="col">{{$teacher['contact']}}</td>
                <td scope="col">{{$teacher['optional_contact']}}</td>
                <td scope="col">{{$teacher['comment']}}</td>
                <td scope="col">{{$teacher['leaving_year']}}</td>
                <td scope="col">{{$teacher['created_at']}}</td>
                <td scope="col">{{$teacher['updated_at']}}</td>
                <td scope="col">
                    <a href="" class="btn btn-primary">EDIT</a><br>
                    <a href="" class="btn btn-danger">DELETE</a>
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
