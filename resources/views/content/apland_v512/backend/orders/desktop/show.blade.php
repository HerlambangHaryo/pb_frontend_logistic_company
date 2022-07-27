@extends('template.'.$template.'.sylhet')

@section('title', $panel_name)

@section('content')  
  
	<div class="apland-blog-area section-padding-130">
		<div class="container">
			<div class="row justify-content-between g-5">
				<x-apland_v512.sidebar-backend active="{{$panel_name}}" />
				<div class="col-12 col-md-9">   
      
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-6">
                                    Data <b>Order</b> 
                                </div>
                                <div class="col-6 text-right">
                                    <span class=" pull-right">
                                        <b>Awb</b> : {{$Order->nama_pengirim}}
                                    </span> 
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12"> 
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
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <tr>
                                                <td>
                                                    {{$Order->id}}
                                                </td>
                                                <td>  
                                                    {{$Order->nama_pengirim}}<br/>
                                                    {{$Order->alamat_pengirim}}<br/>
                                                    {{$Order->provinsi_pengirim}}<br/>
                                                    {{$Order->kota_pengirim}}<br/>
                                                    {{$Order->kecamatan_pengirim}}<br/>
                                                    {{$Order->kelurahan_pengirim}}
                                                </td>
                                                <td>
                                                    {{$Order->nama_penerima}}<br/>
                                                    {{$Order->alamat_penerima}}<br/>
                                                    {{$Order->provinsi_penerima}}<br/>
                                                    {{$Order->kota_penerima}}<br/>
                                                    {{$Order->kecamatan_penerima}}<br/>
                                                    {{$Order->kelurahan_penerima}}
                                                </td>  
                                                <td>
                                                    @if($Order->is_approval == 0 )
                                                        Menunggu Penyelesaian Order
                                                    @elseif($Order->is_approval == 1 )
                                                        Disetujui
                                                    @endif 
                                                </td> 
                                            </tr> 
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div> 

                        </div>
                    </div>
 
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-6">
                                    Data <b>Detail Order</b> 
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-sm btn-outline-primary pull-right" href="{{ route('Detailorders.createdata', $Order->id) }}">
                                        <i class="fa fa-plus"></i> Tambah Detail Order
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="card-body"> 
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr> 
                                        <th scope="col">
                                            #   
                                        </th>
                                        <th scope="col">
                                            Barang
                                        </th>  
                                        <th scope="col">
                                            Dimensi (p.l.t)
                                        </th>   
                                        <th scope="col">
                                            Total Berat
                                        </th> 
                                        <th scope="col"> 
                                        </th>     
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($Detailorder as $row)
                                        <tr>
                                            <td>
                                                {{$row->id}}
                                            </td>
                                            <td>  
                                                {{$row->nama}}
                                            </td>
                                            <td>
                                                {{$row->panjang}} x {{$row->lebar}} x {{$row->tinggi}}
                                            </td>  
                                            <td>
                                                {{$row->total_berat}}kg
                                            </td>
                                            <td> 
                                                <x-bootstrap_v513.button-dropdown-action route="{!!$content!!}" id="{!!$row->id!!}"/> 
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
                    
                    <form class="col-12" action="{{ route($content.'.finalstore', $Order->id ) }}" method="POST" >
                        @csrf  
                        @method('PUT')
                        
                        <div class="form-group row visually-hidden">
                            <x-html.label-form title="Nama Pengirim" />    
                            <div class="col-md-8">
                                <input type="text" 
                                    name        = "order_id" 
                                    value       = "{{$Order->id}}" 
                                    class       = "form-control form-control-lg @error('order_id') is-invalid @enderror"  
                                    
                                />                            
                                @error('order_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>  
                        </div>

                        <x-bootstrap_v513.button-submit-custom value="Simpan dan Order" />
                            
                    </form>
				</div>
			</div>
		</div>
	</div>
   
@endsection