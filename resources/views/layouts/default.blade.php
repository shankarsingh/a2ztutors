<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>A2Z Tutors</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
<!--script src="js/less-1.3.3.min.js"></script-->
<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
<link href="{{ URL::asset('public/css/bootstrap.min.css') }}?version=1-1" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/css/style.css') }}?version=1-1" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/css/font-awesome.min.css') }}?version=1-1" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="{{ URL::asset('public/js/jquery.min.js') }}?version=1-1"></script>
<script type="text/javascript" src="{{ URL::asset('public/js/bootstrap.min.js') }}?version=1-1"></script>
<script type="text/javascript" src="{{ URL::asset('public/js/scripts.js') }}?version=1-1"></script>

</head>
<body>
@include('layouts.header')


@include('layouts.footer')

</body>
</html>
