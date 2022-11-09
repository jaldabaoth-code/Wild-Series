<h1>Wild Series (Symfony Quests, WCS Web PHP)</h1>

### There are "Symfony Quests" we did during WCS Web PHP

---

### Steps

1. Clone the repo from GitHub : `git@github.com:jaldabaoth-code/Wild-Series.git`
2. Enter the directory : `cd Wild-Series`
3. Open the project with your code editor
4. Copy the `.env` file, name it `.env.local` and fill all informations (Database, Symfony/Mailer)
    - MAILER_DSN=smtp://xxx<br/>
        * "Retrieve and copy MAILER_DSN from : <a href="https://mailtrap.io/inboxes">MAILTRAP</a>
        * Then you go to : -> <b>My Inbox</b> -> <b>SMTP Settings</b> -> <b>Integrations</b> -> <b>PHP</b> -> <b>Symfony 5+</b>
5. Run `composer install` to install PHP dependencies
6. Run `yarn install` to install JS dependencies
7. Run `symfony console doctrine:database:create` to create database
8. Run `symfony console doctrine:migration:migrate` to create structure of database
9. Run `symfony console doctrine:fixtures:load` to load the fixtures in database
10. Run `yarn encore dev` to build assets
11. Run `symfony server:start` to launch symfony server
12. Go to <b>localhost:8000</b> with your favorite browser


### Users

Admin User<br/>
login: admin@monsite.com<br/>
password: adminpassword

Contributor User<br/>
login: contributor@monsite.com<br/>
password: contributorpassword

Demo User<br/>
login: user@monsite.com<br/>
password: userpassword

---

## The Links

<a href="https://youtu.be/P_KSo_JvCJk">Link to Youtube for Symfony Quest 9</a></br>
<a href="https://youtu.be/ZrqGePIPNcg">Link to Youtube for Symfony Quest 10 and 11</a></br>
<a href="https://youtu.be/5li49lmccY8">Link to Youtube for Symfony Quest 12 Part 1</a></br>
<a href="https://youtu.be/xtT1wYrSR3s">Link to Youtube for Symfony Quest 12 Part 2</a></br>
<a href="https://youtu.be/Q-YfkI3SU7Q">Link to Youtube for Symfony Quest 13</a></br>
<a href="https://youtu.be/PvbflGELu1M">Link to Youtube for Symfony Quest 14</a></br>
<a href="https://youtu.be/tYFV-0WMQPI">Link to Youtube for Symfony Quest 15</a></br>
<a href="https://youtu.be/fsQlYK65rGY">Link to Youtube for Symfony Quest 16</a></br>
<a href="https://youtu.be/nvqOZKlL7UE">Link to Youtube for Symfony Quest 17</a></br>
<a href="https://youtu.be/GZQTsVlGcts">Link to Youtube for Symfony Quest 18</a></br>
