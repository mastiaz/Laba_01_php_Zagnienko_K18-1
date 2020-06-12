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
	function __construct($name, $surname, $role)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->role = $role;
	}
}

Class Admin extends User 
{

	public function welcome_admin() {
		echo " ".$this->role. ". Добро пожаловать " .$this->name. "  " .$this->surname. " вы можете вносить правки на сайте";
	}
}
Class Manager extends User 
{
	public function welcome_manager() {
		echo " ".$this->role.". Добро пожаловать " .$this->name. "  " .$this->surname. " вы можете добавлять товары на сайт";
	}
}
Class Client extends User 
{
	public function welcome_client() {
		echo " ".$this->role.". Добро пожаловать " .$this->name. "  " .$this->surname. " вы можете просматривать сайт";
	}
}
if (!empty($log)&&!empty($pass))
{

	if ($log == "admin1" && $pass == "admin123")
	{
		$admin = new admin("Vasya", "Lobanov", "admin");
		echo "Вы вошли как ";
		$admin->welcome_admin();
	}
	else if ($log == "manager1" && $pass == "manager123")
	{
		$manager = new manager("Gregorii", "Demchenko", "manager");
		echo "Вы вошли как ";
		$manager->welcome_manager();
	}
	else if ($log == "client1" && $pass == "client123")
	{
		$client = new client("Arkadii", "Valenkovich", "client");
		echo "Вы вошли как ";
		$client->welcome_client();
	}
	else {
		echo "Wrong login or password!";
	}
}
else header('Location: index.php');
?>
