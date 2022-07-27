@extends('template.'.$template.'.backend')

@section('title', $panel_name)

@section('content')  
 
<form class="col-12" action="{{ route($content.'.store' ) }}" method="POST" 
    enctype="multipart/form-data">
    @csrf 
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            Form 
        </div>
        <div class="card-body">
        
            <div class="form-group row mb-3">
                <x-html.label-form title="Bencana" />    
                <div class="col-md-8">
                    <input type="text" 
                        name        = "bencana" 
                        class       = "form-control form-control-lg @error('bencana') is-invalid @enderror"  
                        
                    />                            
                    @error('bencana')
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
                        name        = "provinsi" 
                        class       = "form-control form-control-lg @error('provinsi') is-invalid @enderror"  
                        
                    />                            
                    @error('provinsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
            </div>

            <div class="form-group row mb-3">
                <x-html.label-form title="Kab/Kota" />    
                <div class="col-md-8">
                    <input type="text" 
                        name        = "kota" 
                        class       = "form-control form-control-lg @error('kota') is-invalid @enderror"  
                        
                    />                            
                    @error('kota')
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
                        name        = "kecamatan" 
                        class       = "form-control form-control-lg @error('kecamatan') is-invalid @enderror"  
                        
                    />                            
                    @error('kecamatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
            </div>

            <div class="form-group row mb-3">
                <x-html.label-form title="Desa/Kelurahan" />    
                <div class="col-md-8">
                    <input type="text" 
                        name        = "kelurahan" 
                        class       = "form-control form-control-lg @error('kelurahan') is-invalid @enderror"  
                        
                    />                            
                    @error('kelurahan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
            </div>

            <div class="form-group row mb-3">
                <x-html.label-form title="Tanggal" />    
                <div class="col-md-8">
                    <input type="date" 
                        name        = "tanggal" 
                        class       = "form-control form-control-lg @error('tanggal') is-invalid @enderror"  
                        
                    />                            
                    @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
            </div>

            <div class="form-group row mb-3">
                <x-html.label-form title="Foto Bencana" />    
                <div class="col-md-8">
                    <input type="file" 
                        name        = "foto" 
                        class       = "form-control form-control-lg @error('foto') is-invalid @enderror"  
                        
                    />                            
                    @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
            </div>

            <div class="form-group row mb-3">
                <x-html.label-form title="Deskripsi" />    
                <div class="col-md-8">
                    <input type="text" 
                        name        = "deskripsi" 
                        class       = "form-control form-control-lg @error('deskripsi') is-invalid @enderror"  
                        
                    />                            
                    @error('deskripsi')
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

 

@endsection