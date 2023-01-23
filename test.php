<div class="container">
        <div id="contacter">
          <h1 class="title">Contactez-nous</h1>
          <p class="paragraphe"> Veuillez remplir tous les champs</p>
            <form class="formulaire">
                <div class="group-form">
                    <input type="text" placeholder="Nom">
                </div>
                <div class="group-form">
                    <input type="email" placeholder="Mail"> 
                </div>
                <div class="group-form">
                    <input type="message" placeholder="Message">
                </div>
                <div class="group-form">
                    <input type="submit" class="contacter" value="Envoyer">
                </div>
            </form>
        </div>
    </div>




    /*Contacter*/

#contacter .title{
    color: #f56404;
}


.group-form{
    margin-bottom: 10px;
    position: relative;
}

.group-form input[type="text"],
.group-form input[type="email"],
.group-form input[type="message"]{
    width: 250px;
    height: 40px;
    border: 1px solid #707070;
    border-radius: 9999px;
    padding-left: 15px;
    outline: none;
    font-size: 16px;
}

#contacter .contacter{
    background: #dc5901;
    margin: 0 auto;
}

#contacter .contacter:hover{
    background: #fff;
    color: #dc5901;
    border: 1px solid #dc5901;
}
/* fin de la page contact */