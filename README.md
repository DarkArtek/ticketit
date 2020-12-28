Demo support ticketing project based on Laravel 8 and PHP8.

---

![Laravel Support Tickets 01](https://laraveldaily.com/wp-content/uploads/2019/11/Screen-Shot-2019-11-15-at-6.11.07-PM.png)

---

![Laravel Support Tickets 02](https://laraveldaily.com/wp-content/uploads/2019/11/Screen-Shot-2019-11-15-at-6.11.34-PM.png)

---

![Laravel Support Tickets 03](https://laraveldaily.com/wp-content/uploads/2019/11/Screen-Shot-2019-11-15-at-6.11.48-PM.png)

---

![Laravel Support Tickets 04](https://laraveldaily.com/wp-content/uploads/2019/11/Screen-Shot-2019-11-15-at-6.12.10-PM.png)

---

![Laravel Support Tickets 05](https://laraveldaily.com/wp-content/uploads/2019/11/Screen-Shot-2019-11-15-at-6.12.33-PM.png)

---

![Laravel Support Tickets 06](https://laraveldaily.com/wp-content/uploads/2019/11/Screen-Shot-2019-11-15-at-6.17.59-PM.png)

---

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL 
- If you want to login, click `Login` on top-right and use credentials __admin@admin.com__ - __password__ 

---

## Docker
- Alternativately you can pull this image from docker hub. It uses PHP8 - MariaDB - Nginx - Redis
[TicketitApp - DockerHub](https://hub.docker.com/repository/docker/ahdcreative/ticketit=

- Run **__docker-compose up -d__**
- Inside the docker main app: Run __php artisan key:generate__
- Again, inside the main docker app: Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL 
---

## License

Basically, feel free to use and re-use any way you want.

---
