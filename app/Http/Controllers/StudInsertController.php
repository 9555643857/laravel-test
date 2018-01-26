<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudInsertController extends Controller
{
    public function insertform(){
        return view('stud_create');
    }
    
    public function insert(Request $request){
        $name=$request->input('stud_name');
        $email=$request->input('email');
        DB::insert('insert into student (name,email) values (?, ?)', array($name,$email));
        echo 'Record inserted successfully';
        echo '<a href="/insert">Click here</a> to go back';
    }
    
    
    public function view(){
       // $users=DB::select('SELECT * from student');
        $users=DB::table('student')->get();
        return view('stud_view',['users'=>$users]);
        
    }
    
    public function show($id){
        $users=DB::select('SELECT * FROM student where id=?',[$id]);
        return view('stud_update',['users'=>$user]);
    }
}
