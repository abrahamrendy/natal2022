        @include('header')
            
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <style type="text/css">

            .hide {
                display: none !important;
            }

            .m-login.m-login--5 {
                height: auto;
            }

            .left-side-bg {
                 background-position: center; 
                 background-size: 80%; 
                 background-color: #453939;
                 background-repeat: no-repeat;
            }

            #submit-btn:hover {
                background-color: #0C0D13;
                border-color: #0C0D13;
            }

            .datepicker {
                width: 100%;
            }

            select.form-control:not([size]):not([multiple]) {
                height: auto;
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

              input[type="date"]:before {
                content: attr(placeholder) !important;
                color: #aaa;
                margin-right: 0.5em;
              }
              input[type="date"]:focus:before,
              input[type="date"]:valid:before {
                content: "";
              }
        </style>
        <?php
            $arrRayon = array ("Pusat", 
                        "JIS",
                        "Sency",
                        "1A",
                        "1B",
                        "1C",
                        "1D",
                        "1E",
                        "1F",
                        "1G",
                        "1H",
                        "1I",
                        "CK 1",
                        "CK 2",
                        "CK 3",
                        "CK 4",
                        "CK 5",
                        "CK 7",
                        "CK 8",
                        "CK 9",
                        "2",
                        "3",
                        "4",
                        "5",
                        "7",
                        "8",
                        "9",
                        "10",
                        "11",
                        "12",
                        "13",
                        "14",
                        "15",
                        "17",
                        "18",
                        "19",
                        "70"
                        )
        ?>
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-login m-login--singin  m-login--5" id="m_login" >
                <div class="m-login__wrapper-2 m-portlet-full-height">
                    <div class="m-login__contanier">
                        <div class="m-login__signin">
                            <?php
                                $limit = false;
                                if (!$limit) {
                            ?>
                                <div class="m-login__head">
                                    <h3 class="m-login__title">
                                        <b>GBI SUKAWARNA<br>CHRISTMAS 2022</b><br>REGISTRATION
                                    </h3>
                                </div>
                                <form class="m-login__form m-form" action="{{ route('register') }}" method="POST" id="register-form">
                                    @csrf

                                    <input type="hidden" name="existed_id">

                                    <div class="form-group m-form__group">
                                        <input class="form-control m-input" type="email" placeholder="Email" name="email" required>
                                    </div>

                                    <div class="form-group m-form__group additional-info">
                                        <input class="form-control m-input" type="text" placeholder="Full Name" name="name" required>
                                    </div>

                                    <div class="form-group m-form__group additional-info">
                                        <select class="form-control" name="dept" id="dept">
                                            <option value="" disabled selected>DEPARTEMEN</option>
                                            <option value="Sekolah Minggu">Sekolah Minggu</option>
                                            <option value="JC">JC</option>
                                            <option value="Youth">Youth</option>
                                            <option value="Dewasa Muda">Dewasa Muda</option>
                                        </select>
                                    </div>
                                    <div class="form-group m-form__group additional-info">
                                        <select class="form-control" name="rayon" id="rayon">
                                            <option value="" disabled selected>RAYON</option>
                                            <?php
                                                foreach ($arrRayon as $key => $value) {
                                            ?>
                                                    <option value="<?php echo $value?>"><?php echo $value?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group m-form__group additional-info">
                                        <input class="form-control m-input" type="text" placeholder="Posisi" name="posisi" required>
                                    </div>
                                    <div class="form-group m-form__group additional-info">
                                        <input class="form-control m-input" type="text" placeholder="No.Telp/WA" name="phone" required>
                                    </div>

                                    <div class="m-login__form-action">
                                        <!-- <button type ="button" id ="check-btn" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air" style="font-weight: 400">
                                            CHECK
                                        </button> -->
                                        <button type ="submit" id="submit-btn" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air additional-info" style="font-weight: 400">
                                            SUBMIT
                                        </button>
                                    </div>
                                </form>
                            <?php } else { ?>
                                <div class="m-login__head">
                                    <div class="m-login__title">
                                        <span style="font-weight: 600; font-size: 2.2rem; color: #F36E23">SORRY!<br></span>
                                        <br>
                                        <p style="font-size: 1.7rem; font-weight: 500">
                                        We already reached the <span style="font-weight: 700; color: #F36E23">maximum quota</span> for balcony registration.

                                        <br><br>

                                        Soon, we are going to open registration for <span style="font-weight: 700; color: #F36E23">1st floor</span>. 
                                        <br><br>
                                        Please wait a moment.
                                        </p>
                                        <br>
                                        <span style="font-weight: 500; font-size: 1.7rem">God bless!</span>

                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        @include('footer')
    </body>
</html>
            
        