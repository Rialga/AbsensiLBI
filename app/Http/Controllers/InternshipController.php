<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Internship;
use App\Historyintern;
use DB;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $intern= Internship::select('no_intern','name')->get();

        $history = DB::table('historyinterns')
                ->join('internships','internships.no_intern','=','historyinterns.no_intern')
                ->select('date','time_in','time_out','note','internships.name as nama','internships.no_intern as no_intern')
                ->orderBy('date','desc')
                ->get();

        return view('internship',compact('intern'),compact('history'));
  
    }
    
    public function store(Request $request)
    {
                
                $date = date("Y-m-d");
                $time = date("H:i:s");  
                $note = $request->note;
                $nointern = $request->get('nointern');

                $hintern = new Historyintern;


                switch($request->submitbutton) {

                    case 'create': 
                        $hintern->create([
                            'no_intern' => $nointern,
                            'date' => $date,
                            'time_in' =>$time,
                            'note' => $note
                        ]);
                        return redirect()->back();
                    break;

                    case 'update': 
                        if(date("H")>= 16){
                            $hintern->where(['no_intern' => $nointern, 'date' => $date])
                                    ->update([
                                    'time_out' =>$time
                            ]);

                            return redirect()->back();
                        }

                        else{
                           return redirect()->back(); 
                        }
                        return $request->all();                          
                    break;
                }
           

    }



}
