<?php include("../include/head.php"); ?>

<head>

    <style>
        .contain {
            padding: 25px;
        }

        .card-title {
            font-size: 20px;
        }

        .card-footer {
            text-align: center;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include("../include/header.php"); ?>
        <?php include("../include/sidebar_emp.php"); ?>

        <div class="content-wrapper" style="min-height: 608px;">
            <div class="contain">

                <div class="cloneContainer">
                    <div class="clone">
                        <input type="text" id="name" placeholder="name">
                        <input type="text" id="price" placeholder="price">
                        <input type="button" class="clone-remove" value="-">
                    </div>
                </div>
                <input type="button" id="clone-add" value="+55">

            </div>
        </div>



    </div>

    <script src="../../assets/js/btn_add.js"></script>
    <script>


    </script>
</body>