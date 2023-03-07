<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? '' : 'collapsed' }}" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('pegawai') ? '' : 'collapsed' }}" href="/pegawai">
                <i class="bi bi-person"></i>
                <span>Halaman Pegawai</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ Request::is('jabatan') ? '' : 'collapsed' }}" href="/jabatan">
                <i class="bi bi-person-vcard"></i>
                <span>Halaman Jabatan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ Request::is('kontrak') ? '' : 'collapsed' }}" href="/kontrak">
                <i class="bi bi-file-text"></i>
                <span>Halaman Kontrak</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->