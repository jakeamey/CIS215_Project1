<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey: Favorite Hobbies</title> 
    <link rel="stylesheet" href="styles.css"> <!-- Link to an external CSS file -->
</head>
<body>

<form action="process.php" method="post" class="survey">
    <label for="email">Enter your email: </label>
    <input type="email" name="email" id="email" required>

    <label for="password">Enter your password: </label>
    <input type="password" name="password" id="password" required>

    <fieldset>
        <legend>What age are you?</legend>
        <input type="radio" name="age" id="age1" value="0-12"><label for="age1">0-12</label>
        <input type="radio" name="age" id="age2" value="13-17"><label for="age2">13-17</label>
        <input type="radio" name="age" id="age3" value="18-22"><label for="age3">18-22</label>
        <input type="radio" name="age" id="age4" value="23-27"><label for="age4">23-27</label>
        <input type="radio" name="age" id="age5" value="28-32"><label for="age5">28-32</label>
        <input type="radio" name="age" id="age6" value="33-37"><label for="age6">33-37</label>
        <input type="radio" name="age" id="age7" value="38-42"><label for="age7">38-42</label>
        <input type="radio" name="age" id="age8" value="43-47"><label for="age8">43-47</label>
        <input type="radio" name="age" id="age9" value="48-52"><label for="age9">48-52</label>
        <input type="radio" name="age" id="age10" value="53-57"><label for="age10">53-57</label>
        <input type="radio" name="age" id="age11" value="58-62"><label for="age11">58-62</label>
        <input type="radio" name="age" id="age12" value="63-67"><label for="age12">63-67</label>
        <input type="radio" name="age" id="age13" value="68+"><label for="age13">68+</label>
    </fieldset>

    <label for="gender">Select your gender:</label>
    <select name="gender" id="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
        <option value="nb">Nonbinary</option>
        <option value="gf">Genderfluid</option>
        <option value="a">Agender</option>
        <option value="o">Choose not to say/Other</option>
    </select>
    <fieldset>
        <legend>What is your favorite type of music? (Select all that apply)</legend>
        <input type="checkbox" name="music[]" id="rock" value="rock"><label for="rock">Rock</label>
        <input type="checkbox" name="music[]" id="pop" value="pop"><label for="pop">Pop</label>
        <input type="checkbox" name="music[]" id="hiphop" value="hiphop"><label for="hiphop">Hip-Hop</label>
        <input type="checkbox" name="music[]" id="classical" value="classical"><label for="classical">Classical</label>
        <input type="checkbox" name="music[]" id="jazz" value="jazz"><label for="jazz">Jazz</label>
        <input type="checkbox" name="music[]" id="electronic" value="electronic"><label for="electronic">Electronic</label>
        <input type="checkbox" name="music[]" id="country" value="country"><label for="country">Country</label>
    </fieldset>

    <label for="exercise">How often do you exercise per week?</label>
    <select name="exercise" id="exercise">
        <option value="never">Never</option>
        <option value="1-2">1-2 times</option>
        <option value="3-4">3-4 times</option>
        <option value="5+">5+ times</option>
    </select>


    <button type="submit">Submit</button>
</form>

</body>
</html>
