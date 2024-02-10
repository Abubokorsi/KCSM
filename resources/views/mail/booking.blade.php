<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kazi Communation</title>
    <link href="{{asset('frontend')}}/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="card">
    <div class="card-header">
        <h3 class="text-success">Kazi Communation </h3>
        <h5>booking confirm Mail</h5>
    </div>
    <div class="card-body">
        <h5>Dear {{$booking['name']}} sir, Your order Confirm </h5>
        <p>Date: {{$booking['date']}} || Time: {{$booking['time']}}</p>
        <p>Person : {{$booking['person']}}</p>
        <p>Person : {{$booking['destination']}}</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscipit harum quos ipsam veniam dicta cupiditate obcaecati! Nostrum ad reiciendis deleniti ullam facere et deserunt fugit, rem nobis sunt magnam voluptatem tenetur iure quis, eius excepturi harum magni. Unde velit laboriosam quia nostrum fugit illo ullam! At quos molestias ducimus distinctio molestiae? Dolores assumenda maxime itaque accusamus minima quasi numquam accusantium debitis, optio impedit !</p>
        <p>Thanks Your enjoy on the time !</p>
    </div>
    <div class="card-footer"></div>
</div>
    
</body>
</html>