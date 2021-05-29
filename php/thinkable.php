<?php
    trait Thinkable {
        function think() {
            print "私は" . $this->hobby . "について考えています。";
        }
    }

    