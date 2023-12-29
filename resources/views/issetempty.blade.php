<html>



<body>
    <p>

        @isset($name)
            Hello, my name is {{ $name }}
        @endisset
    </p>

    <p>
        @empty($hobbies)
            I dont have any hobbies!
        @endempty
    </p>
</body>

</html>
