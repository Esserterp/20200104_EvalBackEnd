
 
Exercice 2 (3 points) : Creating a database 
 
Create a database and name it "real estate". Inside it, you must create a table that you will call "housing" with the following fields:  
 
Table : housing Fields : - id_housing - title - address - city - pc * - area **  - price  - photo - type ​(letting or sale)  - description 
 
* stands for postcode ** refers to the surface area of the housing 
 
 
 
 
WF3 Page​ ​2 sur 3 
PHP/ SQL Intermediate practical evaluation Time allowed : 4h00 
Exercice 3 (5 points) : Saving data 
 
Create a form to add items of housing to the table named "housing”. 
Several checks are to be carried out on the input data: 
Required fields are: title, address, city, pc, area, price, type 
The postal code format must be verified and correct. 
The price and area fields must contain integers only. 
The photo field must allow an image file upload, with several checks: extension and type of file, size of the file, etc. The ​type ​ field must be managed via a ​radio ​ input type or a ​select ​ option. Save the data in the corresponding table of the database. 
 
Exercice 4 (5 points) : Displaying data 
 
Create a page which for displaying of the data input in exercise 3. We should be able to find all the housing items with their respective information. 
This display will preferably be in the form of a table, and it will be necessary to cut the text by adding "..." if the description or other textual information is too long. 
Regarding the photo, the path should not be dispalyed, but rather the photo itself. However, this should not affect the readability for the user. 
 
Exercice 5 (5 points) : Complementary developments 
 
Files uploaded via the photo field must be renamed and generate thumbnails. 
That is, a file named "my-apartment.jpg" will automatically be renamed "housing_38.jpg" (the number 38 depends on the housing id). 
The file "housing_38.jpg" should be kept in its original size and, in addition, it should be generated in 300x300 format under the name "housing_38_300x300.jpg".