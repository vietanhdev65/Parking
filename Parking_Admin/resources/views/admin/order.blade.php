@extends('admin.masteradmin')
@section('content')
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- END OVERVIEW -->
					<div class="row">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"></h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											@foreach($order as $item)
											<tr>
												<th>No.</th>
												<th>Khách Hàng</th>
												<th>Số điện thoại</th>
												<th>Biển số xe</th>
												<th>Bãi đỗ</th>												
												<th>Giờ đến</th>
												<th>Giờ đi</th>
												<th>Tiền</th>
												<th>Trạng thái</th>
											</tr>
											@endforeach
										</thead>
										<tbody>
											<tr>
												<td>{!! $item->id !!}</td>
												<td>{!! $item->FullName !!}</td>
												<td>{!! $item->PhoneNumber !!}</td>
												<td>{!! $item->MarineNumber !!}</td>
												<td>{!! $item->place !!}</td>
												<td>{!! $item->TimeIn !!}</td>
												<td>{!! $item->TimeOut !!}</td>
												<td>{!! $item->price !!}</td>
												<td>@if($item->status == 1 )
													<a href="{{route('status',$item->id)}}" title="" class="btn btn-primary" >Chưa thanh toán</a>
													@else 													
													<input type="button" name="status" class="btn btn-primary" value="Đã thanh toán">
													@endif
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							
						</div>
					</div>
				
			<!-- END MAIN CONTENT -->
		<!-- END MAIN -->
@endsection