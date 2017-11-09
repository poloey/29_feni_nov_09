<?php
$hello = 'some content';

//echo $hello;

function amarFunction () {
  // global $hello;
  // echo $hello;
  echo $GLOBALS['hello'];
}

//echo $hello;
amarFunction();

class Nizam {
  const NAME = 'Kayes';
  public $hello = 'some content';
  public function __construct($hi)
  {
    $this->hello = $hi ;
  }
  public function amarFunction() {
    $hello = 'some other content';
    echo $this->hello;
  }
}
// $obj = new Nizam('some hello content');
// echo $obj->amarFunction();
echo Nizam::NAME;








