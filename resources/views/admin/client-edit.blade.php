@extends('layouts.app')
@include('layouts.sidebar')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Client-Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Client </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form id="quickForm" method="post" action="{{ route('client-update', ['id' => $clients->id]) }}">


                @csrf
                @method('PUT')
                
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{($clients->name)}}"  id="name" name="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{($clients->email)}}" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{($clients->phone)}}" id="phone" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" value="{{($clients->password)}}" id="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="whatsapp">WhatsApp</label>
                    <input type="text" name="whatsapp" class="form-control" value="{{($clients->whatsapp)}}" id="whatsapp" placeholder="WhatsApp">
                  </div>
                  <div class="form-group">
                    <label for="occupation">Occupation</label>
                    <input type="text" name="occupation" class="form-control" value="{{($clients->occupation)}}" id="occupation" placeholder="Occupation">
                  </div>
                  <div class="form-group">
                    <label for="companyname">Company Name</label>
                    <input type="text" name="companyname" class="form-control" value="{{($clients->companyname)}}" id="companyname" placeholder="Company Name">
                  </div>
                  
                  <div class="form-group">
                    <label for="terms_and_conditions_id">Terms and Conditions ID</label>
                    <input type="text" name="terms_and_conditions_id" class="form-control" value="{{($clients->terms_and_conditions_id)}}"  id="terms_and_conditions_id" placeholder="Terms and Conditions ID">
                  </div>
                  <div class="form-group">
                    <label for="accepted_time">Accepted Time</label>
                    <input type="text" name="accepted_time" class="form-control" alue="{{($clients->accepted_time)}}" id="accepted_time" placeholder="Accepted Time">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>


            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection