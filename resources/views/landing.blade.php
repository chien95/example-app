<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINH DẦU LỢI AN CHÍNH HÃNG</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&amp;display=swap" rel="dns-prefetch" data-optimized-fonts="true">
    @vite(['resources/css/landing.css'])
</head>
<body>
    <div class="bg-hero-pattern md:max-w-xl md:m-auto md:border" style="background-image: url(./image/background_layout.png);">
        <div class="flex justify-center py-5 px-5">
            <img class="" src="{{ asset('image/211ca5105d866814a9b29199d2f08404.webp') }}">
        </div>
        <div class="bg-white mb-3 py-3 px-3">
            <h2 class="text-sm uppercase font-semibold">Tinh dầu lợi an</h2>
            <div class="flex">
                <div class="font-semibold text-blue-800 text-base">230,000đ <span class="font-bold text-[11px]">(Giá niêm yết)</span></div>
                <div class="ml-3 flex">
                    <img class="w-6" src="{{ asset('image/flas.svg') }}"> 
                    <span class="ml-1 text-sm self-center text-gray-500">Việt Nam</span>
                </div>
            </div>
            <div class="flex">
                <img class="w-7" src="{{ asset('image/ic_barcode_4x.webp') }}">
                <div class="ml-2 self-center">8938526890022</div>
            </div>
        </div>

        <div class="bg-white mb-3 py-3 px-3 flex justify-center">
            <div class="font-semibold text-blue-700 text-base">Serial: {{ data_get($rows, 'prefix') }}-{{ data_get($rows, 'suffix') }}</div>
        </div>

        <div class="bg-white mb-3 py-3 px-3 flex flex-row">
            <div class="w-6/12 border-r flex justify-center">
                <img class="w-6" src="{{ asset('image/qr_code.svg') }}"> 
                <div class="ml-2 text-center text-sm">
                    <p class="font-bold text-blue-700 ">1</p>
                    <p>Số lần quét</p>
                </div>
            </div>
            <div class="w-6/12 border-l flex justify-center">
                <img class="w-6" src="{{ asset('image/view_user.svg') }}"> 
                <div class="ml-2 text-center text-sm">
                    <p class="font-bold text-blue-700 ">0</p>
                    <p>Số người quét</p>
                </div>
            </div>
        </div>
        <div class="bg-white mb-3">
            <div class="bg-blue-500 text-white flex py-3 px-3 mb-3">
                 <div class="bg-white rounded self-baseline w-12">
                     <img class="m-auto" src="{{ asset('image/business-default.webp') }}">
                 </div>
                 <div class="ml-3">
                    <div class="flex mb-2">
                        <h3 class="text-base uppercase">Công ty tnnh Lợi an</h3>
                        <img class="w-5 self-baseline ml-1" src="{{ asset('image/icon_verified.svg') }}">
                    </div>
                    <p class="text-sm text-gray-300">Doanh nghiệp sở hữu</p>
                </div>
            </div>
            <div class="px-3 text-sm font-semibold">
                <!--<p class="pb-3  flex"> -->
                <!--    <img class="w-2 self-start pt-1.5" src="{{ asset('image/next.svg') }}">-->
                <!--    <a href="tel:0355527829" class="ml-3">0355527829</a> -->
                <!--</p>-->
                <p class="pb-3 flex">
                    <img class="w-2 self-start pt-1.5" src="{{ asset('image/next.svg') }}">
                    <span class="ml-3">Số 138/29/21 Y Ngông, Phường Tân Tiến, Thành phố Buôn Ma Thuột, Tỉnh Đắk Lắk, Việt Nam</span>
                </p>
            </div>
         </div>

        <div class="bg-white mb-3 py-3 px-3">
            <h2 class="text-blue-800 text-sm font-semibold mb-2">Chứng chỉ và chứng nhận</h2>
            <span class="ml-3 relative block bg-gray-50 pdf-icon bg-pdf" style="background-image: url(./image/lZ5SgDE.png)"></span>
        </div>

        <div class="bg-white mb-3">
           <div class="bg-blue-500 text-white flex py-3 px-3 mb-3">
                <div class="bg-white rounded self-baseline w-12">
                    <img class="m-auto" src="{{ asset('image/business-default.webp') }}">
                </div>
                <div class="ml-3">
                    <div class="flex mb-2">
                        <h3 class="text-base uppercase">Công ty tnnh Lợi an</h3>
                        <img class="w-5 self-baseline ml-1" src="{{ asset('image/icon_verified.svg') }}">
                    </div>
                    <p class="text-sm text-gray-300">Doanh nghiệp sở hữu</p>
                </div>
           </div>
           <div class="px-3 text-sm font-semibold">
                <p class="pb-3  flex">
                    <img class="w-2 self-start pt-1.5" src="{{ asset('image/next.svg') }}">
                    <span class="ml-3">Số 138/29/21 Y Ngông, Phường Tân Tiến, Thành phố Buôn Ma Thuột, Tỉnh Đắk Lắk, Việt Nam</span>
                </p>
                <p class="pb-3  flex"> 
                    <img class="w-2 self-start pt-1.5" src="{{ asset('image/next.svg') }}">
                    <span class="ml-3">Mã số thuế : 6001653355</span> 
                </p>
           </div>
        </div>
        <div class="bg-white mb-3 py-3 px-3">
            <h2 class="text-blue-800 text-base font-semibold mb-2">Mô tả sản phẩm tinh dầu lợi an</h2>
            <div class="text-sm">
                <p><b><u>*</u> Thành phần:</b><span> Trầu không (Piper betle) Màng tang (Litsea cubeba) Quế chi (Ramulus Cinnamoni) Long não (Cinnamomum camphora) Tràm (Melaleuca)…</span></p>
                <p><b>Xoa tinh dầu trong 10 phút để đạt hiệu quả tốt nhất.</b></p>
                <p><b><u>*</u> Công dụng:</b> Đặc trị ho đờm. Ho viêm phế quản. Ho cảm lạnh. Sổ mũi. Khò khè. Ngạt mũi. Mũi xanh mũi đặc.</p>
                <p><b><u>*</u> Cách dùng:</b> Lấy tăm bông ( cuộn thêm bông vào que tăm bông để tích được tinh dầu ) sau đó chấm vào lọ tinh dầu. Chấm bôi vào 2 vành trong lỗ mũi. Trán. Thái dương. Cổ lưng lòng bàn chân của bé. 3 đến 4 lần 1 ngày.</p>
                <p>
                    <b>Lưu ý:</b>  <br>
                    Sau khi bôi tinh dầu dùng ngón tay của mẹ matxa nhẹ vùng cổ. Lưng phía sau phổi. Và lòng bàn chân cho bé để thẩm thấu qua da cho bé. Nếu thời tiết lạnh đeo tất chân cho bé để giữ ấm. <br>
                    - Khi tắm cho 1-2 giọt vào chậu nước hòa tan tắm cho con để tăng đề kháng cho con. <br>
                    - Nếu con bị muỗi đốt côn trùng cắn hay mần ngứa dùng tăm bông bôi vào vùng ngứa cho con ngày 2 đến 3 lần.
                </p>
                <p>
                    <b><u>*</u> Cách sử dụng tinh dầu lợi an cho người lớn bị ho.</b> <br>
                    Há miệng ra dùng ngon tay chấm tinh dầu bôi sâu vào trong họng của mình 4 đến 5 lần trong ngày. Sau khi bôi xong kiêng ăn uống sau 20 phút. <br>
                        - Không sử dụng cho phụ nữ mang thai. <br>
                        - Không dùng tinh dầu nhỏ vào mũi hay mắt của con. 
                </p>
                <p><b><u>* </u>Lưu ý:  Nếu trường hợp bị đổ tinh dầu vào mũi hay mắt của con mẹ dùng miệng xử lý hút ngay mũi cho con và rửa mũi và mắt của con bằng nước muối sinh lý.</b></p> <br>
                <p class="underline ">Bảo quản: Nơi thoáng mát, tránh xa tầm tay trẻ em</p>
            </div>
        </div>
    </div>
</body>
</html>
