<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>
            hello
        </h1>

    </div>
    <div>
        <h2>count</h2>
        <h2 id='counter'>
            {{-- {{$count}} --}}
        </h2>
    </div>
    <script>
        
      async function getCount() {
            const url = "http://127.0.0.1:8000/getCount";
            try {
                const response = await fetch(url);
                if (!response.ok) {
                throw new Error(`Response status: ${response.status}`);
                }

                const count = await response.json();

                div = document.getElementById("counter")

                div.inn = count;

                console.log(count);
            } catch (error) {
                console.error(error.message);
            }
        }
    getCount();
    </script>
</body>
</html>