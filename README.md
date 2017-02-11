# _Address-Book_

#### _A means of gathering and storing contact information_

#### By _**Charles Peden**_

## Description

_This application allows the user to store name, telephone and address information for individual contacts, edit those contacts, and delete them._

## Specifications

| Behavior                                              |   Input example   |  Output example |
|-------------------------------------------------------|:-----------------:|:---------------:|
|User can see all input addresses | load page | Charles Peden, 1843 Blabla Ave, Portland, OR 97215 |
|User can input addresses | Philidor Addams ... | information saved with other input addresses |
|User can delete all addresses | click on delete-all button | cache cleared |
|User can change current address  | click on change button | user moved to change info page |
|User can delete current address  | click on delete button | current address removed |
|Contact is not created if all inputs not filled | Charles 1843 Blabla Ave, Portland | I'm sorry, you failed, try again |





## Setup/Installation Requirements

* _Clone this application at https://github.com/ccbpeden/address-book.git_
* _Locate the web/ folder in the address-book folder_
* _Execute php -S localhost:8000 in the web/ folder_
* _Use the program_
* _View the site by clicking this [link](https://ccbpeden.github.io/address-book/)

_A modern web browser and php 5 or later required to operate _


## Known Bugs

_There are no known present at this time.  Author hasn't solved phone number, zipcode, state formatting validation.  Contacts are not yet sorted alphabetically._

## Support and contact details

_Please contact me at ccbpeden@warpmail.net if you have any questions or are interested in contributing._

## Technologies Used

* _PHP_
* _Twig_
* _Composer_
* _Symfony_
* _Silex_



### License

*MIT*

Copyright (c) 2017 **_Charles Peden_**
