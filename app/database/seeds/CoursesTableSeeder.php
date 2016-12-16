<?php

/**
 *
 */
class CoursesTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('courses')->delete();
    $courses = array(
      array(
      'title' => 'PHP',
      'img_src' => 'https://placeholdit.imgix.net/~text?txtsize=33&txt=150%C3%97150&w=150&h=150'
   ),
   array(
   'title' => 'HTML',
   'img_src' => 'https://placeholdit.imgix.net/~text?txtsize=33&txt=150%C3%97150&w=150&h=150'
 ),
 array(
 'title' => 'JAVA',
 'img_src' => 'https://placeholdit.imgix.net/~text?txtsize=33&txt=150%C3%97150&w=150&h=150'
),
);

 DB::table('courses')->insert($courses);
 }
}
