<html>
<head>
</head>
<body>
<!-- table of contents
    http://www.grantland.com/story/_/id/9175394/out-great-alone
 -->

<header>
    <h1>Apollo Expeditions to the Moon</h1>
</header>

<nav>
    <ul>
        <li><a href="#foreword">Foreword</a>: James C. Fletcher</li>
        <li><a href="#introduction">Introduction</a>: Robert C. Seamans, Jr.</li>
        <li><a href="#chapter-1">Chapter 1: A Perspective on Apollo</a>
            <ul>
                <li><a href="#chapter-1_introduction">Introduction</a></li>
                <li><a href="#chapter-1_a-perspective-on-apollo-1">A Perspective on Apollo 1</a></li>
                <li><a href="#chapter-1.3">A Ferment of Debate</a></li>
            </ul>
        </li>
        <li><a href="#chapter-2">Chapter 2: "I Believe We Should Go to the Moon"</a></li>
    </ul>
</nav>


<article>




    <?php
        $json = file_get_contents('book.json');
        $json = json_decode( $json, true );
        $chapters = $json['chapter'];

        // for($i=0; $i<count($chapters); $i++) {
        //     //echo $chapters[$i]['id'].'<br />';
        //     //echo $chapters[$i]['title'].'<br />';
        //     $chapter = $chapters[$i];

        //     foreach ($chapter as $key => $value) {
        //         echo $key.': '.$value.'<br />';
        //     }
        // }

        foreach ($chapters as $chapters => $chapter) {
            ?>
                <header>
                    <h1><?php echo $chapter['title'] ?></h1>
                </header>
            <?php
                foreach($chapter['section'] as $sections => $section) {
                    ?>
                        <h2><?php echo $section['heading'] ?></h2>
                    <?php

                    foreach($section['content'] as $conts => $cont) {
                        if ($cont['type'] == 'paragraph') {
                            ?>
                                <p><?php echo $cont['text'] ?></p>
                            <?php
                        } elseif ($cont['type'] == 'image'){
                            ?>
                                <figure>
                                    <img src="<?php echo $cont['src'] ?>" />
                                    <figcaption><?php echo $cont['caption'] ?></figcaption>
                                </figure>
                            <?php
                        }
                    }
                }
        }



    ?>


<!--
    <section id="chapter-1">
        <header>
            <h1>Chapter 1: A Perspective on Apollo</h1>
            <p>The forces that set us on the path to the Moon</p>
            <p>James E. Webb</p>
        </header>

        <h2 id="chapter-1_introduction">Introduction</h2>
            <p>After hundreds of thousands of years of occupancy, and several thousand years of recorded history, man quite suddenly left the planet Earth in 1969 to fly to its nearest neighbor, the Moon. The ten-year span it took to accomplish this task was but a blink of an eye on an evolutionary scale, but the impact of the event will permanently affect man's destiny.
            THE ARTIST LOOKS AT SPACE</p>

            <p>Dozens of America's artists were invited by NASA Administrator James E. Webb to record the strange new world of space. Although an intensive use of photography had long characterized NASA's work, the Agency recognized the special ability of the artist's eye to select and interpret what might go unseen by the literal camera lens.
            No civilian government agency had ever sponsored as comprehensive and unrestricted an art program before. A sampling of the many paintings and drawings that resulted is presented in this chapter.</p>

            <p>In reflecting on the Apollo program, I am sometimes overwhelmed at the sheer magnitude of the task and the temerity of its undertaking. When Apollo was conceived, a lunar landing was considered so difficult that it could only be accomplished through exceptional large-scale efforts in science, in engineering, and in the development of operational and training systems for long-duration manned flights. These clearly required the application of large resources over a decade.</p>

            <p>Industry, universities, and government elements had to be melded into a team of teams. Apollo involved competition for world leadership in the understanding and mastery of rocketry, of spacecraft development and use, and of new departures of international cooperation in science and technology. Like the Bretton Woods monetary agreement, President Truman's Point Four Program, and the Marshall Plan, the Apollo program was a further attempt toward world stability - but with a new thrust.</p>

            <p>This chapter will review the origins of this policy and how it was successfully implemented. Subsequent chapters describe how particular problems were solved, how the astronauts and other teams of specialists were trained and performed, how the giant spaceboosters were built and flown, and how all this was joined together in a fully integrated effort. In many of these essays you will find indications of the meaning of the Apollo program to those who devoted much of their lives to it.</p>

            <p>In the pre-space years the main defensive shield of the free world against Communist expansion was the preeminence of the United States in aeronautical technology and nuclear weaponry. These were an integral part of a system of mutual-defense treaties with other non-Communist nations.</p>

        <h2 id="chapter-1_a-perspective-on-apollo-1">A Perspective on Apollo 1</h2>

            <p>In the 1950s, when the U.S.S.R. demonstrated rocket engines powerful enough to carry atomic weapons over intercontinental distances, it became clear to United States and free world political and military leaders that we had to add technological strength in rocketry and know-how in the use of space systems to our defense base if we were to play a decisive role in world affairs.</p>

            <figure>
                <img src="http://www.hq.nasa.gov/pao/History/SP-350/i-1-1.jpg" />
                <figcaption>Alfred McAdams, RANGE SAFETY, watercolor on paper. From here a straying rocket would be destroyed.</figcaption>
            </figure>

            <p>In the United States the first decision was to give this job to our military services. They did it well. Atlas, Titan, Minuteman, and Polaris missiles rapidly added rocket power to the basic air and atomic power that we were pledged to use to support longheld objectives of world stability, peace, and progress.</p>

            <p>The establishment of the Atomic Energy Commission as a civilian agency had emphasized in the 1940s our hope that nuclear technology could become a major force for peaceful purposes as well as for defense. In 1958 the establishment of the National Aeronautics and Space Administration, again as a civilian agency, emphasized our hope that space could be developed for peaceful purposes. NASA was specifically charged with the expansion into space of our high level of aeronautical know-how. It was made responsible for research and development that would both increase our space know-how for military use, if needed, and would enlarge our ability to use space in cooperation with other nations for "peaceful purposes for the benefit of all mankind."</p>

        <h2 id="chapter-1-3">A Ferment of Debate</h2>
            <p>The Apollo program grew out of a ferment of imaginative thought and public debate. Long-range goals and priorities within our governmental, quasi-governmental, and private institutions were agreed on. Leaders in political, scientific, engineering, and many other endeavors participated. Debate focused on such questions as which should come first - increasing scientific knowledge or using man-machine combinations to extend both our knowledge of science and lead to advances in engineering? Should we concentrate on purely scientific unmanned missions? Should such practical uses of space as weather observations and communication relay stations have priority? Was it more vital to concentrate on increasing our military strength, or to engage in spectacular prestige-building exploits?</p>

            <figure>
                <img src="http://history.nasa.gov/SP-350/i-1-2a.jpg" />
                <figcaption>Robert McCall, MERCURY TEST SUIT, felt pen on paper</figcaption>
            </figure>

            <p>In the turbulent 1960s, Apollo flights proved that man can leave his earthly home with its friendly and protective atmosphere to travel out toward the stars and explore other parts of the solar system. In the 1970s the significance of this new capability is still not clear. Will there be a basic shift of power here on Earth to the nation that first achieves dominance in space? Can we maintain our desired progress toward a prosperous peaceful world if we allow ourselves to be outclassed in this new technology? Policymakers in Congress, the White House, the State and Defense Departments, the National Science Foundation, the Atomic Energy Commission, NASA, and other agencies agreed in the 1960s that we should develop national competence to operate large space systems repetitively and reliably. It was also agreed that this should be done in full public view in cooperation with all nations desiring to participate. However, this consensus was not unanimous. Critics thought that the Apollo program was too vast and costly, too great a drain on our scientific, engineering, and productive resources, too fraught with danger, and contended that automatic unmanned machines could accomplish everything necessary.</p>

            <figure>
                <img src="http://history.nasa.gov/SP-350/i-1-2b.jpg" />
                <figcaption>Paul Calle, SUITING UP, pencil and wash on paper</figcaption>
            </figure>

            <p>Specialized groups frequently overlooked the multiple objectives of developing a means of transporting astronauts to and from the Moon. Some manned spaceflight enthusiasts deplored NASA's simultaneous emphasis on flights to build a solid base of scientific knowledge of space. Some critics failed to recognize the value of having trained men make on-site observations, measurements, and judgments about lunar phenomena, and sending men to place scientific instruments where they could best answer specific questions.</p>

            <figure>
                <img src="http://history.nasa.gov/SP-350/i-1-2c.jpg" />
                <figcaption>Robert McCall, GANTRY WHITE ROOM, felt pen on paper</figcaption>
            </figure>

            <p>A vast array of government agencies participated in the network of decision-making from which the basic policies that governed the Apollo program evolved. Collaboration between academic and industrial contributors required procedures that often seemed burdensome to scientists and enerineers. Even some astronauts failed at times to appreciate the potential benefits of precise knowledge as to the effect of weightlessness and spaceflight stress on their bodies. Fortunately our Nation's most thoughtful leaders recognized the necessity as well as the complexity of the various components of NASA's work and strongly endorsed the Apollo program. It is a tribute to the innate good sense of our citizens that enough of a consensus was obtained to see the effort through to success.</p>
    </section>

    <section id="chapter-2">
    </section>

-->
</article>

</body>
</html>