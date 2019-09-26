<?php


namespace App\DTO;
use Symfony\Component\validator\Constraints as Assert;
class Task
{
    /**
     * @Assert\Email(message="Mon email n'est pas valide", checkMX=true)
     */
    public $title;
    public $content;
}
