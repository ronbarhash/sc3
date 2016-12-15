<?php

/**
 *
 */
class LessonsTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('lessons')->delete();
    $id_sess =10;
    $lessons = array(
      array(
      'title_lesson' => 'lesson 1',
      'price' => 20,
      'id_section' => $id_sess++
      ),
       array(
       'title_lesson' => 'lesson 2',
       'price' => 20,
       'id_section' => 1
        ),
       array(
       'title_lesson' => 'lesson 3',
       'price' => 20,
       'id_section' => 1
       ),

       array(
         'title_lesson' => 'lesson 11',
         'price' => 20,
         'id_section' => 2
       ),
        array(
          'title_lesson' => 'lesson 12',
          'price' => 20,
          'id_section' => 2
         ),
        array(
          'title_lesson' => 'lesson 13',
          'id_section' => 2,
          'price' => 20
        ),
        array(
          'title_lesson' => 'lesson 21',
          'price' => 20,
          'id_section' => 3
        ),
         array(
           'title_lesson' => 'lesson 22',
           'price' => 20,
           'id_section' => 3
          ),
         array(
           'title_lesson' => 'lesson 23',
           'price' => 20,
           'id_section' => 3
         ),
     );

 DB::table('lessons')->insert($lessons);
 }
}
