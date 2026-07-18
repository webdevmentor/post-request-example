<?php

require_once __DIR__ . '/GuestbookEntryRequest.php';

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

    if ($request->firstname === '' && $request->lastname === '') {
        $errors[] = 'Bitte gib deinen Namen ein.';
    }

    if ($request->message === '') {
        $errors[] = 'Bitte gib eine Nachricht ein.';
    }

    if (mb_strlen($request->message) > 500) {
        $errors[] = 'Die Nachricht darf maximal 500 Zeichen lang sein.';
    }

    if ($errors === []) {

        saveGuestbookEntry([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'homepage' => $request->homepage,
            'twitter' => $request->twitter,
            'message' => $request->message,
        ]);

        $success = true;
    }
}
?>
    <!doctype html>
    <html lang="de">
    <head>
        <meta charset="utf-8">
        <title>Mein Gästebuch</title>
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

function saveGuestbookEntry(array $entry): void
{
    file_put_contents(
        'guestbook.txt',
        implode('|', $entry) . PHP_EOL,
        FILE_APPEND
    );
}
