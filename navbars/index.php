

<!-- Select Project -->




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="WXTQNHr4jAlhE1nECpuTlxZ8FkXVOOnsmBgTKEAX">

    <title>Lancers - </title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400&display=swap" rel="stylesheet">


    <!-- Styles -->





    <style>
        body {
            font-family: 'Roboto', sans-serif;
            overflow: auto;
        }

        h1 {
            margin-top: 5%;
            margin-left: 18%;
            color: #262626;
        }

        h5 {
            font-weight: bold;
            color: #262626;
        }


        /*navbar css*/
        #container {
            display: grid;
            grid-template-columns: 1fr 1fr 8fr 2fr;
        }

        /*changed this*/
        #container div {
            box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);
            outline: none;
            height: 60px;

        }

        #container p {
            justify-content: center;
            margin-top: 15px;
            font-style: normal;
            font-weight: bold;
            font-size: 1.3em;
            color: #323A43;
        }


        div>#ext {
            background: rgba(207, 204, 204, 0.4);
            font-size: 24px;
            font-weight: bold;
            justify-content: center;
            border: none;
            color: white;
            width: 100%;
            height: 60px;
            outline: none;
            /*added outline none*/
        }

        div>#ext:hover {
            background: #0ABAB5;
        }

        /*changed this from clear to close*/
        div>.close {
            outline: none;
        }

        .close {

            color: #C4C4C4;
            width: 100%;

        }

        .navM {
            padding-top: 15px;
        }

        /*end of nav bar*/

        .box {
            margin-top: 5%;

        }

        .card-body:hover {
            border: 2px solid #0ABAB5;
            box-sizing: border-box;
        }

        .btn-on {
            width: 100%;
            background: gray;
            border: 1px solid rgba(145, 145, 145, 0.4);
            box-sizing: border-box;

            text-align: left;
            color: #091429;
            height: 50px;
        }

        .btn-on:hover {
            color: white;
            background: #0ABAB5 !important;
        }

        .dark {
            margin-top: 40px;
            margin-left: 40%;
            width: 20%;
            height: 60px;
            border: 1px solid rgba(207, 204, 204, 0.4);
            background: rgba(207, 204, 204, 0.4) !important;
            color: white;
            font-size: 1.2em;

        }

        .dark:hover {

            background: #0ABAB5 !important;
            color: white;
        }

        #name {
            padding: 10px;
            width: 100%;
            height: 50px;
            font-size: 20px;

        }

      

        .dropbtn,
        .project {
            /* margin-top: 37px; */
            width: 100%;
            height: 50px;
            padding: 10px;
            border: 1px solid rgba(145, 145, 145, 0.4);
            /* box-sizing: border-box; */
        }

        option,
        select {
            font-size: 20px;
            background: rgba(207, 204, 204, 0.4);
        }

        a:hover {
            cursor: pointer;
        }





        body {
            box-sizing: border-box;
            margin: 0px;
            font-family: ubuntu !important;
        }

        .con-div {
            background-color: #FFFFFF;
            width: 100%;
            margin: auto;
        }

        .top-divs {
            display: flex;
            margin: 0 auto;
            width: 100%;
            background-color: #FFFFFF;
            font-family: Roboto;
        }

        .ctrl-div {
            width: 8%;
            text-align: center;
            border: 1px solid #919191;
        }

        .ctrl-btn {
            width: 100%;
            background-color: #FFFFFF;
            border: none;
        }

        .inv-div {
            width: 60%;
            text-align: center;
            border: 1px solid #919191;
        }

        #inv-btn {
            width: 100%;
            border: none;
            padding: 0.5em;
            font-weight: 500;
            font-size: 28px;
            background-color: #FFFFFF;
        }

        .send-div {
            width: 32%;
            text-align: center;
            border: 1px solid #919191;
        }

        #send-btn {
            width: 100%;
            border: none;
            padding: 0.5em;
            color: #FFF;
            font-size: 28px;
            background-color: rgba(196, 196, 196, 0.4);
        }

        .cli-info {
            width: 75%;
            height: 80vh;
            background-color: #FFFFFF;
            margin: auto
        }

        .cli-box {
            display: flex;
            justify-content: space-around;
        }

        .sub-box {
            width: 30%;
            padding: 2em 1em;
            margin: 2em;
            background-color: #FFF;
            text-align: center;
            border: 1px solid #919191;
            border-radius: 2px
        }

        .sub-box:hover {
            border: 3px solid gray;
        }

        .select-project {
            width: 90%;
            padding: 1em;
            border: 1px solid #919191;
        }

        .cli-text {
            padding-top: 1.5em;
        }

        .my-icon {
            width: 100%;
            margin: 0.6em 0;
            color: #c4c4c4;
            background-color: #FFFFFF;
        }

        .what-cli {
            padding: 1.5em 1em !important;
            margin: 0;
            font-size: 42px !important;
            font-weight: bold !important;
            color: #323232;
        }

        .txt {
            margin: 2em 0;
        }

        
        @media screen and (max-width: 500px) {
            .cli-box {
                display: block;
            }

            .sub-box {
                width: 90%;
                margin: 2em 0em;
            }

            option {
                width: 80%;
            }

            .what-cli {
                font-size: 1.3em;
            }
        }

       
       
    </style>


</head>

<body>









    <div id="container">
        <div>
            <button class="close navM" @click.prevent="$router.push('/estimate')"> <span>
                    <i class="fa fa-times navM"></i>
                </span></button>
        </div>
        <div>
            <button class="close " @click.prevent="previous"> <span>
                    <i class="fa fa-chevron-left navM"></i>
                </span> </button>
        </div>
        <div>
            <p class=" nav cEstimate" id="cre">Create Estimate</p>
        </div>
        <div>
            <input class="disabled" id="ext" type="button" value="NEXT" @click.prevent="next">
        </div>
    </div>



    <h1 class="">What project are you estimating?</h1>
    <form method="post" action="/estimate/create/step2">
        <input type="hidden" name="_token" value="WXTQNHr4jAlhE1nECpuTlxZ8FkXVOOnsmBgTKEAX">
        <div class="row ml-auto mr-auto box justify-content-center">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">A previously created project</h5>
                        <p style="padding-bottom: 10px;" class="card-text">Find estimate for a previously created
                            project, by doing so the
                            estimate
                            gets populated with some of the data.
                        </p>
                        <div class="contents dropdown">
                            <select class="dropbtn" name="old_project" id="projectSelect">
                                <option selected value="">Select</option>
                            </select>
                            <!-- <i class="fa fa-caret-down"></i> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">A new project</h5>
                        <p class="card-text">Create a new estimate and set up a new project based on the
                            information.
                        </p>
                        <input type="text" name="new_project" id="name" placeholder="Project Name">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <!--  -->
        </div>
        <button type="submit" class="btn dark">NEXT</button>
    </form>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script>
        $("#image_selecter").on("click", function () {
            $("#picture").trigger("click");
        });


        function image1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_selecter')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
            var upload_button = document.getElementById("picture_upload");
            upload_button.style.display = "block";
        }

    </script>





<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>

</html>
