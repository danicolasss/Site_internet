<?php

function card($imgLink,$h2,$h3,$p): string
{
    $html="
<div class=\"card\">
    <div class=\"card__inner\">
        <div class=\"card__face card__face--front\" style=\"background-image: url($imgLink) \">
        </div>
        <div class=\"card__face card__face--back\">
            <div class=\"card__content\">
                <div class=\"card__header\">
                    <h2>$h2</h2>
                </div>
                <div class=\"card__body\">
                    <h3>$h3</h3>
                    <p>$p<p>
                </div>
            </div>
        </div>
    </div>
</div>";
    return $html;
}



