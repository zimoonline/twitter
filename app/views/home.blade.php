<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>

</head>
<body>
<div class="welcome">

    @foreach($tweets['statuses'] as $tweet)
        <ul>
            <li>{{ TwitterThu::linkify($tweet['text']) }}</li>
            <li>{{ TwitterThu::ago($tweet['created_at']) }}</li>
        </ul>

    @endforeach

</div>
</body>
</html>
