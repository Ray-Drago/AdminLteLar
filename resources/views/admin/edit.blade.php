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
              <li class="breadcrumb-item active">Validation</li>
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
                <h3 class="card-title">TermsAndCondition </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form id="quickForm" method="post" action="{{ route('term-update', ['id' => $termsAndConditions->id]) }}">


                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="version_name ">Version Name</label>
                    <input type="text"  class="form-control" value="{{($termsAndConditions->version_name)}}" id="version_name "  name="version_name" placeholder="version_name ">
                  </div>
                  <div class="form-group">
                    <label for="version_details">Version Detail</label>
                    <input type="text" name="version_details" value="{{($termsAndConditions->version_details)}}" class="form-control" id="version_details" placeholder="version_details">
                  </div>
                  <div class="form-group">
                    <label for="user_type">User Type</label>
                    <input type="text" name="user_type"  value="{{($termsAndConditions->user_type)}}" class="form-control" id="user_type" placeholder="user_type">
                  </div>
                  <div class="form-group mb-0">
                    
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