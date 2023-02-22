<!DOCTYPE html>


<?php
require_once('../php/navigation.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= stylesheet(); ?>

    <script src="/0/js/jquery-3.6.3.min.js" type="text/javascript" defer></script>
    <script src="/0/js/navigation.js" type="text/javascript" defer></script>

    <title>Hi Mom! - Gorp Docs</title>

    <script>
        // Firefox fix
        let HI_MOM;
    </script>
</head>
<body>

    <header>
        <?= mobileMenu(); ?>

        Topic
    </header>



    <aside>
        <?= sidebar('elements'); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('elements'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>The Humble Elements Page</h1>

        <p>This page contains all the elements that can be used throughout this website. It is meant to be the one-stop place to update stylesheets. This is what a normal title and introduction paragraph will look like in articles. The primary heading will always be in Title Case and can be up to 4 words.</p>



        <h2>Secondary Heading</h2>

        <p>The page title will be the only element with the h1 tag on a page at any time. The secondary heading is, thus, the highest article content heading. It is used for major sections. It is always written in Title Case and should be kept to less than 4 words.</p>

        
        <h3>Tertiary heading</h3>

        <p>The tertiary heading is used for sub-sections of a major section. These are in Sentence case and can generally be up to 7-10 words long.</p>


        <h4>Quaternary heading</h4>

        <h5>Quinary heading</h5>

        <h6>Senary heading</h6>

        <p>Headings below level 3 can be used as necessary. They are also written in sentence case. <a>This is a link, by the way</a>.</p>

        <p class="important">Emphasize important text with the important class.</p>

        <h3 class="important">Headers, too!</h3>



        <div class="spacer40"></div>



        <h2>Representing Code and Commands</h2>

        <p>Commands inline should be wrapped in code tags: <code>inline command</code>.</p>

        <p>Commands in their own block should be wrapped in pre:</p>

        <pre>block command or text</pre>

        <p>Non-command items that requie emphasis, like directory names or characters, should be wrapped in mono: <mono>/path/to/directory</mono>.</p>

        <h3>Command formatting</h3>

        <pre>gorp create-server <em>server</em> [<em>world</em>]
gorp stop <em>server</em> [fast|now]</pre>

        <p>Where:</p>

        <ul>
            <li>Italics are placeholder values that the user will substitute (like world or server names).</li>
            <li>Elements wrapped in braces are optional.</li>
            <li>Elements separted by pipes are mutually exclusive.</li>
        </ul>



        <div class="spacer40"></div>



        <h2>Buttons</h2>

        <a class="button">button</a>
        <a class="button higher">button higher</a>
        <a class="button blue">button blue</a>
        <a class="button red">button red</a>
        <a class="button green">button green</a>
        
        <br />

        <a class="no-underline">
            <div class="option-button">
                <span class="subsection">Option Button</span>
                <span class="description">Good for when you want a button to have a title and subtitle.</span>
            </div>
        </a>



        <h2>Modals</h2>

        <p>See comments in file for placement of modal markup.</p>

        <a id="open-modal-1" class="button">Open Modal</a>
        <a id="open-modal-2" class="button">Open Modal With Action</a>
        <a id="open-modal-3" class="button">Open Modal With Overflow</a>
        <a id="open-modal-4" class="button">Open Modal With Overflow and Actions</a>



        <h2>Table</h2>

        <p>Standard HTML tables have been formatted. No classes requied. A table header is required, though.</p>

        <table>
            <tr>
                <th>Header</th>
                <th>Header</th>
            </tr>
            <tr>
                <td>Content</td>
                <td>My girlfriend works at Yoshinoya Beef Bowl.</td>
            </tr>
            <tr>
                <td>More Content</td>
                <td><code>This is what a code block looks like in a table.</code></td>
            </tr>
             <tr>
                <td>More Content</td>
                <td><pre>This is what a preformatted block looks like in a table.</pre></td>
            </tr>
        </table>



        <h2>Emphasis Boxes</h2>

        <p>These can be used in articles to emphasize important content.</p>

        <div class="red-box">This is a red-box.</div>
        <div class="blue-box">This is a blue-box.</div>
        <div class="green-box">This is a green-box.</div>
        


    </main>



    <!-- MODALS MUST BE PLACED AFTER THE CLOSING </main> TAG -->
    <!-- Modals are numbered (a possible 1-5). -->

    <div id="modal-1" class="hidden">
        <div class="modal-bg">
            <div class="modal-window">
                <a class="close-modal-button">
                    <img src="/0/img/close.svg" />
                </a>
                <div class="title">Overflow Modal Title</div>
                <div class="content">
                    <p>This is a tiny modal.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-2" class="hidden">
        <div class="modal-bg">
            <div class="modal-window">
                <a class="close-modal-button">
                    <img src="/0/img/close.svg" />
                </a>
                <div class="title">Tiny Modal With Action</div>
                <div class="content">
                    <p>This is a tiny modal with an action.</p>
                </div>
                <div class="actions">
                    <button class="button higher">Action</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-3" class="hidden">
        <div class="modal-bg">
            <div class="modal-window">
                <a class="close-modal-button">
                    <img src="/0/img/close.svg" />
                </a>
                <div class="title">Overflow Modal Title</div>
                <div class="content">
                    <p>This modal has so much content it needs to overflow.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae diam urna. Nulla elementum, lorem ut hendrerit iaculis, lorem enim condimentum risus, at ornare odio tortor nec odio. Suspendisse finibus, odio vitae gravida viverra, leo augue egestas nulla, eu suscipit dui nibh at mauris. Pellentesque bibendum imperdiet urna non pulvinar. Vivamus sollicitudin diam eleifend dolor maximus, nec sodales lectus dictum. Morbi nec velit ullamcorper purus rhoncus ullamcorper quis sit amet quam. Nullam diam tortor, euismod ac cursus rhoncus, euismod ultrices tellus. Integer suscipit pellentesque sollicitudin. In bibendum lorem nec aliquet euismod. Proin fringilla congue lobortis. Praesent pellentesque malesuada arcu, accumsan tempor lectus.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-4" class="hidden">
        <div class="modal-bg">
            <div class="modal-window">
                <a class="close-modal-button">
                    <img src="/0/img/close.svg" />
                </a>
                <div class="title">Overflow Modal With Actions Title</div>
                <div class="content">
                    <p>This modal has so much content it needs to overflow.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae diam urna. Nulla elementum, lorem ut hendrerit iaculis, lorem enim condimentum risus, at ornare odio tortor nec odio. Suspendisse finibus, odio vitae gravida viverra, leo augue egestas nulla, eu suscipit dui nibh at mauris. Pellentesque bibendum imperdiet urna non pulvinar. Vivamus sollicitudin diam eleifend dolor maximus, nec sodales lectus dictum. Morbi nec velit ullamcorper purus rhoncus ullamcorper quis sit amet quam. Nullam diam tortor, euismod ac cursus rhoncus, euismod ultrices tellus. Integer suscipit pellentesque sollicitudin. In bibendum lorem nec aliquet euismod. Proin fringilla congue lobortis. Praesent pellentesque malesuada arcu, accumsan tempor lectus.</p>
                </div>
                <div class="actions">
                    <button class="button higher">Action</button>
                    <button class="button higher">Action</button>
                </div>
            </div>
        </div>
    </div>

</body>
    
</html>
