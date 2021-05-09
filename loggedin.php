<?php
    ob_start();
    // include header.php file
    include ('loggedin_header.php');
?>


<!-- white strip -->
<div class="strip d-flex justify-content-center px-4 py-1 bg-light">
    <p class="font-rale font-size-12 text-black-100 m-0"><a href="#">Shop online</a> for fast, free delivery. Click here for <a href="#">support.</a></p>
    <!-- <div class="font-rale font-size-14">
        <a href="#" class="px-3 border-right border-left text-dark">Login</a>
        <a href="#" class="px-3 border-right text-dark">Whishlist (0)</a>
    </div> -->
</div>

<?php

    /*  include banner area  */
        include ('Template/_banner-area.php');
    /*  include banner area  */

    /*  include top sale section */
        include ('Template/_top-sale.php');
    /*  include top sale section */

    /*  include special price section  */
         include ('Template/_special-price.php');
    /*  include special price section  */

    /*  include new phones section  */
        include ('Template/_new.php');
    /*  include new phones section  */

?>


<?php
// include footer.php file
include ('footer.php');
?>