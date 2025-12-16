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
            
        }


        .textl{
            width: 60%;
            margin: 10px;
        }
    </style>

    <div class='segmentl'>

    <div class="segmentl-image"></div>
        <div class='textl'>
            <h2>{{ $title }}</h2>
            <p>{{ $content }}</p>
        </div>

        

    </div>