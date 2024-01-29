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
            <h1>Staff Validation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Validation</li>
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
                <h3 class="card-title">Staff </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post" action="{{('staff-add')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  </div>
                  <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="whatsapp">WhatsApp</label>
                    <input type="text" name="whatsapp" class="form-control" id="whatsapp" placeholder="WhatsApp">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" name="nationality" class="form-control" id="nationality" placeholder="Nationality">
                  </div>
                  <div class="form-group">
                    <label for="language_speak">Language Speak</label>
                    <input type="text" name="language_speak" class="form-control" id="language_speak" placeholder="Language Speak">
                  </div>
                  <div class="form-group">
                    <label for="dob">DOB</label>
                    <input type="text" name="dob" class="form-control" id="dob" placeholder="DOB">
                  </div>
                  <div class="form-group">
                    <label for="highest_education">Highest Education</label>
                    <input type="text" name="highest_education" class="form-control" id="highest_education" placeholder="Highest_education">
                  </div>
                  <div class="form-group">
                         <label for="documentation">Documentation</label>
                        <select name="documentation" class="form-control" id="documentation">
                       <option value="1">Yes</option>
                       <option value="0">No</option>
                      </select>
                   </div>
                   <div class="form-group">
                    <label for="Experience">Experience</label>
                    <input type="text" name="experience" class="form-control" id="experience" placeholder="Experience">
                  </div>
                  <div class="form-group">
                    <label for="terms_and_conditions_id">Terms and Conditions ID</label>
                    <input type="text" name="terms_and_conditions_id" class="form-control" id="terms_and_conditions_id" placeholder="Terms and Conditions ID">
                  </div>
                  <div class="form-group">
                    <label for="accepted_time">Accepted Time</label>
                    <input type="text" name="accepted_time" class="form-control" id="accepted_time" placeholder="Accepted Time">
                  </div>
                  <div class="form-group">
             
    </div>
</div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

              @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


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
