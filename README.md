# boarding-cards
You are given a stack of boarding cards for various transportations that will take you from a point a to point b via several stops on the way. 
all of the boarding cards are out of order and you don't know where your journey starts, nor where it ends. 
each boarding card contains information about seat assignment, and means of transportation (such as flight number, bus number etc). 
write an api that lets you sort this kind of list and present back a description of how to complete your journey. 
for instance the api should be able to take an unordered set of boarding cards, provided in a format defined by you, and produce this list:
 • take train 78a from madrid to barcelona. sit in seat 45b. 
 • take the airport bus from barcelona to gerona airport. no seat assignment. 
 • from gerona airport, take flight sk455 to stockholm. gate 45b, seat 3a. baggage drop at ticket counter 344. 
 • from stockholm, take flight sk22 to new york jfk. gate 22, seat 7b. baggage will we automatically transferred from your last leg. 
 • you have arrived at your final destination.
the list should be defined in a format that's compatible with the input format. 
the api is to be an internal php api so it will only communicate with other parts of a php application, not server to server, nor server to client. 
write or explain how to test your application.

Installation :

Using Composer :



     composer install 



If you don't have composer, you can get it from Composer 

Run the application :

Note that the source file used for this application is located in "sourcefile" folder. Only Json format is supported for this example.


      php index.php



Tests :

To run tests make sure you are in the main folder, and then you can run this command line :


     "./vendor/bin/phpunit" ./tests


