        @include('header')
            
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <style type="text/css">
            .m-login.m-login--5 .m-login__wrapper-2 {
                padding-top: 6%;
            }

            .m-login.m-login--5 .m-login__wrapper-2 .m-login__contanier .m-login__head .m-login__title {
                color: #453939;
            }

            .resubmit-btn {
                background-color: #F36E23; 
                border-color: #F36E23;
                font-family: "Barlow" !important;
            }

            .resubmit-btn:hover {
                background-color: #453939;
                border-color: #453939;
            }

        </style>

        <style type="text/css">
            .font-header2{
                font-size: 2rem;
            }

            .font-text{
                font-size: 1.5rem;
            }

            .font-header{
                font-size: 2.2rem;
            }

            .left-side-bg {
                 background-position: center; 
                 background-size: 80%; 
                 background-color: #453939;
                 background-repeat: no-repeat;
            }

            @media (max-width: 768px) {
                .left-side-bg {
                     background-position: center; 
                     background-size: 50%; 
                     background-color: #453939;
                     background-repeat: no-repeat;
                     height: 60vw;
                }
            }
        </style>

        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-login m-login--singin  m-login--5" id="m_login" >
                <!-- <div class="m-login__wrapper-1 m-portlet-full-height left-side-bg" style="background-image: url({{asset('app/media/img//bg/base-img.png')}});">
                    
                </div> -->
                <div class="m-login__wrapper-2 m-portlet-full-height">
                    <div class="m-login__contanier">
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <div class="m-login__title">
                                    <span style="font-weight: 600; font-size: 2.2rem; color: #F36E23"><br><span style="font-size: 2.2rem; font-weight: 500; color: #453939">Nama anda telah terdaftar sebelumnya!</span></span>
                                    <br><br>

                                    <div class="font-text">
                                    <?php if (isset($user)) {?>
                                        Screenshot QR Code Registrasi ke dalam perangkat anda. QR code akan digunakan pada saat <span style="font-weight: 700">daftar ulang</span> di hari H.
                                        <br><br>
                                        <div style="background-color: white; padding: 10px">
                                            <img src="<?php echo asset('img/qrcodes/'.$user->qr_code.'.jpg'); ?>" width="35%"></img>
                                            <div>{{$user->registrant_name}}</div>
                                            <div>{{$user->qr_code}}</div>
                                            <br>
                                            <?php
                                                    $tempArr = explode(" ", $user->nama);
                                            ?>
                                            <div style="font-weight: 700">Tempat Ibadah: GBI Sukawarna cabang {{$tempArr[0]}}</div>
                                            <div style="font-weight: 700">Jam Ibadah: {{$tempArr[1]}} </div>
                                        </div>
                                    <?php } ?>

                                     Anda dapat mendaftarkan peserta lain dengan menekan tombol di bawah ini. 

                                    <br><br>
                                    <div>
                                        <a href="{{ route('index') }}">
                                            <button type="button" class="resubmit-btn btn btn-primary btn-lg m-btn m-btn--custom" style="">
                                                DAFTAR!
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        @include('footer')
    </body>
</html>
            
        