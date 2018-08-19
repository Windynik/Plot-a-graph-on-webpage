<?php

$command="E:\wamp64\www\webscreen\lol.py";
$result = exec($command,$output,$return);
echo $result


?>

<html>
    <head>
        <title>
            Screenshot taken!
    </title>

</script>
    <style>
        img {color: #69e5c4;
            font-family: fantasy;
                         
                         size: 100cm;
                         font-family:proxima-nova, sans-serif !important;
                         font-style: normal;
                         
                         font-weight:400;
                         letter-spacing: 3px;
                        text-transform: uppercase;
                        line-height: 1.5em;}
            body {
                background-image: url("https://i.redditmedia.com/pe00dmrZBe-DCa1zpv8aZVmrqO6qMjxBqV2cM_CwN38.png?w=1024&s=3fc15de478c7f8ce9b181660ca48426e");
                
                 
                background-size: cover; 
            }
                    input:focus {
                            outline:none;
                        }
                    
                     #Text1 {
                         width: 343px;
                         height: 21px;
                     }
                     #Text2 {
                         width: 345px;
                     }
                     #Button1 {
                         width: 94px;
                     }
                     #lel{
                         color: #69e5c4;
                         font-family: fantasy;
                         
                         size: 100cm;
                         font-family:proxima-nova, sans-serif !important;
                         font-style: normal;
                         
                         font-weight:400;
                         letter-spacing: 3px;
                        text-transform: uppercase;
                        line-height: 1.5em;
                       
    text-shadow: 0px 0px 35px #3ec3f8;
    
                     }
                     #passinp{
                        border: 2px solid rgb(70, 50, 182);
                         display: flex;
                        align-items: center;
                        justify-content: center;
                        border-radius: 25px;
                         background:cornflowerblue;
                         padding: 20px 60px; 
                        width: 200px;
                         height: 15px;
                         left: calc(50% -50px);
                         
                     }
                     #logininp{
                        border: 2px solid rgb(70, 50, 182);
                         display: flex;
                        align-items: center;
                        justify-content: center;
                        border-radius: 25px;
                         background:cornflowerblue;
                         padding: 20px 60px; 
                        width: 200px;
                         height: 15px;
                         left: calc(50% -50px);
                         
                     }
                     #button1{
                         align-items: center;
                         position: absolute;
                         justify-content: center;
                        border-radius: 15px 50px 30px;
                        border: 2px solid rgb(70, 50, 182);
                         background: rgba(67, 171, 240, 0.473);
                        padding: 20px 20px; 
                        width: 200px;
                        height: 15px;
                    

                     }
                 </style>
        <body>
    <form action="login11.php" method="POST">
                <h1 id="lel" style="font-size: 80px; text-align: center">Take a picture!</h1>  
    <div style="margin: auto; width: 50%; padding-left: 550px;">
            
            
            
      <input id="button1" style="color:bisque;font-family: sans-serif" type="submit" onclick="myFunction()" value="Click to take a Pic!">
    </form>
    
     
    </div> 
    <div style="margin: auto; padding-top: 100px; ">
    <img src="<?php echo $result ?>" alt="(Make sure you run the takeascreen.py program! :P)" />
    


        </body>
</head>
</html>