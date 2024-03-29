<!DOCTYPE html> 
<html>

<html>
<head>
    <link href="/global_styling.css" rel="stylesheet" type="text/css" />
    <link href="/navigation_menu.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
  
</head>
<body>
    <div data-role="page"  id = "favs" data-theme = "a">

	    <div data-role="header">
	        
		    <h1>
		    <div data-role="controlgroup" data-type="horizontal" >
		        <a href="/home" data-role="button" >Home</a>
	            <a href="/search" data-role="button" >Search</a>
	            <a href="/favs" data-role="button" class="ui-btn-active">Favourites</a>
	            <a href="/watch" data-role="button" >Watch list</a>	
	        </div>
	        </h1>
	    </div><!-- /header -->

        <!--Print the favourites of the user-->
	    <div data-role="content" >
                    <h4>Favourites:</h4>
                    <?php
                        foreach ($fav as $film): 
                            foreach ($film as $film): ?> 
                                <p><b>Title: </b><?php echo $film->title; ?></p>
                                <img src = "<?php echo $film->picture; ?>" width="100" height="150" />
                            <?php endforeach; ?>
                    <?php endforeach; ?>
                    
        
	    </div><!-- /content -->
        <div data-role="footer" data-theme="a">
		    <h5>Project0 by Eszter Fodor</h5>
	    </div><!-- /footer -->
    </div><!-- /page one -->
    
</body>
</html>
