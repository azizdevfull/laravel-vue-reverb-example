<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>

<body>
    @vite(['resources/js/app.js'])
</body>

<script>
    setTimeout(() => {
        window.Echo.channel('posts')
            .listen('PostCreated', (e) => {
                console.log(e);
            })

    }, 200);
</script>

</html>
