<html>
<head>
	<title>Pacesetters, Inc. &bull; Mobile Home Page</title>
	<style type="text/css">
	div {
		float: left;
		width: 33.3%;
		margin: 0;
		border: none;
		text-align: center;
		padding-bottom: 20px;
	}

	img {
		border: 1px solid black;
		margin: 2px;
		padding: 2px;
	}
	</style>
</head>
<body>
	@foreach( $bookmarks as $bookmark  )
	<div>
		<a href="{{ $bookmark['url'] }}"><img src="{{ URL::to('img/'.$bookmark['img']) }}"><br>{{ $bookmark['title'] }}</a>
	</div>
	@endforeach
</body>
</html>
