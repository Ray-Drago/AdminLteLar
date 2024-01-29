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
                            <a class="nav-link text-light" href="#">TernsAndConditions</a>
                            </li>
                        </ul>
                        </nav>
                        <div class="container">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Version Name</th>
                                    <th>Version Detail</th>
                                    <th>User Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($termsAndConditions as $terms)

                                        <tr>
                                            <th>{{$terms->id}}</th>
                                            <th>{{$terms->version_name}}</th>
                                            <th>{{$terms->version_details}}</th>
                                            <th>{{$terms->user_type}}</th>

                                        <td>
                                            <a href="{{'/term-edit/'.$terms->id}}" class="btn btn-sm btn-info">Edit</a>

                                            <form method="POST" action="{{'/term-del/'.$terms->id}}" class="d-inline">
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