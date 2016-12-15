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
      'img_src' => '#'
   ),
   array(
   'title' => 'HTML',
   'img_src' => '#'
 ),);

 DB::table('courses')->insert($courses);
 }
}
