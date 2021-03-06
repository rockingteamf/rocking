<title>Laravel Timezones</title>

<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

<style>
    html, body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 100;
        font-family: 'Lato';
    }

    .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    .content {
        text-align: center;
        display: inline-block;
    }

    .title {
        font-size: 96px;
    }
</style>


<div class="container">
    <div class="content">
        <div class="title">Contact us any time</div>
		<form action="{{route('contact')}}" method="POST">
			@csrf
    			<input type="text" name="name" placeholder="Enter your name">
			<input type="email" name="email" placeholder="Enter your email">
			<textarea name="message" cols="30"  rows="10" placeholder="Your query"></textarea>
			<input type="submit" value="submit" >
		</form>
    </div>
</div>