
<?php

class Account
{
    private $accountID;
    private $accountBalance;
    public static $count = 0;

    public function __construct($accountID, $accountBalance)
    {
        $this->accountID = $accountID;
        $this->accountBalance = $accountBalance;
        self::$count++;
    }

    public function showInformation()
    {
        echo "Show Info: ";
        echo "Account Id is: " . $this->accountID;
        echo "Account Balance is: " . $this->accountBalance;
        echo "<br>";
    }

    public function deposit($amount)
    {
        $this->accountBalance += $amount;
    }

    public function withdraw($amount)
    {
        if ($this->accountBalance >= $amount) {
            $this->accountBalance -= $amount;
        }
    }

    public function showAccountInfo($amount)
    {
        echo "Account Info: ";
        echo "Account Id is: " . $this->accountID;
        echo " Account Balance is: " . $this->accountBalance;
    }

    public function transferMoney($bankAcc, $amount)
    {

        if ($this->accountBalance >= $amount) {
            $this->accountBalance -= $amount;
            $bankAcc->accountBalance += $amount;
        }
    }
}

echo "User1 " . "<br>";
$u1 = new Account('u_id1', 300);
echo $u1->showInformation();
echo $u1->deposit(100);
echo $u1->showInformation();



echo "<br>";

echo "User2 " . "<br>";
$u2 = new Account('u_id2', 600);
echo $u2->showInformation();
echo $u2->deposit(150);
echo $u2->showInformation();

echo "transfer";
echo $u1->transferMoney($u2, 50);
echo "<br>";
echo $u1->showInformation();
echo "<br>";
echo $u2->showInformation();

echo "<br>";
echo "Total accounts: ";
echo Account::$count;
?>
