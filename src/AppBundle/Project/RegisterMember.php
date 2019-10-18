<?php

namespace Vendor\Project\Member;

class RegisterMember
{
    private $username;

    public function __construct($username)
    {
        if (null === $username) {
            throw new \InvalidArgumentException('Missing required "username" parameter');
        }
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }
}
