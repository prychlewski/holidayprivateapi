<?php

namespace Vendor\Project\Member;

class RegisterMemberHandler
{
    private $memberRepository;

    public function __construct(MemberRespository $memberRepository)
    {
        $this->memberRepository = $memberRepository;
    }

    public function handle(RegisterMember $registerMember)
    {
        $username = $registerMember->getUsername();
        if ($memberRepository->has($username)) {
            throw new \DomainException(sprintf('Given username "%s" already exists, and duplicates are not allowed', $username));
        }
        $memberRepository->register($registerMember);
    }
}
