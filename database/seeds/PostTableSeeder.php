<?php
use App\Models\Post;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Post::truncate();


        foreach(range(10,1) as $num)
        {
        	$faker = Faker\Factory::create('zh_TW');
        	Post::create([

        		'title'=>$faker->name,
        		'content'=>$faker->sentence,
        		'id'=> rand(0,100),
        		'created_at'=>$faker->dateTime($max ='now'),
        		'updated_at'=>Carbon::now()->subDays($num)->subYears(rand(1,5)),
        		
        	]);
        }
    }
}
