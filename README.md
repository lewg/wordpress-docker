Docker HHVM WordPress Base
==========================

Because the internet is full of WordPress in Docker tutorials that make me cringe!

## Things you may have to change

* In `docker-compose.yml`
  * Change the ports if you're running multiple versions of this setup
  * Change SITE_URL to your docker host (if it's not localhost)
* In `webroot/wp-config.php`:
  * Replace the salt section

## Handy Things

* `/tools/replace-db.sh`: replace the variables and use it to pull a copy of
your production database. To run the script in a container:

    % docker-compose -f docker-tools.yml run tools sh replace-db.sh

* `/tools/sync-assets.sh`: If you keep your production upload folder on disk and would like to mirror it to your local site, replace the variables in that file, and then:

    % docker-compose -f docker-tools.yml run tools sh sync-assets.sh [YOUR SFTP USERNAME]

* Memcached has been set up.

* The [Amazon S3 and CloudFront](https://wordpress.org/plugins/amazon-s3-and-cloudfront/) plugin and the [Amazon Web Services](https://wordpress.org/plugins/amazon-web-services/) plugin it depends on have been installed. I would highly recommend this if you're doing to run WordPress in a container. It will remove your dependency on volumes or shared storage if you run multiple instances of your site.




## Development

The webroot folder is mapped into the running vm in the docker-compose.yml (previously known as fig) setup. To start run:

    % docker-compose up

And you'll find your site at `http://[your docker host]:8000`
