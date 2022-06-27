<?php
  namespace App\Models;

use phpDocumentor\Reflection\Types\Self_;

  class Listing {
    public static function all() {
      return  [
            [
                'id' => "1",
                "title" => "list one",
                'description' => "this is a tryout for laravel learning"
            ],
             [
                'id' => "2",
                "title" => "list two",
                'description' => "this is a tryout for laravel learning"
             ],
             [
                'id' => "3",
                "title" => "list three",
                'description' => "this is a tryout for laravel learning"
            ]
             ];
    }

    public static function find($id) {
      $results = self::all();

      foreach ($results as $result)  {
        if ($result['id'] === $id) {
          return $result;
        }
      }
    }
  }
?>