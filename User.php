<?php

class User
{

    // Property
    private string $mobile;

    private string $nationlCode;

    private string $name;


    // Methods

    public function setMoile(string $mobile)
    {
        $this->mobile = $mobile;
    }

    public function setNationalCode(string $nationalCode)
    {
        $this->nationlCode = $nationalCode;
    }
    
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function info()
    {
        echo $this->mobile . '-' . $this->nationlCode . '-' . $this->name;
    }
}

$user  = new User();

//$user->mobile = '9362919101';
$user->setMoile('9362919101');
//$user->nationlCode = '3762372251';
$user->setNationalCode('3762372251');
//$user->name = 'farhad';
$user->setName('farhad');

$user->info();
echo PHP_EOL;
echo $user->getName();

echo PHP_EOL;

$user2 = new User();

$user2->setMoile('9182431243');
$user2->setNationalCode('37587234123');
$user2->setName('adel');

echo $user2->info();