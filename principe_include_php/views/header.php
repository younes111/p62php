<?php
/**
 * Utiliser une boucle for simple
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boucle for</title>
    <style>
        span {
            margin-left:2px;
        }
    </style>
</head>
<body>
<header>
<div>
    <?php
    echo "<nav><ul>


           <li class='if ($page_title==='acceuil'){
           echo'active'} '>   <a href='index.php' >acceuil</a> </li> 
           
           <li class='if ($page_title==='catalogue'){
           echo'active'}'> <a href='defines.php' >catalogue</a> </li> 
           
            <li class='if ($page_title==='contact'){
           echo'active'}'><a href='contact.php' >contact</a> </li> 
         
         
         
           </ul>
            </nav>";
    ?>
</div>

</header>
</body>
</html>
