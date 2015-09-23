# P2: Password Generator

## Live URL
http://p2.ryankucinski.com

## Demo/Screencast

## Description / Process
Link to [Project Requirements](http://dwa15.com/Projects/P2)

This app will produce a custom password based off the requirements the user enters in the form. A user can adjust the number of words, numbers and special characters used for their password and can also opt to format the password with all capital letters, seperate the values with hyphens, or both. Additionally, to make the password as difficult to guess as possible; I opted to randomize the order of values rather than have them follow a pattern (ex: "word-number-specialchar-word-number-specialchar").

The front end uses the bootstrap framework for styling and structure. I consulted/ referenced the [W3 schools bootstrap tutorial](http://www.w3schools.com/bootstrap/) heavily for best practices. Similar to P1, the navbar will bring you to my other respective projects for the CSCI E-15 course. To make the dropdown menu expand, I incorporated the use of JQuery and bootstrap JS. I also incorporated my own css file (styles.css) for minor cosmetic features.

The back end is written in PHP. I consulted and referenced http://php.net/manual/en/ and our class notes to build the logic and went through multiple revisions to "clean up" the code. index.php is HTML dominant with PHP being used to set displays while logic.php is used to build and update the passwords based off the entered requirements.

## Details
* No login required.
* Default values set to 4 words, 0 numbers and 0 special characters with no additional formatting.
* Accepts 1-9 words, 0-5 Special characters and 0-5 numbers.
* Can be accessed via P1 navigation and also links to all live projects and their github repos.
* The CSS for bootstrap does not validate (as expected) but my CSS file styles.css does.


## Outside Sources
* Bootstrap [http://getbootstrap.com/]
* JQuery 1.11.3 [https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js]
* Combination of http://www.randomwordgenerator.com/noun.html and https://www.randomlists.com/nouns to generate random word list.
