<body>
    <main>
        <section>
            <img src="<?= $data["poster_url"]; ?>" width="200" alt="<?= $data["title"]; ?> poster" style="border-radius: 16px"/>
        </section>
        <hgroup>
            <h3><?= $data["title"]; ?> - <?= $until_message; ?></h3>
            <p>Fecha de estreno: <?= $data["release_date"] ?></p>
            <p>La siguiente es: <?= $data["following_production"] ?></p>
        </hgroup>
    </main>
</body>
