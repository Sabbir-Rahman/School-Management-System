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

{{--delete modal--}}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete this entry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="deleteStudent" method="POST">

                {{csrf_field()}}
                <div class="modal-body">

                    <div class="mb-3">
                        <label><font color="red">Are you sure?All data related with this record also be deleted</font></label>
                        <input type="hidden" name="delete_input_id" id="cat_id" value="">

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="particles-js">

</div>
<div id="container">
    <h3><font color="white">Student Info Table</font></h3>
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
            <form action="searchStudent" method="POST" class="d-flex">
                @csrf
                <h6><font color="#dcdcdc">Search By:</font></h6>&nbsp&nbsp
                <select name="search_option" class="form-select" aria-label="Default select example">
                    <option value="name" selected>Name</option>
                    <option value="student_birthdate">Birthdate</option>
                    <option value="student_blood_group">Blood Group</option>
                    <option value="student_address">Address</option>
                    <option value="student_gender">Gender</option>
                    <option value="student_school_branch">Branch</option>
                    <option value="student_class">Class</option>
                    <option value="student_shift">Shift</option>
                    <option value="student_section">Section</option>
                    <option value="student_medium">Medium</option>
                    <option value="student_group">Group</option>
                    <option value="student_religion">Religion</option>
                    <option value="student_admission_year">Admission year</option>
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
        <th scope="col">Birthdate</th>
        <th scope="col">Blood Group</th>
        <th scope="col">Address</th>
        <th scope="col">Gender</th>
        <th scope="col">Branch</th>
        <th scope="col">Class</th>
        <th scope="col">Shift</th>
        <th scope="col">Section</th>
        <th scope="col">Medium</th>
        <th scope="col">Group</th>
        <th scope="col">Religion</th>
        <th scope="col">Admission year</th>
        <th scope="col">Hobby</th>
        <th scope="col">Comment</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
        <th scope="col">Action</th>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td scope="col">{{$student['id']}}</td>
                <td scope="col">{{$student['name']}}</td>
                <td scope="col">{{$student['student_birthdate']}}</td>
                <td scope="col">{{$student['student_blood_group']}}</td>
                <td scope="col">{{$student['student_address']}}</td>
                <td scope="col">{{$student['student_gender']}}</td>
                <td scope="col">{{$student['student_school_branch']}}</td>
                <td scope="col">{{$student['student_class']}}</td>
                <td scope="col">{{$student['student_shift']}}</td>
                <td scope="col">{{$student['student_section']}}</td>
                <td scope="col">{{$student['student_medium']}}</td>
                <td scope="col">{{$student['student_group']}}</td>
                <td scope="col">{{$student['student_religion']}}</td>
                <td scope="col">{{$student['student_admission_year']}}</td>
                <td scope="col">{{$student['student_hobby']}}</td>
                <td scope="col">{{$student['comment']}}</td>
                <td scope="col">{{$student['created_at']}}</td>
                <td scope="col">{{$student['updated_at']}}</td>
                <td scope="row">
                    <a href="{{route('admin.goEditStudent', $student->id)}}" class="btn btn-primary">EDIT</a><br><br>
                    <button type="button" class="btn btn-danger" data-catid="{{$student->id}}" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Delete
                    </button>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript" src="/js/particles.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>

<script>
    $('#deleteModal').on('show.bs.modal', function (event){
        var button = $(event.relatedTarget)

        var cat_id = button.data('catid')
        var modal = $('#deleteModal')

        console.log(cat_id)
        modal.find('.modal-body input').val(cat_id);
    })

</script>
</body>
</html>

