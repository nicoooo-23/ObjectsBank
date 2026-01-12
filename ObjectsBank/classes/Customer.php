<?php
class Customer {
    // fields
    public string $firstName;
    public string $lastName;
    // module had this but probably won't use it
    public string $email;
    public string $password;
    // array of Account objects 
    public array $accounts;

    // constructor
    public function __construct(string $firstName, string $lastName, array $accounts = []) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->accounts = $accounts;
    }
    
    //function for full name
    public function getFullName(): string {
        return $this->firstName . ' ' . $this->lastName;
    }
}
?>