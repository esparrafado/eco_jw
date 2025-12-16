<style>
    .gallery {
        width: 90%;
        margin: 50px auto;
        font-family: 'Segoe UI';
        position: relative;
    }

    .gallery-tittle {
        text-align: center;
        font-size: 32px;
        margin-bottom: 30px;
        color: #333;
    }

    .gallery-container {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }

    .gallery-row {
        display: flex;
        margin-bottom: 15px;
        transition: transform 0.5s ease;
        justify-content: center;
    }

    .photo-item {
        min-width: 250px;
        height: 180px;
        margin-right: 15px;
        background-size: cover;
        background-position: center;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.3s;
    }

    .photo-item:last-child {
        margin-right: 0;
    }

    .photo-item:hover {
        transform: scale(1.05);
    }

    .carousel-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0,0,0,0.6);
        color: white;
        border: none;
        padding: 15px 20px;
        cursor: pointer;
        border-radius: 50%;
        font-size: 24px;
        z-index: 10;
    }

    .carousel-nav:hover {
        background: rgba(0,0,0,0.8);
    }

    .carousel-prev { left: 10px; }
    .carousel-next { right: 10px; }
</style>

<div class='gallery'>
    <h2 class="gallery-tittle">Galeria de Fotos</h2>
    
    <div class="gallery-container">
        @php
           $images = [
                asset('storage/images/example-image.jpg'),
                asset('storage/images/example-image.jpg'),
                asset('storage/images/example-image.jpg'),
                asset('storage/images/example-image.jpg'),
                asset('storage/images/example-image.jpg'),
                asset('storage/images/example-image.jpg'),
                asset('storage/images/example-image.jpg'),
                asset('storage/images/example-image.jpg'),
                asset('storage/images/example-image.jpg'),
                asset('storage/images/example-image.jpg'),
                asset('storage/images/example-image.jpg'),
                asset('storage/images/jw-igreja.jpg'),
           ] 
        @endphp
        
        @for($row = 0; $row < 3; $row++)
        <div class="gallery-row" id="row-{{ $row }}">
            @for($i = $row; $i < count($images); $i += 3)
            <div class="photo-item" style="background-image: url('{{ $images[$i] }}')"></div>
            @endfor
        </div>
        @endfor

        <button class="carousel-nav carousel-prev" onclick="moveAllRows(-1)"><</button>
        <button class="carousel-nav carousel-next" onclick="moveAllRows(1)">></button>
    </div>
</div>

<script>
    let currentPosition = 0;

    function moveAllRows(direction) {
        const totalColumns = 4;
        const visibleColumns = 3;
        const maxPosition = totalColumns - visibleColumns;

        const newPosition = currentPosition + direction;

        // Para no limite sem loop
        if (newPosition < 0 || newPosition > maxPosition) {
            return; // Não faz nada se tentar passar dos limites
        }

        currentPosition = newPosition;
        const itemWidth = 265;
        const translateX = -currentPosition * itemWidth;

        for (let i = 0; i < 3; i++) {
            document.getElementById(`row-${i}`).style.transform = `translateX(${translateX}px)`;
        }
    }
</script>
