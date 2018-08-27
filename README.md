# WordPress Stack

**WARNING:** Do not force kill the MySQL container otherwise you will fail to get a lock on your InnoDB files.
Allow the container to gracefully shutdown.

## Usage
To start the containers run `docker-compose up`. A current version of docker-compose can be found [here](https://docs.docker.com/compose/install/#install-compose). First run of the application will require
you to provide some basic configuration to WordPress. After providing these initial values you will be able
to log in and begin posting.

## Volumes
There are two volumes described in the docker-compose file. `wp-db` is for MySQL database persistence. `wp-content` is to preserve user uploaded content (themes, image, etc).

## HTTPS
Ideally HTTPS would be configured to secure any data in transit. [Let's Encrypt](https://letsencrypt.org/) 
is a service that provides certificates free of charge. You will need a DNS name and access to the 
corresponding server.
