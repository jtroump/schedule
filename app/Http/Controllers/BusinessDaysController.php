<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\BusinessDay;
use Illuminate\Http\JsonResponse;

class BusinessDaysController extends Controller
{

  public function showBusinessDays() {

    $scheduleInteger = 74;
    $scheduleBinary = decbin($scheduleInteger);
    $scheduleTranslatedInteger = bindec($scheduleBinary);

    return View('/test')->with(compact('scheduleInteger','scheduleBinary','scheduleTranslatedInteger'));

  }




  public function createAPI() {

    $allBusinessDays = BusinessDay::all();
    $data['schedule'] = $allBusinessDays;

    $test = response()->json($data);

    //echo get_class($test);


    $test2 = $test->getData(1,512);
    //print_r($test2);
    //var_dump($test2);

     // for ($i = 0; $i <= count($test2); $i++) {
     //  $businessdaysOpen = $test2['schedule'][$i]['business_open'];
     //  $numberOfBinaryDigits = strlen((string)(decbin($businessdaysOpen)));
     //    if ($numberOfBinaryDigits < 'DAYS_NUM') {
     //      $numberOfLeedingZeros = 'DAYS_NUM' - $numberOfBinaryDigits;
     //      $businessdaysOpenBinary = str_pad($numberOfBinaryDigits, $numberOfLeedingZeros, '0', STR_PAD_LEFT);
     //      echo $businessdaysOpenBinary . "\n";
     //    }

     $var = $test2['schedule'][1]['business_open'];
     $varBinary = decbin($var);
     $varFullBinary = str_pad($varBinary, 7, '0', STR_PAD_LEFT);

     echo gettype($varFullBinary);

     $varArrayOfBinaryDigits = str_split($varFullBinary, 1);
     var_dump($varArrayOfBinaryDigits);



      //echo $businessdaysOpenBinary . "\n";

//echo gettype($test2);
  }




  public function fetchBusinessDays() {

  $allBusinessDays = BusinessDay::all();
  $allBusinessDaysJson['schedule'] = json_encode($allBusinessDays);

  var_dump($allBusinessDaysJson['schedule']);



  // foreach ($allBusinessDays as $businessDay) {
  //     $businessDayData['id'] = $businessDay->id;
  //     $businessDayData['store'] = $businessDay->store;
  //     $businessDayData['open'] = $businessDay->business_open;
  //     $businessData[] = $businessDayData;
  // }
  //
  // $data
  //
  // //var_dump($businessDayData['open']);
  //
  //  foreach ($businessData as $row ) {
  //    $scheduleBinary = decbin($row);
  //    echo $scheduleBinary;
  //  }

  return View('/business-days')->with(compact('allBusinessDays','allBusinessDaysJson'));

  }

}
