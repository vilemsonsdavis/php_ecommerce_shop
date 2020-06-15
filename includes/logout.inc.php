<?php
    session_start();
    //iznīcinam esošo sesiju un atgriežamies home lapā
    session_destroy();

    header("Location: ../home.php");