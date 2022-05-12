'use strict';

const mobileWidth = 767;
let isMobile = checkWidth();

window.addEventListener('resize', () => {
    isMobile = checkWidth();
});

(function copyShareLink() {
    const linkToCopy = document.querySelector('.copy') || null;

    if (!linkToCopy) return;

    const classes = `copied`;

    linkToCopy.addEventListener('click', function(e) {
        e.preventDefault();
        const btn = this;
        const link = btn.getAttribute('href');
        navigator.clipboard.writeText(link)
            .then(() => {
                btn.classList.add(classes);
                setTimeout(() => {
                    btn.classList.remove(classes);
                }, 2500);
            });
    });
})();

(function singleProductDescriptionTabs() {
    if (isMobile) return;

    const captions = [...document.querySelectorAll('.content__caption')] || null;
    const contentItems = [...document.querySelectorAll('.page-content__left_item')] || null;

    if (!captions || !captions.length) {
        return;
    }

    if (!contentItems || !contentItems.length) {
        return;
    }

    captions.forEach((c, idx) => {
        const dataScroll = Math.floor(c.getBoundingClientRect().top + window.scrollY);
        c.dataset.scroll = dataScroll;

        const item = contentItems[idx];
        item.dataset.scroll = dataScroll;
        item.addEventListener('click', function(e) {
            e.preventDefault();
            scrollTo(c);
        });
    });

    const firstSectionDataScroll = parseInt(contentItems[0].dataset.scroll);

    window.addEventListener('scroll', function() {
        const cur_pos = document.documentElement.scrollTop + 150;

        if (cur_pos >= firstSectionDataScroll) {

            for (let i = 0; i < contentItems.length; i++) {

                if (cur_pos >= parseInt(contentItems[i].dataset.scroll)
                    && cur_pos < parseInt(contentItems[i + 1].dataset.scroll)) {

                    if (!contentItems[i].classList.contains('active')) {

                        contentItems[i].classList.add('active');
                    }
                } else if (cur_pos >= parseInt(contentItems[i].dataset.scroll)
                    && i === contentItems.length - 1) {

                    if (!contentItems[i].classList.contains('active')) {

                        contentItems[i].classList.add('active');
                    }
                } else {

                    if (contentItems[i].classList.contains('active')) {

                        contentItems[i].classList.remove('active');
                    }
                }
            }
        } else {
            const activeTab = document.querySelector('.page-content__left_item.active') || null;

            if (activeTab) {
                activeTab.classList.remove('active');
            }
        }
    });

    function scrollTo(elem) {
        const y = elem.getBoundingClientRect().top + window.scrollY - 150;

        window.scroll({
            top: y,
            behavior: 'smooth',
        });
    }
})();

function checkWidth() {
    return mobileWidth > document.documentElement.clientWidth;
}