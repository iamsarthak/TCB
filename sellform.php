    <html><head>
          <!--Import Google Icon Font-->
          <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
              <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection">

          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
        
        <script src="https://apis.google.com/js/platform.js" async defer></script>
         <meta name="google-signin-client_id" content="863824403300-0pmlviiu0a6lhjfomej5d2mpcf51bgcq.apps.googleusercontent.com">

        <style type="text/css">
            .site-title{

                margin-bottom: 50px;
                text-transform: uppercase;
            }
            .site-title-the{
                margin-top: 100px;


            }

            .btn-large{
                font-family: "Keep Calm" !important;
                font-size: 20px !important;
            }
            
            
            .fa{
                color: red;
            }
            a:active,a:hover{
                color: crimson !important;
            }
            
            html,
body {
	margin:0;
	padding:0;
	height:100%;
}
#wrapper {
	min-height:100%;
	position:relative;
}
#header {
	background:#ededed;
	padding:10px;
}
#content {
	padding-bottom:100px; /* Height of the footer element */
}
#footer {
	background:transparent;
	width:100%;
	height:100px;
	position:absolute;
	bottom:0;
	left:0;
}
        </style>
        </head>

        <body>
          <!--Import jQuery before materialize.js-->
            
<div id="fb-root"></div>

  <script type="text/javascript">

        function onSignIn(googleUser) {
        	
 

  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());
  
$.ajax({
   type: "POST",
   url: 'data.php',
   async: false,
   data: JSON.stringify(profile),
  
   success: function(data){
      console.log(data);
      return true;
   },
   complete: function() {},
   error: function(xhr, textStatus, errorThrown) {
     console.log('ajax loading error...');
     return false;
   }
});

}

 

</script>
           
<script>
            
            
  // This is called with the results from from FB.getLoginStatus().
 
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
  	
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '630813243727306',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.2' // use version 2.2
  });



  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
   
   
    FB.api('/me',  {locale:'en_US', fields: 'name, email'}, function(response) {
       var status=1;
       
   $.ajax({
   type: "POST",
   url: 'data.php',
   async: false,
   data: JSON.stringify(response),
  
   success: function(data){
      console.log(data);
      return true;
   },
   complete: function() {},
   error: function(xhr, textStatus, errorThrown) {
     console.log('ajax loading error...');
     return false;
   }
});

    
});

   
  }
</script>

            
<div id="wrapper">
    <div id="content">
        
      <nav>
        <div class="nav-wrapper">

          <ul style="font-family:'Keep Calm';"id="nav-mobile" class="brand-logo center hide-on-med-and-down">
          <li><a href="sass.html">HOME</a></li>
            <li><a href="badges.html">INSIDE CB</a></li>
            <li><a href="collapsible.html">ABOUT</a></li>

             </ul>

        </div>
      </nav>
    
      
                
        
        <div class="container">
            <div class="row">
                <div class="col s1"></div>
                <div class="col s7">
               <div class="row">
                            <form class="col s12">
                              <div class="row">
                                <div class="input-field col s6">
                                  <input id="first_name" type="text" class="validate">
                                  <label for="first_name">Book Name</label>
                                </div>
                                </div>
                                  <div class="row">
                               <div class="input-field col s6">
                                 <label for="group1">Condition</label>
                                   <br>
                                   <p>
                                     
                                  <input name="group1" type="radio" id="test1" checked/>
                                  <label for="test1">Good</label>
                                </p>
                                <p>
                                  <input name="group1" type="radio" id="test2" />
                                  <label for="test2">Bad</label>
                                </p>
                                    <p>
                                  <input name="group1" type="radio" id="test3" />
                                  <label for="test2">Excellent</label>
                                </p>
                                      </div>
                                      
                                      
                                <div class="input-field col s6">
                                 <label for="group2">Edition</label>
                                   <br>
                                   <p>
                                     
                                  <input name="group2" type="radio" id="test1A" checked/>
                                  <label for="test1A">Latest</label>
                                </p>
                                <p>
                                  <input name="group2" type="radio" id="test2B" />
                                  <label for="test2B">Old</label>
                                </p>
                                    <p>
                                  <input name="group2" type="radio" id="test3C" />
                                  <label for="test3C">Quite Old</label>
                                </p>
                                      </div>
                                </div>
                                
                                <div class="row">
                                <div class="input-field col s12">
                                  <input id="first_name" type="text" class="validate">
                                  <label for="first_name">Any aditional details</label>
                                </div>
                                </div>
                         <button class="btn waves-effect waves-light" type="submit" name="action">POST AD                    
                        <i class="material-icons right">send</i>
                        </button>
                            </form>
                    </div>
                
                
                
                </div>
                 <div class="col s4"></div>
                
            
            
            </div>
               
        </div>    
               
            </div>
        
        </div>
        
        
        
    
    
    <div id="footer">
        
        <footer>
            
            <div class="container">
                <div class="row">
                
              <center>  <div class="col s6">
                     &copy 2015 The Campus Bazaar 
                    </div>
                    
                    <div class="col s6">
                    
                     Made with <i class="fa fa-heart"></i> by Team CB
                    </div>
                
                </div>
    
    
    </div>
            </footer>

		</div>
     
            </div>
            
            
        
    </body>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
          <script type="text/javascript" src="js/materialize.min.js"></script>
</html>