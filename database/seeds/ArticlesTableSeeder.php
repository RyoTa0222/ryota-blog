<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([[
                        'id' => 1,
                        'title' => 'Matsumoto',
                        'link_name' => 'http://aaa.com',
                        'images_path' => '/images/dammy_1.png',
                        'description' => 'Lorem ipsum dolor sit amet, 
                                        consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. 
                                        In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. 
                                        Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,',
                        'date_time' => "2018/02/22"
                    ],
                    [   'id' => 2,
                        'title' => 'Ryota',
                        'link_name' => 'http://bbb.com',
                        'images_path' => '/images/dammy_2.png',
                        'description' => 'A wonderful serenity has taken possession of my entire soul, 
                                        like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, 
                                        which was created for the bliss of souls like mine. I am so happy, my',
                        'date_time' => "2018/05/01"
                    ],
                    [   'id' => 3,
                        'title' => 'Laravel',
                        'link_name' => 'http://ccc.com',
                        'images_path' => '/images/dammy_3.jpg',
                        'description' => 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. 
                                        Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs.
                                        Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. 
                                        Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. 
                                        Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two',
                        'date_time' => "2018/01/15"
                    ],
                ]);
    }
}
