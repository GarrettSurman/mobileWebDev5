<?php

//adapted from detectmobilebrowsers.com

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

{

header('Location:useDesktop.php');

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

    <?php   include 'menu.php';?>
    <div>









    </div>


    <div id="content">


        <div class="churchContent no-gutters row">
            <div class="col-md-6 ">
                <h2>An Excerpt from the The book</h2>
                <p>
                    Lorem ipsum dolor sit amet, patrioque scripserit ne has. Vim ut porro alterum debitis, nam quod soleat saperet an, no sea tempor viderer fastidii. Eum soluta primis facilis et, ne omnes neglegentur necessitatibus vis, te eos nusquam vituperata. Has ei malorum probatus scribentur, id vel timeam vituperatoribus. Augue discere diceret vel at, magna bonorum disputationi sed at, quod inimicus maiestatis id nec. Eum ea inimicus principes.

                    Vocent nostrum pericula ad mei, ne pri repudiare dissentias. No veniam tamquam sea. Nam ea simul tantas putent, assentior delicatissimi te has. Eos adolescens quaerendum vituperatoribus ut, cum prima eripuit eu. Vel ut primis intellegam, vim cu ipsum convenire voluptaria.

                    Pro idque abhorreant reprimique at, per primis rationibus deterruisset ne. No qui everti deleniti, ius dico necessitatibus id. Rebum eripuit nec no. Ad postea referrentur his. Ex vix facer soleat, deleniti adversarium eam at.

                    Utroque blandit qui ex. Cu erat urbanitas appellantur sea. Mundi facilis vulputate cu sea, blandit delicata volutpat no nam, diceret percipit has cu. Ei eos viderer aliquid inermis. Eius vivendo ex mel, regione partiendo sit ea.

                    Ne graeco evertitur sea, persius convenire assentior in has. Pri et denique adipiscing. Et oratio diceret numquam pro. Integre veritus ut qui.

                    In molestiae efficiendi adversarium has, ornatus facilis cu mel, vel saepe hendrerit ut. Vel labores tacimates eu, enim dolores appareat ei eam. Pro amet numquam fabellas te, brute propriae vituperatoribus cu ius. Ex facilisi tacimates mea, cu pri nonumes voluptua abhorreant, vix mollis aliquid forensibus et. Prima nonumy numquam no mel.

                    Usu et oblique deseruisse reformidans. Pro ceteros theophrastus ut. Minimum voluptatum qui no, quod scripserit quo ei. Ei augue quodsi numquam pro. Ea mel animal ponderum invidunt, eu usu minim volutpat conclusionemque, pri id insolens conceptam dissentiet. Nam cu illud dissentiet. Mei no hinc eros idque.

                    Etiam albucius no mel, duo ubique facete an, te accusata suavitate cum. Vim soluta option ne. Vim ne elitr periculis, sit vide quodsi fierent cu. Ne diceret consequat persecuti has.

                </p>



            </div>



            <div class="col-md-6">

                <img id="oldBook" class="img-fluid " src="imgz/oldBook.png">
                <p style="text-align:center;">page 562 par 2</p>
                <p style="">No qui everti deleniti, ius dico necessitatibus id. Rebum eripuit nec no. Ad postea referrentur his. Ex vix facer soleat, deleniti adversarium eam at. Utroque blandit qui ex. Cu erat urbanitas appellantur sea. Mundi facilis vulputate cu sea, blandit delicata volutpat no nam, diceret percipit has cu. Ei eos viderer aliquid inermis. Eius vivendo ex mel, regione partiendo sit ea. Ne graeco evertitur sea, persius convenire assentior in has. Pri et denique adipiscing. Et oratio diceret numquam pro. Integre veritus ut qui. In molestiae efficiendi adversarium has, ornatus facilis cu mel, vel saepe hendrerit ut. Vel labores tacimates eu, enim dolores appareat ei eam. Pro amet numquam fabellas te, brute propriae vituperatoribus cu ius. Ex facilisi tacimates mea, cu pri nonumes voluptua abhorreant, vix mollis aliquid forensibus et. Prima nonumy numquam no mel. Usu et oblique deseruisse reformidans. Pro ceteros theophrastus ut. Minimum voluptatum qui no, quod scripserit quo ei. Ei augue quodsi numquam pro. Ea mel animal ponderum invidunt, eu usu minim volutpat conclusionemque</p>




            </div>


        </div>


    </div>










</body>

</html>
