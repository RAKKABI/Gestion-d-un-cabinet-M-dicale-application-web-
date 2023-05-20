
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
  
   <title>contacte</title>

<style>
.contac form{
    border-radius: .5rem;
    background-color: var(--light-bg);
    padding: 2rem;
    margin: 0 auto;
    max-width: 50rem;
    height: 281px;
    width: 384px;
}
input{
    width: 377px;
    height: 28px;
    border-radius: 9px;
    margin-bottom: 12px;
}
textarea{
    width: 377px;
    height: 75px;
    border-radius: 9px;
    margin-bottom: 12px;
}
.contact form input{
   width: 100%;
   margin-top: 1rem;
   margin-bottom: 2rem;
   border-radius: .5rem;
   background-color: var(--white);
   padding:1.2rem 1.4rem;
   font-size: 1.7rem;
   color:var(--black);
   text-transform: none;
}
label{
    font-size:18px;
    font-style:
}
.link-btn{
    width: 83px;
    height: 34px;
    border-radius: 9px;
    margin-bottom: 12px;
    margin-left: 303px;
    margin-top: 6px;
    background: #2aa53dd6;
}
.form{
    width: 557px;
    height: 550px;
    border-radius: 5px;
    border: 2px solid   #0b8d25;

}
h2{
    text-align:center;
}
img{
    width: 476px;
  height: 318px;
  margin-left: 325px;

}
h1{
    text-align:center;  
}


</style>
<body>
<H2>contact</H2>
    <div id=" contact">
        <H3>contactez nous sur facebook <br>
    pour plus de contact , retouvez nous sur notre page facebook freetemplatezone</H3>
    <img src="logo2.jpg" alt="">
    </div>
<section class="contac" id="contac">

<h1 class="head">Envoyer Message</h1>

<form action="" class="form">
   <label>votre nom :</label>
   <input type="text" name="name" placeholder="enter your name" class="box" required>
   <label>votre e-mail:</label>
   <input type="email" name="email" placeholder="enter your email" class="box" required>
   <label>votre message:</label>
   <textarea name="messge" id="ms"></textarea>   
   <input type="submit" value="Envoyer" name="submit" class="link-btn">
</form>  

</section>
    
</body>
   
    

  

</html>
