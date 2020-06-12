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

    public function welcome() {
        parent::welcome();
        echo "вы можете вносить правки на сайте";
    }
}
Class Manager extends User 
{
    public function welcome() {
        parent::welcome();
        echo " вы можете добавлять товары на сайт";
    }
}
Class Client extends User 
{
    public function welcome() {
        parent::welcome();
        echo " вы можете просматривать сайт";
    }
}
if (!empty($log)&&!empty($pass))
{

    if ($log == "admin1" && $pass == "admin123")
    {
        $admin = new admin("Vasya", "Lobanov", "admin");
        $admin->welcome();
    }
    else if ($log == "manager1" && $pass == "manager123")
    {
        $manager = new manager("Gregorii", "Demchenko", "manager");
        $manager->welcome();
    }
    else if ($log == "client1" && $pass == "client123")
    {

        $client = new client("Arkadii", "Valenkovich", "client");
        $client->welcome();
    }
    else {
        echo "Wrong login or password!";
    }
}
else header('Location: index.php');
?>
