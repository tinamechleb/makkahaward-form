<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>جائزة مكة للتميز</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/css.css')}}" rel="stylesheet">

        <!-- Styles -->
        <style>
            :root {
                --primary: {{$settings->primary_color}};
                --white: #ffffff;
            }
        </style>

    </head>
    <body class="antialiased justify-content-center d-grid pb-5">
        <img class="jusitfy-self-center" src="{{$settings->logo}}"/>
        <div class="row mx-0 justify-content-center text-align-end" style="width: 100vw;">
            @if($message)
            <h1 class="text-primary mt-5">{{$message}}</h1>
            @else
            <form action="{{ route('apply') }}" method="POST" class="col-md-6 col-11">
            {{ csrf_field() }}
                <h1 class="col-12 pt-3 text-align-center text-primary">ترشح للجائزة</h1>
                <label class="col-12 px-0 h5" for="name"><span class="text-primary">*</span> اسم الجهة</label>
                <input class="col-12" name="اسم_الجهة" id="name" required/>
                <label class="col-12 px-0 h5 mt-4" for="name2"><span class="text-primary">*</span>اسم المشروع المرشح</label>
                <input class="col-12" name="اسم_المشروع_المرشح" id="name2" required/>
                <label class="col-12 px-0 h5 mt-4" for="branch"><span class="text-primary">*</span> الفرع المراد الترشح له</label>
                <div class="row w-100 mx-0 align-items-center justify-content-end">
                    <label class="mb-0 px-2" for="1">التميز في خدمات الحج والعمرة</label><br>
                    <input type="radio" id="1" name="الفرع_المراد_الترشح_له" value="1" required>
                </div>
                <div class="row w-100 mx-0 align-items-center justify-content-end">
                    <label class="mb-0 px-2" for="2">التميزالإداري</label><br>
                    <input type="radio" id="2" name="الفرع_المراد_الترشح_له" value="2">
                </div>
                <div class="row w-100 mx-0 align-items-center justify-content-end">
                    <label class="mb-0 px-2" for="3">التميز العمراني</label><br>
                    <input type="radio" id="3" name="الفرع_المراد_الترشح_له" value="3">
                </div>
                <div class="row w-100 mx-0 align-items-center justify-content-end">
                    <label class="mb-0 px-2" for="4">التميز الاجتماعي</label><br>
                    <input type="radio" id="4" name="الفرع_المراد_الترشح_له" value="4">
                </div>
                <div class="row w-100 mx-0 align-items-center justify-content-end">
                    <label class="mb-0 px-2" for="5">التميز الاقتصادي</label><br>
                    <input type="radio" id="5" name="الفرع_المراد_الترشح_له" value="5">
                </div>
                <div class="row w-100 mx-0 align-items-center justify-content-end">
                    <label class="mb-0 px-2" for="6">التميز البيئي</label><br>
                    <input type="radio" id="6" name="الفرع_المراد_الترشح_له" value="6">
                </div>
                <div class="row w-100 mx-0 align-items-center justify-content-end">
                    <label class="mb-0 px-2" for="7">التميز العلمي والتقني</label><br>
                    <input type="radio" id="7" name="الفرع_المراد_الترشح_له" value="7">
                </div>
                <div class="row w-100 mx-0 align-items-center justify-content-end">
                    <label class="mb-0 px-2" for="8">التميز الإنساني</label><br>
                    <input type="radio" id="8" name="الفرع_المراد_الترشح_له" value="8">
                </div>
                <div class="row w-100 mx-0 align-items-center justify-content-end">
                    <label class="mb-0 px-2" for="9">التميز الثقافي</label><br>
                    <input type="radio" id="9" name="الفرع_المراد_الترشح_له" value="9">
                </div>
                <label class="col-12 px-0 h5 mt-4" for="reason"><span class="text-primary">*</span> سبب الترشح</label>
                <textarea class="col-12" name="سبب_الترشح" id="reason" required></textarea>
                <input class="col-3 text-black btn-primary mt-4 h5" type="submit" value="ارسال"/>
            </form>
            @endif
        </div>
    </body>
</html>