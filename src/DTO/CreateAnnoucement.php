<?php


namespace App\DTO;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Validator\Constraints as Assert;

class CreateAnnoucement
{

    /**
     * @Assert\NotBlank()
     */
    public $title;

    /**
     * @Assert\Type(type="numeric")
     */
    public $price;

    /**
     * @Assert\NotBlank()
     */
    public $content;
}