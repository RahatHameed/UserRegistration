@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('postStepThree') }}" method="POST">
                @csrf
  
                <div class="card">
                    <div class="card-header">Step 2: Payment Information</div>
  
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
                                <label for="owner">Account Owner<span style="color:red">*</span>:</label>
                                <input type="text" value="{{ old('owner', $customer->owner) }}" class="form-control" id="owner"  name="owner">
                            </div>
                            <div class="form-group">
                                <label for="iban">IBAN<span style="color:red">*</span>:</label>
                                <input type="text"  value="{{ old('iban', $customer->iban) }}" class="form-control" id="iban" name="iban"/>
                            </div>                           
                          
                    </div>
  
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-start">
                                <a href="{{ route('createStepTwo') }}" class="btn btn-danger pull-right">Previous</a>
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