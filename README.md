# Kostvetaren

Kostvetaren is a web application used to easily find out what different foods and dishes actually contains. The data is collected from Livsmedelsverket (The Swedish National Food Agency) and provides more than 2,100 different types of foods and dishes to go along with more detailed information on how different substances affects your body.

The application is written in PHP and designed to be viewed on mobile devices.

*Note that Kostvetaren is displayed in Swedish!*

###### Installation:

As mentioned above, Kostvetaren is written in PHP and requires an Apache HTTP Server - with an SQL database - to run.
The structure of the SQL table can be imported via kostvetaren.sql, which also contains more than 2,100 entries with different types of foods and dishes.
Livsmedelsverket (The Swedish National Food Agency) updates it's API daily, and the database can easily be updated by running the get-data.php, either manually or with a cron job.