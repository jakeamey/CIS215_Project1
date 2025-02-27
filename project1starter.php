<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey: Your Topic Here</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include Bootstrap or your CSS file -->
</head>
<body>
    <form action="process_survey.php" method="post" class="survey">
        <label for="email">Enter your email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Enter your password:</label>
        <input type="password" name="password" id="password" required>

        <label>What is your age group?</label><br>
        <input type="radio" name="age" value="0-12" id="age1"><label for="age1">0-12</label><br>
        <input type="radio" name="age" value="13-17" id="age2"><label for="age2">13-17</label><br>
        <input type="radio" name="age" value="18-22" id="age3"><label for="age3">18-22</label><br>
        <input type="radio" name="age" value="23-27" id="age4"><label for="age4">23-27</label><br>
        <input type="radio" name="age" value="28-32" id="age5"><label for="age5">28-32</label><br>
        <input type="radio" name="age" value="33-37" id="age6"><label for="age6">33-37</label><br>
        <input type="radio" name="age" value="38-42" id="age7"><label for="age7">38-42</label><br>
        <input type="radio" name="age" value="43-47" id="age8"><label for="age8">43-47</label><br>
        <input type="radio" name="age" value="48-52" id="age9"><label for="age9">48-52</label><br>
        <input type="radio" name="age" value="53-57" id="age10"><label for="age10">53-57</label><br>
        <input type="radio" name="age" value="58-62" id="age11"><label for="age11">58-62</label><br>
        <input type="radio" name="age" value="63-67" id="age12"><label for="age12">63-67</label><br>
        <input type="radio" name="age" value="68+" id="age13"><label for="age13">68+</label><br>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="nb">Nonbinary</option>
            <option value="gf">Genderfluid</option>
            <option value="a">Agender</option>
            <option value="o">Other / Prefer not to say</option>
        </select>

        <!-- New Required Questions -->
        <label for="favBook">What is your favorite book?</label>
        <input type="text" name="favBook" id="favBook" required>

        <label for="hoursOnline">How many hours per day do you spend online?</label>
        <input type="number" name="hoursOnline" id="hoursOnline" min="0" required>

        <button type="submit">Submit Survey</button>
    </form>
</body>
</html>


