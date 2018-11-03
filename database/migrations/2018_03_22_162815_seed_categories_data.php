<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'title'        => 'PHP',
                'description' => '这是最好的言，谁有意见',
            ],
            [
                'title'        => 'java',
                'description' => '最流行的编程语言',
            ],
            [
                'title'        => '计算机基础',
                'description' => '计算机基础不可忽视哦',
            ],
            [
                'title'        => 'GO语言',
                'description' => '出生名门，新兴语言',
            ],
            [
                'title'        => '生活点滴',
                'description' => '除了技术还是要有点其它东西的',
            ],
        ];

        Db::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
