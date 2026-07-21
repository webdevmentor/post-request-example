# Modernes PHP POST-Request Beispiel

## Einführung

Dieses Projekt demonstriert einen modernen und zeitgemäßen Ansatz zum Verarbeiten von POST-Requests in PHP. Es verläuft in 7 Schritten, wobei jeder Schritt auf dem vorherigen aufbaut und Best Practices sowie Clean-Code-Prinzipien zeigt.

### Übersicht der Schritte

| Schritt | Branch | Beschreibung |
|---------|--------|-------------|
| main | [main](https://github.com/webdevmentor/post-request-example/tree/main) | Basis-Projektsetup mit POST-Request-Verarbeitung |
| 1 | [step/00-validation](https://github.com/webdevmentor/post-request-example/tree/step/validation) | Einfache Eingabevalidierung hinzufügen |
| 2 | [step/000-preserve-form-input](https://github.com/webdevmentor/post-request-example/tree/step/00-preserve-form-input) | Formulareingaben bei Fehlern bewahren |
| 3 | [step/01-introduction-request-dto](https://github.com/webdevmentor/post-request-example/tree/step/01-introduction-request-dto) | Request DTO zur Vereinfachung der Eingabeverarbeitung einführen |
| 4 | [step/02-extract-validator](https://github.com/webdevmentor/post-request-example/tree/step/02-extract-validator) | Validierungslogik in separaten Validator extrahieren |
| 5 | [step/03-introduce-domain-object](https://github.com/webdevmentor/post-request-example/tree/step/03-introduce-domain-object) | Domain Object für Geschäftslogik einführen |
| 6 | [step/post-redirect-get](https://github.com/webdevmentor/post-request-example/tree/step/post-redirect-get) | Post-Redirect-Get Pattern implementieren |

## Lokal ausführen

Dieses Projekt benötigt nur **PHP** und einen Web-Server.

### Schnelleinstieg

#### Mit Docker
Wenn Docker installiert ist, kannst du das Projekt mit dem integrierten PHP-Entwicklungs-Server ausführen:

```bash
docker run --rm -it -v $(pwd):/app -w /app -p 8000:8000 php:latest php -S 0.0.0.0:8000
```

Öffne dann deinen Browser und navigiere zu `http://localhost:8000`

#### Direkt mit PHP
Alternativ, wenn PHP auf deinem System installiert ist:

```bash
php -S localhost:8000
```

Öffne dann deinen Browser und navigiere zu `http://localhost:8000`

## Lizenz

Dieses Projekt ist unter der MIT-Lizenz lizenziert. Weitere Informationen findest du in der [LICENSE](LICENSE) Datei.

## Autor

**Steffen Grahl** aka **WebdevMentor**  
https://www.webdevmentor.info
