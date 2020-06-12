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
    public function welcome()
    {
        echo "Вы вошли как ".$this->role. ". Добро пожаловать " .$this->name. "  " .$this->surname. " ";
    }
}

Class Admin extends User 
{

    public function welcome_admin() {
        echo "вы можете вносить правки на сайте";
    }
}
Class Manager extends User 
{
    public function welcome_manager() {
        echo " вы можете добавлять товары на сайт";
    }
}
Class Client extends User 
{
    public function welcome_client() {
        echo " вы можете просматривать сайт";
    }
}
if (!empty($log)&&!empty($pass))
{

    if ($log == "admin1" && $pass == "admin123")
    {
        $user = new user("Vasya", "Lobanov", "admin");
        $user->welcome();
        $admin = new admin("Vasya", "Lobanov", "admin");
        $admin->welcome_admin();
    }
    else if ($log == "manager1" && $pass == "manager123")
    {
        $user = new user("Gregorii", "Demchenko", "manager");
        $user->welcome();
        $manager = new manager("Gregorii", "Demchenko", "manager");
        $manager->welcome_manager();
    }
    else if ($log == "client1" && $pass == "client123")
    {
        $user = new user("Arkadii", "Valenkovich", "client");
        $user->welcome();
        $client = new client("Arkadii", "Valenkovich", "client");
        $client->welcome_client();
    }
    else {
        echo "Wrong login or password!";
    }
}
else header('Location: index.php');
?>
