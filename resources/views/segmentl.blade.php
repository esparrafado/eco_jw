    <style>
        .segmentl{
            
            width: 90%;
            height: 200px;
            position:relative;
            left: 50%;
            margin-top: 50px;
            transform: translateX(-50%);
            display: flex;
            flex-direction: row;
        }

        .segmentl-image{
            width: 30%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-image: url('{{ $image }}');
            border: 1px solid #ccc;
        }


        .textl{
            width: 60%;
            margin: 10px;
        }
    </style>

    <div class='segmentl'>

    <div class="segmentl-image">
        <img src="{{ $image }}" alt="{{ $title }}" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
        <div class='textl'>
            <h2>{{ $title }}</h2>
            <p>{{ $content }}</p>
        </div>

        

    </div>