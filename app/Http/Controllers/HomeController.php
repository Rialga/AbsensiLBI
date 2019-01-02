<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absensi;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
         */
        public function index() {

            $user_id= Auth::user()->id;
            $data_absensi = Absensi::where('user_id', $user_id)
                            ->OrderBy('date','DESC')
                            ->paginate(50);

            return view('home', compact('data_absensi'));
        }
        
        public function absensi(Request $request) {
        
               $user_id = Auth::user()->id;
                $date = date("Y-m-d");
                $time = date("H:i:s");  
                $note = $request->note;


                $absensi = new Absensi;
           
               
                    $absensi->create([
                        'user_id' => $user_id,
                        'date' => $date,
                        'time_in' =>$time,
                        'note' => $note
                    ]);
                    return redirect()->back();
        }            
                

        public function update(Request $request){

                 $user_id = Auth::user()->id;
                $date = date("Y-m-d");
                $time = date("H:i:s");  
                $note = $request->note;

                $absensi = new Absensi;


                if(date("H")>= 16){
                    $absensi->where(['date' => $date, 'user_id' => $user_id])
                        ->update([
                        'time_out' =>$time,
                        
                    ]);
                    return redirect()->back();

                  
                }
                else{
                   return redirect()->back(); 
                }
            return $request->all();
        }

}
