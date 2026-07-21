<?php

final class GuestbookEntry {

    public function __construct(
        public string $displayName,
        public ?string $homepage,
        public ?string $twitter,
        public string $message
    ) {}
}
