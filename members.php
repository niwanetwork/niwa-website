<?php
$topbar = 'off';
$title = 'Members';
include('_header.php');


/* Moved this code out to here since it it duplicated and lengthy.
 * Generates the html for Links with error checking for wikis that do not have
 * one of the options.
 *
 * Requires a individual wiki array from the api.
 */
function generateLinks($wiki)
{

    $links = "";
    $links .= "<a href='" . $wiki["url"] . "'>" . $wiki["title"] . "</a> ";

    if (isset($wiki['site'])) {
        $links .= "<a href='" . $wiki["site"] . "'>" . $wiki["siteName"] . "</a>";
    };
    if (isset($wiki['forums'])) {
        $links .= "<a href='" . $wiki["forums"] . "'>Forums</a>";
    };
    if (isset($wiki['chat'])) {
        $links .= "<a href='" . $wiki["chat"] . "'>Chat</a>";
    };
    if (isset($wiki['discord'])) {
        $links .= "<a href='" . $wiki["discord"] . "'>Discord</a>";
    };
    if (isset($wiki['twitter'])) {
        $links .= "<a href='" . $wiki["twitter"] . "'>Twitter</a>";
    };
    if (isset($wiki['twitch'])) {
        $links .= "<a href='" . $wiki["twitch"] . "'>Twitch</a>";
    };
    if (isset($wiki['facebook'])) {
        $links .= "<a href='" . $wiki["facebook"] . "'>Facebook</a>";
    };

    return $links;
}
?>

<div id="main">
    <h1>NIWA Members</h1>

    <!-- Derived from https://codepen.io/oknoblich/pen/tfjFl -->
    <!--
Copyright (c) 2017 by Oliver Knoblich (http://codepen.io/oknoblich/pen/tfjFl)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the 'Software'), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->
    <style>
        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        input {
            display: none;
        }

        input:checked+label {
            border: 1px solid #BBBBBB;
            border-top: 2px solid #B22222;
            border-bottom: 0px solid;
            color: #555;
        }

        label {
            border: 0px solid;
            color: #BBBBBB;
            display: inline-block;
            padding: 15px 25px;
            text-align: center;
        }

        label:hover {
            color: #B22222;
            cursor: pointer;
        }

        section {
            border-top: 1px solid #BBBBBB;
            display: none;
            padding: 10px 0px 0px;
        }

        #tab1:checked~#content1,
        #tab2:checked~#content2 {
            display: block;
        }

        #tab3:checked~#content3 {
            display: block;
        }
    </style>

    <input id='tab1' type='radio' name='tabs' checked>
    <label for='tab1'>English Members</label>

    <input id='tab2' type='radio' name='tabs'>
    <label for='tab2'>German Members</label>

    <input id='tab3' type='radio' name='tabs'>
    <label for='tab3'>Italian Members</label>

    <section id='content1'>
        <?php
        foreach ($englishWikis as $wiki) {
            echo "
            <div class='member'>
                <div class='logo'><a href='" . $wiki["url"] . "'><img src='" . $wiki["logo"] . "' alt='" . $wiki["title"] . "' /></a></div>
                <div class='description'>
                    <div class='links'>" . generateLinks($wiki) . "</div>
                    <p>" . $wiki["description"] . "</p>
                </div>
                <p style='clear: both;'></p>
            </div>
            ";
        }
        ?>
    </section>
    <section id='content2'>
        <?php
        foreach ($germanWikis as $wiki) {
            echo "
            <div class='member'>
                <div class='logo'><a href='" . $wiki["url"] . "'><img src='" . $wiki["logo"] . "' alt='" . $wiki["title"] . "' /></a></div>
                <div class='description'>
                    <div class='links'>" . generateLinks($wiki) . "</div>
                    <p>" . $wiki["description"] . "</p>
                </div>
                <p style='clear: both;'></p>
            </div>
            ";
        }
        ?>
    </section>
    <section id='content3'>
        The Italian NIWA refers to themselves as <i>NiwiN</i> (<i>Network italiano wiki indipendenti Nintendo</i>).
        <br><br>

        <?php
        foreach ($italianWikis as $wiki) {
            echo "
            <div class='member'>
                <div class='logo'><a href='" . $wiki["url"] . "'><img src='" . $wiki["logo"] . "' alt='" . $wiki["title"] . "' /></a></div>
                <div class='description'>
                    <div class='links'>" . generateLinks($wiki) . "</div>
                    <p>" . $wiki["description"] . "</p>
                </div>
                <p style='clear: both;'></p>
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