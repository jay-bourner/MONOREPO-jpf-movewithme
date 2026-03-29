<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<div>
    <div style="margin: auto;">
        <img src="https://www.jpf-movewithme.co.uk/images/icons/jpfitnesslogoicon.png" alt="JP Fitness Logo" style="width: 200px; height: auto; object-fit: cover">
    </div>
    <div>
        <p>You have received a new message from the contact form on your website.</p>
        <p>Here are the details:</p>
        <p>
            Name: {{ $data['name'] }} <br>
            Email: {{ $data['email'] }} <br>
            Phone Number: {{ $data['number'] }} <br>
        </p>
        <p>Message:</p>
        <div style="background-color: #cdcccc; padding: 10px 20px; border-radius: 5px;">
            {!! nl2br($data['message']) !!}
        </div>
        <p>Regards, <br> Your Website Team</p>
    </div>
</div>
</body>
</html>
