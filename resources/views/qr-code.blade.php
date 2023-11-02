<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINH DẦU LỢI AN CHÍNH HÃNG</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&amp;display=swap" rel="dns-prefetch" data-optimized-fonts="true">
    <style>
        html,
        body {
            height: 100%;
            font-family: sans-serif, 'Roboto';
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
        .flex-col {
            flex-direction: column;
        }
        .mt-2 {
           margin-top: 15px
        }
    </style>
</head>

<body>
    <div class="flex-container flex-col">
        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->errorCorrection('H')->generate($url)) !!} ">
        <div class="mt-2">
            Quét Mã Qr Code
        </div>
    </div>
</body>

</html>