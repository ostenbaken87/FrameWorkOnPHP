<?php

namespace App\Models;

use App\Application\Database\Model;

class Report extends Model
{
    protected array $fields = ['email','subject','message'];
    protected string $table = 'reports';
    protected string $email;
    protected string $subject;
    protected string $message;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }


}