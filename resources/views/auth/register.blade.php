@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Register</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                          
                                <div class="form-group row ">   
                                  
                                    <div class="col-sm-12">
                                    <label class="col-form-label text-md-right ">Name</label>
                                            <input type="text" class="form-control" name="name" required >
                                    </div>
                                </div>
                                <div class="form-group row ">
                                 
                                    <div class="col-sm-12">
                                    <label class="col-form-label text-md-right ">Email</label><br>
                                       <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" oninput="updateRadio()" required>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                  
                                    <div class="col-sm-12">
                                    <label class="col-form-label text-md-right ">Password(Minimum 6 characters)</label><br>
                                       <input id="password" class="form-control" type="password" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-sm-12 ">
                                    <label class="col-form-label text-md-right "> Confirm Password</label><br>
                                       <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
                                    </div>
                                </div>
                              
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
    </div>
@endsection


  