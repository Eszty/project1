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

<div data-role = "page" id = "search" data-theme = "a">
        <div data-role = "header">
            <h1>
		    <div data-role="controlgroup" data-type="horizontal" >
		        <a href="/home" data-role="button">Home</a>
	            <a href="/search" data-role="button" class="ui-btn-active">Search</a>
	            <a href="/favs" data-role="button">Favourites</a>
	            <a href="/watch" data-role="button">Watch list</a>	
	        </div>
	        </h1>
	    </div>
        
        <div data-role = "content"  data-theme="a">
        <h4>Search for films:</h4>
            <form action="/results" method = "post" class="ui-body ui-body-d ui-corner-all">
                <fieldset>
                    <div data-role="fieldcontain" >
	                    <label for="title"><b>Film title: </b></label>
	                    <input type="text" name="name" id="title" value=""/></br>
	                </div>
	                 
	                    <label for="genre1" class="select"><b>Genre: </b></label>
	                    <select name="genre1">
	                    <option value="none">Select genre</option>
	                    <option value="action">Action</option>
	                    <option value="adventure">Adventure</option>
	                    <option value="animation">Animation</option>
	                    <option value="bio">Biography</option>
	                    <option value="comedy">Comedy</option>
	                    <option value="crime">Crime</option>
	                    <option value="documentary">Documentary</option>
	                    <option value="drama">Drama</option>
	                    <option value="fantasy">Fantasy</option>
	                    <option value="horror">Horror</option>
	                    <option value="romance">Romance</option>
	                    <option value="scifi">Sci-fi</option>
	                    <option value="war">War</option>
	                    <option value="western">Western</option>
	                    </select>
	                    
	                    <label for="genre2"></label>
	                    <select name="genre2">
	                    <option value="none">Select genre</option>
	                    <option value="action">Action</option>
	                    <option value="adventure">Adventure</option>
	                    <option value="animation">Animation</option>
	                    <option value="bio">Biography</option>
	                    <option value="comedy">Comedy</option>
	                    <option value="crime">Crime</option>
	                    <option value="documentary">Documentary</option>
	                    <option value="drama">Drama</option>
	                    <option value="fantasy">Fantasy</option>
	                    <option value="horror">Horror</option>
	                    <option value="romance">Romance</option>
	                    <option value="scifi">Sci-fi</option>
	                    <option value="war">War</option>
	                    <option value="western">Western</option>
	                    </select>
	                    
	                    <label for="genre3"></label>
	                    <select name="genre3">
	                    <option value="none">Select genre</option>
	                    <option value="action">Action</option>
	                    <option value="adventure">Adventure</option>
	                    <option value="animation">Animation</option>
	                    <option value="bio">Biography</option>
	                    <option value="comedy">Comedy</option>
	                    <option value="crime">Crime</option>
	                    <option value="documentary">Documentary</option>
	                    <option value="drama">Drama</option>
	                    <option value="fantasy">Fantasy</option>
	                    <option value="horror">Horror</option>
	                    <option value="romance">Romance</option>
	                    <option value="scifi">Sci-fi</option>
	                    <option value="war">War</option>
	                    <option value="western">Western</option>
	                    </select>	  
	                
	                    
	                <div data-role="fieldcontain">
	                    <label for="actor"><b>Actor: </b></label>
	                    <input type="text" name="actor" id="actor" value=""/></br>                  


			        </div>
			        
			            <label for="rating"><b>Rating: </b></label>
	                    <select name="rating">
	                    <option value="none">Select rating</option>
	                    <option value="one">1</option>
	                    <option value="two">2</option>
	                    <option value="three">3</option>
	                    <option value="four">4</option>
	                    <option value="five">5</option>
	                    <option value="six">6</option>
	                    <option value="seven">7</option>
	                    <option value="eight">8</option>
	                    <option value="nine">9</option>
	                    <option value="ten">10</option>
	                    </select>
			    </fieldset>
			</form>
			<p><a href="/results" data-role="button">Search</a></p>
        </div>
    
    <div data-role="footer" data-theme="a">
		<h5>Project1 by Eszter Fodor</h5>
	</div><!-- /footer -->
</div><!-- /page search -->

</body>
</html>

