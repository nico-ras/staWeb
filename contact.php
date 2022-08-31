<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STA Contacto</title>
    <link rel="icon" class="ico" href="assets/img/favicon-32x32.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    
    <script id="replace_with_navbar" src="assets/js/nav.js"></script>

    <header class="text-center mt-2">
        <h3 class="mt-5">Dejanos tus consultas</h3>
        <h3>en el formulario de contacto</h3>
        
        
    </header>
    
    <section>
        <form action="contact.php" method="post" class="rounded text-center border border-primary">
            <input type="text" id="formName" placeholder="Nombre" name="name" required="" class="rounded">
            <input type="text" id="formCompany" placeholder="Empresa (Opcional)" name="company" class="rounded">
            <input type="email" id="formEmail" placeholder="Tu email" name="email" required="" class="rounded">
            <input type="text" id="formSubject" placeholder="Asunto" name="subject" required="" class="rounded">
            <textarea name="message" id="formMessage" placeholder="Mensaje" cols="30" rows="10" required="" class="rounded"></textarea>
            <input type="submit" id="formSubmit" name="send" class="rounded">
        </form>
        

    <?php

       include("email.php");

    ?>    
    </section>
    
    

    <script id="replace_with_footer" src="assets/js/footer.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js" type="module"></script>
</body>
</html>