<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request as AjaxRequest;
use Response;

class StudentController extends Controller
{

    public function index(){
        $names = DB::table('students')->paginate(3);
        return view('pagination', compact('names'));
    }
    public function find(Request $request)
    {

        /* $search_text = $request->input('name');
        $search_address = $request->input('address');



        $main_query = DB::table('students')->where('name', 'LIKE', '%' . $search_text . '%');

        $names = $main_query->where(function ($query) use ($search_address) {
            return $query->orWhere('address', 'LIKE', '%' . $search_address . '%');
        })->paginate(2);

        return view('home', compact('names')); */


        //if($request->ajax()){

            $search_address = $request->address;
            $main_query = DB::table('students')
                    ->where('name', 'LIKE', '%' . $request->search . '%');

                    $data = $main_query->where(function ($query) use ($search_address) {
                        return $query->orWhere('address', 'LIKE', '%' . $search_address . '%');
                    })->paginate(3);

            $names='';
            if(isset($data[0])){
                foreach($data as $name){
                    $names .=
                    '<tr>
                        <td>'. $name->id .'</td>
                        <td>'. $name->name .'</td>
                        <td>'. $name->address .'</td>
                    </tr>';
                }
            }else{
                $names .= 'No result found';
            }


        //}
        $pagination = "";
        $pagination .= '
            '. $data->links("pagination::bootstrap-4") .'
        ';

        //return response()->json(['search_result' => $names, 'pagination' => $pagination]);
        if (AjaxRequest::ajax()) {
            return Response::json(View::make('students', array('names' => $names, 'pagination' => $pagination))->render());
        }

        return View::make( 'pagination', array('names' => $names, 'pagination' => $pagination));
    }

    public function search()
    {
        $names = Student::paginate(3);

        if (AjaxRequest::ajax()) {
            return Response::json(View::make('students', array('names' => $names))->render());
        }

        return View::make('pagination', array('names' => $names));
    }
}
