<?php
require_once('config/loader.php');

?>





<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aiocup Register</title>
    <link rel="stylesheet" href="./styles/app.css">
</head>
<body> 
    
    <div>
        <div>
            <img class="w-full h-1/2 rounded-md" src="./images/bg.png" alt="aiocup photo">
        </div>
        <div class="container">
        <h4 class="bg-indigo-950 text-white font-Peyda text-center text-base/6 py-1.5 rounded-br-4xl rounded-tl-4xl font-bold">مسابقات آیوکاپ</h4>
        <p class="font-Peyda text-white text-center mt-10 text-sm/6">در سه سطح مقدماتی ،متوسط و پیشرفته</p>
        <p class="aiocup font-Peyda text-center mt-6 text-[13px]/[19.5px]">ثبت شماره موبایل برای شرکت در مسابقات بزرگ آیوکاپ:</p>
        <!-- sign in -->
        <!-- <form class="sign-in" method="POST" action="index.php"> -->
        <input id="phone-number"
        class="w-[330px] h-11 visited:text-center placeholder:text-base/6 font-Peyda block border-none outline-offset-0 mt-1.25 mx-auto bg-zinc-200 text-zinc-600 ring-1 ring-zinc-400 focus:ring-2 focus:ring-green-400 outline-none duration-300 placeholder:text-zinc-600 placeholder:opacity-50 rounded-full px-4 py-1 shadow-md focus:shadow-lg focus:shadow-green-400 placeholder:text-center focus:text-center"
        autocomplete="off"
        placeholder="شماره موبایل ---------09"
        maxlength="11"
        name="mobile"
        type="text"
        />
        <button onclick="send()" id="submit" class="flex justify-center items-center h-12 font-Peyda tracking-normal text-base/6 mt-[30px] bg-amber-200 mx-auto font-semibold" type="submit" name="signin"> ثبت شماره و مشاوره رایگان
        </button>
        <!-- </form> -->

        <p class="explaination font-peyda text-white bg-violet-800 mt-6 text-base/6 p-2.5 rounded-xl text-center">بعد از ثبت شماره موبایل، مشاورین به صورت رایگان برای شرکت در مسابقات کشوری آیوکاپ با شما تماس خواهند گرفت.</p>

        <div class="mt-3 explaination">
            <div class="menu1 bg-violet-800 rounded-t-lg p-2">
                <span class="font-peyda text-white mt-6 text-base/6 p-2.5 text-center">مسابقات آیوکاپ چیست؟</span>
            </div>
            <div class="submenu1 bg-violet-500 rounded-b-lg p-2 hidden">
                <span class="font-peyda text-white mt-6 text-base/6 p-2.5 text-justify">این مسابقات یک فرصت عالی برای برنامه نویسان و دانشجویان علاقمند به حل مسائل پیچیده و بهبود مهارتهای برنامه نویسی و هوش مصنوعی باشد.</span>
            </div>
            <div class="menu2 bg-violet-800 rounded-t-lg p-2 mt-1">
                <span class="font-peyda text-white mt-6 text-base/6 p-2.5 text-center">آیا در پایان مسابقات مدرک دریافت میکنیم؟</span>
            </div>
            <div class="submenu2 bg-violet-500 rounded-b-lg p-2 hidden">
                <span class="font-peyda text-white mt-6 text-base/6 p-2.5 text-justify">در پایان مسابقات به نفرات برگزیده در بخش چالش ها و ایده ها مدرک معتبر مسابقات کشوری خلاقیت،نوآوری و کارآفرینی و همچنین جوایز ارزنده اهدا خواهد شد.</span>
            </div>
        </div>
        <div class="bg-violet-800 rounded-lg my-3 overflow-hidden">
            <h2 class="font-Peyda text-center text-lg font-semibold text-fuchsia-600">نمونه مدرک</h2>
            <img src="./images/img-champ.png" alt="img-champ">
        </div>

    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script.js/script.js"></script>
    <script>
        function send() {
            // document.getElementById("btn_send").textContent="در حال پردازش...";
            mobile=document.getElementById('phone-number').value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    let ok = this.responseText;


                    if (ok=='1'){
                        swal({
                            title: 'شماره با موفقیت ثبت شد!',
                            text: 'منتظر تماس ما باشید',
                            icon: 'success',
                            button: 'اوکی',
                            timer: 3000
                        })
                    }

                    if (ok=='0'){
                        swal({
                        title: 'شماره خود را درست وارد کنید!',
                            text: 'لطفا مطابق نمونه شماره بگزارید',
                            icon: 'error',
                            button: 'اوکی',
                            timer: 3000
                        })
                    }
                }
            };
            xmlhttp.open("GET", "ajax.php?mobile=" + mobile , true);
            xmlhttp.send();
        }
    </script>
</body>   
</html>