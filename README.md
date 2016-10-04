# Knoxweb Starter wp-content

1. Open Terminal
2. `cd dev`
3. `git clone https://github.com/scotch-io/scotch-box.git NEWPROJECT`
4. `cd NEWPROJECT`
5. edit Vagrantfile IP address
6. `cd public`
7. `wp core download`
8. `rm -rf wp-content` This removes the default wp-content folder
9. `git clone https://github.com/Knoxweb/starter.git wp-content` clones the starter folder
10. `vagrant up`
11. 5 min Wordpress install (should not take you 5 mins)

    - database name: scotchbox
    - username: root
    - password: root
    - prefix: `098724_`

12. Go to Plugins > Custom Development Tools: Activate
13. Go to Tools > Migrate DB
14. Select pull:

    `https://acf.knoxtest.com
     GAP59RloiGZQRI+LV+WjP5fW3yHH6m7A`

15. It should work? #crossfingers


## ...assuming it did

1. Rename Sage to the Client's Name
2. Edit style.css to Client's and Your Info
3. `cd` into the theme
4. `npm i`
5. `bower i`
6. `gulp`
7. `gulp watch`


## To Do's
   - add featurettes
   - add blackTie
   - add fixedHeader Support
