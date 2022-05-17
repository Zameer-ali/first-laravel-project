<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- CSS only -->

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        form {
            width: 500px;
            margin: auto;
        }
    </style>
</head>

<body>
    
    <form action="./" method="post">
        @csrf
        <h2>Register Form</h2>
        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" required />
        </div>
        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" required />
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" required />
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="tel" class="form-control" name="phone_number" required />
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required />
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password" required />
        </div>
        <div class="mb-3">
            <label class="form-label">PostCode</label>
            <input type="number" class="form-control" name="post_code" required />
        </div>
        <div class="mb-3">
            <select class="form-select" name="country">
                <option selected>Country</option>
                <option value="Pakistan">Pakistan</option>
                <option value="India">India</option>
                <option value="China">China</option>
            </select>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="customer" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    customer
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="seller"  >
                <label class="form-check-label" for="flexRadioDefault2">
                   seller
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="licensed-Professional"  >
                <label class="form-check-label" for="flexRadioDefault2">
                  Professional Licensed 
                </label>
            </div>
        </div>
        <div class="mb-3">
            <a href="login" class="nav-link">Login</a>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>