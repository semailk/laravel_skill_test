<!-- TODO Blade Задание 4: Сделать проверку авторизован пользователь или нет -->
@if(auth()->check())
{{--    Если будем успользовать bootstrap, то эти класы будут окрашивать background --}}
<div class="alert-success">{{ auth()->user()->id }}</div>
@else
    <div class="alert-danger"> 401 Unauthorized </div>
@endif
<!-- Если да то вывести ID пользователя -->
<!-- ID пользователя вывести внутри конструкции с проверкой -->
