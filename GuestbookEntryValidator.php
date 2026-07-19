<?php

final class GuestbookEntryValidator
{
    public static function validate(GuestbookEntryRequest $request): array
    {
        $errors = [];

        if ($request->firstname === '' && $request->lastname === '') {
            $errors[] = 'Bitte gib deinen Namen ein.';
        }

        if ($request->message === '') {
            $errors[] = 'Bitte gib eine Nachricht ein.';
        }

        if (mb_strlen($request->message) > 500) {
            $errors[] = 'Die Nachricht darf maximal 500 Zeichen lang sein.';
        }

        return $errors;
    }
}
