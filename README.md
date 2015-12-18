# CSCI E-15 Project 4.

## Live URL
http://P4.ryankucinski.com

## Demo/Screencast (requires quicktime player)
* Main Folder: [http://www.screencast.com/users/ryankucinski]
* P4Demo: [http://www.screencast.com/users/ryankucinski/folders/Default/media/a28cae32-a38b-4121-9f2d-361a69ecc01f]

## Description / Process
Link to [Project Requirements](http://dwa15.com/Projects/P4)

* Ally-Eats is a recipe center application that allows users to store their favorite recipes and discover new recipes.
* Guests can access the welcome page, other CSCI-e15 projects, the login page and the registration page. All recipe content is protected using middleware.
* Upon registration/login a user is brought to their welcome page which display new features and a prompt to begin interacting with the application.
* Members (users) can add new recipes, edit (their) recipes, 'like/un-like' their recipes, review their individual recipes as well as a list of all submissions, review their 'liked' recipes and delete (their) recipes.
* Members can also view  list of all the recipes submitted by them and other members, view individual recipe details for recipes belonging to other users,  'like' other user's recipes and 'un-like' other user's recipes.
* Users cannot edit or delete other users recipes nor can guests.
* Upon recipe deletion, all 'tags' and 'likes' associated with that recipe are also removed from the database.
* Form data is validated and any validation errors are presented to the user.


## Details
* login required. (Use -email jill@harvard.edu -password "helloworld").
* Validates all HTML form inputs.
* links to all other CSCI E-15 assignments and their GitHub repos.
* works well on mobile devices.

## Outside Sources
* Bootstrap [http://getbootstrap.com/]
* Bootswatch 'United' Theme [http://bootswatch.com/united]
* JQuery 1.11.3 [https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js]
* barryvdh/laravel-debugbar (dev only) [https://github.com/barryvdh/laravel-debugbar]

## Consulted Sources
* Laravel Docs [http://laravel.com/docs/5.1]
* Foobooks Class Example/Lecture Notes [https://github.com/susanBuck/dwa15-fall2015-notes/tree/master/03_Laravel], [https://github.com/susanBuck/foobooks]
* Mydnic's simple like system [http://www.mydnic.be/post/simple-like-system-with-laravel-5] -didn't end up recreating/using built my own after reviewing this though
* W3 Schools Bootstrap Tutorial [http://www.w3schools.com/bootstrap/default.asp]
* Hello Fresh (user their recipes for seeder data) [https://www.hellofresh.com/]
