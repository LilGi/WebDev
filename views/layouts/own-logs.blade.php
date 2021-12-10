@extends('layouts.main')
@section('content')
    <div class="wrapper mt-sm-5">
        <h4 class="pb-4 border-bottom">View Logs</h4>
        <div class="d-flex justify-content-center py-3">
            <div>
                <table id="data-table-basic" class="table table-striped" style="color: #fff;" >
                    <thead >
                    <tr>
                        <th style="font-weight: lighter">Date of Visit</th>
                        <th style="font-weight: lighter">Time In</th>
                        <th style="font-weight: lighter">Time out</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>12/12/20</td>
                        <td>10:30am</td>
                        <td>01:00pm</td>
                        <th></th>
                    </tr>
                    <tr>
                        <td>12/12/20</td>
                        <td>10:30am</td>
                        <td>01:00pm</td>
                        <th></th>
                    </tr>
                    <tr>
                        <td>12/12/20</td>
                        <td>10:30am</td>
                        <td>01:00pm</td>
                        <th></th>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

            <div class="py-2 d-flex justify-content-center border-bottom">
            </div>
        </div>
    </div>
@endsection