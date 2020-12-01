<?php include "news.php"; ?>
<html lang="cs">
</head>
<body>
        <main class="container">
                <h1 class="title">Kurz Webdesignu</h1>
                <p><?php echo "Ahoj " . $_GET["firstname"] . " " . $_GET["surname"]; ?></p>
                <time><?php date("dd. mm. YYYY"); ?><time>
                <article class="article">
                        <h2 class="subtitle">Anotace</h2>
                        <p>V našem kurzu webdesignu se z vás stanou za pár dní profesionální webd�~Mi, o které se budou pp
rát korporace jako Avast, Google, Facebook a dalš�</p>
                        <h2 class="subtitle">Podmímnky</h2>
                        <ul>
                                <li>Dosa�~Yení alespo�~H 897 let</li>
                                <li>�~Leské ob�~Manstvít</>
                                <li>Strom</li>
                        </ul>
                </article>
        </main>
<hr>
<a href="/?firstname=Karel">Pozdrav Karla</a>
<hr>
<form style="display: flex; flex-direction: column; max-width: 250px" action="https://formspree.io/f/xpzojkde" method="POST">
        <label for="firstname">Name:</label>
        <input id="firstname" type="text" name="firstname" placeholder="Fill in your name..." required>
        <label for="password">Password:</label>
        <input id="password" type="password" name="password" required>
        <label for="age">Age:</label>
        <input id="age" type="number" step="4" min="2" max="40" name="age" required>
        <label>
        Agre?
        <input type="checkbox" name="agrement" required>
        </label>
        <label>
        Male
        <input type="radio" name="gender" value="male" required>
        </label>
        <label>
        Female
        <input type="radio" name="gender" value="female" required>
        </label>
        <textarea name="message"></textarea>
        <select name="city">
                <option value="Prague">Prague</option>
                <option value="Brno">Brno</option>
                <option value="Plzen">Plzen</option>
        </select>
        <input type="submit" value="Send">
</form>
<hr>
<section>
        <h2>Aktuality</h2>
        <ul>
                <?php foreach($news as $new) {
                        echo "<li><a href=\"" . $new["url"] . " \">" . $new["title"] . "</a></li>";
                } ?>
        </ul>
</section>
</body>
</html
