/*
    Intercept all clicks leading to ids, and do some stuff first.
*/

document.addEventListener('click', function (event) {

    // Work around silly mdl thing where it prevents the default setting the url. We actually wanna do that.
    if (event.target && event.target.matches && event.target.matches('span') && event.target.parentNode && event.target.parentNode.matches('a')) {
        var href = event.target.parentNode.getAttribute('href').substr(1);

        // Temporarily move the id to the top of the page, so we don't scroll annoyingly
        document.getElementById(href).setAttribute('id', 'TEMP_BS_'+href)
        document.getElementById('top').setAttribute('id', href);
        window.location = '#'+href;
        // Put it back
        document.getElementById(href).setAttribute('id', 'top');
        document.getElementById('TEMP_BS_'+href).setAttribute('id', href);
        return;
    }

    if (event.target && event.target.getAttribute('href') && event.target.getAttribute('href')[0] == '#') {
        var goTo = event.target.getAttribute('href');

        if (goTo.indexOf('-') === -1) {
            return;
        }

        var targetPage = goTo.substr(1, goTo.indexOf('-')-1);

        Array.prototype.forEach.call(document.getElementsByClassName('mdl-layout__tab-panel'), function(elem) {
            elem.classList.remove('is-active');
        });
        document.getElementById(targetPage).classList.add('is-active');

        Array.prototype.forEach.call(document.getElementsByClassName('mdl-layout__tab'), function(elem) {
            if (elem.getAttribute('href') == '#' + targetPage) {
                elem.classList.add('is-active');
            } else {
                elem.classList.remove('is-active');
            }
        });
        document.getElementById(targetPage).classList.add('is-active');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    if (window.location.hash) {
        setTimeout(function() {
            Array.prototype.forEach.call(document.querySelectorAll('a'), function(elem) {
                if (elem.getAttribute('href') == window.location.hash) {
                    elem.click();
                }
            });
        }, 500);
    }
}, false);
