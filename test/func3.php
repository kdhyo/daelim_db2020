<?php

$args = [
  "hello" => "안녕",
  "msg" => "대림이"
];

function gerrting($args) { //매개변수
  extract($args);
  echo $hello . $msg;
}

gerrting($args); //인자값