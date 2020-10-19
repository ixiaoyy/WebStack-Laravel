<?php

use Illuminate\Database\Seeder;

class AdminConfigTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_config')->delete();
        
        \DB::table('admin_config')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin_name',
                'value' => 'xiaoyz',
                'description' => '站长姓名',
                'created_at' => '2020-10-19 18:04:34',
                'updated_at' => '2020-10-19 18:05:08',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin_email',
                'value' => 'phpxiaoyz@163.com',
                'description' => '站长邮箱',
                'created_at' => '2020-10-19 18:04:34',
                'updated_at' => '2020-10-19 18:05:08',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'icp_record',
                'value' => '豫ICP备17046531号',
                'description' => 'ICP备案号',
                'created_at' => '2020-10-19 18:04:34',
                'updated_at' => '2020-10-19 18:05:08',
            ),
        ));
        
        
    }
}