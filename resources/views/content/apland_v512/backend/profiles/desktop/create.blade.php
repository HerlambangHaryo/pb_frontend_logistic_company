@extends('template.'.$template.'.sylhet')

@section('title', $panel_name)

@section('content')  
  
	<div class="apland-blog-area section-padding-130">
		<div class="container">
			<div class="row justify-content-between g-5">
				<x-apland_v512.sidebar-backend active="{{$panel_name}}" />
				<div class="col-12 col-md-9">   
    
                    <form class="col-12" action="{{ route($content.'.store' ) }}" method="POST" >
                        @csrf  

                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                Form <b>Profile</b>
                            </div>
                            <div class="card-body">
                             
                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Nama Depan" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "name" 
                                            value       =  "{{ old('nama', $user->name) }}"
                                            class       = "form-control form-control-lg @error('name') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="Nama Belakang" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "nama_belakang" 
                                            value       =  "{{ old('nama', $user->nama_belakang) }}"
                                            class       = "form-control form-control-lg @error('nama_belakang') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('nama_belakang')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="KTP" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "ktp" 
                                            value       =  "{{ old('nama', $user->ktp) }}"
                                            class       = "form-control form-control-lg @error('ktp') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('ktp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="NPWP" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "npwp" 
                                            value       =  "{{ old('nama', $user->npwp) }}"
                                            class       = "form-control form-control-lg @error('npwp') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('npwp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="form-group row mb-3">
                                    <x-html.label-form title="No. Telp" />    
                                    <div class="col-md-8">
                                        <input type="text" 
                                            name        = "telepon" 
                                            value       =  "{{ old('nama', $user->telepon) }}"
                                            class       = "form-control form-control-lg @error('telepon') is-invalid @enderror"  
                                            
                                        />                            
                                        @error('telepon')
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