@extends('template.'.$template.'.sylhet')

@section('title', $panel_name)

@section('content')  
  
	<div class="apland-blog-area section-padding-130">
		<div class="container">
			<div class="row justify-content-between g-5">
				<x-apland_v512.sidebar-backend active="{{$panel_name}}" />
				<div class="col-12 col-md-9">   
    
                    <form class="col-12" action="{{ route($content.'.store' ) }}" method="POST" 
                        enctype="multipart/form-data">
                        @csrf 

                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                Form <b>Pengirim</b>
                            </div>
                            <div class="card-body">
                             
                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Nama Pengirim" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "nama_pengirim" 
                                            class       = "form-control form-control-lg @error('nama_pengirim') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('nama_pengirim')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Alamat" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "alamat_pengirim" 
                                            class       = "form-control form-control-lg @error('alamat_pengirim') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('alamat_pengirim')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Provinsi" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "provinsi_pengirim" 
                                            class       = "form-control form-control-lg @error('provinsi_pengirim') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('provinsi_pengirim')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Kota" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "kota_pengirim" 
                                            class       = "form-control form-control-lg @error('kota_pengirim') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('kota_pengirim')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Kecamatan" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "kecamatan_pengirim" 
                                            class       = "form-control form-control-lg @error('kecamatan_pengirim') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('kecamatan_pengirim')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Kelurahan" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "kelurahan_pengirim" 
                                            class       = "form-control form-control-lg @error('kelurahan_pengirim') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('kelurahan_pengirim')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>
 

                            </div>
                        </div>

                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                Form <b>penerima</b>
                            </div>
                            <div class="card-body">
                            
                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Nama penerima" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "nama_penerima" 
                                            class       = "form-control form-control-lg @error('nama_penerima') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('nama_penerima')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Alamat" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "alamat_penerima" 
                                            class       = "form-control form-control-lg @error('alamat_penerima') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('alamat_penerima')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Provinsi" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "provinsi_penerima" 
                                            class       = "form-control form-control-lg @error('provinsi_penerima') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('provinsi_penerima')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Kota" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "kota_penerima" 
                                            class       = "form-control form-control-lg @error('kota_penerima') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('kota_penerima')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Kecamatan" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "kecamatan_penerima" 
                                            class       = "form-control form-control-lg @error('kecamatan_penerima') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('kecamatan_penerima')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Kelurahan" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "kelurahan_penerima" 
                                            class       = "form-control form-control-lg @error('kelurahan_penerima') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('kelurahan_penerima')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>


                            </div>
                        </div>
 
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                Form tambahan
                            </div>
                            <div class="card-body">
                             
                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Asuransi Pengiriman" />    
                                    <div class="col-md-8">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_asuransi" id="exampleRadios1" value="0" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Tanpa Asuransi
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_asuransi" id="exampleRadios2" value="1">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Asuransi
                                            </label>
                                        </div>
                                                                
                                        @error('nama_pengirim')
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