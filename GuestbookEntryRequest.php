<?php

final class GuestbookEntryRequest
{
    public function __construct(
        public string $firstname,
        public string $lastname,
        public string $homepage,
        public string $twitter,
        public string $message,
    ) {}

    public static function fromPost(array $post): self
    {
        return new self(
            firstname: trim($post['firstname'] ?? ''),
            lastname: trim($post['lastname'] ?? ''),
            homepage: trim($post['homepage'] ?? ''),
            twitter: trim($post['twitter'] ?? ''),
            message: trim($post['message'] ?? ''),
        );
    }
}
