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
        justify-content: flex-start;
        align-items: flex-start;
        gap: 15px;
    }
    
    .photo-item {
        min-width: 250px;
        width: 250px;
        height: 180px;
        background-size: cover;
        background-position: center;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.3s;
        flex-shrink: 0;
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

    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.9);
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        max-height: 80%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover {
        color: #bbb;
    }
</style>

<div class='gallery'>
    <h2 class="gallery-tittle">Galeria de Fotos</h2>
    
    <div class="gallery-container">
        @php
           $images = [
                asset('storage/images/foto1.jpeg'),
                asset('storage/images/foto2.jpeg'),
                asset('storage/images/foto3.jpeg'),
                asset('storage/images/foto4.jpeg'),
                asset('storage/images/foto5.jpeg'),
                asset('storage/images/foto6.jpeg'),
                asset('storage/images/foto7.jpeg'),
                asset('storage/images/foto8.jpeg'),
                asset('storage/images/foto9.jpeg'),
                asset('storage/images/foto10.jpeg'),
                asset('storage/images/foto11.jpeg'),
                asset('storage/images/foto12.jpeg'),
                asset('storage/images/foto13.jpeg'),
                asset('storage/images/foto14.jpeg'),
                asset('storage/images/foto15.jpeg'),
                asset('storage/images/foto16.jpeg'),
                asset('storage/images/foto17.jpeg'),
                asset('storage/images/foto18.jpeg'),
                asset('storage/images/foto19.jpeg'),
                asset('storage/images/foto20.jpeg'),
                asset('storage/images/foto21.jpeg'),
                asset('storage/images/foto22.jpeg'),
                asset('storage/images/foto23.jpeg'),
           ] 
        @endphp
        
        @for($row = 0; $row < 3; $row++)
        <div class="gallery-row" id="row-{{ $row }}">
            @for($i = $row; $i < count($images); $i += 3)
            <div class="photo-item" style="background-image: url('{{ $images[$i] }}')"
                 onclick="openModal('{{ $images[$i] }}')"></div>
            @endfor
        </div>
        @endfor

        <button class="carousel-nav carousel-prev" onclick="moveAllRows(-1)"><</button>
        <button class="carousel-nav carousel-next" onclick="moveAllRows(1)">></button>
    </div>
</div>

<div id="imageModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage">
</div>

<script>
    let currentPosition = 0;

    function openModal(imageSrc) {
        document.getElementById('imageModal').style.display = 'block';
        document.getElementById('modalImage').src = imageSrc;
    }

    function closeModal() {
        document.getElementById('imageModal').style.display = 'none';
    }

    window.onclick = function(event) {
        const modal = document.getElementById('imageModal');
        if (event.target == modal) {
            closeModal();
        }
    }

    function moveAllRows(direction) {
        const totalImages = 23;
        const imagesPerRow = Math.ceil(totalImages / 3); // 8 imagens por linha
        const containerWidth = document.querySelector('.gallery-container').offsetWidth;
        const visibleImages = Math.floor(containerWidth / 265); // quantas imagens cabem na tela
        const maxPosition = Math.max(0, imagesPerRow - visibleImages);

        const newPosition = currentPosition + direction;

        if (newPosition < 0 || newPosition > maxPosition) {
            return;
        }

        currentPosition = newPosition;
        const itemWidth = 265; // 250px + 15px gap
        const translateX = -currentPosition * itemWidth;

        for (let i = 0; i < 3; i++) {
            document.getElementById(`row-${i}`).style.transform = `translateX(${translateX}px)`;
        }
    }
</script>

