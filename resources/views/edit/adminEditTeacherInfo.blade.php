<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Admin Class</title>
    <link rel="stylesheet" href="/css/adminClass.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>


<div id="particles-js">

</div>
<div id="container">
    {{--add data modal--}}

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editing Teacher in school {{$teacher->id}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="editTeacherInfo" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <input type="hidden" name="teacherId" value="{{$teacher->id}}" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="teacherName" value="{{$teacher->name}}" class="form-control" placeholder="Enter name">

                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" name="email" value="{{$teacher->email}}" class="form-control" placeholder="Enter section name">

                        </div>
                        <div class="mb-3">
                            <label>Education</label>
                            <input type="text" name="education" value="{{$teacher->educational_qualification}}" class="form-control" placeholder="Enter section name">

                        </div>
                        <div class="mb-3">
                            <label>Experience</label>
                            <input type="text" name="experience" value="{{$teacher->experiences}}" class="form-control" placeholder="Enter section name">

                        </div>
                        <div class="mb-3">
                            <label>Hobby</label>
                            <input type="text" name="hobby" value="{{$teacher->hobby}}" class="form-control" placeholder="Enter section name">

                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="address" value="{{$teacher->address}}" class="form-control" placeholder="Enter section name">

                        </div>
                        <div class="mb-3">
                            <label>Contact1</label>
                            <input type="text" name="contact" value="{{$teacher->contact}}" class="form-control" placeholder="Enter section name">

                        </div>
                        <div class="mb-3">
                            <label>Contact2</label>
                            <input type="text" name="optional_contact" value="{{$teacher->optional_contact}}" class="form-control" placeholder="Enter section name">

                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save data</button>
                        </div>
            </form>
        </div>
    </div>
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
