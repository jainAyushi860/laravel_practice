<?php

namespace App\Http\Controllers;

use App\Imports\CustomerImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('customer.index');
    }

    public function importExcelData(Request $request){
          $request->validate([
            'import_file'=>[
              'required',
              'file'
            ],
          ]);
          Excel::import(new CustomerImport, $request->file('import_file'));
          return redirect()->back()->with('status','Imported Successfully');
    }
}
