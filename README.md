# Modernes PHP POST-Request Verarbeitung

Dieses Repository zeigt die schrittweise Entwicklung einer einfachen PHP-POST-Request-Verarbeitung hin zu einer sauber strukturierten Lösung.

Ausgehend von einer einfachen Formularverarbeitung werden in mehreren Schritten verschiedene Konzepte eingeführt und verbessert. Jeder Branch baut auf dem vorherigen auf und zeigt eine konkrete Weiterentwicklung des Codes.

## Lernziele

In diesem Projekt werden unter anderem folgende Konzepte behandelt:

- saubere Verarbeitung von POST-Requests in PHP
- Eingaben validieren und Fehler strukturiert behandeln
- Formulardaten bei Validierungsfehlern erhalten
- Request DTOs zur Trennung von Eingabe- und Anwendungslogik einsetzen
- Validierungslogik aus Controllern extrahieren
- Domain Objects für Geschäftsregeln nutzen
- das POST-Redirect-GET Pattern zur Vermeidung doppelter Formularübermittlungen implementieren

Die einzelnen Entwicklungsschritte sind als eigene Branches organisiert und können unabhängig nachvollzogen werden. So lässt sich die Entwicklung von einer einfachen Lösung hin zu einer besser strukturierten Architektur Schritt für Schritt verfolgen.


### Übersicht der Schritte

| Schritt | Branch                                                                                                                         | Beschreibung |
|---------|--------------------------------------------------------------------------------------------------------------------------------|-------------|
| main | [main](https://github.com/webdevmentor/post-request-example/tree/main)                                                         | Basis-Projektsetup mit POST-Request-Verarbeitung |
| 1 | [step/00-validation](https://github.com/webdevmentor/post-request-example/tree/step/00-validation)                             | Einfache Eingabevalidierung hinzufügen |
| 2 | [step/01-preserve-form-input](https://github.com/webdevmentor/post-request-example/tree/step/01-preserve-form-input)           | Formulareingaben bei Fehlern bewahren |
| 3 | [step/02-introduction-request-dto](https://github.com/webdevmentor/post-request-example/tree/step/02-introduction-request-dto) | Request DTO zur Vereinfachung der Eingabeverarbeitung einführen |
| 4 | [step/03-extract-validator](https://github.com/webdevmentor/post-request-example/tree/step/03-extract-validator)               | Validierungslogik in separaten Validator extrahieren |
| 5 | [step/04-introduce-domain-object](https://github.com/webdevmentor/post-request-example/tree/step/04-introduce-domain-object)   | Domain Object für Geschäftslogik einführen |
| 6 | [step/05-post-redirect-get](https://github.com/webdevmentor/post-request-example/tree/step/05-post-redirect-get)               | Post-Redirect-Get Pattern implementieren |

## Lokal ausführen

Dieses Projekt benötigt nur **PHP** und einen Web-Server.

### Schnelleinstieg

#### Mit Docker

Wenn Docker installiert ist, kannst du das Projekt mit dem integrierten PHP-Entwicklungs-Server ausführen:

**Linux / macOS**

```bash
docker run --rm -it -v $(pwd):/app -w /app -p 8000:8000 php:latest php -S 0.0.0.0:8000
```

**Windows PowerShell**

```powershell
docker run --rm -it -v ${PWD}:/app -w /app -p 8000:8000 php:latest php -S 0.0.0.0:8000
```

Öffne anschließend deinen Browser und navigiere zu: http://localhost:8000

#### Direkt mit PHP
Alternativ, wenn PHP auf deinem System installiert ist:

```bash
php -S localhost:8000
```

Öffne dann deinen Browser und navigiere zu `http://localhost:8000`

## Lizenz

Dieses Projekt ist unter der MIT-Lizenz lizenziert. Weitere Informationen findest du in der [LICENSE](LICENSE) Datei.

## Über den Autor

**Steffen Grahl** ist Entwickler, Mentor und Gründer von **[WebDevMentor](https://www.webdevmentor.info)**.

Auf WebDevMentor entstehen praxisnahe Inhalte rund um moderne Webentwicklung, PHP und Softwarearchitektur.
