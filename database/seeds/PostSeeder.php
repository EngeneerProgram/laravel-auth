<?php
use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $fake)
    {
        for($i=0; $i < 15; $i++){
            $post = new Post();
            $post->titolo = $fake->sentence(5);
            $post->descrizione = $fake->sentence(10);
            $post->img = $fake->imageUrl(600, 300, 'Post', true, $post->titolo);
            $post->save();
        }
    }
}
