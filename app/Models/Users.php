<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;

    public static function in_out($user_id, $part, $in_out){

        DB::beginTransaction();

        try {
            DB::insert("INSERT INTO `punches` (`id`, `user_id`, `date`, `time`,`part`, `in_out`) VALUES (NULL, $user_id, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP,$part, $in_out)");
            DB::update("UPDATE `users` SET `in_out` = $in_out WHERE `id` = $user_id");

            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }

       
    }
    
    public static function register($first_name, $last_name, $phone, $address, $finger_id){
         try {
                DB::table('users')->insert([
                
                        'first_name' => $first_name,
                        'last_name' => $last_name,
                        'phone' => $phone,
                        'address' => $address,
                        'finger_id' => $finger_id,
                        'active' => 1,
                        'in_out' => 0
                    
                ]);
                DB::commit();
                // all good
        } catch (\Exception $e) {
        DB::rollback();
        // something went wrong
        }
    }
}
