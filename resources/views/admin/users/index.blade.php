@extends('admin.layout.base')

@section('title', ' All Users')

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">

            <h3 class="kt-portlet__head-title">
            All Users
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                    <div class="dropdown dropdown-inline">


                    </div>
                    &nbsp;
                    <a href="{{route('admin.user.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                        <i class="la la-plus"></i>
                        New User
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
                <tr>
                    <th>Record ID</th>
                    <th>Name</th>
                    <th>Email</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        @foreach($users as $index=>$user)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                    <td >
            <form action="{{route('admin.user.destroy',$user->id)}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">


                <a href="{{route('admin.user.edit',$user->id)}}" class="btn btn-info" ><i class="fa fa-edit"></i>  </a>




            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i>  </button>
            </form>
            </td>
                </tr>
        @endforeach
            </tbody>
        </table>

        <!--end: Datatable -->
    </div>
</div>
</div>


@endsection
