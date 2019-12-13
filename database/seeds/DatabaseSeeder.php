<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

         
         DB::table('users')->insert([
	           	 'id'       => '1',	
	           	 'name' => 'Julio Verne',
	           	 'email' => 'verne@correo.net',
	           	 'password' => bcrypt('1234'),
	           	 'created_at' => now(),
                 'updated_at' => now()	
	             
	    ]);

           DB::table('categories')->insert([
                   'id'       => '1', 
                   'name' => 'Programación',
                   'created_at' => now(),
                   'updated_at' => now()  
                       
           ]); 

             DB::table('categories')->insert([
                   'id'       => '2', 
                   'name' => 'Diseño',
                   'created_at' => now(),
                   'updated_at' => now()  
                       
           ]);

            DB::table('categories')->insert([
                   'id'       => '3', 
                   'name' => 'Software',
                   'created_at' => now(),
                   'updated_at' => now()  
                       
           ]); 

            DB::table('categories')->insert([
                   'id'       => '4', 
                   'name' => 'Tecnología',
                   'created_at' => now(),
                   'updated_at' => now()  
                       
           ]);   









    }
}
