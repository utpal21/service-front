@extends('layouts.customer')
@section('contant')
    <div class="container">
        <div class="row">
            <div class="col-7">
                {{-- start --}}     
                <h2>Profile information</h2><hr>                        
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <div class="row">
                                    <div class="col-12">
                                        @if ($errors->any())
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>
                                                            {{ $error }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        {{-- from start --}}
                                        <form action="{{ route('profile.update') }}" method="POST" role="form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name', auth()->user()->name) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>
                                                <div class="col-md-8">
                                                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0 mt-5">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                {{-- end --}}
            </div>
            <div class="col-5">
                    <div class="form-group">
                        <div style="height: 255px; width:205px;" class="rounded mx-auto d-block border border-dark">
                                @if (auth()->user()->image)
                                <img src="{{ asset(auth()->user()->image) }}" style="height: 250px; width:200px;" alt="Responsive image">
                            @endif
                        </div>
                    
            </div>

                <div class="form-group row">
                        <label for="profile_image" class="col-md-4 text-md-right">Profile Image</label>
                        <div class="col-md-8">
                            <input id="profile_image" type="file" class="form-control" name="profile_image">
                            @if (auth()->user()->image)
                               
                            @endif
                        </div>
                </div>

                {{-- <h5>Change password</h5><hr>
                <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">New Password</label>
                        <div class="col-md-8">
                            <input id="" type="password" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 col-form-label text-md-right">confirm pasword</label>
                        <div class="col-md-8">
                            <input id="" type="password" class="form-control" name="" value="" disabled>
                        </div>
                    </div> --}}

                {{-- from end --}}
                </form>
            </div>
        </div>
    </div>
@endsection
