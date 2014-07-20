issuespostman
=============

Issues Postman will be able to post issues to github and bitbucket repositories.

The code is in PHP using "Kohana MVC" so you need to clone the repository in to your local server and run it from there .
For eg.: As in my case, if you have put the "issuespostman" directory within "GitHub" directory in your WAMP or httpdocs directory; then you may access the application from your local server url :"http://localhost/GitHub/issuespostman/".
The present setup directory structure and defaults value is according to the local server url : "http://localhost/GitHub/issuespostman/".

The project's dependency is on Curl so that should be enabled on the Apache server intended to run this application.
Also , if you have setup the project clone with some other directory structure than the one I have specified in the example.
Then, you may require to set the base url according to the location in your local server you have the placed application in.

i.e. if you have placed the project directory to open like this in your local server with url :"http://localhost/issuespostman", then in the "issuespostman/appplication/bootstrap.php" file ,  you should search for these lines :
Kohana::init(array(
	'base_url'   => '/GitHub/issuespostman/',
    'index_file' => FALSE,
));
and replace  '/GitHub/issuespostman/' with  '/issuespostman/'

Similarly, in the "issuespostman/.htaccess" file, you should search for these lines :
RewriteBase /GitHub/issuespostman/
and replace  '/GitHub/issuespostman/' with  '/issuespostman/'

Further, the project at present can handle the issues being post to "github" and "bitbucket" repositories when supplied with user credentials with appropriate access rights and if you wish to add any other repository service beyond above 2, then the code may handle the request; provided that below 3 conditions are to be satisfied:-
1)exact request endpoint url to be specified in the repository url column along with any url parameters if required to be specified. (For other repository service beyond above 2)
2)title and content of the request issue parameter should be with name "title" and "content" in the actual service. (For other repository service beyond above 2)
3)The service API should accept POST request parameter in url encoded format concatenated with '&'. (For other repository service beyond above 2)

The above 3 conditions are of strict restricting nature for a repository service beyond "github" and "bitbucket" repositories to be handled with the existing code.
In order to make the code more dynamic, we should be asking the user for the above 3 conditions as input , then we can make the code to work with any repository service supplied without any restricting conditions.