<?php 

    $google_faq = [
        ['question' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'answer' => '###'],
        ['question' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
        'answer' => '###'],
        ['question' => 'Perché il mio account è associato a un paese?',
        'answer' => '###'],
        ['question' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
        'answer' => '###'],
        ['question' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
        'answer' => '###'],
    ]

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google FAQ</title>
</head>
<body>
    <header></header>
    <main>
        <?php foreach ($google_faq as $faq) { ?>
            <section>
                <h2><?php echo $faq['question'] ?></h2>
                <p><?php echo $faq['answer'] ?></p>
            </section>
        <?php } ?>

    </main>
    <footer></footer>
</body>
</html>