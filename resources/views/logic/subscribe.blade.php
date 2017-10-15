<?php

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;

use App\subscription;

$email = Input::get('submail');

subscription::create(["email" => $email, "name" => ""]);

?>
