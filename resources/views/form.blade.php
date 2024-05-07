<!-- EKSTERNAL -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>


</head>
<style>
    /* CSS untuk styling halaman signup */
body {
    font-family: Arial, sans-serif;
    background: radial-gradient(
        circle farthest-side at 0% 50%,
        #282828 23.5%,
        rgba(255, 170, 0, 0) 0
      )
      21px 30px,
    radial-gradient(
        circle farthest-side at 0% 50%,
        #2c3539 24%,
        rgba(240, 166, 17, 0) 0
      )
      19px 30px,
    linear-gradient(
        #282828 14%,
        rgba(240, 166, 17, 0) 0,
        rgba(240, 166, 17, 0) 85%,
        #282828 0
      )
      0 0,
    linear-gradient(
        150deg,
        #282828 24%,
        #2c3539 0,
        #2c3539 26%,
        rgba(240, 166, 17, 0) 0,
        rgba(240, 166, 17, 0) 74%,
        #2c3539 0,
        #2c3539 76%,
        #282828 0
      )
      0 0,
    linear-gradient(
        30deg,
        #282828 24%,
        #2c3539 0,
        #2c3539 26%,
        rgba(240, 166, 17, 0) 0,
        rgba(240, 166, 17, 0) 74%,
        #2c3539 0,
        #2c3539 76%,
        #282828 0
      )
      0 0,
    linear-gradient(90deg, #2c3539 2%, #282828 0, #282828 98%, #2c3539 0%) 0 0
      #282828;
  background-size: 40px 60px;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 200vh;
}

h1 {
    color: white;
}

h3 {
    color: white;
}

form {
    background: linear-gradient(#212121, #212121) padding-box,
              linear-gradient(145deg, transparent 35%,#e81cff, #40c9ff) border-box;
    box-sizing: border-box;
    border: 2px solid transparent;
    border-radius: 16px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
    flex-direction: column;
    padding: 20px;
    width: 400px;
    color: white;
    animation: gradient 5s ease infinite;
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }

  50% {
    background-position: 100% 50%;
  }

  100% {
    background-position: 0% 50%;
  }
}

label {
    display: block;
    margin-top: 10px;
    color: white;
}

input[type="text"],
select,
textarea {
    width: 90%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

p {
    margin-top: 10px;
    color: white;
}



.gender-container {
  display: flex;
  flex-direction: column;
}

.gender-container label {
  display: flex;
  align-items: center;
  color : white;
}

.language-container {
    display: flex;
    flex-direction: column;
}

.language-container label {
    display: flex;
    align-items: center;
    color : white;
}

input[type="submit"] {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
}

input[type="submit"]:hover {
    background-color: #555;
}
</style>

<body>
    <h1>Buat Account baru</h1>
    <h3>Sign up Form</h3>
    <form action="{{ url('welcome')}}" method="get">
        <label ><strong>First name:</strong></label>
         <input type="text" id="fname" name="fname" required><br><br>
        <label ><strong>Last name:</strong></label>
        <input type="text" id="lname" name="lname" required><br><br>
      
      
        <div class="gender-container" method="get">
          <p><strong>Gender:</strong></p>
          <label for="male">
              <input type="radio" id="gender" name="gender" value="male" required>
              Male
          </label>
          <label for="female">
              <input type="radio" id="gender" name="gender" value="female" required>
              Female
          </label>
      </div>
      

        <p><strong>Nationality:</strong></p>
        <select id="Nationality" name="Nationality" required>
          <option value="Konoha">Konoha</option>
          <option value="Vinland">Vinland</option>
          <option value="Bekasi">Bekasi</option>
        </select>

        <br><br>

    <label for="indo">
    <input type="checkbox" id="indo" name="language[]" value="Indonesia">
    Indonesia
</label>
<label for="inggris">
    <input type="checkbox" id="inggris" name="language[]" value="Sunda">
    Sunda
<label for="tagalog">
    <input type="checkbox" id="tagalog" name="language[]" value="tagalog">
    Tagalog
</label><br>


          <p><strong>Bio</strong></p>
        
            <textarea name="message" rows="10" cols="30"></textarea>
            <br><br>
      
        
            <input type="submit" value="Sign Up" >
        </form>



</body>
</html>