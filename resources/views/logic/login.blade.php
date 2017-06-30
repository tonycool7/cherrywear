<?php
	use App\customer;

	use Illuminate\Support\Facades\Hash;

	if(isset($_GET['mail']) && isset($_GET['pword'])){
		$password = $_GET['pword'];
		$email = $_GET['mail'];
		if($user = customer::where('email', $email)->get()->first()){
			if (Hash::check($password, $user->password))
			{
			    session(['login' => 'true','user' => $user->name, 'email' => $user->email, 'phone' => $user->telephone, 'address' => $user->address]);
			    print "true";
			}
		}else{
			print "false";
		}
	}

?>