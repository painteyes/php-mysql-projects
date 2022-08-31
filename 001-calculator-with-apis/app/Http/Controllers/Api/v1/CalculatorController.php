<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Resources\v1\CalculatorResource;
use App\Result;


class CalculatorController extends \App\Http\Controllers\Controller
{
    public function addition($number1, $number2) {

        $sum = round($number1 + $number2, 3);
        $result = new Result($sum);
        return new CalculatorResource($result);
    }

    public function subtraction($number1, $number2) {

        $difference = round($number1 - $number2, 3);
        $result = new Result($difference);
        return new CalculatorResource($result);
    }

    public function division($number1, $number2) {

        $relation = round($number1 / $number2, 3);
        $result = new Result($relation);
        return new CalculatorResource($result);
    }

    public function multiplication($number1, $number2) {

        $product = round($number1 * $number2, 3);
        $result = new Result($product);
        return new CalculatorResource($result);
    }
}
