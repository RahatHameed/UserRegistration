@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header">Success Page</div>
                  
                <div class="card-body">
                    @if($status =='success')
                        <p class="text-primary">{{ $message }}</p>
                        <p class="text-dark">{{ $data}}</p>
                    @else
                        <p class="text-danger">{{ $message }}</p>    
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection