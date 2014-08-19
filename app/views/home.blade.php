<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>

</head>
<body>
<div class="welcome">

    @foreach($array as $a)
        <ul>{{ $a }}</ul>
    @endforeach

</div>
</body>
</html>
