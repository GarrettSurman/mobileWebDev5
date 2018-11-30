<?php

//adapted from detectmobilebrowsers.com

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

{

    header('Location:mobile/indexS.php');

}

$mobile=false;

?>


<!DOCTYPE html>

<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Church of the Unicorn</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">
    <link rel="stylesheet" href="css/styleLG.css" type="text/css">
    <link rel="stylesheet" href="css/menu.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="jquery-3.3.1.min.js"></script>
</head>

<body>





    <div id="content">

        <div>
            <?php   include 'menu.php';?>
            <div id="oilPainting">



                <h1 class="churchH1">The Church of the Unicorn </h1>


            </div>
        </div>
        <div class="churchContent no-gutters row">
            <div class="col-md-6 ">
                <h2>Positive Vibes </h2>
                <p>
                    The Church of the unicorn has been dedicated to celebrating the unicorn for as long as man has had the capacity to belive. The church sees the unicorn as a religious entity and praised it for all the magic it blesses on us. The unicorn boast its magic to all and those lucky enough to believe it in will soon start to see good fortune as the unicorn blesses us in the form of all pureness in this and other universes. The unicorn will forever be giving. It is our duty as patrons of the magical entity to accept and cherish all that is bestowed upon us. To give and to get in the name of the one horned lover of all is all that is asked and in return a lifetime of love and friendship.Feel free to read an excerpt of the sacred text and interperate however you like*<sup class="terms"> FOR A LIFETIME OF FRIENDSHIP A ONE TIME DONATION IS REQIRED.</sup>

                </p>



            </div>



            <div class="col-md-6">

                <img id="oldDrawing" class="img-fluid " src="imgz/unicornDrawingOld.jpg">
                <p style="text-align:center;">figure 1.1</p>




            </div>

            <!--<div class="donate row">

    <div class="col-md-3 ">
    </div>
    <div class="col-md-3 offset-md-4">




        THE CHURCH IS <u>SATIRICAL</u> IF YOU LIKE MY WORK PLEASE FEEL FREE TO BUY ME A COFFEE AND ILL KEEP THE WORK COMING.

        IF YOU ADD YOUR NAME AND EMAIL I WILL EMAIL YOU A PRINTABLE CHURCH CERTIFICATION WITH YOUR NAME ON IT.




    </div>
    <div class="col-md-3">
        <form id="donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_donations" />
            <input type="hidden" name="business" value="YFYK2G38AV8KU" />
            <input type="hidden" name="currency_code" value="USD" />
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
            <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
        </form>

    </div>

</div>-->
        </div>


    </div>










</body>

</html>
