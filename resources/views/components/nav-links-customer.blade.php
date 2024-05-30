<li class="nav-item">
    <a class="nav-link {{ (request()->path == 'dashboard') ? 'active' : '' }}" href="/customer/dashboard">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ (request()->path == 'menu') ? 'active' : '' }}" href="/customer/menu">Menu</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ (request()->path == 'pesan') ? 'active' : '' }}" href="/customer/pesan">Pesan</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ (request()->path == 'kontak') ? 'active' : '' }}" href="/customer/kontak">Kontak</a>
</li>