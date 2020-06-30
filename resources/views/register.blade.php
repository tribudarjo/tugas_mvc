<!DOCTYPE html>
<html>
    <head>
        <title>Buat Account Baru!</title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="/welcome" method="POST">
            @csrf
            <p>First Name:</p>
            <input type="text" name="first_name"><br>
            <p>Last Name:</p>
            <input type="text" name="last_name"><br>
            <p>Gender:</p>
            <input type="radio" name="rad_gender" value="Male">Male<br>
            <input type="radio" name="rad_gender" value="Female">Female<br>
            <input type="radio" name="rad_gender" value="Other">Other<br>
            <p>Nationality:</p>
            <select name="nationality">
                <option value="Indonesian">Indonesian</option>
                <option value="American">American</option>
                <option value="Japanese">Japanese</option>
                <option value="Chinese">Chinese</option>
            </select>
            <p>Language Spoken:</p>
            <input type="checkbox" name="chk_bhs_ind" value="Bahasa Indonesia">Bahasa Indonesia<br>
            <input type="checkbox" name="chk_eng" value="English">English<br>
            <input type="checkbox" name="chk_other" value="Other">Other<br>
            <p>Bio:</p>
            <textarea name="bio" rows="10" cols="30"></textarea><br>
            <input type="submit" name="sign_up" value="Sign Up">
        </form>
        <br><br>
    </body>
</html>