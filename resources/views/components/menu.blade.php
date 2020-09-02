<nav class="nav flex-column">
    @foreach ($list as $row)
<a href="#" class="nav-link {{ $isActive($row['label']) ? 'label' : '' }}">
        {{$row ['label'] }}
    </a>
    @endforeach
</nav>