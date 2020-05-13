<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bootstrap</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div id="header" class="clearfix">
        <div id="logo" class="float-left">
            <a href="#">
                <img src="https://placem.at/people?w=112&h=100" alt="logo">
            </a>
        </div>
        <nav class="float-right">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="home.php">HOME+</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT+</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">CONTACT+</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="header">
        intro haha
    </div>
</body>

<script>
function getContent(url){
	$.get(url, {}, function(data){
		$('.header').html(data);
	}, 'html');
}

$(document).ready(function(){
	var url = $('.nav-item a').first().prop('href');
	getContent(url);

	$('.nav-item a').click(function(e){
		e.preventDefault();
		var url = $(this).prop('href');
		getContent(url);		
	});
});

</script>

</html>