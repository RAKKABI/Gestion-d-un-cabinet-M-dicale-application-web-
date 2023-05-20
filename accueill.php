<!DOCTYPE html>
    <html lang="en">
    <head>
     <title>Page title</title>
     <style type="text/css">
     html,body{
        margin:0;
        padding: 0;
        width:100%;
        height:100%;
     }
     #entete{
        margin:0;
        padding: 0;
        width:100%;
        height:50%;
        overflow:hidden;
        z-index: 1;
    }
    .video_entete{
        left:0;
        width:100%;
        height:40%;
        position:absolute;
        z-index: ;
    }


    </style>
    </head>
    <body>
  
     <div id="entete">
        <video autoplay="autoplay" class="video_entete" >
            <source src="Explanatory video_ Healthcare market.mp4" type="video/mp4"/>
        </video>
        <p class="nomsite">Notre cabinet medical</p>
        <div id="cabinet">
            <form name="medical" method="post" action="">
                <input type="text" id="motcle" name="motcle" placeholder="Recherche par mots..."/>
                <input type="submit" class="btfind" name="btnsubmit" value="Recherche"/>


            </form>
            
        </div>
        
     </div>
    
    </body>
    </html>