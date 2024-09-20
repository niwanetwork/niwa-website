<?php
$title = 'Cross-Wiki Week 2024';
include('_header.php');
include('_api.php');
$dataHelper = new NiwaDataHelper();
?>

<!-- Tabs derived from https://codepen.io/oknoblich/pen/tfjFl -->
<!--
Copyright (c) 2017 by Oliver Knoblich (http://codepen.io/oknoblich/pen/tfjFl)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the 'Software'), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<div class="main">

    <h1>Cross-Wiki Week 2024</h1>

    <input id='tab1' class='member-tab' type='radio' name='tabs' checked>
    <label for='tab1'>English</label>

    <!-- <input id='tab2' class='member-tab' type='radio' name='tabs'>
    <label for='tab2'>Italian</label> -->

    <section class="member-tab-content" id='content1'>
        To celebrate Nintendo's birthday on September 23<sup>rd</sup>, NIWA will be hosting its annual <b>Cross-Wiki Week</b> event!
        <br><br>
        From <b>September 20<sup>th</sup> through 30<sup>th</sup></b>, everyone is invited to edit NIWA wikis that they have never (or infrequently) edited before.
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

        If you'd like to participate, use the sign-up link below at any time to provide your wiki username and contact info.
        <br><br>
        To submit your edits for the event, simply add the hashtag "#cww" to the edit summaries of edits you make from September 20<sup>th</sup> through 30<sup>th</sup>.
        We will gather all #cww edits and score them for the drawing.
        
        <br><br>
        <div style="width: 100%; text-align: center;">
            <form>
                <button style="font-size: 1.1em;" formaction="https://forms.gle/NJfbF17qUGzCfFXU9">Sign-up</button>
            </form>
        </div>

        <br>

        If you forget to add the hashtag to your edit(s), or make a contribution that doesn't allow for edit summaries (like uploading a file), you can submit those edits via <a href="https://forms.gle/qzCvED5KsZJYCEjG7">this separate form</a>.

        <br>

        <h1 id="Rules">Rules</h1>

        Before participating, please take a few moments to review these rules - especially if you want a shot at the prize!

        <ul>
            <li>The event starts at 00:01 (UTC) on Friday, September 20, and runs until 23:59 (UTC) on Monday, September 30.</li>
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
            foreach ($dataHelper->getCWW('2024', 'en') as $cww) {
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

        <h2 class="text-center">French Wiki Guides</h2>
        <div class="text-center cww-grid">
            <?php
            $wikis = $dataHelper->getMemberWikis('fr', TRUE);
            foreach ($dataHelper->getCWW('2024', 'fr') as $cww) {
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
            foreach ($dataHelper->getCWW('2024', 'it') as $cww) {
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
</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>
