<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\check;
class checks extends Controller
{
    //
    //
    public function check_function()
    {
   		return view('todo.index')->with('check_in_web_index',check::all());
    }

    public function full_details(check $todo_view)
    {
    	// dd($passwd_id);
    	// $find_id_to_view  = check::find($todo_view);

    	return view('todo.show')->with('todo_view',$todo_view);
    }

    public function create_todos()
    {
    	return view('todo.create_todos');
    }

    public function store_todos(Request $request)
    {

        // validation of form 
        $this->validate(request(),[
                'name' => 'required|min:6|max:12',
                'description' => 'required'
            ]);

    	// return view('todo.store_todos_file_name');
    		// echo "<pre>";
    	  $data = $request->all();
          // print_r($data);
    	  $todo = new check();
    	  $todo->name=$data['name'];
          $todo->description=$data['description'];
          $todo->completed='0';
    	  $todo->save();
          echo "<h1>Saving data wait </h1>";
          sleep(3);
          session()->flash('success','List added successfully');
    	  return redirect("/");
          
    }


    public function edit_data(check $todo)
    {
        // dd($passwd_id_to_edit);
        // $find_id_to_edit  = check::find($passwd_id_to_edit);

        return view('todo.edit')->with('todo_edit',$todo);
    }
    
     public function final_edit($passwd_id_to_final_edit,Request $request)
    {

         // validation of form 
        $this->validate(request(),[
                'name' => 'required|min:6|max:12',
                'description' => 'required'
            ]);
        $data_edit = check::find($passwd_id_to_final_edit);
        $data_passwd_as_edit = $request->all();
          
        $data_edit->name = $data_passwd_as_edit['name'];
        $data_edit->description = $data_passwd_as_edit['description'];
        $data_edit->save();

         session()->flash('success_edit','List edited successfully');
        return redirect("/");
    }
    // final_delete
    public function final_delete(check $todo)
    {
        // echo "Id : ".$delete_passwd_id;
        // $delete_data = check::find($delete_passwd_id);
        // echo $delete_data;
        $todo->delete();
         session()->flash('success_delete','List deleted successfully');
        return redirect("/");
    }

    public function check_completed(check $todo)
    {
        $todo->completed='1';
        $todo->save();
        return redirect("/");
    }
}
