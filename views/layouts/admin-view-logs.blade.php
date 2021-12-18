@extends('layouts.main')
@section('content')

    {{--<div class="container mt-sm-5 p-5 mb-5  padding" style="background-color: rgba(12, 163, 223, 0.3); border-radius: 5px">--}}
        {{--<h4 class="pb-4 border-bottom">AdminsView Log</h4>--}}
        {{--<div class="d-flex justify-content-center py-3">--}}
            {{--<div>--}}
                {{--<table id="example" class="display" style="width:100%">--}}
                    {{--<thead>--}}

                    {{--<tr>--}}
                        {{--<th>First name</th>--}}
                        {{--<th>Last name</th>--}}
                        {{--<th>Address</th>--}}
                        {{--<th>Phone</th>--}}
                        {{--<th>email</th>--}}
                        {{--<th>Date created</th>--}}
                        {{--<th>Last update</th>--}}
                        {{--<th>Option</th>--}}

                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
{{--@foreach($users as $user)--}}
                    {{--<tr>--}}
                        {{--<td>{{$user->name}}</td>--}}
                        {{--<td>{{$user->lname}}</td>--}}
                        {{--<td>Secret</td>--}}
                        {{--<td>{{$user->phonenumber}}</td>--}}
                        {{--<td>{{$user->email}}</td>--}}
                        {{--<td>{{$user->created_at}}</td>--}}
                        {{--<td>{{$user->updated_at}}</td>--}}
                        {{--<td><a href="{{route('users.edit',$user)}}" >Edit </a></td>--}}

                    {{--</tr>--}}
{{--@endforeach--}}
                {{--</table>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="py-2 d-flex justify-content-center border-bottom">--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="wrappercon container container-fluid">--}}
        {{--<!-- heading -->--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="col">--}}
                    {{--<h1 class="text-primary mr-auto">Registered list</h1>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- /heading -->
        <!-- table -->
<div class="container pt-5">
    <h4 class="pb-4 border-bottom">Registered List</h4>
    <div class="row">
        <div class="col-lg-12">
        <table class="table table-striped table-bordered display nowrap" cellspacing="0" id="example" >
            <thead>
            <tr >
                <th data-priority="1">First name</th>
                <th>Last name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Province</th>
                <th>City</th>
                <th>Barangay</th>
                <th>Option</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $userinfo)
                <tr >
                    <td class="align-middle ">{{$userinfo->name}}</td>
                    <td class="align-middle ">{{$userinfo->lname}}</td>
                    <td class="align-middle ">{{$userinfo->phonenumber}}</td>
                    <td class="align-middle ">{{$userinfo->email}}</td>
                    <td class="align-middle ">{{$userinfo->province}}</td>
                    <td class="align-middle ">{{$userinfo->city}}</td>
                    <td class="align-middle ">{{$userinfo->barangay}}</td>
                    <td class="align-middle">
                        <a href="{{route('users.edit', $userinfo)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('users.show', $userinfo)}}" class="btn danger">Delete</a>
                    </td>

                    {{--<button type="button" class="btn btn-success" id="edit-item" data-item-id="1">edit</button>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
   </div>

        <!-- /table -->
    {{--</div>--}}
    {{--<!-- Attachment Modal -->--}}
    {{--<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">--}}
        {{--<div class="modal-dialog modal-lg" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<h5 class="modal-title" id="edit-modal-label">Edit Data</h5>--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body" id="attachment-body-content">--}}
                    {{--<form id="edit-form" class="form-horizontal" method="POST" action="{{route('users.store')}}">--}}
                        {{--@csrf--}}
                        {{--<div class="card text-white bg-dark mb-0">--}}
                            {{--<div class="card-header">--}}
                                {{--<h2 class="m-0">Edit</h2>--}}
                            {{--</div>--}}
                            {{--<div class="card-body">--}}
                                {{--<!-- id -->--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-form-label" for="modal-input-id">First Name</label>--}}
                                    {{--<input type="text" name="modal-input-id" class="form-control" id="modal-input-id" required>--}}
                                {{--</div>--}}
                                {{--<!-- /id -->--}}
                                {{--<!-- name -->--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-form-label" for="modal-input-name">Last Name</label>--}}
                                    {{--<input type="text" name="modal-input-name" class="form-control" id="" value="{{$user->lname}}" required autofocus>--}}
                                {{--</div>--}}
                                {{--<!-- /name -->--}}
                                {{--<!-- description -->--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-form-label" for="modal-input-description">Email</label>--}}
                                    {{--<input type="text" name="modal-input-description" class="form-control" id="modal-input-description" required>--}}
                                {{--</div>--}}
                                {{--<!-- /description -->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>--}}
                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /Attachment Modal -->--}}

@endsection