<?php

require_once __DIR__ . '/GuestbookEntry.php';
require_once __DIR__ . '/GuestbookEntryMapper.php';
require_once __DIR__ . '/GuestbookEntryRequest.php';
require_once __DIR__ . '/GuestbookEntryValidator.php';

$success = false;
$errors = [];

$request = new GuestbookEntryRequest(
    firstname: '',
    lastname: '',
    homepage: '',
    twitter: '',
    message: '',
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $request = GuestbookEntryRequest::fromPost($_POST);

    $errors = GuestbookEntryValidator::validate($request);

    if ($errors === []) {
        $guestbookEntry = GuestbookEntryMapper::fromRequest($request);

        saveGuestbookEntry($guestbookEntry);

        header('Location: /');
    }
}
?>
    <!doctype html>
    <html lang="de">
    <head>
        <meta charset="utf-8">
        <title>Mein Gästebuch</title>
        <style>
            * { box-sizing: border-box }
            html { display: flex }
            body {
                margin: auto;
                width: 100%;
                max-width: 62.5%;
            }
            form {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: flex-start;
                gap: 0 1rem;
            }
            form p {
                flex-basis: calc(50% - 1rem);
            }
            form p:last-of-type {
                flex-grow: 1;
            }
            form p input, form p textarea {
                width: 100%;
            }
            form p textarea {
                resize: vertical;
                height: 10em;
            }
        </style>
    </head>
    <body>

    <h1>Mein Gästebuch</h1>

    <?php if ($success) { ?>
        <p>Danke für deinen Eintrag.</p>
    <?php } ?>

    <?php if ($errors !== []) { ?>

        <ul>
            <?php foreach ($errors as $error) { ?>
                <li><?= $error ?></li>
            <?php } ?>
        </ul>

    <?php } ?>

    <form method="post">

        <p>
            <label for="firstname">Vorname</label><br>
            <input id="firstname" name="firstname" value="<?= htmlspecialchars($request->firstname) ?>">
        </p>

        <p>
            <label for="lastname">Nachname</label><br>
            <input id="lastname" name="lastname" value="<?= htmlspecialchars($request->lastname) ?>">
        </p>

        <p>
            <label for="homepage">Homepage</label><br>
            <input id="homepage" name="homepage" value="<?= htmlspecialchars($request->homepage) ?>">
        </p>

        <p>
            <label for="twitter">Twitter / X</label><br>
            <input id="twitter" name="twitter" value="<?= htmlspecialchars($request->twitter) ?>">
        </p>

        <p>
            <label for="message">Nachricht</label><br>
            <textarea id="message" name="message"><?= htmlspecialchars($request->message) ?></textarea>
        </p>

        <button type="submit">
            Absenden
        </button>

    </form>

    </body>
    </html>


<?php

/*
|--------------------------------------------------------------------------
| Nicht relevant für das Beispiel
|--------------------------------------------------------------------------
|
| Diese Funktion simuliert nur die Speicherung des Gästebucheintrags.
| Die eigentliche Datensenke ist für dieses Beispiel unwichtig.
|
| In einer echten Anwendung würde hier später beispielsweise eine
| Datenbank, ein API-Aufruf oder ein Repository stehen.
|
*/

function saveGuestbookEntry(GuestbookEntry $entry): void
{
    $line = implode(';', [
        $entry->displayName,
        $entry->homepage,
        $entry->twitter,
        $entry->message,
    ]);

    file_put_contents(
        __DIR__ . '/guestbook.txt',
        $line . PHP_EOL,
        FILE_APPEND
    );
}
