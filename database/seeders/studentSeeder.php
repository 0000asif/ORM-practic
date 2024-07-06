<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
//use illuminate\support\facades\File;
use File; 

class studentSeeder extends Seeder
{
    /**
     * Runort the database seeds.
     */
    public function run(): void
    {
        $json = File:: get(path:'database/json/data.json');
        $students =collect(json_decode($json)) ;

        $students->each(function($student){
            student::create([
                "name" => $student->name,
                "email"=> $student->email,
                "age"=> $student->age,
                "city"=> $student->city,
            ]);
        });

    }
}
