@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('postStepOne') }}" method="POST">
                @csrf
  
                <div class="card">
                    <div class="card-header">Step 1: Personal Information</div>
  
                    <div class="card-body">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
  
                            <div class="form-group">
                                <label for="firstName">First Name<span style="color:red">*</span>:</label>
                                <input type="text" value="{{ old('firstName', $customer->firstName) }}" class="form-control" id="firstName"  name="firstName">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name<span style="color:red">*</span>:</label>
                                <input type="text"  value="{{ old('lastName', $customer->lastName) }}" class="form-control" id="lastName" name="lastName"/>
                            </div>

                            <div class="form-group">
                                <label for="telephone">Telephone<span style="color:red">*</span>:</label>
                                <input type="text"  value="{{  old('telephone', $customer->telephone) }}" class="form-control" id="telephone" name="telephone"/>
                            </div>                            
                          
                    </div>
  
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection