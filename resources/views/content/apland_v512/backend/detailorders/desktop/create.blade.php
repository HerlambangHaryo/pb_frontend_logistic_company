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
                            Data <b>Order</b>
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
                                                    {{$Detailorder->id}}
                                                </td>
                                                <td>  
                                                    {{$Detailorder->nama_pengirim}}<br/>
                                                    {{$Detailorder->alamat_pengirim}}<br/>
                                                    {{$Detailorder->provinsi_pengirim}}<br/>
                                                    {{$Detailorder->kota_pengirim}}<br/>
                                                    {{$Detailorder->kecamatan_pengirim}}<br/>
                                                    {{$Detailorder->kelurahan_pengirim}}
                                                </td>
                                                <td>
                                                    {{$Detailorder->nama_penerima}}<br/>
                                                    {{$Detailorder->alamat_penerima}}<br/>
                                                    {{$Detailorder->provinsi_penerima}}<br/>
                                                    {{$Detailorder->kota_penerima}}<br/>
                                                    {{$Detailorder->kecamatan_penerima}}<br/>
                                                    {{$Detailorder->kelurahan_penerima}}
                                                </td>  
                                                <td>
                                                    @if($Detailorder->is_approval == 0 )
                                                        Menunggu Persetujuan
                                                    @elseif($Detailorder->is_approval == 1 )
                                                        Disetujui
                                                    @endif 
                                                </td> 
                                            </tr> 
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-12">
                                    <b>Awb</b> : {{$Detailorder->nama_pengirim}}
                                </div> 
                            </div> 

                        </div>
                    </div>
 
                    <form class="col-12" action="{{ route($content.'.store' ) }}" method="POST" >
                        @csrf 

                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col-6">
                                        Form <b>Detail Order</b> 
                                    </div>
                                    <div class="col-6"> 
                                    </div> 
                                </div>
                            </div>
                            <div class="card-body">
                                
                                <div class="form-group row mb-3 visually-hidden">
                                    <x-html.label-form title="Nama Barang" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "order_id" 
                                            class       = "form-control form-control-lg @error('order_id') is-invalid @enderror"  
                                            value       = "{{ $Detailorder->id }}"
                                        />                            
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Nama Barang" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "nama" 
                                            class       = "form-control form-control-lg @error('nama') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Panjang" />    
                                    <div class="col-md-4"> 
                                        <div class="input-group"> 
                                            <input type="number" 
                                                name        = "panjang" 
                                                class       = "form-control form-control-lg @error('panjang') is-invalid @enderror"  
                                                
                                            />   
                                            <label class="input-group-text" for="inputGroupSelect02">cm</label>
                                        </div>
                                                                
                                        @error('panjang')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Lebar" />    
                                    <div class="col-md-4">
                                        <div class="input-group"> 
                                            <input type="number" 
                                                name        = "lebar" 
                                                class       = "form-control form-control-lg @error('lebar') is-invalid @enderror"  
                                                
                                            />       
                                            <label class="input-group-text" for="inputGroupSelect02">cm</label>
                                        </div>     

                                        @error('lebar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Tinggi" />    
                                    <div class="col-md-4">
                                        <div class="input-group"> 
                                            <input type="number" 
                                                name        = "tinggi" 
                                                class       = "form-control form-control-lg @error('tinggi') is-invalid @enderror"  
                                                
                                            />          
                                            <label class="input-group-text" for="inputGroupSelect02">cm</label>
                                        </div>    

                                        @error('tinggi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Berat" />    
                                    <div class="col-md-4">
                                        <div class="input-group"> 
                                            <input type="text" 
                                                name        = "berat" 
                                                class       = "form-control form-control-lg @error('berat') is-invalid @enderror"  
                                                
                                            />       
                                            <label class="input-group-text" for="inputGroupSelect02">kg</label>
                                        </div>    
                                        
                        
                                        @error('berat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Jumlah" />    
                                    <div class="col-md-4">
                                        <div class="input-group"> 
                                            <input type="number" 
                                                name        = "jumlah" 
                                                class       = "form-control form-control-lg @error('jumlah') is-invalid @enderror"  
                                                
                                            />      
                                        </div>                       
                                        @error('jumlah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>
    

    


                            </div>
                        </div> 

                        <x-bootstrap_v513.button-submit/>
                            
                    </form>
  
				</div>
			</div>
		</div>
	</div>
   
@endsection