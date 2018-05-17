# pro	
***This is our project which has some criterias to implement in the system***
> 1. Download and extract the zip
> 2. move the extracetd folder into **htdocs**
> 3. create a database in phpmyadmin with the name of **learn**
> 4. import the **learn.sql** file from the folder into the database you have created
> 5. run in browser

# Test of your own
*some info that will help you to understand the code*

code is based on  **ACTIVE RECORD PATTERN**

**mejor functions and files**
 
 1. initiate.php
 > this file is a linker file .this file is distribuite all  mejor information to the whole system.such as

 	1. mejor functions
 	
 	2. all classes
 	
 	3. all static html code(which stop repitation)

 	4. some constants

 2. database_connections.php
 > hold the database connect/disconnect function

 3. db_crediantials.php
 > hold the actual data of server to connect with db

 4. functions.php
 > this file is just a helper file for. I rewrite some functions to avoid write long function name which are inbuilt in php.

 5. validation_functions.php
 >this file is for chake diffrent kind of validations like blank_error , login etc. and responsible for returning true or false ;

 6. status_error_function.php;
 >this file is responsible for actually returns error as html format to the user.