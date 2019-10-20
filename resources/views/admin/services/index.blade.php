@extends('admin.layout.base')

@section('title', ' All Service')

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">

										<h3 class="kt-portlet__head-title">
										All Service
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">

											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">
@if(count($services) > 0)
									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr>
												<th>Record ID</th>
												<th>Name</th>

												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
                                    @foreach($services as $index=>$service)
											<tr>
												<td>{{$index+1}}</td>
												<td>{{$service->name}}</td>


												<td >
                                <form action="{{route('admin.services.destroy',$service->id)}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">


                                 <a href="{{route('admin.services.edit',$service->id)}}" class="btn btn-info" ><i class="fa fa-edit"></i>  </a>



                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i>  </button>
                               </form>
                                        </td>
											</tr>
                                    @endforeach
										</tbody>
									</table>
                                   @else
                                <h2 style="text-align:center;">No Result Founded</h2>
                                    @endif

									<!--end: Datatable -->
								</div>
							</div>
						</div>


@endsection
