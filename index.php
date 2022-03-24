<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./assets/style/style.css">
</head>
<body>
    <header>
        <a href="https://github.com/iamthepoe"><h1>COOLRiculo</h1></a>
    </header>
    <main>
        <form method="POST" class="form">
            <label class="form-label">Nome:</label>
            <input type="text" name="name" class="form-input" required>
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-input" required>
            <label class="form-label">Número de telefone:</label>
            <input type="number" name="phonenumber" class="form-input" required>
            <label class="form-label">Idade:</label>
            <input type="number" name="age" class="form-input" required>
            <label class="form-label">Profissão:</label>
            <input type="text" name="profession" class="form-input" required>
            <label class="form-label">Descrição:</label>
            <textarea class="form-textarea" name="description" required></textarea>
            <button class="form-button" id="sendBtn">Enviar</button>
        </form>
    </main>
    <?php 
        if($_POST){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['phonenumber'];
            $age = $_POST['age'];
            $profession = $_POST['profession'];
            $description = $_POST['description'];
            $myresume = "//
                <!DOCTYPE html>
                    <html>
                        <head>
                            <meta charset='utf-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1'>
                            <title>$name's Resume</title>
                            <link rel='stylesheet' type='text/css' href='./assets/style/resumestyle.css'>
                        </head>
                        <body>
                            <header>
                                <a><h1>$name's Resume</h1></a>
                            </header>
                            <section class='resume'>
                                <div class='info'>
                                    <span style='color: #8524d1;'><b>Name:</b></span> $name<br>
                                    <span style='color: #8524d1;'><b>Age:</b></span> $age<br>
                                    <span style='color: #8524d1;'><b>Number:</b></span> $number<br>
                                    <span style='color: #8524d1;'><b>Email:</b></span> $email<br>
                                    <span style='color: #8524d1;'><b>Profession:</b></span> $profession<br>
                                </div>
                                <div class='description'>$description</div>
                            </section>
                            
                        </body>
                    </html>            
            ";
            $file = fopen("$name.html", 'a+');
            fwrite($file, $myresume);
            fclose($file);
        }    
    ?>
    <script type="text/javascript" src="./assets/script/script.js"></script>
</body>
</html>