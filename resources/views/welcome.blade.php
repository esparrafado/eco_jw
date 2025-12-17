@extends('layouts.app')
@section('content')
<style>
.bg-img{
    height: 250px;
    width: 100%;
    position: relative;
    background-image:
        radial-gradient(circle at left, black 0%, transparent 70%),
        url('{{ asset('storage/images/jw-igreja.jpg') }}');
    background-size: cover;
    background-position: center;
    overflow: hidden;
    border-bottom: solid;
    border-color: white;
    border-width: 10px;
}


.bg-img::before{
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.4);
}

.bg-img > *{
    position: relative;
    z-index: 1;
}


.Title{
   
    font-size: 40px;
    margin-bottom: 10px;
    margin-top: 10px;
}

.title-div{
    font-family:sans-serif;
    color:white; 
    position: absolute;
    top: 50%;
    left: 5%; 
    transform: translateY(-50%);
}



body{
    margin: 0;
    padding: 0;
}

</style>



    <div class="bg-img">
        <div class='title-div'>
            <p class="Title"> Eco Educa Fortaleza </p>
            <p class="Subtitle"> A realidade da natureza de Fortaleza</p>
        </div>
    </div>

    @include('segmentr', [
        'title' => 'Quem somos nós',
        'content' => 'Somos a turma de Desenvolvimento de Sistemas 3. Neste trabalho, buscamos aplicar nossos conhecimentos de tecnologia e trabalho em equipe com o objetivo de conscientizar sobre a importância da preservação da natureza e do cuidado com o meio ambiente.',
        'image' => '/storage/images/fototurma.jpeg'
    ])
    
    @include('segmentl', [
        'title' => 'Sustentabilidade',
        'content' => 'A sustentabilidade no cotidiano é essencial diante do crescimento populacional, do aumento do consumo e dos impactos ambientais. Pequenas atitudes diárias, como economizar recursos e reduzir desperdícios, contribuem para a preservação do meio ambiente e o bem-estar social.',
        'image' => '/storage/images/sustentavel.jpg'
    ])

    @include('segmentl', [
        'title' => 'Saúde Mental e Natureza',
        'content' => 'A relação entre saúde mental e meio ambiente natural é apresentada como uma forma de mutualismo, na qual o ser humano influencia a natureza e, ao mesmo tempo, é profundamente influenciado por ela. Os ambientes naturais contribuem significativamente para a promoção do bem-estar psicológico.',
        'image' => asset('storage/images/foto2.jpeg')
    ])

    @include('segmentr', [
        'title' => 'Preservação Ambiental',
        'content' => 'A preservação ambiental representa o cuidado do ser humano com a natureza, sendo essencial para manter o equilíbrio dos ecossistemas. Proteger o meio ambiente garante a conservação dos recursos naturais, a biodiversidade e melhores condições de vida para as gerações atuais e futuras.',
        'image' => asset('storage/images/foto3.jpeg')
    ])

    <div style="height: 50px;"></div>

    <!--GALERIA-->
    @include('gallery')
@endsection