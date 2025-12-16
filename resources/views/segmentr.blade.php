    <style>
        .segmentd{
          
            width: 90%;
            height: 200px;
            position:relative;
            left: 50%;
            top: 50px;
            transform: translateX(-50%);
            display: flex;
            flex-direction: row;
        }

        .segmentd-image{
            width: 30%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-image: url('{{ $image }}');
            
        }


        .textr{
            width: 60%;
            margin: 10px;
        }
    </style>

    <div class='segmentd'>
        <div class='textr'>
            <h2>{{ $title }}</h2>
            <p>{{ $content }}</p>
        </div>

        <div class="segmentd-image"></div>

    </div>