<?php
if(isset($_POST['sub']))
{
	$log = $_POST['log'];
	$pass = $_POST['pass'];
}
Class User
{
	public $name;
	public $surname;
	public $role;
}

Class Admin extends User 
{
	public function welcome_admin($name, $surname, $role) {
		echo "Добро пожаловать " .$name. "  " . $surname. " вы вошли как " .$role. " можете вносить правки на сайте";
	}
}
Class Manager extends User 
{
	public function welcome_manager($name, $surname, $role) {
		echo "Добро пожаловать " .$name. "  " . $surname. " вы вошли как " .$role. " можете добавлять товары на сайт";
	}
}
Class Client extends User 
{
	public function welcome_client($name, $surname, $role) {
		echo "Добро пожаловать " .$name. "  " . $surname. " вы вошли как " .$role. " можете просматривать сайт";
	}
}
if ($log == "admin1" && $pass == "admin123")
{
	 $admin = new admin();
    $admin->welcome_admin("Vasya", "Lobanov", "admin");
}
else if ($log == "manager1" && $pass == "manager123")
{
	 $manager = new manager();
    $manager->welcome_manager("Gregorii", "Demchenko", "manager");
}
else if ($log == "client1" && $pass == "client123")
{
	 $client = new client();
    $client->welcome_client("Arkadii", "Valenkovich", "client");
}
else {
	echo "Wrong login or password!";
}

?>