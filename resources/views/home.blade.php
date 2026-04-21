<h1>teste</h1>
<p> ola,{{ $name }}</p>
<ul>
    @foreach ($habits as $item)
        <li>
    {{ $item }}
        </li>
    @endforeach
</ul>
