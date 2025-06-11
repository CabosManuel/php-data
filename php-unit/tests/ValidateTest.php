<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    // Probando que el método de validación de email retorne true
    public function test_email()
    {
        $email = Validate::email('m@gmail.com');
        $this->assertTrue($email);
    }

    public function test_url()
    {
        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);
    }

    public function test_password()
    {
        $password = Validate::password('12345');
        $this->assertTrue($password);
    }
}
