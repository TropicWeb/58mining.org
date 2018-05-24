<?php
  namespace App\Controllers;

  class CounterController extends BaseController {

    public function getIndex(){
      //TEST
      //To test the counter equals $actualDate to a date in AAAA-MM-DD in the line 8 and uncomment it. Comment line 12
      //$actualDate = '2018-05-27';
      //
      date_default_timezone_set('America/Caracas');

      $actualDate = date('Y-m-d',time()); //Get actual date (string in AAAA-MM-DD)
      $actualDate = date_create($actualDate); //Set actual date (type DATE)
      $finalDate = date_create('2018-05-27'); //Set last day (type DATE)
      $days = 0; //Days left

      $interval = date_diff($actualDate, $finalDate); //Difference between dates
      $days += $interval->d;

      return $this->render('../views/contador.php',[
        'days' => $days
      ]);
    }
  }
?>
