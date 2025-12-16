<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#CFE0BC;"> 
<style>
.bg-img{
    height:300px;
    background-image: url('{{ asset('storage/images/jw-igreja.jpg') }}');
    background-size: cover;
    background-position: center;
    border-radius: 30px;
    position: relative;
    overflow: hidden;
}

.bg-img::before{
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.4); /* cor do fundo */
}

.bg-img > *{
    position: relative;
    z-index: 1;
}
</style>

    <div class="bg-img">
        <h1 style="color:white;"> Eco educa fortaleza </h1>
    </div>
</body>
</html>
