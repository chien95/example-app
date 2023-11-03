<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINH DẦU LỢI AN CHÍNH HÃNG</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&amp;display=swap" rel="dns-prefetch" data-optimized-fonts="true">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <style>html, body { height: 100%; font-family: sans-serif, 'Roboto';}.select2 {margin-right:22px}</style>
</head>

<body>
    <div class="h-100 d-flex flex-column align-items-center justify-content-center">
        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->errorCorrection('H')->generate($url)) !!} ">
        <div class="mt-2 flex">
            @if(Request::is('create/*') )
                <select></select>
            @endif
            Quét Mã Qr Code
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $("select").select2({
            delay: 250,
            width: '150px',
            placeholder: "Vui lòng chon mã serial",
            allowClear: true,
            ajax: {
                url: '/api/select',
                dataType: 'json',
                type: 'POST',
                processResults: function (data) {
                    return {
                        results: data.rows.map(function(item)  {
                            return {
                                id: `${item.qr_code}`,
                                text: `${item.prefix}-${item.suffix}`,
                            }
                        }),
                        pagination: {
                            more: data.pagination
                        }
                    }
                }
                    
            },
            cache: true
        }).on('change', function (e) {
            location.href =  "{{  config('app.url')  }}/create/qr-code/" +  this.value
        });
    </script>
</body>

</html>