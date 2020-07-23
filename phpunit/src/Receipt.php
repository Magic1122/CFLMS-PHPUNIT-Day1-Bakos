<?php
namespace TDD;

class Receipt {
  public function total(array $items = []) {
   // takes array of items, by default an empty array
   return array_sum($items);
   // array_sum is built in function which sum up
  // an array passed as an argument.
  // We could of course build our own sum solution,
  // but here we want to test "right" against "wrong" sums
   }

  public function tax($amount, $tax) {
          return ($amount * $tax);
       }

}

