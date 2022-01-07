<!-- Begin Page Content -->
<div class="container-fluid" style="text-align: center; position: absolute; top: 30%; left: 50%; transform: translate(-40%,-50%); width: 70%;">
<!-- <div class="container-fluid"> -->

    <style>
        @keyframes text {
            0%{
                color: #f8f9fc;
                margin-bottom: -95px;
            }
            30%{
                letter-spacing: 20px;
                margin-bottom: -95px;
            }
            85%{
                letter-spacing: 8px;
                margin-bottom: -95px;
            }
        }
    </style>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->

    <span style="
        text-transform: uppercase;
        display: block;
        font-size: 60px;
        font-weight: 700;
        letter-spacing: 8px;
        margin-bottom: 20px;
        background: #f8f9fc;
        position: relative;
        animation: text 3s 1;
        "
    >Selamat Datang</span>

    <span style="
        text-transform: uppercase;
        display: block;
        font-size: 30px;
        "
    ><?= $user['name']; ?></span>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->