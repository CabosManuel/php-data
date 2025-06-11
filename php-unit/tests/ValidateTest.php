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
}
