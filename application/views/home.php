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
    <div data-role="page"  id = "home" data-theme = "a">

	    <div data-role="header">
	        
		    <h1>
		    <div data-role="controlgroup" data-type="horizontal" >
		        <a href="/home" data-role="button" class="ui-btn-active">Home</a>
	            <a href="/search" data-role="button">Search</a>
	            <a href="/favs" data-role="button">Favourites</a>
	            <a href="/watch" data-role="button">Watch list</a>	
	        </div>
	        </h1>
	    </div><!-- /header -->

	    <div data-role="content" >
	        
                    <h4>Film tip:</h4>
                    <?php
                        foreach ($tip as $film): ?> 
                            <p><b>Title: </b><?php echo $film->title; ?></p>
                            <p><b>Genre: </b><?php echo $film->genre; ?></p>
                            <p><b>Rating: </b><?php echo $film->rating;?></p>
                    <?php endforeach; ?>
                    <p><img src = "<?php echo $film->picture; ?>"  width="100" height="150"/></p>
                    
                    <a href = "#details">View details</a>
        
	    </div><!-- /content -->
        <div data-role="footer" data-theme="a">
		    <h5>Project1 by Eszter Fodor</h5>
	    </div><!-- /footer -->
	    
    </div><!-- /page one -->
    
    <div data-role="page"  id = "details" data-theme = "a">

	    <div data-role="header">
	        
		    <h1>
		    <div data-role="controlgroup" data-type="horizontal" >
		        <a href="/home" data-role="button" class="ui-btn-active">Home</a>
	            <a href="/search" data-role="button">Search</a>
	            <a href="/favs" data-role="button">Favourites</a>
	            <a href="/watch" data-role="button">Watch list</a>	
	        </div>
	        </h1>
	    </div><!-- /header -->

	    <div data-role="content" >
	        
                    <h4>Film tip:</h4>
                    <?php
                        foreach ($tip as $film): ?> 
                            <p><b>Title: </b><?php echo $film->title; ?></p>
                            <p><b>Genre: </b><?php echo $film->genre; ?></p>
                            <p><b>Rating: </b><?php echo $film->rating;?></p>
                            <p><b>Cast: </b><?php echo $film->m_chars;?></p>
                            <p><b>Plot: </b><?php echo $film->plot;?></p>
                    <?php endforeach; ?>
                    <img src = "<?php echo $film->picture; ?>"  width="100" height="150"/>

	    </div><!-- /content -->
	    <div data-role="footer" data-theme="a">
		    <h5>Project1 by Eszter Fodor</h5>
	    </div><!-- /footer -->
	    
    </div><!-- /page details -->
    
</body>
</html>
