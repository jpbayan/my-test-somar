# Doggo

Somar Technical Test

## Setup

### Requirements

- Working SilverStripe development environment (e.g. LAMP stack).
- [Composer](https://getcomposer.org/doc/00-intro.md)
- [Yarn](https://yarnpkg.com/en/docs/install)

Your web root **must** point to the `public/` folder (not the root of the project). 

### Installation

```
composer install
vendor/bin/sake dev/build flush
vendor/bin/sake dev/tasks/
yarn install
```

### Configuration

Create a `.env` file in your project root with the standard SilverStripe setup as well as:

- `VUE_APP_API_ROOT` set to the URL for accessing this project on your local dev environment
(not via the Vue Cli server).
- `VUE_APP_MAPBOX_TOKEN` set to your free map token from [Mapbox Studio](https://www.mapbox.com/studio/).

### Compilation

```
yarn run serve
```

## Access

You can access the hot-reloaded frontend via http://localhost:8080/

Access the CMS how you usually would.

## Project Structure

- `app/`: PHP (SilverStripe) code
  - `src/Model/Park.php`: Park data object
  - `src/Task/FetchParksTask.php`: Task to import parks from WCC data
- `public/`: Web root
- `src/`: JavaScript (Vue) code
  - `App.vue`: - Top level application
  - `store.js`: VueX store where parks are fetched from SilverStripe API
