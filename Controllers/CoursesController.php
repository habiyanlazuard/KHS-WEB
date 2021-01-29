<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CoursesController extends Controller
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
    public function index()
    {
        $courses = Course::all();
        return view('courses.index',compact('courses'));

        // $courses = DB::table('courses')->get();
        // return view('courses.index', ['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|numeric',
         ]);
            Course::create($request->all());
            return redirect('/courses')->with('status','Data Mata Kuliah Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|numeric',

         ]);

            Course::where('id_course',$course->id_course)
                    ->update([
                        'nama_mk' =>$request->nama_mk,
                        'sks' =>$request->sks,

                    ]);

            return redirect('/courses')->with('status','Data Mata Kuliah Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        Course::destroy($course->id_course);
        return redirect('/courses')->with('status','Data Mata Kuliah Berhasil Dihapus!');
    }
}
