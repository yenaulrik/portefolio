'use strict';

$(function(){
    alert("Site en construction ! N'hésitez pas à m'envoyer vos commentaires sur facebook ou directement : vincent.caraty@outlook.fr !")

    $('#projets article').on('click', function(e){
        let event
        console.log(e)
        if(!e.target.dataset['page']){
            event = e.currentTarget.dataset['page']
        }else{
            event = e.target.dataset['page']
        }
        switch (event) {
            case "gaming-site":
                window.open("projets/projet-gaming-site", '_blank');
                break;
            case "auto-newlife":
                window.open("projets/projet_Lagraa", '_blank');
                break;
            default:
                break;
        }
        
    })
})