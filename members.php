<?php
$title = 'Members';

include('_header.php');
include('_api.php');
$dataHelper = new NiwaDataHelper();
?>

<div class="main">
    <h1>NIWA Members</h1>

    <!-- Derived from https://codepen.io/oknoblich/pen/tfjFl -->
    <!--
Copyright (c) 2017 by Oliver Knoblich (http://codepen.io/oknoblich/pen/tfjFl)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the 'Software'), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->
    <input class='member-tab' id='tab1' type='radio' name='tabs' checked>
    <label for='tab1'>English Members</label>

    <input class='member-tab' id='tab2' type='radio' name='tabs'>
    <label for='tab2'>French Members</label>

    <input class='member-tab' id='tab3' type='radio' name='tabs'>
    <label for='tab3'>German Members</label>

    <input class='member-tab' id='tab4' type='radio' name='tabs'>
    <label for='tab4'>Italian Members</label>

    <section class="member-tab-content" id='content1'>
        <?php
        foreach ($dataHelper->getMemberWikis('en') as $wiki) {
            echo "
            <div class='member'>
                <div class='logo'>
                    <a href='{$dataHelper->getWikiLink($wiki->url, $wiki->mainpage)}'>
                        <img src='{$wiki->logo}' alt='{$wiki->title}' />
                    </a>
                </div>
                <div class='description'>
                    <div class='links'>
                        {$dataHelper->generateMemberLinks($wiki)}
                    </div>
                    <p>{$wiki->description}</p>
                </div>
            </div>
            ";
        }
        ?>
    </section>
    <section class="member-tab-content" id='content2'>
        <?php
        foreach ($dataHelper->getMemberWikis('fr') as $wiki) {
            echo "
            <div class='member'>
                <div class='logo'>
                    <a href='{$dataHelper->getWikiLink($wiki->url, $wiki->mainpage)}'>
                        <img src='{$wiki->logo}' alt='{$wiki->title}' />
                    </a>
                </div>
                <div class='description'>
                    <div class='links'>
                        {$dataHelper->generateMemberLinks($wiki)}
                    </div>
                    <p>{$wiki->description}</p>
                </div>
            </div>
            ";
        }
        ?>
    </section>
    <section class="member-tab-content" id='content3'>
        <?php
        foreach ($dataHelper->getMemberWikis('de') as $wiki) {
            echo "
            <div class='member'>
                <div class='logo'>
                    <a href='{$dataHelper->getWikiLink($wiki->url, $wiki->mainpage)}'>
                        <img src='{$wiki->logo}' alt='{$wiki->title}' />
                    </a>
                </div>
                <div class='description'>
                    <div class='links'>
                        {$dataHelper->generateMemberLinks($wiki)}
                    </div>
                    <p>{$wiki->description}</p>
                </div>
            </div>
            ";
        }
        ?>
    </section>
    <section class="member-tab-content" id='content4'>
        The Italian NIWA refers to themselves as <i>NiwiN</i> (<i>Network italiano wiki indipendenti Nintendo</i>).
        <br><br>

        <?php
        foreach ($dataHelper->getMemberWikis('it') as $wiki) {
            echo "
            <div class='member'>
                <div class='logo'>
                    <a href='{$dataHelper->getWikiLink($wiki->url, $wiki->mainpage)}'>
                        <img src='{$wiki->logo}' alt='{$wiki->title}' />
                    </a>
                </div>
                <div class='description'>
                    <div class='links'>
                        {$dataHelper->generateMemberLinks($wiki)}
                    </div>
                    <p>{$wiki->description}</p>
                </div>
            </div>
            ";
        }
        ?>
    </section>
</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>