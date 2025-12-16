<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <header style="background-color: #ffffff; box-shadow: 0 1px 3px rgba(0,0,0,0.1); border-bottom: 1px solid #e5e7eb;">
            <nav style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                <div style="display: flex; justify-content: space-between; align-items: center; height: 64px;">
                    <div>
                        <a href="{{ url('/') }}" style="font-size: 24px; font-weight: bold; color: #111827; text-decoration: none;">
                            {{ config('Eco Educa Fortaleza', 'Eco Educa Fortaleza') }}
                        </a>
                    </div>

                    <div style="display: flex; gap: 24px;">
                        <a href="{{ url('/') }}" style="color: #374151; text-decoration: none; padding: 8px 12px; border-radius: 4px; transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#f3f4f6'" onmouseout="this.style.backgroundColor='transparent'">Home</a>
                        <a href="#" style="color: #374151; text-decoration: none; padding: 8px 12px; border-radius: 4px; transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#f3f4f6'" onmouseout="this.style.backgroundColor='transparent'">About</a>
                        <a href="#" style="color: #374151; text-decoration: none; padding: 8px 12px; border-radius: 4px; transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#f3f4f6'" onmouseout="this.style.backgroundColor='transparent'">Contact</a>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
    </body>
</html>