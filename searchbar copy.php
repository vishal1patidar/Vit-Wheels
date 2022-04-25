<php>
  <!DOCTYPE html>
  <html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      * {
        box-sizing: border-box;
      }

      #myInput {
        background-image: url("/css/searchicon.png");
        background-position: 10px 12px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
      }

      #myUL {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      #myUL li a {
        border: 1px solid #ddd;
        margin-top: -1px;
        /* Prevent double borders */
        background-color: #f6f6f6;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        color: black;
        display: block;
      }

      #myUL li a:hover:not(.header) {
        background-color: #eee;
      }


      .home {
        padding-top: 10rem;
        text-align: center;
        overflow-x: hidden;
      }

      .home h3 {
        color: var(--black);
        font-size: 7.5vw;
        text-transform: uppercase;
      }

      .home img {
        width: 100%;
        margin: 1rem 0;
      }
    </style>
  </head>

  <body>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" />
    <div id="home-btn">
      <a href="index.php"><button class="btn">Home</button></a </div>
      </header>

      <ul id="myUL">
        <li><img src="image/car-1.png" alt="" /><a href="">Audi A6</a></li>
        <li><img src="image/car-2.png" alt="" /><a href="">Wagnor</a></li>
        <li><img src="image/car-3.png" alt="" /><a href="">Bularoo</a></li>
        <li><img src="image/car-4.png" alt="" /><a href="">Tata-Eeco</a></li>
        <li><img src="image//car-5.png" alt="" /><a href="">Baleno</a></li>
        <li><img src="image/car-6.png" alt="" /><a href="">Ciaz</a></li>
        <li><img src="image/car-7.png" alt="" /><a href="">Ciaz</a></li>
        <li><img src="image/car-8.png" alt="" /><a href="">Ciaz</a></li>
      </ul>

      <script>
        function myFunction() {
          var input, filter, ul, li, a, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          ul = document.getElementById("myUL");
          li = ul.getElementsByTagName("li");
          for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
            } else {
              li[i].style.display = "none";
            }
          }
        }
      </script>
  </body>

  </html>
</php>