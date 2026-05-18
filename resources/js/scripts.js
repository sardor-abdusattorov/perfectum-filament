document.addEventListener('DOMContentLoaded', function () {
    var accordion = document.getElementById('accordion-faq');
    if (!accordion) return;

    var items = accordion.querySelectorAll('.accordion__list');

    items.forEach(function (item) {
        var link = item.querySelector('.link');
        if (!link) return;

        link.addEventListener('click', function () {
            var willOpen = !item.classList.contains('open');

            items.forEach(function (other) {
                other.classList.remove('open');
                var content = other.querySelector('.accordion__content');
                if (content) content.style.display = '';
            });

            if (willOpen) {
                item.classList.add('open');
                var content = item.querySelector('.accordion__content');
                if (content) content.style.display = 'block';
            }
        });
    });
});
