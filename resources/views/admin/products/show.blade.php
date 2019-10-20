@extends('admin.layout.base')

@section('title', ' All Options')

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">

										<h3 class="kt-portlet__head-title">
										All Options for Product
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
											 <div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="la la-download"></i> Export
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">Choose an option</span>
															</li>


															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-text-o"></i>
																	<span class="kt-nav__link-text">CSV</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																	<span class="kt-nav__link-text">PDF</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
												&nbsp;

											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">
                                  @if(count($options) > 0)
									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr>
												<th>Record ID</th>
												<th>Name of Option</th>
												<th>Title</th>
                                                <th>Price</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
                                    @foreach($options as $index=>$option)
											<tr>
												<td>{{$index+1}}</td>
												<td>{{$option->product_option_name}}</td>
                                                <td>{{$option->title}}</td>
                                                <td>{{$option->price}}</td>

												<td >

                                <a href="{{route('admin.option.destroy',$option->id)}}"  onclick="return confirm('Are you sure?')" class="btn btn-danger" ><i class="fa fa-trash"></i>  </a>


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
