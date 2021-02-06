<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/adminClass.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>
<body>

<div id="particles-js">

</div>
<div class="container">
    {{--edit data modal--}}

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reviewing application id {{$application['id']}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="reviewStudentApplication" method="POST" >

                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <input type="hidden" name="id" id="edit-fname" value="{{$application['id']}}" class="form-control" placeholder="Enter first name">

                    </div>

                    <div class="mb-3">
                        <label>Application Status</label>
                        <select name="search_option" class="form-select" aria-label="Default select example">
                            <option value="Not Viwed" selected>Not Viwed</option>
                            <option value="Approved" selected>Approved</option>
                            <option value="Rejected" selected>Rejected</option>
                            <option value="See comment" selected>See Comment</option>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label>Comment</label>
                        <input type="text" name="comment" id="edit-mobile"  class="form-control" placeholder="Enter comment">

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update decision</button>
                </div>
            </form>
        </div>
    </div>

    {{--end edit data modal--}}

</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>

</body>
</html>
