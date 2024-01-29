@extends('layouts.app')
@include('layouts.sidebar')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <!-- A grey horizontal navbar that becomes vertical on small screens -->
                        <nav class="navbar navbar-expand-sm bg-dark">
                        <!-- Links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link text-light" href="#">Client</a>
                            </li>
                        </ul>
                        </nav>
                        <div class="container">
                            <table class="table table-hover">
                            <thead>
                             <tr>
                              <th>S.No.</th>
                              <th>Name</th>
                             <th>Email</th>
                            <th>Phone</th>
                            <th>Password</th>
                            <th>WhatsApp</th>
                         <th>Occupation</th>
                         <th>Company Name</th>
                         <th>Terms and Conditions ID</th>
                          <th>Accepted Time</th>
                       <th>Action</th>
                        </tr>
                     </thead>

                                <tbody>
                                    @foreach($client as $clients)

                                        <tr>
                                            <th>{{$clients->id}}</th>
                                            <th>{{$clients->name }}</th>
                                            <th>{{$clients->email}}</th>
                                            <th>{{$clients->phone}}</th>
                                            <th>{{$clients->password}}</th>
                                            <th>{{$clients->whatsapp}}</th>
                                            <th>{{$clients->occupation}}</th>
                                            <th>{{$clients->companyname}}</th>
                                            <th>{{$clients->terms_and_conditions_id}}</th>
                                            <th>{{$clients->accepted_time}}</th>

                                        <td>
                                            <a href="{{'/client-edit/'.$clients->id}}" class="btn btn-sm btn-info">Edit</a>

                                            <form method="POST" action="{{'/client-del/'.$clients->id}}" class="d-inline">
                                            @csrf 
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-danger">Delete</button>

 
                                            </form>
                                            
                                            
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
    </section>
    <!-- /.content -->
</div>

@endsection