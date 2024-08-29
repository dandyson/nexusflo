<div align="center">
    <img src="public/assets/media/logos/logo.png" alt="NexusFlo Logo" width="100">
</div>

# NexusFlo - <a href="https://nexusflo.uk" target="_blank">nexusflo.uk</a>

## Overview

Welcome to NexusFlo! It is a Vue 3 and Laravel 10 Single Page Application (SPA) designed to provide support and assistance to users dealing with anxiety and depression. The app combines the power of Vue 3, Laravel 10, and Vue Router to create a seamless and responsive experience.

## Features

### Positive News Section

NexusFlo aims to counterbalance the overwhelming negativity present in the news by including a dedicated Positive News section. Users can find uplifting stories and content to brighten their day.

### Timers

1. **Pomodoro Timer:** Manage your work one task at a time to reduce anxiety and enhance productivity with the Pomodoro Timer.
   
2. **Meditation Timer:** Take a break and focus on self-care with the Meditation Timer.

### Note-taking Sections

1. **General Notes:** Capture your ideas, thoughts, and daily experiences in the General Notes section, functioning as a digital diary.

2. **Worry Journal:** Effectively manage anxiety by utilizing the Worry Journal to identify thinking traps and rebalance worries. Jot down your concerns and thoughts in this dedicated feature, empowering users to gain insights into their mental processes and take proactive steps towards improved mental health.


## Future Planned Updates

The next release of NexusFlo is planned to include:

- ~~**AI 'Worry Balancer':** Implement an artificial intelligence feature to assist users in the worry journal process, providing insights and strategies to balance worries.~~ - **Implemented May 2024**

- **Customizable Dashboard:** Users will be able to personalize their dashboard with color themes and background images to create a more tailored experience.

- **Relax Section:** Introduce guided relaxations and visualizations to aid in stress relief and relaxation.

- **Action Plan in Worry Journal:** Enhance the Worry Journal with an additional 'Action Plan' step, allowing users to outline actionable steps to address and alleviate worries.

- **Timer UI and Code Improvements:** Refine the user interface and codebase of the timers for an improved user experience.

- **CI/CD Implementation:** Integrate Continuous Integration and Continuous Deployment processes with frontend testing to ensure a robust and reliable application.

<br>

# NexusFlo Setup Guide

## Prerequisites

Before you can run this project on your local machine, make sure you have the following installed:

1. **Docker and Docker Compose**: Used for containerization, ensuring the application runs consistently across different environments (I highly recommend installing Docker Desktop for ease of use).
2. **Node.js (LTS version) and npm**: Required for managing frontend dependencies and building the frontend.
3. **Composer**: The dependency manager for PHP, used to install Laravel and other PHP packages.
<br>

## Step 1: Clone the Repository

First, clone the NexusFlo repository to your local machine using the following command:

```bash
git clone https://github.com/dandyson/nexusflo.git
``` 

Then, navigate into the project directory:
```bash
cd nexusflo
``` 
<br>

## Step 2: Configure Environment Variables
Create a new .env file by copying the example file:
```bash
cp .env.example .env
``` 
Then, open the .env file and ensure the database connection settings match the Docker setup:
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nexusflo_clone
DB_USERNAME=root
DB_PASSWORD=
```

***IMPORTANT*** Do not skip this step - ensure your env file has these, especially the db_connection and db_host before you start the container later on.
<br>

## Step 3: Set Up Laravel Sail
Laravel Sail provides a Docker environment for running Laravel projects. 

To set it up, run the following command - this command uses a small Docker container containing PHP and Composer to install the application's dependencies:

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```
When using the laravelsail/phpXX-composer image, you should use the same version of PHP that is listed in the `composer.json` file (80, 81, 82, or 83 - so if the version is '8.1', use '81' etc).

Next, make sure your docker engine is running (if using Docker Desktop, ensure you start the program), and then run the following:
```bash
./vendor/bin/sail up -d
``` 
This will start the Docker containers in the background (I recommend using the '-d' flag as above to start a detached container, so you will know when the container is up).

<br>

## Step 4: Generate Application key
This key is essential for maintaining the security of your application. Run the following the generate a new key (now Laravel Sail is installed, you can use it to run commands inside the docker container):
```bash
./vendor/bin/sail artisan key:generate
```
<br>

## Step 5: Install Frontend Dependencies
Next, install the Node.js dependencies using npm:
```bash
./vendor/bin/sail npm install
```
<br>

## Step 6: Run Database Migrations

Next, we will need to run the database migrations to set up the necessary tables with the --seed flag as there is some seed data:

```bash
./vendor/bin/sail artisan migrate --seed
```

At this point, you can access the DB using a program like Sequel Pro or Sequel Ace etc. and use the following details to connect:

CONNECTION TYPE: TCP/IP
- **Host:** 0.0.0.0
- **Username:** root
- **Password:** (leave blank)
- **Port:** 3305

<br>

## Step 7: Build and Serve the Frontend
To build and serve the frontend assets using Vite, run:
```bash
npm run dev
``` 
This command starts a development server that serves your frontend assets and automatically refreshes the browser on changes.
<br>

## Step 8: Access the Application
Once everything is set up, you can access the application by visiting http://localhost in your web browser.

## Troubleshooting

If you encounter any issues during the setup, consider the following:

- **Docker Issues:** Ensure Docker Desktop is running, and your system meets Docker's minimum requirements.

- **Port Conflicts:** If http://localhost doesn’t work, ensure that no other services are running on the default ports.

- **Environment Variables:** Ensure the .env file exists in your project root. If it doesn’t, you can create one by copying .env.example.

- **'Connection Refused' when running migrations** - This is likely due to your DB_HOST being incorrect. In Laravel sail, DB_CONNECTION and DB_HOST need to BOTH be 'mysql' as this is what it uses. Run the migration command again after making this change and it should work.

- **DB Access Denied Issue** - Can be caused by not updating the .env before you first sail up. Make sure you set up the DB details in your .env file BEFORE running the `./vendor/bin/sail up` command. If this does not work, then you need to run `./vendor/bin/sail down`, remove the docker volumes & images for the project and run `./vendor/bin/sail build`.


## 

Thank you for using NexusFlo! If you have any questions or suggestions, please don't hesitate to reach out.
