# WordPress + React + Tailwind CSS starter

A starter kit to create a decoupled WordPress ([https://wordpress.org/](https://wordpress.org/)) backend with a React ([https://reactjs.org/](https://reactjs.org/)) & Tailwind CSS ([https://tailwindcss.com/](https://tailwindcss.com/)) utility framework frontend. This project also contains a lando.yml file to use for local development with Lando ([https://lando.dev/](https://lando.dev/)).

## Getting started

If you're new, or have not used Lando, be sure to have [https://www.docker.com/](Docker) installed. Check out Lando's WordPress documentation at [https://docs.lando.dev/config/wordpress.html](https://docs.lando.dev/config/wordpress.html).

1. `git clone` this repo
2. `cd wp-react-starter`
3. `lando start`
4. Open the local Lando configured WordPress in your browser
5. `cd frontend-app`
6. `npm i && npm start`
7. Open `localhost:3000` in your browser

## WordPress starter

This WordPress starter currently contains the latest WordPress theme ([https://wordpress.org/themes/twentytwenty/](https://wordpress.org/themes/twentytwenty/)), along with the Advanced Custom Fields ([https://www.advancedcustomfields.com/](https://www.advancedcustomfields.com/)), ACF to REST API ([https://wordpress.org/plugins/acf-to-rest-api/](https://wordpress.org/plugins/acf-to-rest-api/)), and JWT Authentication for WP REST API plugins ([https://wordpress.org/plugins/jwt-authentication-for-wp-rest-api/](https://wordpress.org/plugins/jwt-authentication-for-wp-rest-api/)).

## React starter

This React starter uses Axios ([https://github.com/axios/axios](https://github.com/axios/axios)) for it's GET requests and the Tailwind CSS utility framework.
