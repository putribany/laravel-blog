<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
          [
            "title" => "MyContent1",
            "content" => "1 This is my content for pagination"
          ],
          [
            "title" => "MyContent2",
            "content" => "2 This is my content for pagination"
          ],
          [
            "title" => "MyContent3",
            "content" => "3 This is my content for pagination"
          ],
          [
            "title" => "MyContent4",
            "content" => "4 This is my content for pagination"
          ],
          [
            "title" => "MyContent5",
            "content" => "5 This is my content for pagination"
          ],
          [
            "title" => "MyContent6",
            "content" => "6 This is my content for pagination"
          ],
          [
            "title" => "MyContent7",
            "content" => "7 This is my content for pagination"
          ],
          [
            "title" => "MyContent8",
            "content" => "8 This is my content for pagination"
          ],
          [
            "title" => "MyContent9",
            "content" => "9 This is my content for pagination"
          ],
          [
            "title" => "MyContent10",
            "content" => "10 This is my content for pagination"
          ]
        ];
        
        DB::table('articles')->insert($articles);
    }
}
