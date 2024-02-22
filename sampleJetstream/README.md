# Sample Jetstream Project

This repository contains a fresh Jetstream project with teams and dark mode enabled.

## Description

The project is built using Laravel Jetstream, which provides robust authentication scaffolding including login, registration, email verification, and two-factor authentication. Additionally, it includes support for teams and dark mode, enhancing the user experience.

## Installation

To set up and run the sample Jetstream project, follow these steps:

1. Clone the repository to your local machine:

    ```
    git clone https://github.com/GP10DevHTS/simple_laravel_crud.git
    ```

    or after this PR has been accepted

    ```
    git clone https://github.com/igizchuck43/simple_laravel_crud.git
    ```

2. Navigate to the project directory:

    ```
    cd simple_laravel_crud/sampleJetstream
    ```

3. Install dependencies using Composer:

    ```
    composer install
    ```

4. Set up your environment variables by renaming the `.env.example` file to `.env`:

    ```
    cp .env.example .env
    ```

5. Generate an application key:

    ```
    php artisan key:generate
    ```

6. Run database migrations:

    ```
    php artisan migrate
    ```

7. Install NPM dependencies:

    ```
    npm install && npm run dev
    ```

8. Run the development server:

    ```
    php artisan serve
    ```

9. Access the application in your web browser at `http://localhost:8000`.

## Features

- **Authentication**: Provides robust authentication features including login, registration, email verification, and two-factor authentication.
- **Teams**: Supports team management functionality, allowing users to create and manage multiple teams within the application.
- **Dark Mode**: Enhances user experience with a dark mode option, improving visibility and reducing eye strain during nighttime usage.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please feel free to open an issue or create a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).
