#Fishy Pi
A Rasberry Pi PHP app for remote management of an Aquaponics system.

##Contributors
 - [Xander Marciniak], System Engineer and Project Management
 - Yuliya Atrasevich, PHP Developer

##Hardware Spec
 - [Raspberry Pi Model A+] (other models may work as well)
 - JBtek 8 Channel DC 5V Relay Module
 - Raspberry Pi 5MP Camera Board Module
 
##Software
 - [Raspbian Linux]

##System Setup
1. Begin with a freshly installed and updated Raspian
2. Install Apache: `sudo apt-get install apache2`
3. Install PHP: `sudo apt-get install php5 libapache2-mod-php5`
4. Install Git: `sudo apt-get install git`
5. Install [Wiring Pi]: GPIO Interface library for the Raspberry Pi

##Update Instructions
1. SSH into the server: `ssh pi@server-address`
2. Change to the Fishy Pi directory: `cd /var/www/fishypi`
3. Pull Chages from git: `sudo git pull origin`
 
[Raspbian Linux]: <http://www.raspbian.org/>
[Raspberry Pi Model A+]: <https://www.raspberrypi.org/products/model-a-plus/>
[Xander Marciniak]: <https://amarciniak.com>
[Wiring Pi]: <http://wiringpi.com/download-and-install/>
