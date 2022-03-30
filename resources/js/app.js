document.addEventListener('DOMContentLoaded', function () {
    new TypeIt('#tagline', {
        loop: true
    })
    .pause(2000)
    .delete()

    .type('Planning')
    .pause(2000)
    .delete()

    .type('Designing')
    .pause(2000)
    .delete()

    .type('Developing')
    .pause(2000)
    .delete()

    .type('Testing')
    .pause(2000)
    .delete()

    .go();
});
