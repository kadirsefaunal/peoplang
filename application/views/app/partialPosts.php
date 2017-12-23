<div class="col-12 row-block">
    <ul id="sortable">
    <?php

        foreach($posts as $row){
            echo $row->content;
            echo $row->date;

    ?>
    <br>
    <?php
    }
    ?>

        <li>
            <div class="media">
                <div class="media-left align-self-center">
                    <img class="rounded-circle" src="https://randomuser.me/api/portraits/women/50.jpg">
                </div>
                <div class="media-body">
                    <h4>Camila Terry</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="media-left align-self-center">
                    <img class="rounded-circle" src="https://randomuser.me/api/portraits/men/42.jpg">
                </div>
                <div class="media-body">
                    <h4>Joel Williamson</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="media-left align-self-center">
                    <img class="rounded-circle" src="https://randomuser.me/api/portraits/women/67.jpg">
                </div>
                <div class="media-body">
                    <h4>Deann Payne</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
        </li>
    </ul>
</div>