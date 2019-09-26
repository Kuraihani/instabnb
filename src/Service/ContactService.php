<?php


namespace App\Service;


use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class ContactService
{
    private $mailer;
    private $sender;
    public  function  __construct(\Swift_Mailer $mailer, string  $sender)
    {
        $this->mailer = $mailer;
        $this->sender = $sender;
    }

    public function  send(string $message) {
        $this->mailer->send(
            (new \Swift_Message($message))
            ->setFrom($this->sender)
            ->setTo('test@test.com')
            ->setBody($message)
        );
    }
}