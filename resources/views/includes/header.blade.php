@section('header')
<!--Icono title-->
<link rel="icon" href="img/title.icon.jpg" sizes="16x16">
<!--Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.woff2">
<!-- Google Fonts LATO BOLD-->
<link rel="stylesheet" type="text/css" href="fonts/googleFonts.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="fonts/font-awesome.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
@endsection
