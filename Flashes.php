<?php

namespace TwinElements\Component\Flashes;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Flashes
{
    /**
     * @var SessionInterface $session
     */
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    public function successMessage(string $message)
    {
        $this->session->getFlashBag()->add('success', $message);
    }

    public function errorMessage(string $message)
    {
        $this->session->getFlashBag()->add('error', $message);
    }
}
