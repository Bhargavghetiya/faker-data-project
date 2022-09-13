<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Resources\Json\JsonResource;

class fakerdata extends Controller
{
    public function firstname($id = 1)
    {   
    try {
            $resultArr = [];
            $faker = Faker::create();
            $resultArr['status'] = 'true';
            for ($i = 0; $i < $id; $i++) {
                    $resultArr['data']['firstname'][] = $faker->firstname;   
                }
                return json_encode($resultArr); 
                exit;           
    } catch (\Throwable $th) {

        throw $th;
    }
    }
    public function name($id = 1)
    {   
    try {
            $resultArr = [];
            $faker = Faker::create();
            $resultArr['status'] = 'true';
            for ($i = 0; $i < $id; $i++) {
                    $resultArr['data']['name'][] = $faker->name;   
                }
                return json_encode($resultArr); 
                exit;           
    } catch (\Throwable $th) {

        throw $th;
    }
    }
    public function lastname($id = 1)
    {   
    try {
            $resultArr = [];
            $faker = Faker::create();
            $resultArr['status'] = 'true';
            for ($i = 0; $i < $id; $i++) {
                    $resultArr['data']['lastname'][] = $faker->lastname;   
                }
                return json_encode($resultArr);            
                exit;
    } catch (\Throwable $th) {

        throw $th;
    }
    }
    public function email($id = 1)
    {   
    try {
            $resultArr = [];
            $faker = Faker::create();
            $resultArr['status'] = 'true';
            for ($i = 0; $i < $id; $i++) {
                    $resultArr['data']['email'][] = $faker->email;   
                }
                return json_encode($resultArr);   
                exit;         
    } catch (\Throwable $th) {

        throw $th;
    }
    }
    public function phonenumber($id = 1)
    {   
    try {
            $resultArr = [];
            $faker = Faker::create();
            $resultArr['status'] = 'true';
            for ($i = 0; $i < $id; $i++) {
                    $resultArr['data']['phonenumber'][] = $faker->phonenumber;   
                }
                return json_encode($resultArr);    
                exit;        
    } catch (\Throwable $th) {

        throw $th;
    }
    }
    public function address($id = 1)
    {   
    try {
            $resultArr = [];
            $faker = Faker::create();
            $resultArr['status'] = 'true';
            for ($i = 0; $i < $id; $i++) {
                    $resultArr['data']['address'][] = $faker->address;   
                }
                return json_encode($resultArr);       
                exit;     
    } catch (\Throwable $th) {

        return view('404');
    }
    }
}