<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();

        Category::create([
            "name" => "Programming",
            "slug" => "programming"
        ]);
        Category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);
        Category::create([
            "name" => "Sports",
            "slug" => "sports"
        ]);
        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     "title" => "Post Pertama",
        //     "slug" => "post-pertama",
        //     "category_id" => 1,
        //     "user_id" => 1,
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aspernatur nemo deserunt in officia atque.",
        //     "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, culpa eaque adipisci obcaecati quae quos, laboriosam aperiam quibusdam, incidunt a soluta ipsam veniam! Similique ipsum tenetur exercitationem modi ad repudiandae beatae ea maxime. Provident est distinctio quia doloribus, praesentium, perferendis dolorem ut ex, molestiae laborum doloremque nostrum. Molestiae nesciunt, qui non vitae. Esse veritatis illum sunt non fuga delectus architecto ea nemo amet corporis, atque eos recusandae. Minus velit dicta et incidunt atque, repudiandae dolorem ducimus quisquam dolorum modi suscipit pariatur fuga quos quis enim excepturi neque libero sequi. Fugit ipsam, asperiores explicabo a pariatur dolorum officiis accusamus provident, repudiandae?"
        // ]);
        // Post::create([
        //     "title" => "Post Kedua",
        //     "slug" => "post-kedua",
        //     "category_id" => 1,
        //     "user_id" => 2,
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aspernatur nemo deserunt in officia atque.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur consequatur quam quidem odit modi nobis et voluptates repudiandae at sed soluta fugiat deserunt dolores adipisci, nisi voluptatem, ut recusandae porro delectus laborum iste quod vero non dignissimos. Impedit vitae porro esse tenetur, dolores placeat autem aliquid voluptates recusandae sapiente ut nobis nihil quasi sunt fugiat, cumque dolorum dicta magnam sit? Fuga necessitatibus quibusdam odit dolore quisquam, aliquam blanditiis modi ad deleniti rerum ipsa.</p><p> Aspernatur, id nulla perferendis modi nobis, ea cum quibusdam nam praesentium quidem. A temporibus voluptatibus ad pariatur aliquid officia cumque quisquam, beatae distinctio, consectetur reprehenderit possimus veniam sapiente assumenda quos magni dolorem debitis delectus dolor voluptates quis nisi dolore libero facilis. Inventore, voluptatem. Qui voluptatum, provident excepturi a incidunt dolores reprehenderit eos perspiciatis distinctio esse repellendus quibusdam neque voluptate molestiae optio ab pariatur delectus eum tempora tempore.</p><p> Accusantium enim commodi, adipisci omnis fugit, ipsum ab! Asperiores sequi quos perferendis quibusdam quas vitae animi, provident possimus deserunt omnis distinctio, blanditiis mollitia quis adipisci, quia architecto molestiae totam! Doloribus optio eos deserunt repellat accusamus quis magni architecto culpa magnam asperiores nesciunt illum voluptatum, aliquam dolores iste expedita esse eum exercitationem quisquam voluptates ad. Deleniti mollitia, ipsum? Ratione, corporis, assumenda?</p>"
        // ]);
        // Post::create([
        //     "title" => "Post Ketiga",
        //     "slug" => "post-ketiga",
        //     "category_id" => 3,
        //     "user_id" => 1,
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aspernatur nemo deserunt in officia atque.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur consequatur quam quidem odit modi nobis et voluptates repudiandae at sed soluta fugiat deserunt dolores adipisci, nisi voluptatem, ut recusandae porro delectus laborum iste quod vero non dignissimos. Impedit vitae porro esse tenetur, dolores placeat autem aliquid voluptates recusandae sapiente ut nobis nihil quasi sunt fugiat, cumque dolorum dicta magnam sit? Fuga necessitatibus quibusdam odit dolore quisquam, aliquam blanditiis modi ad deleniti rerum ipsa.</p><p> Aspernatur, id nulla perferendis modi nobis, ea cum quibusdam nam praesentium quidem. A temporibus voluptatibus ad pariatur aliquid officia cumque quisquam, beatae distinctio, consectetur reprehenderit possimus veniam sapiente assumenda quos magni dolorem debitis delectus dolor voluptates quis nisi dolore libero facilis. Inventore, voluptatem. Qui voluptatum, provident excepturi a incidunt dolores reprehenderit eos perspiciatis distinctio esse repellendus quibusdam neque voluptate molestiae optio ab pariatur delectus eum tempora tempore.</p><p> Accusantium enim commodi, adipisci omnis fugit, ipsum ab! Asperiores sequi quos perferendis quibusdam quas vitae animi, provident possimus deserunt omnis distinctio, blanditiis mollitia quis adipisci, quia architecto molestiae totam! Doloribus optio eos deserunt repellat accusamus quis magni architecto culpa magnam asperiores nesciunt illum voluptatum, aliquam dolores iste expedita esse eum exercitationem quisquam voluptates ad. Deleniti mollitia, ipsum? Ratione, corporis, assumenda?</p><p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Quidem doloremque ex commodi omnis debitis vero, nulla laborum rerum ad hic alias adipisci sequi iure, optio quaerat similique! Iusto possimus a quisquam blanditiis praesentium placeat non nemo consequatur, sit excepturi quo fuga porro unde dolor eius architecto libero aperiam id reprehenderit?</p>"
        // ]);
        // Post::create([
        //     "title" => "Post Keempat",
        //     "slug" => "post-keempat",
        //     "category_id" => 2,
        //     "user_id" => 2,
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aspernatur nemo deserunt in officia atque. Assemble",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur consequatur quam quidem odit modi nobis et voluptates repudiandae at sed soluta fugiat deserunt dolores adipisci, nisi voluptatem, ut recusandae porro delectus laborum iste quod vero non dignissimos. Impedit vitae porro esse tenetur, dolores placeat autem aliquid voluptates recusandae sapiente ut nobis nihil quasi sunt fugiat, cumque dolorum dicta magnam sit? Fuga necessitatibus quibusdam odit dolore quisquam, aliquam blanditiis modi ad deleniti rerum ipsa.</p><p> Aspernatur, id nulla perferendis modi nobis, ea cum quibusdam nam praesentium quidem. A temporibus voluptatibus ad pariatur aliquid officia cumque quisquam, beatae distinctio, consectetur reprehenderit possimus veniam sapiente assumenda quos magni dolorem debitis delectus dolor voluptates quis nisi dolore libero facilis. Inventore, voluptatem. Qui voluptatum, provident excepturi a incidunt dolores reprehenderit eos perspiciatis distinctio esse repellendus quibusdam neque voluptate molestiae optio ab pariatur delectus eum tempora tempore.</p><p> Accusantium enim commodi, adipisci omnis fugit, ipsum ab! Asperiores sequi quos perferendis quibusdam quas vitae animi, provident possimus deserunt omnis distinctio, blanditiis mollitia quis adipisci, quia architecto molestiae totam! Doloribus optio eos deserunt repellat accusamus quis magni architecto culpa magnam asperiores nesciunt illum voluptatum, aliquam dolores iste expedita esse eum exercitationem quisquam voluptates ad. Deleniti mollitia, ipsum? Ratione, corporis, assumenda?</p><p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Quidem doloremque ex commodi omnis debitis vero, nulla laborum rerum ad hic alias adipisci sequi iure, optio quaerat similique! Iusto possimus a quisquam blanditiis praesentium placeat non nemo consequatur, sit excepturi quo fuga porro unde dolor eius architecto libero aperiam id reprehenderit?</p>"
        // ]);
    }
}
