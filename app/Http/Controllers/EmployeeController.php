<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\File;
class EmployeeController extends Controller
{

    function index()
    {
        // $value = Employees::all() . in the view >> , ['value' => $value] ;
        return view('welcome');
    }

    function insert()
    {
        return view('insert');
    }

    function insertProcessing(Request $request)
    {
 
 
        $name =   $request->input('EName');
        $age =   $request->input('EAge');
        $phone =   $request->input('EPhone');
        $image =  $request->input('EImage');
        $salary =   $request->input('ESalary');

        Employees::insert(['EName' => $name, 'EAge' => $age, 'EPhone' => $phone, 'EImage' => $image, 'ESalary' => $salary]);


        return redirect('/');
    }


    function view()
    {

        $employees =  Employees::all();

        return view('view', ['employees' => $employees]);
    }


    function searchProcessing()
    {

        $EName = request('EName');
        $employees = Employees::where('EName', 'LIKE',  '%' . $EName . '%')->get();

        return view('view', ['employees' => $employees]);
    }

    function search()
    {
        return view('search');
    }

    function delete()
    {
        $employees =  Employees::all();

        return view('delete', ['employees' => $employees]);
    }

    function deleteProcessing()
    {
        // madam mn RouteParameter bakar dahenm pewest nakat request('id') bakar bhenm
        $id = request('id');
        // Employees::find($id)->delete();

        $OneEmployee = Employees::find($id) ; 
        // $OneEmployee ->destroy($id) ; 
       $d =  $OneEmployee ->delete(); 
        echo $d ; 
        if($d === 1 || $d === true ){

            $image_path = public_path(). "/assets/image/$OneEmployee->EImage";  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

        }

        return redirect('/delete');


    }


    function update()
    {
        $employees =  Employees::all();

        return view('update', ['employees' => $employees]);
    }

    function updateProcessing()
    {
        $id = request('id');
        $EName = request('EName');
        $EAge = request('EAge');
        $EPhone = request('EPhone');
        $EImage = request('EImage');
        $ESalary = request('ESalary');
        //rega konaka
        // Employees::where('id' , $id)->update(['Ename'=>$EName  , 'EAge' => $EAge , 'EPhone'=>$EPhone  , 'EImage' =>$EImage , 'ESalary'=>$ESalary]) ; 

        $OneEmployee = Employees::findOrFail($id);
        $OneEmployee->EName = $EName;
        $OneEmployee->EAge = $EAge;
        $OneEmployee->EPhone = $EPhone;
        $OneEmployee->EImage = $EImage;
        $OneEmployee->ESalary = $ESalary;

        //$OneEmployee->save() ; // create && update
        $OneEmployee->update() ; // update only
        return redirect('update');
    }
}
