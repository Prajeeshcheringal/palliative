<?php

namespace App\Model\general;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Equipment extends Model
{
    protected $fillable=['equipment','stock'];


     function equipmentSave($data){
        try{

            DB::table('equipment')->where('id',$data['equip_id'])->decrement('stock', $data['nos']);
                try{
                    DB::table('equipment_reports')->insert($data);
                    return true;

                }catch (\Exception $e){
                    DB::table('equipment')->where('id',$data['equip_id'])->increment('stock', $data['nos']);
                    return false;
                }

        }catch (\Exception $e){
            return false;
        }
     }

}
