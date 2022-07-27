<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;
use Illuminate\Support\Facades\Storage;

use App\Models\Order; 
use App\Models\Detailorder; 

class OrdersController extends Controller
{
    //
    public $template    = 'apland_v512';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Orders';

    public function index()
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isMobile());

        // ----------------------------------------------------------- Initialize
            $panel_name     = $this->content;
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 
            $data           = Order::where('user_id','=', $user->id) 
                                ->get();

        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function create()
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isMobile());

        // ----------------------------------------------------------- Initialize
            $panel_name     = $this->content;
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'create';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 

        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }
    
    public function store(Request $request)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  
            
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action 
            $this->validate($request, [ 
                // 'no_job'		        => 'required',
                'nama_pengirim'		    => 'required',
                'alamat_pengirim'		=> 'required',
                'provinsi_pengirim'		=> 'required',
                'kota_pengirim'		    => 'required',
                // 'kecamatan_pengirim'    => 'required',
                // 'kelurahan_pengirim'    => 'required',
                // 'latitude_pengirim'		=> 'required',
                // 'longitude_pengirim'    => 'required',
                'nama_penerima'		    => 'required',
                'alamat_penerima'		=> 'required',
                'provinsi_penerima'		=> 'required',
                'kota_penerima'		    => 'required',
                // 'kecamatan_penerima'    => 'required',
                // 'kelurahan_penerima'    => 'required',
                // 'latitude_penerima'		=> 'required',
                // 'longitude_penerima'    => 'required',
                // 'is_asuransi'		    => 'required',
                // 'admin_id'		        => 'required',
                // 'is_approval'		    => 'required',
                // 'total_biaya'		    => 'required',
                // 'is_deliver'		    => 'required',
                // 'is_user_accept'		=> 'required', 
            ]);
 

            $data = Order::create([ 
                'no_job'		        => $request->no_job,
                'nama_pengirim'		    => $request->nama_pengirim,
                'alamat_pengirim'		=> $request->alamat_pengirim,
                'provinsi_pengirim'		=> $request->provinsi_pengirim,
                'kota_pengirim'		    => $request->kota_pengirim,
                'kecamatan_pengirim'    => $request->kecamatan_pengirim,
                'kelurahan_pengirim'    => $request->kelurahan_pengirim,
                // 'latitude_pengirim'		=> $request->aaa,
                // 'longitude_pengirim'    => $request->aaa,
                'nama_penerima'		    => $request->nama_penerima,
                'alamat_penerima'		=> $request->alamat_penerima,
                'provinsi_penerima'		=> $request->provinsi_penerima,
                'kota_penerima'		    => $request->kota_penerima,
                'kecamatan_penerima'    => $request->kecamatan_penerima,
                'kelurahan_penerima'    => $request->kelurahan_penerima,
                // 'latitude_penerima'		=> $request->aaa,
                // 'longitude_penerima'    => $request->aaa,
                'is_asuransi'		    => $request->is_asuransi,
                'user_id'		        => $user->id,
                // 'admin_id'		        => $request->aaa,
                // 'is_approval'		    => $request->aaa,
                // 'total_biaya'		    => $request->aaa,
                // 'is_deliver'		    => $request->aaa,
                // 'is_user_accept'		=> $request->aaa,
            ]); 

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }

    public function edit(Order $Order)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isMobile());

        // ----------------------------------------------------------- Initialize
            $panel_name     = $this->content;
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'edit';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 

        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'Order', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Order $Order)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $this->validate($request, [
                'nama_pengirim'		    => 'required',
                'alamat_pengirim'		=> 'required',
                'provinsi_pengirim'		=> 'required',
                'kota_pengirim'		    => 'required', 
                
                'nama_penerima'		    => 'required',
                'alamat_penerima'		=> 'required',
                'provinsi_penerima'		=> 'required',
                'kota_penerima'		    => 'required',
            ]);
 
            $Order = Order::findOrFail($Order->id);
             
            $Order->update([
                'no_job'		        => $request->no_job,
                'nama_pengirim'		    => $request->nama_pengirim,
                'alamat_pengirim'		=> $request->alamat_pengirim,
                'provinsi_pengirim'		=> $request->provinsi_pengirim,
                'kota_pengirim'		    => $request->kota_pengirim,
                'kecamatan_pengirim'    => $request->kecamatan_pengirim,
                'kelurahan_pengirim'    => $request->kelurahan_pengirim,
                // 'latitude_pengirim'		=> $request->aaa,
                // 'longitude_pengirim'    => $request->aaa,
                'nama_penerima'		    => $request->nama_penerima,
                'alamat_penerima'		=> $request->alamat_penerima,
                'provinsi_penerima'		=> $request->provinsi_penerima,
                'kota_penerima'		    => $request->kota_penerima,
                'kecamatan_penerima'    => $request->kecamatan_penerima,
                'kelurahan_penerima'    => $request->kelurahan_penerima,
                // 'latitude_penerima'		=> $request->aaa,
                // 'longitude_penerima'    => $request->aaa,
                'is_asuransi'		    => $request->is_asuransi,
                'user_id'		        => $user->id,
            ]);
            

        // ----------------------------------------------------------- Send
            if($Order)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }

    public function show(Order $Order)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isMobile());

        // ----------------------------------------------------------- Initialize
            $panel_name     = $this->content;
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'show';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 
            $Timeline       = Order::where('user_id', '=', $user->id)
                                        ->orderBy('created_at', 'Desc')
                                        ->get();

            $Detailorder       = Detailorder::where('order_id', '=', $Order->id)
                                                ->orderBy('created_at', 'Desc')
                                                ->get();

        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'Order',  
                    'Detailorder', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function deletedata(Order $Order)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isMobile());

        // ----------------------------------------------------------- Initialize
            $panel_name     = $this->content;
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'deletedata';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 

        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'Order', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function destroy($id)
    {
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action  
            $data = Order::findOrFail($id);
            $data->delete();

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        /////////////////////////////////////////////////////////////// 
    }
    
    public function finalstore(Order $Order)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  
            
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action  
        
            $data = Order::findOrFail($Order->id);

            $data->update([
                'is_approval'		    => 1, 
            ]); 

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }

    
}
