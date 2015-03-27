Docker HHVM WordPress Base
==========================

Because the internet is full of WordPress in Docker tutorials that make me cringe!

## Things you may have to change

* In `docker-compose.yml`
  * Change the ports if you're running multiple versions of this setup
* In `webroot/wp-config.php`:
  * Replace the salt section

## Handy Things

* `replace-db.sh`: replace the variables and use it to pull a copy of
your production database.
    fig run web restore-db.sh


## Development

The webroot folder is mapped into the running vm in the docker-compose
(previously known as fig) setup. To start run:

    fig up

And you'll find your site at `http://[your docker host]:8000`
