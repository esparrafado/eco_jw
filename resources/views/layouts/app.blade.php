<!DOCTYPE html>
<html lang="pt-BR">

<link href="cdn.jsdelivr.net" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="cdn.jsdelivr.net" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<header style="position: sticky; top: 0; z-index: 50; width: 100%; background-color: rgba(255, 255, 255, 0.95); backdrop-filter: blur(8px); border-bottom: 1px solid rgba(229,231,235,0.4);">
  <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px;">
    <nav style="display: flex; align-items: center; justify-content: space-between; padding: 16px 0;">
      <a href="{{ url('/') }}" style="display: flex; align-items: center; gap: 12px; text-decoration: none; transition: transform 0.3s; margin-left: -200px;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
        <div style="position: relative; width: 48px; height: 48px; border-radius: 50%; background-color: #f0fdf4; border: 2px solid #15803d; display: flex; align-items: center; justify-content: center;">
          <img src="{{ asset('storage/images/Logo.png') }}" alt="Logo" style="width: 220px; height: 220px; object-fit: contain; margin-top: 12px;">
        </div>
        <span style="font-family: serif; font-size: 30px; color: #1b4e0e; letter-spacing: -0.025em; font-weight: 500; padding-left: 10px">
          Eco Educa Fortaleza
        </span>
      </a>

      <ul style="display: flex; align-items: center; gap: 32px; list-style: none; margin: 0; padding: 0;">
        <li><a href="{{ url('/') }}" style="color: #1b4e0e; text-decoration: none; transition: color 0.2s; font-size: 14px; font-weight: 500; letter-spacing: 0.025em;" onmouseover="this.style.color='#15803d'" onmouseout="this.style.color='#1b4e0e'">Home</a></li>
        <li><a href="{{ url('/sobreNos') }}" style="color: #1b4e0e; text-decoration: none; transition: color 0.2s; font-size: 14px; font-weight: 500; letter-spacing: 0.025em;" onmouseover="this.style.color='#15803d'" onmouseout="this.style.color='#1b4e0e'">Sobre Nós</a></li>
        <li><a href="#" style="color: #1b4e0e; text-decoration: none; transition: color 0.2s; font-size: 14px; font-weight: 500; letter-spacing: 0.025em;" onmouseover="this.style.color='#15803d'" onmouseout="this.style.color='#1b4e0e'">Projetos</a></li>
        <li><a href="#" style="color: #1b4e0e; text-decoration: none; transition: color 0.2s; font-size: 14px; font-weight: 500; letter-spacing: 0.025em;" onmouseover="this.style.color='#15803d'" onmouseout="this.style.color='#1b4e0e'">Contato</a></li>
      </ul>
    </nav>
  </div>
</header>


<body>
    
    @yield('content')
    
</body>
<footer class="mt-auto" style="background-color: #6d8d6bff; color: white; padding: 40px 0;">

  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <h5>About Us</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis.</p>
      </div>
      <div class="col-md-4 mb-3">
        <h5>Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-white">Home</a></li>
          <li><a href="#" class="text-decoration-none text-white">Sobre</a></li>
          <li><a href="https://www.instagram.com/ecoeducafortaleza/" class="text-decoration-none text-white">Contato</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-3">
        <h5>Nosso instagram</h5>
        <ul class="list-inline social-icons">
          <li class="list-inline-item"><a href="https://www.instagram.com/ecoeducafortaleza/" class="text-white"><i class="bi bi-instagram"></i></a></li>
        </ul>
      </div>
    </div>
    <hr class="mb-4">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>&copy; 2025 Desenvolvimento de sitemas(2023-2025). Todos os direitos reservados.</p>
      </div>
    </div>
  </div>
</footer>
</html>