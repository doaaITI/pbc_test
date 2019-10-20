@extends('admin.layout.base')

@section('title', ' Add User')

@section('content')

    <div class="container">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Add New User
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form p-4" action="{{url('admin/user/store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control"  required placeholder="Enter Name">

                </div>

                <div class="form-group">
                    <label>Select Type</label>
                    <div></div>
                    <select class="custom-select form-control" required name="type_id">

                      @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Select Club</label>
                    <div></div>
                    <select class="custom-select form-control" required name="club_id">

                      @foreach($clubs as $club)
                        <option value="{{$club->id}}">{{$club->name}}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" require>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" required class="form-control" id="exampleInputPassword1"
                           placeholder="Password">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="password_confirmation" required class="form-control"
                           id="exampleInputPassword1" placeholder="Password">
                </div>


                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>

    </div>
@endsection
