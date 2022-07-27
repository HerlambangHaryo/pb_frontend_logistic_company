<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;
use Illuminate\Support\Facades\Storage;

use App\Models\Detailorder; 
use App\Models\Order; 

class DetailordersController extends Controller
{
    //
    public $template    = 'apland_v512';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Detailorders';

    public function createdata(Order $Detailorder)
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
            $Timeline          = Order::where('user_id', '=', $user->id)
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
                    'Detailorder', 
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
                'order_id'	    => 'required',
                'nama'		    => 'required',
                'panjang'		=> 'required',
                'lebar'		    => 'required',
                'tinggi'	    => 'required',
                'berat'         => 'required',
                'jumlah'        => 'required', 
            ]);
 

            $data = Detailorder::create([ 
                'order_id'	    => $request->order_id,
                'nama'		    => $request->nama,
                'panjang'		=> $request->panjang,
                'lebar'		    => $request->lebar,
                'tinggi'	    => $request->tinggi,
                'berat'         => $request->berat,
                'jumlah'        => $request->jumlah, 
                'total_berat'   => $request->berat * $request->jumlah, 
            ]); 

        // ----------------------------------------------------------- Send
            if($data)
            {
                // Orders/1
                return redirect()
                    ->route('Orders.show', $request->order_id)
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
