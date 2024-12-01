
    <style>
        .logo {
            width: 370px;
            height: 127px;
            left: 17px;
            top: 10px;
            position: absolute;
        }
        body {
            background-image: url('img/2.png');
            background-attachment: fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            perspective: 1000px;
        }
        .card {
            width: 300px;
            height: 400px;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.8s;
        }
        .card.is-flipped {
            transform: rotateY(180deg);
        }
        .card__face {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .card__face--back {
            transform: rotateY(180deg);
        }
        .container img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }
        .container h1 {
            font-size: 35px;
            font-family: 'Instrument Sans', sans-serif;
            font-weight: 700;
            letter-spacing: 5.76px;
            color: black;
            margin-bottom: 20px;
            margin-top: 5px;
        }
        .container h2 {
            font-size: 15px;
            font-family: 'Instrument Sans', sans-serif;
            font-weight: 700;
            letter-spacing: 5.76px;
            color: black;
            margin-bottom: 20px;
            margin-top: 10px;
        }
        .container h3 {
            font-size: 20px;
            font-family: 'Instrument Sans', sans-serif;
            font-weight: 700;
            letter-spacing: 5.76px;
            color: black;
            margin-bottom: 50px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>

    <img src="{{asset('img/spcc.png')}}" class="logo" />
    <div class="container">
        <div class="card" id="card">
            <div class="card__face card__face--front">
                <img src="{{asset('img/logo.png')}}" alt="spcc">
                <h1>E-LIBRARY</h1>
                <h2>COMMITMENT TO EXCELLENCE</h2>
                <form method="post" action="{{ route('login.validate') }}">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail3">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                        @error('email')
                            <div class="text-danger w-100">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn">Sign in</button>
                    <button type="button" class="btn" onclick="flipCard()">Create Account</button>
                </form>
            </div>
            <div class="card__face card__face--back">
                <h3>Create Account</h3>
                <form method='post' action="{{ route('createAccount') }}">
                    @csrf
                    <div class="form-group">
                        <label for="createEmail">Email</label>
                        <input type="email" id="createEmail" name="email1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="createPassword">Password</label>
                        <input type="password" id="createPassword" name="password1" class="form-control">
                    </div>
                    <button type="submit" class="btn">Sign up</button>
                    <button type="button" class="btn" onclick="flipCard()">Back to Sign in</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function flipCard() {
            document.getElementById('card').classList.toggle('is-flipped');
        }
    </script>
