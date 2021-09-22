<?php 

    $google_faq = [
        ['question' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'answer' => 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href="https://support.google.com/websearch/answer/9109?hl=it">contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href="https://support.google.com/legal/contact/lr_eudpa?product=websearch&amp;hl=it">fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href="https://support.google.com/websearch/troubleshooter/3111061?hl=it">visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>.'],
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