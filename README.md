# Installation

Edit your OS hostfile and add 2 entries:

- `127.0.0.1 web`
- `127.0.0.1 wopiclient`

Open a terminal

1. `git clone https://github.com/drupol/wopi-app.git`
2. `cd wopi-app`
3. Create a file `.env.local` with the following content:

   ```env
    APP_ENV=local
    DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
   ```

5. `docker-compose up`

This will open the following ports:

- 8080 (web)
- 80 (onlyoffice)
- 9980 (collabora)

Open a new terminal

1. `cd wopi-app`
2. `docker-compose exec web /bin/bash`
3. `composer self-update --2`
4. `composer install -n`
5. `bin/console lexik:jwt:generate-keypair`
6. `bin/console doctrine:database:create`
7. `bin/console doctrine:schema:create`
8. `chmod 777 var/data.db`

Once it's done, the web app should be available at [http://web:8080/](http://web:8080/).

The WOPI clients Collabora and OnlyOffice are available at `wopiclient:9980` and `wopiclient:80` respectively.
