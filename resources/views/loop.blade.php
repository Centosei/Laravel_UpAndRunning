@for ($i = 0; $i < $talk->slotsCount(); $i++)
    The number is {{ $i }}<br>
@endfor

@foreach ($talks as $talk)
    * {{ $talk->title }} ({{ $talk->length }} minutes)<br>
@endforeach

@while ($talks as $talk)
    {{ $item->orSomething() }}<br>
@endwhile

@forelse
    * {{ $talk->talk }} ({{ $talk->length }} minutes)<br>
@empty
    No talks this day.
@endforelse

<ul>
@foreach ($pages as $page)
    <li>{{ $loop->iteration }}: {{ $page->title }}
        @if ($page->hasChildren())
        <ul>
        @foreach ($page->chidren() as $child)
            <li>{{ $loop->parent->iteration }}
                .{{ $loop->iteration }}:
                {{ $child->title }}</li>
        @endforeach
        </ul>
        @endif
    </li>
@endforeach
</ul>
