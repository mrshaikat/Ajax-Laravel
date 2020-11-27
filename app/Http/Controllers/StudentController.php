<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request -> hasFile('photo')){
            $img = $request -> file('photo');

            $unique_name = md5(rand().time()).'.'.$img -> getClientOriginalExtension();
            $img -> move(public_path('media/student'), $unique_name );
        }
        Student::create([
            'name'  => $request -> name,
            'roll'  => $request -> roll,
            'email'  => $request -> email,
            'cell'  => $request -> cell,
            'photo'  => $unique_name ,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Student::find($id);

        return [
            'name'  => $data -> name,
            'roll'  => $data -> roll,
            'email'  => $data -> email,
            'cell'  => $data -> cell,
            'photo'  => $data -> photo,
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function allStudent(){
        $data = Student::all();

        $i = 1;
        foreach($data as $d ){ 
           
                    ?>

                        <tr>
							<td><?php echo $i; $i++; ?></td>
							<td><?php echo $d -> name ?></td>
							<td><?php echo $d -> roll ?></td>
							<td><?php echo $d -> email ?></td>
							<td><?php echo $d -> cell ?></td>
							<td><img src="media/student/<?php echo $d -> photo ?>" alt=""></td>
							<td>
								
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a id="edit_student" studen_id="<?php echo $d -> id ?>" class="btn btn-sm btn-warning" data-toggle="modal" href="#student-model-edit">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
								
							</td>
						</tr>


                      <?php
        }
    }
}
