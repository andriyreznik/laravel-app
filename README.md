# Laravel-app

This project fully placed in Docker.

There are two ways to setup environment and run application via Docker:

1. [Visual Studio Code Remote](https://code.visualstudio.com/docs/remote/containers) - open project in VS Code.

1. Build manually from shell on any machine with docker.

## 📌 Requirements

- [Docker](https://www.docker.com/).

## 🔧 Setup

0. Install `remote-containers` Visual Studio Code extensions:

    ```bash
    code --install-extension ms-vscode-remote.remote-containers
    ```

1. Clone this repo to your machine:

    ```bash
    git clone git@github.com:andriyreznik/laravel-app.git
    ```

2. Open Visual Studio Code in `laravel-app` folder:

    ```bash
    cd laravel-app
    code .
    ```

    or build manually (skip if using VS Code):

    ```bash
    cd laravel-app
    docker compose up
    ```

3. Prepare database:

    ```bash
    php artisan migrate:fresh --seed
    ```

## 🚀 Run application

1. To start `Laravel` development server you need to start process in terminal:

    ```bash
    php artisan serve
    ```

## ⚖️ License

See [LICENSE](LICENSE).
