# Kostvetaren

Kostvetaren is a web application designed to help you find out what different foods and dishes actually contains. The data is collected from Livsmedelsverket (The Swedish National Food Agency) and provides more than 2,100 different types of foods and dishes along with more detailed information on how different substances affects your body.

The application is written in PHP and designed to be viewed on mobile devices or tablets.

*Note that Kostvetaren is displayed in Swedish!*

###### Installation:

As mentioned above, Kostvetaren is written in PHP and requires an Apache HTTP Server - with an SQL database - to run.
The structure of the SQL table can be imported via kostvetaren.sql, which also contains more than 2,100 entries with different types of foods and dishes.

Livsmedelsverket (The Swedish National Food Agency) updates the data source daily, and the database can easily be updated by running the file `get-data.php`, either manually or with a cron job.