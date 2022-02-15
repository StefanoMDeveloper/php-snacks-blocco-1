<!-- Prendere un paragrafo abbastanza lungo, 
contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

    $paragrafo = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error suscipit, nulla tempore a dolores modi minima similique perspiciatis animi esse doloribus rem voluptatum deleniti consequuntur, tenetur fugit excepturi et veniam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe modi enim, placeat, debitis ipsum temporibus magnam ratione error nulla id, veritatis libero. Nesciunt quo obcaecati libero qui molestias eum repudiandae? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti alias quos, quaerat nisi assumenda itaque amet fugit? Quisquam debitis aspernatur possimus ea, quas sunt non maxime aperiam dolore eius ipsam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolorum ducimus eveniet facilis eum consectetur consequatur, est repellendus voluptatem officiis soluta. Hic esse ab molestias libero quidem voluptate minus adipisci!";

    $pezzi = explode(".", $paragrafo);

    for ($i=0; $i < sizeof($pezzi); $i++) { 
        echo $pezzi[$i].".<br><br>";
    }

?>