<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus nulla ut placerat aliquet. Aliquam pharetra turpis at dolor ullamcorper luctus. Cras eu augue eget nunc pellentesque auctor. Aenean tellus turpis, lacinia sed lacus quis, posuere lacinia lectus. Aenean consectetur bibendum dui sed eleifend. Nullam sed tortor non ligula cursus tincidunt eu et tortor. Cras non maximus nisl, sed placerat tellus. In mollis vitae erat nec fermentum. Integer egestas dignissim tristique. Cras ante nisl, porttitor sed posuere eu, hendrerit ac risus. Duis vel massa nec erat blandit scelerisque ac non est. Nulla porttitor nunc euismod ipsum elementum, vitae tempor lorem mollis.',
                'image' => [],
                'likes_count' => 19738,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus nulla ut placerat aliquet. Aliquam pharetra turpis at dolor ullamcorper luctus. Cras eu augue eget nunc pellentesque auctor. Aenean tellus turpis, lacinia sed lacus quis, posuere lacinia lectus. Aenean consectetur bibendum dui sed eleifend. Nullam sed tortor non ligula cursus tincidunt eu et tortor. Cras non maximus nisl, sed placerat tellus. In mollis vitae erat nec fermentum. Integer egestas dignissim tristique. Cras ante nisl, porttitor sed posuere eu, hendrerit ac risus. Duis vel massa nec erat blandit scelerisque ac non est. Nulla porttitor nunc euismod ipsum elementum, vitae tempor lorem mollis.',
                'image' => [
                    'https://cs9.pikabu.ru/post_img/2019/10/22/6/1571733825150051634.jpg',
                    'https://cs13.pikabu.ru/post_img/2019/10/22/6/1571734226143396363.jpg',
                    'https://cs9.pikabu.ru/post_img/2019/10/22/6/1571734613115594438.jpg',
                    'https://cs13.pikabu.ru/post_img/2019/10/22/6/157173471712624762.jpg'
                ],
                'likes_count' => 8448,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus nulla ut placerat aliquet. Aliquam pharetra turpis at dolor ullamcorper luctus. Cras eu augue eget nunc pellentesque auctor. Aenean tellus turpis, lacinia sed lacus quis, posuere lacinia lectus. Aenean consectetur bibendum dui sed eleifend. Nullam sed tortor non ligula cursus tincidunt eu et tortor. Cras non maximus nisl, sed placerat tellus. In mollis vitae erat nec fermentum. Integer egestas dignissim tristique. Cras ante nisl, porttitor sed posuere eu, hendrerit ac risus. Duis vel massa nec erat blandit scelerisque ac non est. Nulla porttitor nunc euismod ipsum elementum, vitae tempor lorem mollis.',
                'image' => ['https://cs9.pikabu.ru/post_img/2019/10/22/7/15717440841100185262.jpg'],
                'likes_count' => 6990,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus nulla ut placerat aliquet. Aliquam pharetra turpis at dolor ullamcorper luctus. Cras eu augue eget nunc pellentesque auctor. Aenean tellus turpis, lacinia sed lacus quis, posuere lacinia lectus. Aenean consectetur bibendum dui sed eleifend. Nullam sed tortor non ligula cursus tincidunt eu et tortor. Cras non maximus nisl, sed placerat tellus. In mollis vitae erat nec fermentum. Integer egestas dignissim tristique. Cras ante nisl, porttitor sed posuere eu, hendrerit ac risus. Duis vel massa nec erat blandit scelerisque ac non est. Nulla porttitor nunc euismod ipsum elementum, vitae tempor lorem mollis.',
                'image' => [
                    'https://cs13.pikabu.ru/post_img/2019/10/22/6/1571734339122319369.png',
                    'https://cs9.pikabu.ru/post_img/2019/10/22/6/157173434713448023.png'
                ],
                'likes_count' => 5300,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus nulla ut placerat aliquet. Aliquam pharetra turpis at dolor ullamcorper luctus. Cras eu augue eget nunc pellentesque auctor. Aenean tellus turpis, lacinia sed lacus quis, posuere lacinia lectus. Aenean consectetur bibendum dui sed eleifend. Nullam sed tortor non ligula cursus tincidunt eu et tortor. Cras non maximus nisl, sed placerat tellus. In mollis vitae erat nec fermentum. Integer egestas dignissim tristique. Cras ante nisl, porttitor sed posuere eu, hendrerit ac risus. Duis vel massa nec erat blandit scelerisque ac non est. Nulla porttitor nunc euismod ipsum elementum, vitae tempor lorem mollis.',
                'image' => [
                    'https://cs9.pikabu.ru/post_img/2019/10/22/7/15717437931623999.jpg',
                    'https://cs9.pikabu.ru/post_img/2019/10/22/7/1571743789158092995.jpg',
                    'https://cs10.pikabu.ru/post_img/2019/10/22/7/157174379012144.jpg',
                    'https://cs11.pikabu.ru/post_img/2019/10/22/7/157174379215029779.jpg',
                    'https://cs11.pikabu.ru/post_img/2019/10/22/7/1571743794173141623.jpg'
                ],
                'likes_count' => 124,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus nulla ut placerat aliquet. Aliquam pharetra turpis at dolor ullamcorper luctus. Cras eu augue eget nunc pellentesque auctor. Aenean tellus turpis, lacinia sed lacus quis, posuere lacinia lectus. Aenean consectetur bibendum dui sed eleifend. Nullam sed tortor non ligula cursus tincidunt eu et tortor. Cras non maximus nisl, sed placerat tellus. In mollis vitae erat nec fermentum. Integer egestas dignissim tristique. Cras ante nisl, porttitor sed posuere eu, hendrerit ac risus. Duis vel massa nec erat blandit scelerisque ac non est. Nulla porttitor nunc euismod ipsum elementum, vitae tempor lorem mollis.',
                'image' => ['https://cs11.pikabu.ru/post_img/2019/10/22/9/1571757995158665294.jpg'],
                'likes_count' => 3578,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus nulla ut placerat aliquet. Aliquam pharetra turpis at dolor ullamcorper luctus. Cras eu augue eget nunc pellentesque auctor. Aenean tellus turpis, lacinia sed lacus quis, posuere lacinia lectus. Aenean consectetur bibendum dui sed eleifend. Nullam sed tortor non ligula cursus tincidunt eu et tortor. Cras non maximus nisl, sed placerat tellus. In mollis vitae erat nec fermentum. Integer egestas dignissim tristique. Cras ante nisl, porttitor sed posuere eu, hendrerit ac risus. Duis vel massa nec erat blandit scelerisque ac non est. Nulla porttitor nunc euismod ipsum elementum, vitae tempor lorem mollis.',
                'image' => ['https://cs11.pikabu.ru/post_img/2019/10/22/9/1571757995158665294.jpg'],
                'likes_count' => 3434,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus nulla ut placerat aliquet. Aliquam pharetra turpis at dolor ullamcorper luctus. Cras eu augue eget nunc pellentesque auctor. Aenean tellus turpis, lacinia sed lacus quis, posuere lacinia lectus. Aenean consectetur bibendum dui sed eleifend. Nullam sed tortor non ligula cursus tincidunt eu et tortor. Cras non maximus nisl, sed placerat tellus. In mollis vitae erat nec fermentum. Integer egestas dignissim tristique. Cras ante nisl, porttitor sed posuere eu, hendrerit ac risus. Duis vel massa nec erat blandit scelerisque ac non est. Nulla porttitor nunc euismod ipsum elementum, vitae tempor lorem mollis.',
                'image' => ['https://cs11.pikabu.ru/post_img/2019/10/22/9/15717579965294.jpg'],
                'likes_count' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 9,
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus nulla ut placerat aliquet. Aliquam pharetra turpis at dolor ullamcorper luctus. Cras eu augue eget nunc pellentesque auctor. Aenean tellus turpis, lacinia sed lacus quis, posuere lacinia lectus. Aenean consectetur bibendum dui sed eleifend. Nullam sed tortor non ligula cursus tincidunt eu et tortor. Cras non maximus nisl, sed placerat tellus. In mollis vitae erat nec fermentum. Integer egestas dignissim tristique. Cras ante nisl, porttitor sed posuere eu, hendrerit ac risus. Duis vel massa nec erat blandit scelerisque ac non est. Nulla porttitor nunc euismod ipsum elementum, vitae tempor lorem mollis.',
                'image' => [
                    'https://cs12.pikabu.ru/post_img/2019/10/23/5/1571815286123190355.jpg',
                    'https://cs9.pikabu.ru/post_img/2019/10/23/5/1571815327154058499.jpg',
                    'https://cs11.pikabu.ru/post_img/2019/10/23/5/1571815328191616587.jpg'
                ],
                'likes_count' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        try {
            DB::beginTransaction();

            foreach ($data as $postData) {
                $post = Post::updateOrCreate(
                    ['id' => $postData['id']], // условие поиска
                    [
                        'title' => $postData['title'],
                        'description' => $postData['description'],
                        'likes_count' => $postData['likes_count'],
                        'created_at' => $postData['created_at'],
                        'updated_at' => $postData['updated_at'],
                    ]
                );

                if (!empty($postData['image'])) {
                    $post->images()->delete();

                    $images = [];
                    foreach ($postData['image'] as $url) {
                        $images[] = [
                            'url' => $url,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()
                        ];
                    }

                    $post->images()->createMany($images);
                }
            }

            DB::commit();

            echo "Posts and images inserted successfully!";
        } catch (\Exception $e) {
            DB::rollBack();
            echo "Error inserting posts: " . $e->getMessage();
        }
    }
}
