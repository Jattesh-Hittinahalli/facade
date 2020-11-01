<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;

class products extends Controller
{
    //
    function excelData()
    {
       
       return Excel::download(new productExport,'productdata.xlsx');
    }
}

class productExport implements FromCollection
{
    public function collection()
    {
        return users::all();

    }

}
