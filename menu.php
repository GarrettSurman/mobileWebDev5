<?php 
echo"


<div id ='backCut'>
<p id='menuP'>MENU</p>
 </div>
 
    <nav role='navigation'>
     
    
        <div id='menuToggle'>
            <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
            <input type='checkbox' />

            <!--
    Some spans to act as a hamburger.
    
    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
            <span></span>
            <span></span>
            <span></span>
            
           
            <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
            <ul id='menu'>
            
           
                 
              <img id='menuUnicorn' src='imgz/unicorn-black.png'><br>
                  THE CHURCH OF THE UNICORN 
             <hr>
                <a href='index.php'>
                    <li>Home</li>
                </a>
                <a href='church.php'>
                    <li>Church</li>
                </a>
                <a href='texts.php'>
                    <li>Sacred Texts</li>
                </a>
                <a href='#'>
                    <li>Contact</li>
                </a>
    
                

         
                
            </ul>
           
       
        
    </nav>
    
    </div>"
    ;

?>
