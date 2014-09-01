@extends('main')
@section('content')
  <div id="fb-root"></div>
  <div id="user">
  Hello 
  </div>
  
  <div id="beforelogin">
    One moment please...
  </div> 
@stop

@section('jssection')
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
(function(){
   FB.init({
    appId      : '272951952842742',
    xfbml      : true,
    version    : 'v2.0',
    satus : true
  });
  FB.getLoginStatus(function(response) {
      if (response.status === 'connected') 
      {
        console.log('Logged in.');
        FB.api(
            "/me",
            function (response) {
              if (response && !response.error) {
                console.log(response);
              }
            }
        );
        FB.api(
            "/me/friends",
            function (response) {
              if (response && !response.error) {
                console.log(response);
              }
            }
        );
      }
      else 
      {
          FB.login();
      }
  });
 }());
</script>
<script src="js/angular.min.js"></script>
<script src="js/app.js"></script>
@stop
