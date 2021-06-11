{{--
resources/views/template/partials/menu.blade.php
Description : Menu de mon Template
--}}
<div class="main-menu f-right d-none d-lg-block">
    <nav>
        <ul id="navigation">
          @foreach($items as $menu_item)
            <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
          @endforeach
        </ul>
    </nav>
</div>
