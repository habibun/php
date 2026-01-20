<?php

/**
 * Short Description
 *
 * Property Hooks let you add automatic rules directly to a property (like a variable in a class) without writing separate getter and setter functions. It's like having a smart property that checks itself - you use it like a normal variable, but it has built-in validation that runs automatically when you read or write to it.
 * In other words: Instead of writing getBalance() and setBalance() functions, you just write the rules inside the property itself, then use it like $account->balance = 100.
 */

// Example

// OLD WAY (PHP 8.3) - Lots of Extra Code
class BankAccount
{
    // Private - nobody can touch it directly
    private float $balance = 0;

    // Want to see balance? Use this function
    public function getBalance(): float
    {
        return $this->balance;
    }

    // Want to add money? Use this function
    public function setBalance(float $amount): void
    {
        // Check: no negative money allowed!
        if ($amount < 0) {
            throw new Exception("You can't have negative money!");
        }

        $this->balance = $amount;
    }
}

// Using it:
$account = new BankAccount();
$account->setBalance(100);           // Put $100 in
echo $account->getBalance();         // Check balance: $100

$account->setBalance(-50);           // ❌ Error! Can't be negative


// --------------------------
// NEW WAY (PHP 8.4) - Property Hooks! 🎉
class BankAccount
{
    // Public BUT with built-in rules!
    public float $balance = 0 {
        // This runs when someone SETS the balance
        set {
            // Check: no negative money allowed!
            if ($value < 0) {
                throw new Exception("You can't have negative money!");
            }

            $this->balance = $value;  // Store it
        }
    }
}

// Using it - SO MUCH EASIER:
$account = new BankAccount();
$account->balance = 100;        // ✅ Put $100 in (automatic check!)
echo $account->balance;         // ✅ Check balance: $100

$account->balance = -50;        // ❌ Error! Can't be negative


