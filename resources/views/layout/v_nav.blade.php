<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU</li>
    <li class="{{request()->is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
    <li class="{{request()->is('syarat') ? 'active' : ''}}"><a href="/syarat"><i class="fa fa-home"></i> <span>Syarat</span></a></li>
    <li class="{{request()->is('stok') ? 'active' : ''}}"><a href="/stok"><i class="fa fa-book"></i> <span>Stok Darah</span></a></li>
    <li class="{{request()->is('pendonor') ? 'active' : ''}}"><a href="/pendonor"><i class="fa fa-book"></i> <span>Pendonor</span></a></li>
    <li class="{{request()->is('resipen') ? 'active' : ''}}"><a href="/resipen"><i class="fa fa-book"></i> <span>Resipien</span></a></li>
    <li class="{{request()->is('user') ? 'active' : ''}}"><a href="/user"><i class="fa fa-book"></i> <span>User Pendonor</span></a></li>
    <li class="{{request()->is('user1') ? 'active' : ''}}"><a href="/user1"><i class="fa fa-book"></i> <span>User Resipien</span></a></li>
    
</ul>