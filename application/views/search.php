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
            <h1>Search</h1>
        </div>
        
        <div data-role = "content" >
        <h4>Search for films:</h4>
            <form action="#results" method = "post" class="ui-body ui-body-d ui-corner-all">
                <fieldset>
                    <div data-role="fieldcontain">
	                    <label for="course_name">Course title:</label>
	                    <input type="text" name="name" id="name" value=""/></br>
	                    <label for="catalog_num">Catalog number:</label>
	                    <input type="text" name="number" id="number" value=""/></br>
	                    <label for="instructor">Instructor's name:</label>
	                    <input type="text" name="instr" id="instr" value=""/></br>
	                    <label for="day">Day:</label>
	                    <input type="text" name="day" id="day" value=""/>
			        </div>
			    </fieldset>
			</form>
        </div>
    
    <div data-role="footer" data-theme="a">
		<h5>Project0 by Eszter Fodor</h5>
	</div><!-- /footer -->
</div><!-- /page search -->

</body>
</html>

