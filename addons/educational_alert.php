<?php

    function add_confirm_education(){
        $realSite = 'Forest & Bird';
        $realSiteURL = 'https://www.forestandbird.org.nz/';
        $designerName = '';
        if( ! is_admin() ){

            ?>
            <style media="screen">
                html,body{
                    overflow: hidden;
                }

                #acknowledgeOverlay.overlay{
                    width: 100%;
                    height: 100%;
                    position: fixed;
                    top: 0;
                    left: 0;
                    background-color: rgba(0,0,0,0.8);
                    z-index: 10000000;
                }

                #overlayContent{
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    background-color:white;
                    width:60%;
                    min-height:300px;
                    color: white;
                    transform: translate(-50%,-50%);
                    -ms-transform: translate(-50%,-50%);
                    color: black;
                    text-align: center;
                    padding: 16px;
                }

                .overlayBtn{
                    display: none;
                    font-weight: 400;
                    text-align: center;
                    white-space: nowrap;
                    vertical-align: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                    border-radius: 0;
                    padding: .375rem .75rem;
                    font-size: 1rem;
                    line-height: 1.5;
                    background-color: #34495e;
                    color: white;
                    text-transform: none;
                }

            </style>
            <div id="acknowledgeOverlay" class="overlay">
                <div id="overlayContent">
                    <h3>Please Acknowledge</h3>
                    <hr>
                    <p>This site is for education use only and is <strong>not</strong> the real site for <?= $realSite; ?>.</p>
                    <p>This is created for a school project at Yoobee School of Design by <?= $designerName; ?> and has no affiliation with real <?= $realSite; ?>.</p>
                    <a href="<?= $realSiteURL; ?>" target="blank">Click here to see the real site.</a><br>
                    <p>Check the button bellow to confirm you understand.</p>
                    <div>
                        <input type="checkbox" id="acknowledgeCheckBox" onclick="checkedInput();"> <label for="">I understand that this website is not the real <?= $realSite; ?> website</label>
                    </div>

                    <button type="button" name="button" id="acknowledgeSubmit" class="overlayBtn" onClick="confirmAcknowledge();">Submit</button>
                </div>
            </div>
            <script type="text/javascript">
                if(sessionStorage.acknowledged){
                    confirmAcknowledge();
                }
                function checkedInput(){
                    var checkbox = document.getElementById('acknowledgeCheckBox');
                    if (checkbox.checked == true){
                        document.getElementById('acknowledgeSubmit').style.display = 'inline-block';
                    } else {
                        document.getElementById('acknowledgeSubmit').style.display = 'none';
                    }
                }

                function confirmAcknowledge(){
                    var body = document.getElementsByTagName('body')[0].style.overflow = "scroll";
                    var html = document.getElementsByTagName('html')[0].style.overflow = "scroll";
                    var elem = document.getElementById("acknowledgeOverlay");
                    elem.parentNode.removeChild(elem);
                    sessionStorage.setItem("acknowledged", true);
                }
            </script>
            <?php
        }
    }


add_action( 'init', 'add_confirm_education' );
