<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .container{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 200px;
        flex-wrap: wrap;
        flex-direction: row;
    }

    .card-menu{
      width: 45%;
      margin: 10px;
      box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.2);
      padding: 20px;
      border-radius: 10px;
    }

    .cta a{
      background-color: #2a6665;
      color: #fff;
      border-radius: 4px;
      padding: 8px 15px;
      box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.1);
      transition: .4s ease;
    }

    .cta a:hover{
      box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.3);
      opacity: .9;
    }

    header{
      width: 100%;
      padding: 15px 200px;
      background-color: #fff;
      box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.1);
      color: rgba(0, 0, 0, 0.6);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo{
      text-transform: uppercase;
      color: #2a6665;
      font-weight: bold;
    }

    nav a{
      margin-right: 5px;
      text-transform: capitalize;
    }

    .login{
      background-color: #2a6665;
      color: #fff;
      padding: 5px 13px;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">
      <span>Resto</span>
    </div>
    <nav>
      <a href="#">menu</a>
      <a href="#">presentation</a>
      <a href="#">localisation</a>
      <a href="#">contact</a>
      <a href="#" class="login">login</a>
    </nav>
  </header>

    <div style="width: 100%">
        @yield('content')
    </div>

</body>
</html>