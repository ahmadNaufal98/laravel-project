<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top:100px">
                <table>
                    <tr style="background-color:black">
                        <th style="padding:10px">Customer Name</th>
                        <th style="padding:10px">Email</th>
                        <th style="padding:10px">Phone</th>
                        <th style="padding:10px">Doctor Name</th>
                        <th style="padding:10px">Date</th>
                        <th style="padding:10px">Message</th>
                        <th style="padding:10px">Status</th>
                    </tr>
                    @foreach ($data as $appoint)
                    <tr align="center" style="background-color:skyblue">
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->massege}}</td>
                        <td>{{$appoint->status}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div> <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
