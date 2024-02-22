# Simple Laravel CRUD Application

This repository contains a simple CRUD (Create, Read, Update, Delete) application built with Laravel.

## Description

The application provides basic functionality for managing a list of items. It allows users to:

- View a list of items
- Add new items
- Edit existing items
- Delete items

## Installation

To install and run the application, follow these steps:

1. Clone the repository to your local machine:

    ```
    git clone https://github.com/igizchuck43/simple_laravel_crud.git
    ```

2. Navigate to the project directory:

    ```
    cd simple_laravel_crud/samplejetstream
    ```

3. Install dependencies using Composer:

    ```
    composer install
    ```

4. Set up your environment variables by renaming the `.env.example` file to `.env` and configuring it with your database credentials and other settings:

    ```
    cp .env.example .env
    ```

5. Generate an application key:

    ```
    php artisan key:generate
    ```

6. Migrate the database:

    ```
    php artisan migrate
    ```

7. Seed the database with sample data (optional):

    ```
    php artisan db:seed
    ```

8. Run the development server:

    ```
    php artisan serve
    ```

9. Access the application in your web browser at `http://localhost:8000`.

## Sample Jetstream Project

In addition to the main Laravel CRUD application, this repository also includes a sample Jetstream project located in the `sampleJetstream` subfolder.

To set up and run the sample Jetstream project, follow these steps:

1. Navigate to the `sampleJetstream` directory:

    ```
    cd sampleJetstream
    ```

2. Follow the installation instructions provided in the Jetstream documentation: [Jetstream Documentation](https://jetstream.laravel.com/2.x/installation.html)

3. Once installed, you can run the Jetstream project using the command provided in the documentation.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please feel free to open an issue or create a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).
