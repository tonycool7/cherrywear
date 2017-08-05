<?php

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;

$email = Input::get('submail');

DB::table('subscription')->insert(['email' => $email]);

?>
