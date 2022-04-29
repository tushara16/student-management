<!DOCTYPE html>
<html>
  <head>
    <title>Login User</title>
    <link rel="stylesheet" href="loginadmin.css" />
    <style>
      body {
        background-image: url(images/2.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        opacity: 80%;
      }
      form {
        background-color: black;
        margin-right: 100px;
        padding-top: 40px;
        padding-bottom: 40px;
        border-radius: 10px;
      }
      form label {
        color: white;
      }
    </style>
  </head>
  <script>
    function myFunction() {
      alert("Continue to login..");
    }
  </script>
  <body class="background-image">
    <br />
    <br />
    <br />
    <br />

    <div class="container">
      <h3 style="font-size:20px;"> Login student</h3>

      <form  action="login1.php" method="post">
        <label for="usrname">Username</label>
        <input type="text" id="usrname" name="name" required />
        <label for="psw">Password</label>
        <input
          type="password"
          id="psw"
          name="psw"
          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
          title="UserName and Password don't match"
          required
        />

        <button
          style="background-color: rgb(143, 143, 143);color:rgb(255, 255, 255);font-size: 18px; border-radius: 5px;"
         name="submit"
        >
          Submit
        </button>
      </>
    </div>
    <script>
      var myInput = document.getElementById("psw");
      var letter = document.getElementById("letter");
      var capital = document.getElementById("capital");
      var number = document.getElementById("number");
      var length = document.getElementById("length");
      // When the user clicks on the password field, show the message box
      myInput.onfocus = function () {
        document.getElementById("message").style.display = "block";
      };
      // When the user clicks outside of the password field, hide the message box
      myInput.onblur = function () {
        document.getElementById("message").style.display = "none";
      };
      // When the user starts to type something inside the password field

      myInput.onkeyup = function () {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
          letter.classList.remove("invalid");
          letter.classList.add("valid");
        } else {
          letter.classList.remove("valid");
          letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
          capital.classList.remove("invalid");
          capital.classList.add("valid");
        } else {
          capital.classList.remove("valid");
          capital.classList.add("invalid");
        }
        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
          number.classList.remove("invalid");
          number.classList.add("valid");
        } else {
          number.classList.remove("valid");
          number.classList.add("invalid");
        }

        // Validate length

        if (myInput.value.length >= 8) {
          length.classList.remove("invalid");
          length.classList.add("valid");
        } else {
          length.classList.remove("valid");
          length.classList.add("invalid");
        }
      };
    </script>
  </body>
</html>
