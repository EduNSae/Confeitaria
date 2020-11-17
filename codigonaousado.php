<script>
        var sair = document.querySelector("#sair");

        sair.addEventListener("click", function() {
            <?php

            $fp = fopen($arquivo, "w");

            fwrite($fp, "1");

            fclose($fp);

            ?>
            window.location.href = "../login.html";
        });
    </script>