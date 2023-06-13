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

    body{
      width: 100%;
    }

    .container_menu{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 200px;
        flex-wrap: wrap;
        flex-direction: row;
    }

    .card-menu{
      width: 40%;
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

    .card_header img{
      max-height: 200px;
      width: 100%;
    }

    .card_header{
      margin-bottom: 10px;
    }

    .header{
      background-position: center;
      background-size: 100%;
      background-repeat: no-repeat;
      background-attachment: fixed;
      height: 300px;
      margin-bottom: 20px;
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

    .plat_container{
      padding: 20px 200px;
      display: flex;
      flex-direction: column;
    }

    .plat_card{
      padding: 20px;
      background-color: #fff;
      box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.2);
      margin-bottom: 20px;
      display: flex;
    }
    .price{
      font-size: 20px;
      color: #2a6665;
      margin-bottom: 10px;
    }

    .title{
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 10px;
    }

    .stars{
      margin-top: 10px;
      display: flex;
    }

    .star{
      width: 20px;
      margin-right: 5px;
    }

    .dashboard_menu{
      margin-right: 10px;
      background-color: #fff;
      padding: 10px;
      border-radius: 15px;
      box-shadow: 4px 2px 20px rgba(0, 0, 0, 0.1);
    }
    .container_menu{
      justify-content: space-around;
    }

    .dashboard_plat{
      min-height: 220px;
      width: 20%;
      padding: 15px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 4px 2px 20px rgba(0, 0, 0, 0.1);
      margin-right: 10px;
      text-align: center;
    }

    .categorie_active{
      background-color: #2a6665;
      color: #fff;
    }

    .active{
      color: #2a6665;
      font-weight: 500;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">
      <span> {{ auth()->user()->name }} </span>
    </div>
    <nav>
      <a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard*') ? 'active' : '' }}" >dashboard</a>
      <a href="#" class="{{ Request::is('commande') ? 'active' : '' }}" >commande</a>
      <a href="#" class="login">new commande</a>
    </nav>
  </header>

    <div style="width: 100%">
        @yield('content')
    </div>

</body>
</html>