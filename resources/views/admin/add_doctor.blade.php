<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        label {
            display: inline-block;
            width: 150px;
        }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-top:100px">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-bs-dismiss="alert">
                        X
                    </button>
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px">
                        <label>Doctor Name</label>
                        <input type="text" style="color:black" name="name" placeholder="Write the name" required>
                    </div>
                    <div style="padding:15px">
                        <label>Phone</label>
                        <input type="number" style="color:black" name="number" placeholder="Write the number" required>
                    </div>
                    <div style="padding:15px">
                        <label>Speciality</label>
                        <select name="speciality" style="color:black; width:200px">
                            <option value="">--Select--</option>
                            <option value="skin">skin</option>
                            <option value="heart">heart</option>
                            <option value="eyes">eyes</option>
                            <option value="nose">nose</option>
                        </select>
                    </div>
                    <div style="padding:15px">
                        <label>Room No</label>
                        <input type="text" style="color:black" name="room" placeholder="Write the room number" required>
                    </div>
                    <div style="padding:15px">
                        <label>Doctor Image</label>
                        <input type="file" name="file" required>
                    </div>
                    <div style="padding:15px">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
</body>

</html>
