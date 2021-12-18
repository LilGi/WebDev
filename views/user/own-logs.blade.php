@extends('layouts.main')
@section('content')
    <div class="container pt-5">
        <h4 class="pb-4 border-bottom">UsersView Log</h4>
        <div class="d-flex justify-content-center py-3">
            <div>
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                    <tr>
                        <th>Time in</th>
                        <th>Time out</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        <td>10:00 am</td>
                        <td>10:00 pm</td>
                        <td>12/10/2021</td>
                    </tr>
                    <tr>

                        <td>11:00 am</td>
                        <td>11:00 pm</td>
                        <td>12/13/2021</td>
                    </tr>
                    <tr>

                        <td>12:00 am</td>
                        <td>12:00 pm</td>
                        <td>12/11/2021</td>
                    </tr>
                    <tr>

                        <td>1:00 am</td>
                        <td>1:00 pm</td>
                        <td>12/19/2021</td>
                    </tr>
                    <tr>
                        <td>2:00 am</td>
                        <td>2:00 pm</td>
                        <td>12/11/2021</td>
                    </tr>
                </table>
            </div>
        </div>

            <div class="py-2 d-flex justify-content-center border-bottom">
            </div>
        </div>
    </div>
@endsection