<?php
//------------------------- Dependency Inversion Principle ----------------------------

interface AuthServiceProvider{
    function authenticate();
}

class GoogleAuth implements AuthServiceProvider{
    function authenticate(){
        echo "Google Authentication Has Done";
    }  
}
class GithubAuth implements AuthServiceProvider{
    function authenticate(){
        echo "Github Authentication Has Done";
    }
}

class MaintainAuth{
    
    function authenticate($authentication){
      return $authentication->authenticate();
    }
}
$google = new GoogleAuth;
$github  = new GithubAuth;
$main = new MaintainAuth($github);
$main->authenticate($google);
