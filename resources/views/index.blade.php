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
            $arrRayon = array ("Aruna 1", 
                        "Aruna 2",
                        "Aruna 3",
                        "Aruna 4",
                        "Aruna 5",
                        "Baranangsiang 1",
                        "Baranangsiang 2",
                        "Baranangsiang 3",
                        "Baranangsiang 4",
                        "Baranangsiang 5",
                        "Gedebage",
                        "Regency 1",
                        "Regency 2",
                        "Regency 3",
                        "Regency 4",
                        "Regency 5",
                        "Piset 1",
                        "Piset 2",
                        "Piset 3",
                        "Soekarno Hatta 1",
                        "Soekarno Hatta 2",
                        "Soekarno Hatta 3",
                        "Soekarno Hatta 4",
                        "Yello",
                        "Lainnya"
                        );

            $arrIbadah = array ("Aruna 08.00 (0/1125)",
                        "Aruna 10.30 (0/1125)",
                        "Aruna 15.00 (0/1125)",
                        "Aruna 17.30 (0/1125)",
                        "Baranangsiang 08.00 (0/1325)",
                        "Baranangsiang 10.30 (0/1325)",
                        "Baranangsiang 15.00 (0/1325)",
                        "Baranangsiang 17.30 (0/1325)",
                        );
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

                                    <div class="form-group m-form__group additional-info">
                                        <input class="form-control m-input" type="text" placeholder="No. KAJ" name="kaj" required>
                                    </div>

                                    <div class="form-group m-form__group additional-info">
                                        <input class="form-control m-input" type="text" placeholder="Nama Lengkap" name="nama" required>
                                    </div>

                                    <div class="form-group m-form__group">
                                        <input class="form-control m-input" type="email" placeholder="Email" name="email" required>
                                    </div>

                                    <div class="form-group m-form__group additional-info">
                                        <input class="form-control m-input" type="text" placeholder="No.HP/WA" name="phone" required>
                                    </div>

                                    <div class="form-group m-form__group additional-info">
                                        <input class="form-control m-input" type="date" placeholder="TANGGAL LAHIR" name="dob" required>
                                    </div>

                                    <div class="m-form__group form-group" style="margin-top: 1rem;">
                                        <label for="">
                                            M-CLASS
                                        </label>
                                        <div class="m-radio-inline">
                                            <label class="m-radio">
                                                <input type="radio" name="mclass" value="1" required>
                                                SUDAH
                                                <span></span>
                                            </label>
                                            <label class="m-radio">
                                                <input type="radio" name="mclass" value="0">
                                                BELUM
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group additional-info">
                                        <select class="form-control" name="ibadah_asal">
                                            <option value="" disabled selected>TEMPAT IBADAH ASAL</option>
                                            <?php
                                                foreach ($ibadah_asal as $data) {
                                            ?>
                                                    <option value="<?php echo $data->id?>"><?php echo $data->nama?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group m-form__group additional-info">
                                        <select class="form-control" name="ibadah">
                                            <option value="" disabled selected>PILIH IBADAH NATAL</option>
                                            <?php
                                                foreach ($ibadah as $data) {
                                            ?>
                                                    <option value="<?php echo $data->id?>"><?php echo $data->nama?> (??/<?php echo $data->qty ?>)</option>
                                            <?php
                                                }
                                            ?>
                                        </select>
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
            
        