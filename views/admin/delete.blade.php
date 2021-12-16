@extends('layouts.main')

@section('content')

    <form action="{{route('users.destroy', $user)}}" method="post" >
        @csrf
        {{method_field('DELETE')}}
        <div class="wrapper mt-sm-5">
            <h4 class="pb-4 border-bottom">Are you sure you want to delete?  </h4>
            <h1 style="color: #fff">{{$user->name}}</h1>
            {{--<div>--}}
            {{--</div>--}}
            {{--<div class="py-2">--}}
                {{--<h4 style="font-size: revert">Name</h4>--}}
                {{--<div class="row py-2">--}}
                    {{--<div class="col-md-6">--}}

                        {{--<input id="name" class="bg-light form-control" type="text" name="name"  value="{{$user->name}}" />--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 pt-md-0 pt-3">--}}
                        {{--<input id="lname" class="bg-light form-control" type="text" name="lname"  value="{{$user->lname}}" />--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<h4 style="font-size: revert">Current Address</h4>--}}
                {{--<div class="row py-2">--}}
                    {{--<div class="col-md">--}}
                        {{--<input type="text" class="bg-light form-control" placeholder="Barangay">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row py-2">--}}
                    {{--<div class="col-md">--}}
                        {{--<input type="text" class="bg-light form-control" placeholder="City/Municipality">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row py-2">--}}
                    {{--<div class="col-md">--}}
                        {{--<label for="address">Province</label>--}}
                        {{--<input type="text" class="bg-light form-control" placeholder="Province">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<h4 style="font-size: revert">Contact Information</h4>--}}
                {{--<div class="row py-2">--}}
                    {{--<div class="col-md">--}}
                        {{--<input id="email" class="bg-light form-control" type="email" name="email"  placeholder="Email" value="{{$user->email}}" />--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row py-2">--}}
                    {{--<div class="col-md">--}}
                        {{--<label for="phone">Phone number</label>--}}

                        {{--<input id="phonenumber" class="bg-light form-control" type="tel" name="phonenumber" placeholder="Phone Number (e.g 0912-345-6789)" value="{{$user->phonenumber}}"/>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<h4 style="font-size: revert">Role</h4>--}}
                {{--<div class="row py-2">--}}
                {{--<div class="col-md">--}}

                {{--<div class="arrow">--}}
                {{--<select name="role" id="role" class="bg-light" onchange='Roles(this.value);'>--}}
                {{--<option value="curent" selected >Select current role</option>--}}
                {{--<option value="student">Student</option>--}}
                {{--<option value="teacher">Teacher</option>--}}
                {{--<option value="visitor">Visitor</option>--}}
                {{--</select>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row py-2">--}}
                {{--<div class="col-md">--}}
                {{--<!-- --}}{{--<label for="idnumber"><span class="clue"></span></label>--}}{{-- -->--}}
                {{--<input type="text" name="student" id="idnumber" class="bg light form-control"  style='display:none;' placeholder="Please fill this field" >--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="py-3 pb-4 border-bottom">

                    <button type="submit" value="submit" class="btn btn-success ">Yes</button>
                    <a href="{{ url()->previous() }}" class="btn btn-light">No</a>
                </div>

            </div>

        </div>
    </form>

@endsection


{{--<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
