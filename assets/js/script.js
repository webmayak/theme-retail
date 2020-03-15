document.addEventListener(
    "DOMContentLoaded", () => {
        const menu = new Mmenu( "#mmenu-nav", {
            "extensions": [
                "pagedim-black",
                "border-full",
                "theme-white"
            ]
        }, {
            classNames: {
                selected: "active"
            }
        });
    }
);

/**
 * Инициализация поповера
 */
const initPopover = function () {
    $('[data-toggle="popover"]').popover({
        trigger: 'hover',
    });
};
initPopover();

$('[data-fancybox]').fancybox();

/**
 * Инициализация шаринга в соц. сети
 */
const initShare = function () {
    $(".share-links").each(function (index, el) {
        el = $(el);
        const suffix = el.hasClass('share-links--black') ? '-black' : '';
        el.jsSocials({
            shares: [
                {
                    share: "facebook",
                    logo: '/images/svg/social/facebook' + suffix + '.svg',
                },
                {
                    share: "twitter",
                    logo: '/images/svg/social/twitter' + suffix + '.svg',
                },
                {
                    share: "googleplus",
                    logo: '/images/svg/social/google-plus' + suffix + '.svg',
                },
                {
                    share: "vkontakte",
                    logo: '/images/svg/social/vk' + suffix + '.svg',
                },
            ],
            showLabel: false,
            showCount: false,
            shareIn: "popup",
        })
    });
};
initShare();

/**
 * Любое завершение pjax
 * инициализируем заного поповеры
 */
$(document).on('pjax:complete', function () {
    initPopover();
    $('.quantity-field').styler();
});

$.goup({
    bottomOffset: 50
});

$(document).ready(function () {
    svg4everybody();
    $('.quantity-field').styler();
});

$(document).on('click', '.open-lead-modal', function () {
    const self = $(this);
    const modal = $(self.data('target'));
    const url  = self.attr('href') || self.data('url');
    $.get(url, function (result) {
        modal.find('.modal-content').html(result);
        modal.modal('show');
    });
    return false;
});

$(document).on('shown.bs.modal', '.lead-modal', function () {
    const btn = $('.open-lead-modal[data-loading]');
    btn.ladda('remove');
});

$('.popular-products__carousel').owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    navText: [
        '<i class="fa fa-long-arrow-left"></i>',
        '<i class="fa fa-long-arrow-right"></i>'
    ],
    responsive : {
        0 : {
            items: 1
        },
        768 : {
            items: 2
        },
        1200 : {
            items: 3
        }
    }
});
