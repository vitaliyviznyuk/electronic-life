/**
 * @author Vitaliy Viznyuk <vitaliyviznyuk@gmail.com>
 * @copyright Copyright (c) 2020 Vitaliy Viznyuk
 */
(function() {
    "use strict";

    async function animate() {
        const response = await fetch('server.php');
        const json = await response.json();
        const $app = document.getElementById('app');

        $app.innerHTML = json.reduce(function(previousValue, currentValue) {
            return previousValue + '<br />' + currentValue.replace(/ /g, '&nbsp;');
        });

        console.log('Animation frame returned!');
        animate().then();
    }

    animate().then();
})();
