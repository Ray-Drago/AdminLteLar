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
                <h3 class="card-title">Staff </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form id="quickForm" method="post" action="{{ route('staff-update', ['id' => $staffs->id]) }}" enctype="multipart/form-data">


                @csrf
                @method('PUT')
                
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{($staffs->name)}}" placeholder="Name">
                  </div>
                  <div class="form-group">
                   <label for="image">Image</label>
                    <input type="file" class="form-control" id="image"value="{{($staffs->image)}}"name="image">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{($staffs->address)}}" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{($staffs->phone)}}" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="{{($staffs->password)}}" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="whatsapp">WhatsApp</label>
                    <input type="text" name="whatsapp" class="form-control" id="whatsapp" value="{{($staffs->whatsapp)}}" placeholder="WhatsApp">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{($staffs->email)}}" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" name="nationality" class="form-control" id="nationality" value="{{($staffs->nationality)}}" placeholder="Nationality">
                  </div>
                  <div class="form-group">
                    <label for="language_speak">Language Speak</label>
                    <input type="text" name="language_speak" class="form-control" id="language_speak" value="{{($staffs->language_speak)}}" placeholder="Language Speak">
                  </div>
                  <div class="form-group">
                    <label for="dob">DOB</label>
                    <input type="text" name="dob" class="form-control" id="dob" value="{{($staffs->dob)}}"  placeholder="DOB">
                  </div>
                  <div class="form-group">
                    <label for="highest_education">Highest Education</label>
                    <input type="text" name="highest_education" class="form-control" id="highest_education" value="{{($staffs->highest_education)}}" placeholder="Highest_education">
                  </div>
                  <div class="form-group">
                         <label for="documentation">Documentation</label>
                        <select name="documentation" class="form-control"  id="documentation">
                       <option value="1">Yes</option>
                       <option value="0">No</option>
                      </select>
                   </div>
                   <div class="form-group">
                    <label for="Experience">Experience</label>
                    <input type="text" name="experience" class="form-control" id="experience"  value="{{($staffs->experience)}}" placeholder="Experience">
                  </div>
                  <div class="form-group">
                    <label for="terms_and_conditions_id">Terms and Conditions ID</label>
                    <input type="text" name="terms_and_conditions_id" class="form-control" value="{{($staffs->terms_and_conditions_id)}}" id="terms_and_conditions_id" placeholder="Terms and Conditions ID">
                  </div>
                  <div class="form-group">
                    <label for="accepted_time">Accepted Time</label>
                    <input type="text" name="accepted_time" class="form-control" value="{{($staffs->accepted_time)}}"  id="accepted_time" placeholder="Accepted Time">
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