@extends('template.'.$template.'.sylhet')

@section('title', $panel_name)

@section('content')  
  
	<div class="apland-blog-area section-padding-130">
		<div class="container">
			<div class="row justify-content-between g-5">
				<x-apland_v512.sidebar-backend active="{{$panel_name}}" />
				<div class="col-12 col-md-9">  
					<table class="table table-striped table-hover">
						<thead>
							<tr> 
								<th scope="col">
									# 	
								</th>
								<th scope="col">
									Pengirim
								</th>  
								<th scope="col">
									Penerima
								</th>   
								<th scope="col">
									Status
								</th> 
								<th scope="col"> 
								</th>     
							</tr>
						</thead>
						<tbody> 
							@forelse ($data as $row)
								<tr>
									<td>
										{{$row->id}}
									</td>
									<td>  
										{{$row->nama_pengirim}}<br/>
										{{$row->alamat_pengirim}}<br/>
										{{$row->provinsi_pengirim}}<br/>
										{{$row->kota_pengirim}}<br/>
										{{$row->kecamatan_pengirim}}<br/>
										{{$row->kelurahan_pengirim}}
									</td>
									<td>
										{{$row->nama_penerima}}<br/>
										{{$row->alamat_penerima}}<br/>
										{{$row->provinsi_penerima}}<br/>
										{{$row->kota_penerima}}<br/>
										{{$row->kecamatan_penerima}}<br/>
										{{$row->kelurahan_penerima}}
									</td>  
									<td>
										@if($row->is_approval == 0 )
											Menunggu Penyelesaian Order
										@elseif($row->is_approval == 1 )
											Menunggu Persetujuan
										@endif 
									</td>
									<td> 
										@if($row->is_approval == 0 )
											<x-bootstrap_v513.button-dropdown-action route="{!!$content!!}" id="{!!$row->id!!}"/> 
										@elseif($row->is_approval == 1 ) 

										@endif 
										
									</td>
								</tr> 
							@empty
								<tr class="text-center"> 
									<x-message.tr-no-record-data col="7" />   
								</tr>
							@endforelse
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
   
@endsection