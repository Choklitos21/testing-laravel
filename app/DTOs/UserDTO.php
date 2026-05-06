<?php

namespace App\DTOs;

class UserDTO
{
    public string $name;
    public string $email;
    public string $password;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
    }
}
