<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Admin Class</title>
    <link rel="stylesheet" href="/css/adminStudentInfo.css" media="screen">
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

            <form action="addSectionView" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label>Branch no</label>
                        <input type="number" name="branchNo" class="form-control" placeholder="Enter branch no">

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
    <h3><font color="white">Section Table</font></h3>
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

    <p><font color="#d3d3d3">Select section you want to edit</font></p>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Section Table</a>
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
        <th scope="col">ClassId</th>
        <th scope="col">Section Name</th>
        <th scope="col">Room no</th>
        <th scope="col">Room Id</th>
        <th scope="col">Building Name</th>
        <th scope="col">Building Id</th>
        <th scope="col">Shift</th>
        <th scope="col">Medium</th>
        <th scope="col">Medium Id</th>
        <th scope="col">Group</th>
        <th scope="col">Group Id</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
        <th scope="col">Action</th>
        </thead>
        <tbody>
        @foreach($sections as $section)
            <tr>
                @if(intval($section['id'])<1000000000)
                    <td scope="col">0{{$section['id']}}</td>
                    <td scope="col">{{$section['branch']}}</td>
                    <td scope="col">{{$section['class']}}</td>
                    <td scope="col">{{$section['classId']}}</td>
                    <td scope="col">{{$section['sectionName']}}</td>
                    <td scope="col">{{$section['roomNo']}}</td>
                    <td scope="col">{{$section['roomId']}}</td>
                    <td scope="col">{{$section['buildingName']}}</td>
                    <td scope="col">{{$section['buildingId']}}</td>
                    <td scope="col">{{$section['shift']}}</td>
                    <td scope="col">{{$section['medium']}}</td>
                    <td scope="col">{{$section['mediumId']}}</td>
                    <td scope="col">{{$section['groupName']}}</td>
                    <td scope="col">{{$section['groupId']}}</td>
                    <td scope="col">{{$section['created_at']}}</td>
                    <td scope="col">{{$section['updated_at']}}</td>
                    <td scope="col">
                        <a href="{{route('admin.goToCourse',$section->id)}}" class="btn btn-info"><font color="white">Select</font></a><br>
                    </td>
                @else
                    <td scope="col">{{$section['id']}}</td>
                    <td scope="col">{{$section['branch']}}</td>
                    <td scope="col">{{$section['class']}}</td>
                    <td scope="col">{{$section['classId']}}</td>
                    <td scope="col">{{$section['sectionName']}}</td>
                    <td scope="col">{{$section['roomNo']}}</td>
                    <td scope="col">{{$section['roomId']}}</td>
                    <td scope="col">{{$section['buildingName']}}</td>
                    <td scope="col">{{$section['buildingId']}}</td>
                    <td scope="col">{{$section['shift']}}</td>
                    <td scope="col">{{$section['medium']}}</td>
                    <td scope="col">{{$section['mediumId']}}</td>
                    <td scope="col">{{$section['groupName']}}</td>
                    <td scope="col">{{$section['groupId']}}</td>
                    <td scope="col">{{$section['created_at']}}</td>
                    <td scope="col">{{$section['updated_at']}}</td>
                    <td scope="col">
                        <a href={{route('admin.goToCourse',$section->id)}}"" class="btn btn-info"><font color="white">Select</font></a><br>
                    </td>
                @endif

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
