# Welcome to Startup Rad!

### Environment Setup

*Here's how to setup the environment for startuprad.com *

First, make sure you have VirtualBox and Vagrant installed (and of course git).  This can be done...

- ** VirtualBox: **  [Available for download here](https://www.virtualbox.org/wiki/Downloads)
- ** Vagrant: ** [Available for download here](https://www.vagrantup.com/downloads.html)

Install the homestead vagrant box by tunning the following command

`vagrant box add laravel/homestead`

Go to the directory where you want to store code.  You will be creating two directories here -- one for the Homestead files and one for the RAD files. (I like to store these in my `~/Code` folder.)

Add the Homestead repository by running the command 

`git clone https://github.com/laravel/homestead.git Homestead`

Go into the newly created Homestead directory.  Run `bash init.sh` to initialize Homestead.

Make sure that you have an SSH key (chances are you do.)  If you don't, run the following command in the home directory: `ssh-keygen -t rsa -C “your_email@example.com`

Next, edit your Homestead.yaml file (found at `~/.homestead/Homestead.yaml`)

- Provider: Your provider should be `virtualbox`
- Folders: Your code directory `~/NAME` should map to `/home/vagrant/NAME` (in my case, `NAME` is `Code`, but set it accordingly)
- Sites: The site `startuprad.dev` should map to `/home/vagrant/NAME/startuprad/public`
- IP: Take note of the IP address, I use `192.168.10.10`

Next, configure nginx sites by editing the `~/etc/hosts` file. Add `IP ADDRESS SITE NAME` where the IP is the one from Homestead.yaml and the site name is the local site name taken from Homestead.yaml.  For example, I add the following to my `~/etc/hosts` file: 

`192.168.10.10  startuprad.dev`

Enter your main `~/Code` directory and clone the startuprad repository using:

`git clone https://github.com/alexandrasmith00/startuprad.git`

Enter the `~/Code/Homestead` directory and launch the box.

```
vagrant up
vagrant reload --provision
```

Next, create an alias for the vagrant box so that you can ssh globally.  To edit the `~/.bashrc` file, use the command `sudo vi ~/.bashrc`  Once opened, add the following to the bottom of the file: `alias vm='ssh vagrant@127.0.0.1 -p 2222'`  Lastly, install the bashrc by using the command `source ~/.bashrc`  You can now ssh into the virtual machine using the command `vm`.

Use `vm` to ssh into the VM and then `cd` into `Code/startuprad`.  Once in the startuprad directory, use `composer install` to install all library dependencies.

Next, create a `.env` file by duplicating the `.env.example` file in the source.  Make the following edits to the new `.env` file:

- **DB Credentials:**  Use these credentials to add your local database to a database management software like SequelPro.
- **Email Username & Password: **  Use your gmail username and password in order to send test emails locally.

Run the following commands to generate an app key, migrate and seed the database.

```
php artisan key:generate
php artisan migrate
php artisan db:seed --class=DatabaseSeeder
```

**Note: db:seed is currently broken... Will fix!**

Switch to branch `landing` and go to `startuprad.dev` to view the local version of Startup RAD.

### Style Guide

The style guide will be updated as things get more complex. 

### Laravel Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

Additional docs for libraries used will be added here:

* This will be a doc!
