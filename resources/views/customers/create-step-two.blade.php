@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('postStepTwo') }}" method="POST">
                @csrf
  
                <div class="card">
                    <div class="card-header">Step 2: Address Information</div>
  
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
                                <label for="streetNo">Street No<span style="color:red">*</span>:</label>
                                <input type="text" value="{{ old('streetNo', $customer->streetNo) }}" class="form-control" id="streetNo"  name="streetNo">
                            </div>
                            <div class="form-group">
                                <label for="houseNo">House No<span style="color:red">*</span>:</label>
                                <input type="text"  value="{{ old('houseNo', $customer->houseNo) }}" class="form-control" id="houseNo" name="houseNo"/>
                            </div>

                            <div class="form-group">
                                <label for="zipcode">Zipcode:</label>
                                <input type="text"  value="{{  old('zipcode', $customer->zipcode) }}" class="form-control" id="zipcode" name="zipcode"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="city">City:</label>
                                <input type="text"  value="{{  old('city', $customer->city) }}" class="form-control" id="city" name="city"/>
                            </div>                            
                          
                    </div>
  
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-start">
                                <a href="{{ route('createStepOne') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-end">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection