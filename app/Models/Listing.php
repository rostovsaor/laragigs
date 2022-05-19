<?php

namespace App\Models;

class Listing {
  public static function all ()
  {
    return [
      [
      'id' => '1',
      'title' => 'Listing One',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus culpa consectetur minus suscipit assumenda non excepturi ipsam, debitis nam quidem unde alias consequuntur quos explicabo exercitationem. Distinctio aperiam impedit iste?'
      ],
      [
      'id' => '2',
      'title' => 'Listing Two',
      'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, ex repudiandae. Delectus accusamus sequi ipsam, molestiae aspernatur possimus eos vel inventore! Modi, quis iste placeat sequi soluta delectus minus officia.'
      ]
      ];
  }

  public static function find ($id)
  {
    $listings = self::all();

    foreach($listings as $listing)
    {
      if($listing['id'] == $id) 
      {
        return $listing;
      }
    }
  }
}
?>