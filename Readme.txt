Music Site (R)  

User Accounts

1 email: johndoe@gmail.com, Password: 123
2 email: admin@admin.com, Password: 123
3 email: johndoe2@gmail.com, Password: 123

upload setup

Before using this site make sure the UPLOAD_MAX in php.ini is 20MB or more 

WAMP SERVER

Launch Wamp Server on your pc. Go to the hidden icons on windows and click on 
the wamp icon. Once the icon has popped up click on the php.ini link and search for UPLOAD_MAX in the document that
opens up. Once done editing the line save and close the document. Relauch Apache on your wamp server.

XAMPP SERVER
Launch Xampp Server on your pc. Go to the hidden icons on windows and click on 
the Xampp icon. Once the Xampp application has popped up click on the config on Apache line
locate php.ini and click on the link search for UPLOAD_MAX in the document that
opens up. Once done editing the line save and close the document. Relauch Apache on your Xampp server. 

Server Port 
inorder to access the site without any hussle open any terminal and change the directory to the music site folder 
and once there run the following command 

php -S localhost:8888

Note: you can use any port as long as it does not interfere with other applications using the port. 
For example you can use

php -S localhost:8881
php -S localhost:1118

