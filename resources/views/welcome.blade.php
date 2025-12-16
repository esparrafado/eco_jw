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
            <p class="Subtitle"> As maravilhas da natureza de fortaleza, seilá mano</p>
        </div>
    </div>

    @include('segmentr', [
        'title' => 'Quem somos nós',
        'content' => 'Lfffsdfsdft, consectetur adipiscing elit. Pellentesque venenatis at lacus hendrerit ullamcorper. Fusce laoreet augue quis ligula molestie pretium. Integer hendrerit nec risus eu consectetur. Suspendisse at eleifend quam. Nullam magna lorem, lacinia quis mi nec, hendrerit volutpat metus. Cras volutpat lacinia justo, non viverra',
        'image' => asset('storage/images/example-image.jpg')
    ])
    
    @include('segmentl', [
        'title' => 'teste',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis at lacus hendrerit ullamcorper. Fusce laoreet augue quis ligula molestie pretium. Integer hendrerit nec risus eu consectetur. Suspendisse at eleifend quam. Nullam magna lorem, lacinia quis mi nec, hendrerit volutpat metus. Cras volutpat lacinia justo, non viverra',
        'image' => asset('storage/images/example-image.jpg')
    ])

    @include('segmentl', [
        'title' => 'tedasdadsadasste',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis at lacus hendrerit ullamcorper. Fusce laoreet augue quis ligula molestie pretium. Integer hendrerit nec risus eu consectetur. Suspendisse at eleifend quam. Nullam magna lorem, lacinia quis mi nec, hendrerit volutpat metus. Cras volutpat lacinia justo, non viverra',
        'image' => asset('storage/images/example-image.jpg')
    ])

    @include('segmentr', [
        'title' => 'teste',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis at lacus hendrerit ullamcorper. Fusce laoreet augue quis ligula molestie pretium. Integer hendrerit nec risus eu consectetur. Suspendisse at eleifend quam. Nullam magna lorem, lacinia quis mi nec, hendrerit volutpat metus. Cras volutpat lacinia justo, non viverra',
        'image' => asset('storage/images/example-image.jpg')
    ])

    <div style="height: 50px;"></div>

    <!--GALERIA-->
    @include('gallery')
@endsection