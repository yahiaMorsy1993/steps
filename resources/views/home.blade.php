@extends('layouts.app')

@section('content')
<form action=" {{url('saved')}} " method="POST" class="form-horizontal validationEngineContainer" enctype="multipart/form-data" id="subscribe" >
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group">
          <h1><label class="badge badge-secondary">Personal Informations </label></h1>
          <h4><label class="badge badge-danger">All Fields With ( * ) Are Required </label></h4>
        </div>

          <div class="form-group">
              <label  class="col-sm-3 control-label ">Full Name *</label>
              <div class="col-sm-7">
                  <input type="text"  name="name" id="name" class="form-control validate[required]">

              </div>
          </div>

          <div class="form-group">
                <label  class="col-sm-3 control-label ">position *</label>

                <div class="col-sm-7">
                    <input type="text"  name="position" id="position" class="form-control validate[required]">
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label ">Office *</label>

                <div class="col-sm-7">
                    <input type="text"  name="office" id="office" class="form-control validate[required]">
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label ">Age *</label>

                <div class="col-sm-7">
                    <input type="text"  name="age" id="age" class="form-control validate[required]">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label ">Salary *</label>

                <div class="col-sm-7">
                    <input type="text"  name="salary" id="salary" class="form-control validate[required]">
                </div>
            </div>

            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-dark btn btn-lg"> Save & Apply </button>

            </div>

            {{csrf_field()}}
            </form

@endsection
