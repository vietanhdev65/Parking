@extends('admin.masteradmin')
@section('content')
		<!-- END LEFT SIDEBAR -->

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
											<tr>
												<th>No.</th>
												<th>Địa chỉ</th>
												<th>Host</th>
												<th>Mở cửa</th>
												<th>Đống cửa</th>
												<th>Địa chỉ</th>
												<th>Giá</th>
											</tr>
										</thead>
										<tbody>
											@foreach($list as $item) 
											<tr>
												<td>{!! $item->id !!}</td>
												<td>{!! $item->place !!}</td>
												<td>{!! $item->host !!}</td>
												<td>{!! $item->timeStart !!}</td>
												<td>{!! $item->timeEnd !!}</td>
												<td>{!! $item->location !!}</td>
												<td>{!! $item->price !!}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									</div>
									<div class="row text-right">
									<div class="col-md-11">
											{{ $list->render('admin.paginate') }}
						            </div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>

			<!-- <script type="text/javascript">
            function update(id){
                var name = $("#name"+id).html();
                var price = $("#price"+id).html();
                var type = $("#type"+id).html();
                var quantity = $("#quantity"+id).html();
                // var description = $("#des"+id).html();
                console.log(name);
                console.log(price);
                console.log(type);
                console.log(quantity);
                $.ajax({
                    url: '{{URL::to("/editProduct")}}',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'GET',
                    data: {
                        name: name,
                        price: price,
                        type: type,
                        quantity: quantity,
                        // description: description,
                        id: id,
                        _token: $('#signup-token').val(),
                    },
                })
                
                
            }
        	</script>
 -->
				
			<!-- END MAIN CONTENT -->
		<!-- END MAIN -->
@endsection