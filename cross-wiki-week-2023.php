<?php
$title = 'Cross-Wiki Week 2023';
include('_header.php');
?>

<!-- Tabs derived from https://codepen.io/oknoblich/pen/tfjFl -->
<!--
Copyright (c) 2017 by Oliver Knoblich (http://codepen.io/oknoblich/pen/tfjFl)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the 'Software'), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<div class="main">

    <h1>Cross-Wiki Week 2023</h1>

    <input id='tab1' class='member-tab' type='radio' name='tabs' checked>
    <label for='tab1'>English</label>

    <!-- <input id='tab2' class='member-tab' type='radio' name='tabs'>
    <label for='tab2'>Italian</label> -->

    <section class="member-tab-content" id='content1'>
        To celebrate Nintendo's birthday on September 23<sup>rd</sup>, NIWA is hosting its annual <b>Cross-Wiki Week</b> event!
        <br><br>
        From <b>September 23<sup>rd</sup> through October 1<sup>st</sup></b>, everyone is invited to edit NIWA wikis that they have never (or infrequently) edited before.
        Whether it's adding new content, uploading an image, or adding a reference, we want you to take your experience and love for video games to a new wiki!
        <br><br>
        Two random participants will win <b>$20/€20 Nintendo e-Shop Gift Cards</b>.
        <br><br>
        Our goal with this annual event is to bring editors to new wikis, promote cooperation, support smaller wikis, and help create new long-term editors.
        
        <br><br>
        <div class="text-center"><img class="margin-auto" src="/images/nintendo_characters.png" alt="Several mainline Nintendo characters, including Mario, Pikachu, Kirby, Samus, Bowser, and Donkey Kong." width="400px"></div>
        <br>

        <a name="submit"></a>
        <h1 id="Submit">Sign-up and Submit Contributions</h1>

        <b>We have a new process this year!</b> If you'd like to participate, use the sign-up link below at any time to provide your wiki username and contact info.
        <br><br>
        To submit your edits for the event, simply add the hashtag "#cww" to the edit summaries of edits you make from September 23<sup>rd</sup> through October 1<sup>st</sup>.
        We will gather all #cww edits and score them for the drawing.
        
        <br><br>
        <div style="width: 100%; text-align: center;">
            <form>
                <button style="font-size: 1.1em;" formaction="https://forms.gle/qs7DaJ9QYmQYG7cB8">Sign-up</button>
            </form>
        </div>

        <br>

        If you forget to add the hashtag to your edit(s), or make a contribution that doesn't allow for edit summaries (like uploading a file), you can submit those edits via <a href="https://forms.gle/bxSckmk8oDdei2ry5" target="_blank">this separate form</a>.

        <br>

        <h1 id="Rules">Rules</h1>

        Before participating, please take a few moments to review these rules - especially if you want a shot at the prize!

        <ul>
            <li>The event starts at 00:01 (UTC) on Friday, September 23, and runs until 23:59 (UTC) on Sunday, October 1.</li>
            <li>Contributions to any NIWA member or affiliate wikis are eligible.</li>
            <li>Participants must have an account on the wiki(s) they are contributing to for a chance to win.</li>
            <li>Each contributor's edits are ranked 1 to 10. The more substantial your contributions are, the higher chance you have of winning the prize!</li>
            <li>Contributions should improve the wiki in some way. More substantial contributions mean more entries into the contest.</li>
            <li>Each wiki is a bit different! Become familiar with the differing guidelines, styling, and policies of each wiki. Reach out to each wiki's help resources if you have any questions.</li>
        </ul>

        <br>

        <a name="guide"></a>
        <h1 id="Editing Guide">Editing Guides</h1>

        Many NIWA wikis have created guides to help new editors find things to edit and improve.
        Note that edits to all <a href="/members">member</a> and <a href="/affiliates">affiliate</a> wikis are eligible for Cross-Wiki Week,
        even if the wiki doesn't have a guide listed below.

        <h2 class="text-center">English Wiki Guides</h2>
        <div class="text-center cww-grid">
            <?php
            $wikis = $dataHelper->getMemberWikis('en', TRUE);
            $affiliates = $dataHelper->getAffiliates();
            $wikis = array_merge($wikis, $affiliates);
            foreach ($dataHelper->getCWW('2023', 'en') as $cww) {
                $id = $cww->id;
                $wiki = $wikis[array_search($id, array_column($wikis, 'id'))];
                echo "
                    <div>
                        <a href='{$dataHelper->getWikiLink((isset($wiki->contenturl)) ? ($wiki->contenturl) : ($wiki->url), $cww->page)}'>
                            <img class='margin-auto' src='{$wiki->logo}' alt='{$wiki->title}' width='100' />
                            <br />
                            {$wiki->title} Guide
                        </a>
                    </div>
                ";
            }
            ?>
        </div>

        <h2 class="text-center">Italian Wiki Guides</h2>
        <div class="text-center cww-grid">
            <?php
            $wikis = $dataHelper->getMemberWikis('it', TRUE);
            foreach ($dataHelper->getCWW('2023', 'it') as $cww) {
                $id = $cww->id;
                $wiki = $wikis[array_search($id, array_column($wikis, 'id'))];
                echo "
                    <div>
                        <a href='{$dataHelper->getWikiLink((isset($wiki->contenturl)) ? ($wiki->contenturl) : ($wiki->url), $cww->page)}'>
                            <img class='margin-auto' src='{$wiki->logo}' alt='{$wiki->title}' width='100' />
                            <br />
                            {$wiki->title} Guide
                        </a>
                    </div>
                ";
            }
            ?>
        </div>

        <br><br>

        <h1 id="Drawing">Drawing</h1>
        The winner of the contest is determined by random draw.
        Each person's contributions are rated on a scale of 10; the more substantial one's contributions, the greater the chance of winning.
        Be sure to make some substantive edits for a better shot at the prize!

        <br><br>

        While event organizers are free to participate, they are disallowed from entering the drawing and winning the prize.

        <br><br>

        <hr>

        <br><br>

        <span style="font-size: 70%;">
            Disclaimer: There is no purchase necessary to win. Participants need only meet the requirements listed in the rules above.
            In questionable cases, final discretion of eligibility is determined by the host of the event.
            The prize will be two $20/€20 Nintendo e-Shop Gift Cards.
            If participant is in a country where an e-Shop Gift Card is not usable (region restrictions, no e-Shop support, etc.), another prize of equal value will be coordinated with the winner.
            Winner is determined by a random drawing after contributions are judged on a 1-10 scale by event organizers. Organizers cannot win the prize.
        </span>
    </section>

    <!-- <section class="member-tab-content" id='content2'>
        L'anniversario di Nintendo cadr&#224; il 23 settembre. Per celebrarlo NIWA sta organizzando un <b>Cross-Wiki Week</b>!
        <br><br>
        Dal <b>23 al 30 settembre</b> siete tutti invitati a modificare costruttivamente almeno un wiki di NIWA al quale non avete mai (o raramente) contribuito.
        Che si tratti di inserire dei nuovi contenuti, caricare un'immagine o aggiungere un riferimento, ci piacerebbe che portaste la vostra esperienza e la vostra passione su un nuovo wiki.
        <br><br>
        Quest'anno abbiamo delle eccitanti novità. Adesso l'evento durerà una settimana e ci saranno due vincitori invece di uno. Inoltre, parteciperanno anche alcuni wiki affiliati!
        <br><br>
        Al termine dell'evento, due partecipanti sorteggiati casualmente vinceranno una <b>Nintendo eShop Card da 20$/20€</b>! Quando l'evento sar&#224; concluso potrete inviare le vostre modifiche tramite un pulsante.
        
        <br><br>
        
        <h1 id="Submit">Modulo</h1>

        <b>Siete pregati di segnalare i vostri contributi</b> compilando il seguente modulo entro il <b>7 ottobre</b>. Compilare questo modulo è necessario per partecipare all'estrazione del premio.
        <br><br>
        <div style="width: 100%; text-align: center;">
            <form>
                <button style="font-size: 1.1em;" formaction="https://forms.gle/Lrbcbxjo9TMzoiG68">Submit</button>
            </form>
        </div>

        <br>

        <h1 id="Goals">Obiettivi</h1>

        Perch&#233; stiamo organizzando questo evento? Oltre ad essere un modo divertente per celebrare l'anniversario di Nintendo, ci auguriamo che...
        <ul>
            <li>... esponga gli utenti a nuovi wiki</li>
            <li>... promuova la collaborazione tra wiki di NIWA</li>
            <li>... fornisca maggiore sostegno per i wiki pi&#249; piccoli</li>
            <li>... faccia nascere nuovi utenti abituali</li>
        </ul>

        <div class="text-center"><img class="margin-auto" src="/images/nintendo_characters.png" alt="La cr&#232;me de la cr&#232;me di Nintendo." width="400px"></div>

        <br>

        <h1 id="Rules">Regole</h1>

        Prima di partecipare, chiediamo gentilmente un attimo del vostro tempo per leggere queste regole... Specialmente se volete una possibilit&#224; di vincere il premio!

        <ul>
            <li>L'evento inizia alle 02:01 ora italiana (00:01 UTC) di venerd&#236; 23 settembre e dura fino alle 01:59 ora italiana di marted&#236; 1 ottobre (23:59 UTC di luned&#236; 30 settembre).</li>
            <li>Per partecipare, contribuite ad almeno un <a href="http://niwanetwork.org/members.php">wiki di NIWA</a> al quale non avete mai (o raramente) contribuito.</li>
            <li>Per tenere traccia dei vostri contributi pi&#249; facilmente, i partecipanti devono possedere un account nei wiki ai quali contribuiscono per avere una possibilit&#224; di vincere.</li>
            <li>I contributi di ciascun utente riceveranno una valutazione da 1 a 10. Pi&#249; sostanziosi saranno i vostri contributi, pi&#249; possibilit&#224; avrete di vincere!</li>
            <li>I contributi dovrebbero migliorare i wiki in qualche modo. I contributi pi&#249; sostanziosi consentiranno di avere maggiori possibilit&#224; di vittoria. Per esempio, provate a:
            <ul>
                <li>Aggiungere testo all'interno delle voci;</li>
                <li>Effettuare correzioni all'interno di paragrafi lunghi o voci intere;</li>
                <li>Aggiungere riferimenti per verificare la provenienza delle informazioni;</li>
                <li>Caricare immagini;</li>
                <li>Creare nuove voci;</li>
                <li>Aggiungere le categorie appropriate alle pagine;</li>
                <li>Aggiungere pi&#249; documentazione in merito ai template.</li>
            </ul>
            <li>Purch&#233; apportiate almeno una modifica non minore, sarete idonei ad essere sorteggiati per la vittoria del premio.</li>
            <li>Ciascun wiki &#232; leggermente differente! Prima di apportare modifiche, familiarizzate con le linee guida, i manuali di stile e le pratiche adottate da ciascun wiki. Per qualsiasi domanda, consultate le pagine di aiuto dei rispettivi wiki.</li>
            <li>Alla fine dell'evento, compilate e inviate il modulo di partecipazione sottostante entro il <b>7 ottobre</b> per avere una possibilit&#224; di vincere il premio. Anche se non doveste volere il premio, apprezzeremmo se compilaste il modulo per fini statistici.</li>
        </ul>

        <br>

        <h1 id="Editing Guide">Manuali di stile</h1>

        Di seguito trovate una lista dei wiki partecipanti, le rispettive guide e le liste di cose da fare.
        Alcuni wiki hanno creato delle guide appositamente per questo evento, evidenziate in grassetto.
        Se non siete sicuri di dove iniziare, ci auguriamo che questi link possano tornarvi utili!
        Prendete un momento per familiarizzare con le regole e le abitudini di ciascun wiki prima di mettervi al lavoro.

        <br><br>

        <h2 class="text-center">Wiki in italiano</h2>
        <div class="text-center cww-grid">
            <?php
            $wikis = $dataHelper->getMemberWikis('it', TRUE);
            foreach ($dataHelper->getCWW('2023', 'it') as $cww) {
                $id = $cww->id;
                $wiki = $wikis[array_search($id, array_column($wikis, 'id'))];
                echo "
                    <div>
                        <a href='{$dataHelper->getWikiLink($wiki->url, $cww->page)}'>
                            <img class='margin-auto' src='{$wiki->logo}' alt='{$wiki->title}' width='100' />
                            <br />
                            {$wiki->title}<br><small>({$cww->title})</small>
                        </a>
                    </div>
                ";
            }
            ?>
        </div>
        
        <br><br>
        
        <h2 class="text-center">Wiki in inglese</h2>
        <div class="text-center cww-grid">
            <?php
            $wikis = $dataHelper->getMemberWikis('en', TRUE);
            $affiliates = $dataHelper->getAffiliates();
            $wikis = array_merge($wikis, $affiliates);
            foreach ($dataHelper->getCWW('2023', 'en') as $cww) {
                $id = $cww->id;
                $wiki = $wikis[array_search($id, array_column($wikis, 'id'))];
                echo "
                    <div>
                        <a href='{$dataHelper->getWikiLink($wiki->url, $cww->page)}'>
                            <img class='margin-auto' src='{$wiki->logo}' alt='{$wiki->title}' width='100' />
                            <br />
                            {$wiki->title}<br><small>({$cww->title})</small>
                        </a>
                    </div>
                ";
            }
            ?>
        </div>

        <br><br>

        <h1 id="Drawing">Estrazione del premio</h1>
        Il vincitore del concorso sar&#224; stabilito con un sorteggio casuale.
        I contributi di ciascun utente verranno valutati con un punteggio da 1 a 10; pi&#249; sostanziosi saranno i contributi, maggiori saranno le probabilit&#224; di vittoria.
        Assicuratevi di effettuare delle modifiche sostanziose per avere pi&#249; possibilit&#224; di vincere il premio!

        <br><br>

        Sebbene gli organizzatori dell'evento siano liberi di partecipare, saranno esclusi dal sorteggio e di conseguenza non avranno la possibilit&#224; di vincere il premio.

        <br><br>

        <hr>

        <br>

        I contatti principali dell'evento sono <a href="https://www.pikminwiki.com/User:Espyo">Espyo</a>, <a href="https://www.ssbwiki.com/User:Serpent_King">Serpent King</a>, <a href="https://www.mariocastle.it/wiki/Utente:Stormkyleis">Stormkyleis</a>, <a href="https://nookipedia.com/wiki/User:SuperHamster">SuperHamster</a>, e <a href="https://fireemblemwiki.org/wiki/User:Tacopill">tacopill</a>.
        Un ringraziamento speciale a tutti coloro che hanno contribuito all'organizzazione dell'evento con suggerimenti e guide.

        <br><br>

        <span style="font-size: 70%;">
            Avvertenze: Non &#232; necessario effettuare alcun acquisto per vincere il premio. &#232; sufficiente che i partecipanti soddisfino i requisiti elencati nelle regole sovrastanti.
            In casi dubbi, l'idoneit&#224; all'estrazione &#232; a discrezione degli organizzatori dell'evento.
            La posta in palio &#232; due Nintendo eShop Cards da 20$/20€.
            Se il vincitore dovesse risiedere in un paese nel quale risulta impossibile utilizzare l'eShop Card (per esempio a causa delle restrizioni regionali, eShop non supportato in quella determinata regione, ecc.) verr&#224; contattato per stabilire un premio di pari valore.
            Il vincitore verr&#224; estratto con un sorteggio casuale dopo che i contributi verranno giudicati su una scala da 1 a 10 dagli organizzatori dell'evento. Gli organizzatori non possono vincere il premio.
        </span>
    </section> -->
</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>
