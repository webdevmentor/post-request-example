<?php

final class GuestbookEntryMapper
{
    public static function fromRequest(
        GuestbookEntryRequest $request
    ): GuestbookEntry {

        $displayName = trim(
            $request->firstname . ' ' . $request->lastname
        );

        return new GuestbookEntry(
            displayName: $displayName,
            homepage: $request->homepage !== ''
                ? $request->homepage
                : null,
            twitter: $request->twitter !== ''
                ? $request->twitter
                : null,
            message: $request->message,
        );
    }
}
