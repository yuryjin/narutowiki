<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"/>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Autocomplete With MySQLi & jQuery</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="form-group">
				<form action="" method="POST">
					<label>Search Product here...</label>
					<div class="auto-widget">
                        <input class="form-control" id="search" type="text" name="product"/>
                        <button class="primary" id="target">go!</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#search").autocomplete({
			source: 'search.php',
			minLength: 0,
		});
	});
</script>
<script>
      $("#target").click(function () {
        alert("Handler for .click() called.");
        if (document.getElementById("tags").value == "naruto") {
          document.location.href =
            "https://naruto.fandom.com/ru/wiki/%D0%9D%D0%B0%D1%80%D1%83%D1%82%D0%BE_%D0%A3%D0%B7%D1%83%D0%BC%D0%B0%D0%BA%D0%B8";
        }
        if (document.getElementById("tags").value == "sakura") {
          document.location.href =
            "https://naruto.fandom.com/ru/wiki/%D0%A1%D0%B0%D0%BA%D1%83%D1%80%D0%B0_%D0%A5%D0%B0%D1%80%D1%83%D0%BD%D0%BE";
        }
        if (document.getElementById("tags").value == "sasuke") {
          document.location.href =
            "https://naruto.fandom.com/ru/wiki/%D0%A1%D0%B0%D1%81%D0%BA%D0%B5_%D0%A3%D1%87%D0%B8%D1%85%D0%B0";
        }
        if (document.getElementById("tags").value == "itachi") {
          document.location.href =
            "https://naruto.fandom.com/ru/wiki/%D0%98%D1%82%D0%B0%D1%87%D0%B8_%D0%A3%D1%87%D0%B8%D1%85%D0%B0";
        }
      });
    </script>
</html>