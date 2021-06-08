@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($user as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->email}}</td>
      <td>
      @if($row->Userisonline())
      <li class="text-success">online</li>  
      @else
       <li class="text-danger">offline</li>
      @endif
      </td>
    </tr>
     @endforeach
  </tbody>
</table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
