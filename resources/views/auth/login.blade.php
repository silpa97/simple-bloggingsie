@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Login</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="login-form">
                             @csrf
                             <div class="form-group row ">
                                 
                                    <div class="col-sm-12">
                                    <label class="col-form-label text-md-right ">Email</label><br>
                                       <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}"  required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                 
                                 <div class="col-sm-12">
                                 <label class="col-form-label text-md-right ">Password</label><br>
                                    <input id="password" class="form-control" type="password" name="password"  required autocomplete="current-password">
                                 </div>
                             </div>      
       
                                
                              
            <div class="flex items-center justify-end mt-4">
                
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                   Signup
                </a>
                <button type="submit" class="btn btn-primary">Login</button>
           
        </div>
                            </form>
    </div>
@endsection
                     
