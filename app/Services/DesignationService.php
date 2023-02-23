<?php
namespace App\Services;
use App\Models\Designation;

class DesignationService{
   // index

   public static function get(){
    $data['alldata'] = Designation::all();
    return $data;
   }

   // store

   public static function store($data){
    // dd($data);
    Designation::create($data);
   }

}