   @foreach($menus as $menu)
        @if($menu->child_menus->count() == 0)
            <li>
                <a href="{{ route($menu->route_description) }}">
                    {!! $menu->font_awesome_description !!}
                    {{ $menu->name }}
                </a>
            </li>
        @else
            <li>
                <a href="#">
                    {!! $menu->font_awesome_description !!}
                    {{ $menu->name }}
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @include('sidebar_submenus', ['menus' => $menu->child_menus ])
                </ul>
            </li>
        @endif
    @endforeach