<?php
class User{
    public $user_name;
    public $user_pass;
    public $user_age;

    public function __construct(string $user_name, string $user_pass, string $user_age){
        $this->user_name = $user_name;
        $this->user_pass = $user_pass;
        $this->user_age = $user_age;
    }

    /*private function ValidatePass(string $pass){
        foreach(str as chr)
    }*/

}
class UsersTable{
    private $users;

    public function create(User $user){
        $new_user = [
            'name' => $user->user_name,
            'pass' => $user->user_pass,
            'age' => $user->user_age,
        ];

        $this->users[] = $new_user;
    }
    public function getAllUsers(){
        return $this->users;
    }
}

$table = new UsersTable();

$user1 = new user('Manu', '1234', '18');
$user2 = new user('awawa', '12','567');

$table->create($user1);
$table->create($user2);

print_r($table->getAllUsers());
