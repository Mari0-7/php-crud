# **PHP CRUD**

A simple PHP code using the MVC strcuture to perform user CRUD operations using PDO and MySQL as the database.

## Main features
- User SignUp and SignIn functionality (*Using prepared statements to avoid SQL injections*)
- User information update functionality
- User profile photo upload functionality (*generic photo if none are found, old user photos are replaced by new uploaded photos to optimize storage*)
- Credit card monitoring and deletion feature specific per user (*with validity checks before uploading the card*)

More features concerning the backend will be added regularly with increased security and better structure.

### To run this code locally simply use the followig command in the terminal of your main directory after running docker  
>  `cd ./docker`  
>  `docker-compose up`
