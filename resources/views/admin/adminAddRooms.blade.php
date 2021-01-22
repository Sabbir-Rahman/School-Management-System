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
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="addRooms" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label>Room No</label>
                        <input type="number" name="roomNo" class="form-control" placeholder="Enter room no">

                    </div>
                    <div class="mb-3">
                        <label>Student Capacity</label>
                        <input type="number" name="studentCapacity" class="form-control"
                               placeholder="Enter student capacity">

                    </div>
                    <div class="mb-3">
                        <label>Enter building name</label>
                        <select name="search_option" class="form-select" aria-label="Default select example">
                            @foreach($buildings as $building)
                            <option value="buildingName" selected>{{$building['name']}}</option>
                            @endforeach
                        </select>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </form>
        </div>
    </div>

    {{--end add data modal--}}


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

