# QuickPOS

A simple Point of Sale landing page built with HTML, CSS, JavaScript, and PHP.

The project provides a single-page marketing layout for a fictional QuickPOS product, including a navigation bar, hero section, feature cards, pricing plans, contact form, and footer.

## Features

- Navigation with mobile menu toggle
- Hero section with call-to-action
- Feature section
- Three pricing plans
- Contact form
- Basic server-side form validation with PHP
- Email format validation
- Thank-you page after successful form submission
- Responsive viewport configuration

## Contact Form

The contact form submits a `POST` request to `contact.php`.

The PHP handler:

1. Reads the submitted name, email, and message.
2. Checks that all fields are provided.
3. Validates the email address.
4. Redirects to `thank-you.html` when validation succeeds.

The form currently does not send an email or store submissions in a database.

## Project Structure

~~~text
QuickPOS/
├── contact.php
├── index.php
├── README.md
├── script.js
├── style.css
└── thank-you.html
~~~

## Technologies

- HTML
- CSS
- JavaScript
- PHP

## Running Locally

Make sure PHP is installed, then start PHP's built-in development server from the project directory:

~~~bash
php -S localhost:8000
~~~

Open the following address in a browser:

~~~text
http://localhost:8000
~~~

To test the contact form, submit a name, valid email address, and message.

## Purpose

This project was created to practice building a simple web landing page and handling form submissions with PHP.
