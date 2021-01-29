<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Score;
use App\Student;
use Illuminate\Http\Request;

class ScoresController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lihat()
    {
        $nilai = DB::table('scores')->join('courses','scores.id_course','=','courses.id_course')
        ->join('students','scores.id','=','students.id')
        ->get();
        return view('scores.lihat', ['nilai'=>$nilai]);

    }
    public function index()
    {
        $students = Student::all();
        return view('scores.index',compact('students'));
        $scores = DB::table('scores')->join('courses','scores.id_course','=','courses.id_course')
                                    ->join('students','scores.id','=','students.id')->get();
        return view('scores.index',['scores' => $scores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('students')->get();
        $matkul = DB::table('courses')->get();
        return view('scores.create',['data'=>$data],['matkul'=> $matkul]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nilai' => 'required']);

        // Score::create($request->all());
        Score::create([
            'nilai'=>$request->nilai,
            'id'=>$request->id,
            'id_course'=>$request->id_course
        ]);
            return redirect('/scores')->with('status','Nilai Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //nama
        $nilai = DB::table('scores')->join('courses','scores.id_course','=','courses.id_course')
                                    ->join('students','scores.id','=','students.id')->where('students.id',$id)
                                    ->first();
        //nilai
        $scores = DB::table('scores')->join('courses','scores.id_course','=','courses.id_course')
                                    ->join('students','scores.id','=','students.id')->where('students.id',$id)
                                    ->get();
        // dd($nilai);
        //jml sks
        $sks = DB::table('scores')->join('courses','scores.id_course','=','courses.id_course')
                                    ->join('students','scores.id','=','students.id')->where('students.id',$id)
                                    ->sum('sks');

        // dd($sks);
        return view('scores.show',['scores' => $scores],['nilai' => $nilai])->with('sks',$sks);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        Score::destroy($score->id_score);
       return redirect('/scores')->with('status','Data Nilai Berhasil Dihapus!');
    }
}
