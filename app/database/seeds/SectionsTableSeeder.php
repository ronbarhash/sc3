<?php

/**
 *
 */
class SectionsTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('sections')->delete();
    $sections = array(
      array(
      'title_section' => 'beginner',
      'description' => 'Description for begginers',
      'id_course' => 3
      ),
       array(
       'title_section' => 'advanced',
       'description' => 'Description for Advansed users',
       'id_course' => 3
        ),
       array(
       'title_section' => 'expert',
       'description' => 'Description for Experts',
       'id_course' => 3
       ),

       array(
       'title_section' => 'beginner',
       'description' => 'Description for begginers',
       'id_course' => 4
       ),
        array(
        'title_section' => 'advanced',
        'description' => 'Description for Advansed users',
        'id_course' => 4
         ),
        array(
        'title_section' => 'expert',
        'description' => 'Description for Experts',
        'id_course' => 4
        ),
        array(
        'title_section' => 'beginner',
        'description' => 'Description for begginers',
        'id_course' => 2
        ),
         array(
         'title_section' => 'advanced',
         'description' => 'Description for Advansed users',
         'id_course' => 1
          ),
         array(
         'title_section' => 'expert',
         'description' => 'Description for Experts',
         'id_course' => 1
         ),
     );

 DB::table('sections')->insert($sections);
 }
}
