@php
$links = [
    [
        "href" => "dashboard",
        "text" => "Dashboard",
        "is_multi" => false,
    ],
    [
        "href" => [
            [
                "section_text" => "Multimedia",
                "section_list" => [
                    ["href" => "material_mulmed", "text" => "Material Multimedia"],
                    // ["href" => "user.new", "text" => "Buat User"]
                ]
            ],
            [
                "section_text" => "Gudang",
                "section_list" => [
                    ["href" => "material_gudang", "text" => "Material Gudang"],
                    // ["href" => "user.new", "text" => "Buat User"]
                ]
            ]
        ],
        "text" => "Detail Material",
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "New",
                "section_list" => [
                    ["href" => "new", "text" => "New Data"],
                    ["href" => "new.new", "text" => "New Data 2"]
                ]
            ]
        ],
        "text" => "New Section",
        "is_multi" => true,
    ],
];
$navigation_links = array_to_object($links);
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">

        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm ">
            <a href="{{ route('dashboard') }}" class="d-flex align-items-center justify-content-center">
                {{-- <img class="d-inline-block" width="32px" height="30.61px" src="" alt=""> --}}
                <img src="{{ asset('img/logo.png') }}" style="width: 75%;max-height: 42px;height: auto;">
            </a>
        </div>

        @foreach ($navigation_links as $link)
        <ul class="sidebar-menu">
            <li class="menu-header">{{ $link->text }}</li>
            @if (!$link->is_multi)
            <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route($link->href) }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            @else
                @foreach ($link->href as $section)
                    @php
                    $routes = collect($section->section_list)->map(function ($child) {
                        return Request::routeIs($child->href);
                    })->toArray();

                    $is_active = in_array(true, $routes);
                    @endphp

                    <li class="dropdown {{ ($is_active) ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-chart-bar"></i> <span>{{ $section->section_text }}</span></a>
                        <ul class="dropdown-menu">
                            @foreach ($section->section_list as $child)
                                <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            @endif
        </ul>
        @endforeach
    </aside>
</div>
