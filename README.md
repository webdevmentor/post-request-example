# Modern PHP POST Request Example

## Introduction

This project demonstrates a modern, contemporary approach to handling POST requests in PHP. It progresses through 7 steps, each building upon the previous one to show best practices and clean code principles.

### Steps Overview

| Step | Branch | Description |
|------|--------|-------------|
| main | [main](https://github.com/webdevmentor/post-request-example/tree/main) | Base project setup with POST request handling |
| 1 | [step/validation](https://github.com/webdevmentor/post-request-example/tree/step/validation) | Add simple input validation |
| 2 | [step/00-preserve-form-input](https://github.com/webdevmentor/post-request-example/tree/step/00-preserve-form-input) | Preserve form input in case errors occurred |
| 3 | [step/01-introduction-request-dto](https://github.com/webdevmentor/post-request-example/tree/step/01-introduction-request-dto) | Introduce Request DTO to simplify input handling |
| 4 | [step/02-extract-validator](https://github.com/webdevmentor/post-request-example/tree/step/02-extract-validator) | Extract validation logic into separate validator |
| 5 | [step/03-introduce-domain-object](https://github.com/webdevmentor/post-request-example/tree/step/03-introduce-domain-object) | Introduce domain object for business logic |
| 6 | [step/post-redirect-get](https://github.com/webdevmentor/post-request-example/tree/step/post-redirect-get) | Implement Post-Redirect-Get pattern |

## Run Locally

This project requires only **PHP** and a web server.

### Quick Start

#### Using Docker
If you have Docker installed, you can run the project with the built-in PHP development server:

```bash
docker run --rm -it -v $(pwd):/app -w /app -p 8000:8000 php:latest php -S 0.0.0.0:8000
```

Then open your browser and navigate to `http://localhost:8000`

#### Direct PHP
Alternatively, if PHP is installed on your system:

```bash
php -S localhost:8000
```

Then open your browser and navigate to `http://localhost:8000`

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Author

**Steffen Grahl** aka **WebdevMentor**  
https://www.webdevmentor.info
