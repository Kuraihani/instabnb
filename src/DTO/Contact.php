<?php


namespace App\DTO;
use Symfony\Component\validator\Constraints as Assert;

class Contact
{
    /**
     * @Assert\Email(message="Mon email n'est pas valide", checkMX=true)
     */
    public $subject;
    public $content;
    public  $email;
}