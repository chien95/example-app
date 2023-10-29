<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINH DẦU LỢI AN CHÍNH HÃNG</title>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
        }

        .flex-container {
            height: 100%;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="flex-container">
        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->errorCorrection('H')->generate(config('app.url'))) !!} ">
    </div>
</body>

</html>