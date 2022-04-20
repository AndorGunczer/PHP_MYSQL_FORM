<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>PHP Form</title>
</head>
<body>
    <header>
        <h1>PHP Form</h1>
    </header>
    <main>
        <div class="container">
            <form action="insert.php" method="POST">
                <label for="name">Name </label>
                <input type="text" name="name" id="name" required>
                <br/>

                <label for="owner">Owner </label>
                <input type="text" name="owner" id="owner" required>
                <br/>

                <label for="species">Species </label>
                <input type="text" name="species" id="species" required>
                <br/>

                <label for="gender">Gender (f or m) </label>
                <input type="text" name="gender" id="gender" pattern="^(f|m|F|M)$" required>
                <br/>

                <label for="birth">Date of Brith </label>
                <input type="date" name="birth" id="birth" required>
                <br/>

                <label for="death">Date of Death </label>
                <input type="date" name="death" id="death">
                <br/>

                <button type="submit">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>