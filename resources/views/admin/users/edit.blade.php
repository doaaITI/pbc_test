@extends('admin.layout.base')

@section('title', ' Add User')

@section('content')

    <div class="container">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                       Edit User
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form p-4" action="{{url('admin/user/update',$user->id)}}" method="POST">
            <input type="hidden" name="_method" value="PATCH">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control"  required placeholder="Enter Name">

                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{$user->email}}"class="form-control" required>

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
