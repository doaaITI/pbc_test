@extends('admin.layout.base')

@section('title', ' All Categories')

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">

										<h3 class="kt-portlet__head-title">
										All Categories
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">

												&nbsp;
												<a href="{{route('admin.category.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-plus"></i>
													New Category
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">
@if(count($categories) > 0)
									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr>
												<th>Record ID</th>
												<th>Name</th>
												<th>Type</th>

												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
                                    @foreach($categories as $index=>$category)
											<tr>
												<td>{{$index+1}}</td>
												<td>{{$category->Name}}</td>
												<td>{{$category->type}}</td>

												<td >
                                <form action="{{route('admin.category.destroy',$category->id)}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">


                                 <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-info" ><i class="fa fa-edit"></i>  </a>



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
