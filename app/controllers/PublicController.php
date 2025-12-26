<?php

require_once __DIR__ . '/../../core/Guard.php';
Guard::protect(__FILE__);


class PublicController
{
    public function showHome()
    {
        global $router;
        include __DIR__ . '/../views/public/index.php';
    }

    public function showAbout()
    {
        global $router;
        include __DIR__ . '/../views/public/about.php';
    }

    public function showContact()
    {
        global $router;
        include __DIR__ . '/../views/public/contact.php';
    }

    public function showApplyAdmission()
    {
        global $router;
        include __DIR__ . '/../views/public/apply.php';
    }
}
