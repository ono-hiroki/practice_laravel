<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestdataTableSeeder extends Seeder
{
    public function run(): void
    {
        $param = [
            'message' => 'Laravel',
            'url' => 'https://laravel.com/',
        ];
        $restdata = new \App\Models\Restdata();
        $restdata->fill($param)->save();

        $param = [
            'message' => 'PHP',
            'url' => 'https://www.php.net/',
        ];
        $restdata = new \App\Models\Restdata();
        $restdata->fill($param)->save();

        $param = [
            'message' => 'Docker',
            'url' => 'https://www.docker.com/',
        ];
        $restdata = new \App\Models\Restdata();
        $restdata->fill($param)->save();

        $param = [
            'message' => 'Laravel News',
            'url' => 'https://laravel-news.com/',
        ];
        $restdata = new \App\Models\Restdata();
        $restdata->fill($param)->save();
    }
}
