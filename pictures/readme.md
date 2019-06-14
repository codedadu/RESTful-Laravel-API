# Easy Documentation in RESTful API in Laravel Framework
## Login with Token Auth with Postman
### Result can Access the Login with Token in Header put the Key 

```shell
Accept : application/json
Authorization : Bearer [api_token]
```

<img src="https://raw.githubusercontent.com/codedadu/RESTful-Laravel-API/master/pictures/Login%20with%20Auth%20Token.PNG"/>

How to access api_token Users that have been allocated in the database, First you must be access the MySQL Server database Either by using a Web or Terminal form as follows

<img src="https://github.com/codedadu/RESTful-Laravel-API/blob/master/pictures/Get%20Access%20Token%20User%20in%20MySQL%20Database.PNG">

Then copy the api_token user you want to access in Postman as follows

<img src="https://raw.githubusercontent.com/codedadu/RESTful-Laravel-API/master/pictures/Copy%20This%20API%20Token%20User%20will%20Set.PNG"/>

Then paste in the GET Method section in the Header key Authorization and in the Value section: Bearer (Paste API Token here), 
As in the following picture

<img src="https://raw.githubusercontent.com/codedadu/RESTful-Laravel-API/master/pictures/Put%20in%20Method%20GET%20with%20Header.PNG"/>