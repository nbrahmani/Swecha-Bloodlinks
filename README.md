# Blood for Peoples Health
This website is designed for users to locate the nearest Blood Donor.

## User Interface
### Functionality

   1. User Registration                                                                                                                       
   2. Search for blood                                                                                                                        
   3. Request/Contact for blood                                                                                                                                    

### Admin Functionality
We scrape data from other websites to collect Donor Information. List donors registered.                                                       
### For Requests
Users can enquire about Donor details, classify Donor list based on location. Users must contact the Donars on their own with the contact details provided in th website.

### For Donors
Donors can register themselves to donate blood.

Donors should provide their

   1.Blood Group                                                                                                                              
   2.Name, contact details                                                                                                          
   3.City                                                                                                                                     
   4.State                                                                                                                                    
 
## Built With
HTML, PHP, PYTHON3, MYSQL

##### to convert csv file to sql
visit the page https://www.mysqltutorial.org/import-csv-file-mysql-table/

##### to run the website on a local machine

Step 1: Install either lamp or xampp.  
Step 2: Start the service.  
Step 3: Move the folders containing the code files into /var/www/html for lampp or /opt/lampp/htdocs for xampp.  
Step 4: Start mysql service.  
Step 5: Enter into mysql command prompt.  
Step 6: Create database. -- create database bl_donors;  
Step 7: Select database. -- use bl_donors;  
Step 8: Create table perm_donors. -- create table perm_donors (dname varchar(100), age varchar(100), bl_group varchar(100), address varchar(100), cnct_num varchar(100));  
Step 9: Create table temp_donors. -- create table temp_donors (sno int, dname varchar(100), age varchar(100), bl_group varchar(100), address varchar(100), cnct_num varchar(100));  
Step 10: Add primary key to perm_donors. -- alter table perm_donors add primary key (cnct_num);  
Step 11: Add primary key to temp_donors. -- alter table temp_donors add primary key (cnct_num);  
Step 12: Load data into temp_donors.  

    LOAD DATA INFILE 'path to database file' 
    INTO TABLE temp_donors 
    FIELDS TERMINATED BY ',' 
    ENCLOSED BY '"'
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;\  
    
Step 13: The website is deployed. Open index.html in browser.  