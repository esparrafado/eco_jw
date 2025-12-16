@extends('layouts.header')
@section('content')
<style>
body {
    margin: 0;
    padding: 0;
    background-color: #CFE0BC;
    font-family: Arial, sans-serif;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
}

.title {
    text-align: center;
    font-size: 48px;
    color: #1b4e0e;
    margin-bottom: 30px;
    font-weight: bold;
}

.description {
    text-align: center;
    font-size: 18px;
    color: #333;
    margin-bottom: 50px;
    line-height: 1.6;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.sections {
    display: flex;
    gap: 40px;
    justify-content: center;
    flex-wrap: wrap;
}

.section {
    background: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    text-align: center;
    min-width: 300px;
    max-width: 400px;
}

.section h3 {
    color: #1b4e0e;
    font-size: 24px;
    margin-bottom: 20px;
}

.image-placeholder {
    width: 100%;
    height: 200px;
    background-color: #f0f0f0;
    border: 2px dashed #ccc;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    font-size: 16px;
}
</style>

<body>
    <div class="container">
        <h1 class="title">Sobre Nós</h1>
        
        <p class="description">
            Somos o Eco Educa Fortaleza, um grupo de alunos do 3° ano da EEEP Professor Onélio Porto, do curso de Desenvolvimento de Sistemas, orientados pela nossa professora de Biologia, Michele Andrade.
        </p>
        
        <div class="sections">
            <div class="section">
                <h3>Turma DS 2023-2025</h3>
                <div class="image-placeholder">
                    Foto da Turma
                </div>
            </div>
            
            <div class="section">
                <h3>Professora Michele Andrade</h3>
                <div class="image-placeholder">
                    Foto da Professora
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
