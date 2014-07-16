<?php
/*
 * code to post issues to github and bitbucket with using HTTP APIs accepting parameter as:
The script should accept the the following parameters:
1)Username
2)Password
3)Repository url
For github, something like https://github.com/:username/:repository
For bitbucket, something like https://bitbucket.org/:username/:repository
4)Issue title
5)Issue description


Example Usage
Here's what it might look like to run the script:
$ create-issue -u jdoe -p secret https://github.com/example/test "The title of my issue" "Here's what I did to
reproduce the problem"
$ create-issue -u jdoe -p secret https://bitbucket.org/example/test "Another issue title" "Here's some more
reproduction steps"

**write a command line script that can post
issues to Github and Bitbucket repositories. The same script should work for both Github and Bitbucket.**
 * */
#idea 1 is to simple make the html for, to acceppt the parameters and 2 http api calls to post the issues to respective repositories
#idea 2 is to give a big text area to input the parameters in the form of bash shell commands so as to accept the parameters and 2 http api calls to post the issues to respective repositories
//try
{
$curl_post_data = '';

$fields = array(
    'title' => "create issue 2",
    'body' => "I am going to get this done twice.", //later On here some logic is added to work with DB

);
//foreach($fields as $key=>$value) {
//    $curl_post_data .= $key.'='.$value.'&';
//}
//$curl_post_data = rtrim($curl_post_data, '&');
$curl_post_data = json_encode($fields);
print_r($curl_post_data);
$service_url = 'https://api.github.com/repos/debraj1990/issuespostman/issues';
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=UTF-8;','Accept: application/json' ));
curl_setopt($curl, CURLOPT_USERAGENT, "debraj1990");
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_USERPWD, "debraj1990:mobilegithub66"); //Your credentials goes here
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate

$curl_response = curl_exec($curl);
$response = json_decode($curl_response);
curl_close($curl);

var_dump($curl_response);
var_dump($response);
}
//catch(Exception e){
//    var_dump(e);
//}
?>