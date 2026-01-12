<?php
declare (strict_types=1);
class Account {
    // fields
    public string $number;
    public string $type;
    public float $balance;
    
    // constructor
    public function __construct(string $number, string $type, float $balance) {
        $this->number = $number; //this keyword refers to current object
        $this->type = $type;
        $this->balance = $balance;
    }

    // deposit - has return type (this one returns a float value)
    public function deposit(float $amount): float {
        $this->balance += $amount;
        return $this->balance;
    }

    // withdraw
    public function withdraw(float $amount): float {
        $this->balance -= $amount;
        return $this->balance;
    }

    // get balance
    public function getBalance(): float {
        return $this->balance;
    }
}
?>