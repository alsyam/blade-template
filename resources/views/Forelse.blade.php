<html>

<body>
    <ul>
        @forelse ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @empty
            <li>Tidak punya hobi</li>
        @endforelse
    </ul>
</body>

</html>
