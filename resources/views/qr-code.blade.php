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
           
            @isset ($rows)
                <select>
                    @foreach($rows as $row)
                        <option @selected($code == data_get($row, 'qr_code')) value="{{ data_get($row, 'qr_code') }}">{{ data_get($row, 'prefix') }}-{{ data_get($row, 'suffix') }}</option>
                    @endforeach  
                </select>
            @endisset
            Quét Mã Qr Code
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $("select").select2({
            width: '150px',
            placeholder: "Vui lòng chon mã serial",
            allowClear: true
        }).on('change', function (self) {
            if (!this.value ) {
                return location.href = `/create/qr-code`
            }
            location.href = `/create/qr-code/${this.value}`
        })
    </script>
</body>

</html>