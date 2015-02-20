# Docker HHVM WordPress Base

Because the way most people run WordPress in docker makes no sense.

## Things you may have to change

* In `fig.yml`
  * Change the ports if you're running multiple versions of this setup
* In `webroot/wp-config.php`:
  * Replace the salt section

## Handy Things

* `replace-db.sh`: replace the variables and use it to pull a copy of
your production database.
    fig run web replace-db.sh
