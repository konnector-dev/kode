# kode - a "review" platform, using CakePHP, Vue.js and TailwindCSS

## Prerequisites
1. Ubuntu latest (not tested/validated on other platforms)
1. Git - to use the commands starting with ```git```
1. docker and docker-compose - to use the commands starting with ```docker-compose```

Please find installation links using the power of Google ;)

## Installation

1. Clone the repo in a folder
    ```
    git clone https://github.com/konnector-dev/kode
    ```
1. Following commands executes the Dockerfile, and does some other magic
    ```
    docker-compose up --build
    ```
1. Now take down the running container (we wanted to run it once for now) - in a different tab (or do ```CTRL + C``` to take these down).

    __Doing "up" once creates database by the name "kode" as mentioned in the ```docker-compose.yml``` file__
    ```
    docker-compose down
    ```
1. Now run migrations within the container
    ```
    docker-compose run kode bin/cake migrations migrate
    ```
1. "Up" the container again
    ```
   docker-compose up
    ```
1. "kode" would now be running at "172.28.1.1" (setup in ```docker-compose.yml``` file).

1. (Optional, but awesome) Make an entry in ```/etc/hosts``` file pointing the container IP to the URL "kode.konnector.loal"
    ```172.28.1.1    kode.konnector.local```

