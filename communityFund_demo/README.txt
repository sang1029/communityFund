this framework use MVC pattern to build a php website
	
	Model is under: application/model
		-usermodel is to implement user functions
		-profilemodel is to implement profile functions

	View is under: application/View
		-when we can plugin our pages directly and by call function to get the specify data

	Controller is separate into two file, one path is application/controllers.  and one is application/core
		-basically the function to  controll whinch object load to which view

	object is under : application/libraries 
		-convert databse data to be object

---------------------------- how to use-------------------

 1.go to your local server careate a database call "community_fund"
 2.import file "-- phpMyAdmin SQL Dump.sql" into the database
 3.go to the local server  http://localhost/CSC309Project/CSC309master/communityFund_demo/
 4.go to application/config to change the baseurl to http://localhost/CSC309Project/CSC309master/communityFund_demo/
 5.go to database.php to change password to "".

 --------------------------- some file also need to notice -----------
 	application/config/routes.php
 		- define path to make more convinient
 	application/helpers
 		- define auto loaded



 		---------layout-----
 		Top   1. view
 			  2. controller
 			  3. model
 			  4. obejct
 			  5. databse table