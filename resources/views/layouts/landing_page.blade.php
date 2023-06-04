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
  </style>
</head>
<body>

    <div>
        @yield('content')
    </div>

    {{-- <script>
        // Initialization for ES Users
        import {
        Ripple,
        initTE,
        } from "tw-elements";

        initTE({ Ripple });
    </script> --}}
</body>
</html>