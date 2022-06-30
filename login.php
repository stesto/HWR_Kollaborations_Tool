<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/loading.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .login-form {
            border-radius: 15px;
            background-color: rgba(0,0,0, 0.4);

            display: flex;
            justify-content: center;
            margin-top: 80px;
            width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        #background {
            background-image: url(CS_14_web.png);
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -999999;
            filter: blur(8px);
            -webkit-filter: blur(8px);
        }

        #header {
            height: 100px;
            margin: 25px 25px 50px 25px;
            display: flex;
            justify-content: center;
        }

        #logo {
            width:100px;
            height:100px;
            float:left;
            background-size: 100% 100%;
            background-image: url("media/xWS_Logo.png");
            border-radius: 15px;
        }

        #title {
            height: 100px;
            float:left;
        }

        .title_text {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size:92px;
            color: white;
            text-shadow: 4px 4px #000000;
            margin:0;
            padding: 0 0 0 10px;
        }

        ::placeholder {
            font-family: 'Poppins', sans-serif;
            color: white;
            font-weight: 500;
        }

        .stretch {
            width:100%;
            height:100%;
}

        input[type=text], input[type=password] {
            background-color: rgba(7,25,78, 0.0);
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: none;
            border-bottom: 3px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #34495e;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 25%;
            float: right;
            margin: 25px 0 16px 0;
            border-radius: 3px;
        }

        button:hover {
            opacity: 0.8;
            background-color: #2c3e50;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }
    </style>
</head>
    <body>
        <div class="login-form" id="vue-body" style="display: flex;justify-content: center; margin-top: 80px;">
            <div style="width: 100%;">
				<div class="imgcontainer" style="display:flex; justify-content: center;">
					<!--<img src="logo_baer.svg" style="height: 92px; margin-right: 30px">
					<img src="logo_schrift.svg" style=" height: 92px;">-->
				</div>

                <div id="header">
                <h1 id="title" class="title_text">xWorkspace</h1>
                </div>
				<div class="container">
					<!-- <label for="username"><b>Benutzername</b></label> -->
					<input type="text" placeholder="Name" name="username" v-model="username">

					<!-- <label for="psw"><b>Passwort</b></label> -->
					<input type="password" placeholder="Passwort" name="psw" v-model="password">
                    
					<button v-on:click="login" :disabled="nameMissing || passwordMissing || loading">Anmelden</button>
                    <div v-if="loading" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
				</div>								

				</div>
            </div>
        </div>
        <div id="background" class="stretch">
        </div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://unpkg.com/vue@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
        <script src="js/login.js"></script>
    </body>
</html>