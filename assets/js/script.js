function CollapseHandler() {
    const collapse = $('.footer-menu [data-toggle]');
    if (window.matchMedia('(max-width: 991px)').matches) {
        collapse.attr('data-toggle', 'collapse').siblings('.collapse-holder').collapse('hide');
        collapse.off()
    } else {
        collapse.attr('data-toggle', '').on('click', function (event) {
            event.stopPropagation();
        });
    }
}

function LowVisionLinks() {
    $('.top-panel__low-vision-toggle').on('click', function(){
        if(Cookies.get('low-vision-mode')) {
            Cookies.remove('low-vision-mode');
        } else {
            Cookies.set('low-vision-mode', 'on');
        }
        location.reload();
    });
}

$(function () {
    CollapseHandler();
    LowVisionLinks();
});

$(window).on('resize', function () {
    CollapseHandler();
});

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
 * Инициализация скрытия большого текста в отзыве
 */
// const initReviewReadMore = function () {
//     $('.review-body').readmore({
//         collapsedHeight: 188,
//         speed: 75,
//         lessLink: '<a href="javascript:void(0)" class="btn-read-more">Скрыть</a>',
//         moreLink: '<a href="javascript:void(0)" class="btn-read-more">Показать все</a>'
//     });
// };
// initReviewReadMore();

/**
 * Обработка клика по табу с цветом чекаем поле внутри
 */
$(document).on('click', '.color-tabs a', function () {
    const self = $(this);
    self.find('input').prop('checked', true);
});

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
});

$.goup({
    bottomOffset: 50
});

$(document).ready(function () {

    svg4everybody();

    setTimeout(function () {
        $('.quantity-field').styler();
    }, 100);

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

/*
var substringMatcher = function(strs) {
    return function findMatches(q, cb) {
        var matches, substringRegex;

        matches = [];

        substrRegex = new RegExp(q, 'i');

        $.each(strs, function(i, str) {
            if (substrRegex.test(str.value)) {
                matches.push(str);
            }
        });

        cb(matches);
    };
};

var searchArr = [
    {
        value: 'Компьютер',
        image: '/images/search-2.jpg'
    },
    {
        value: 'Транзистор',
        image: '/images/search-2.jpg'
    },
    {
        value: 'Компьютер',
        category: 'Компьютеры',
        image: '/images/search-1.jpg'
    },
    {
        value: 'Транзистор',
        category: 'Транзисторы',
        image: '/images/search-1.jpg'
    }
];

$('.search-field').typeahead({
    hint: false,
    highlight: true
},
{
    source: substringMatcher(searchArr),
    display: 'value',
    templates: {
        empty: '<div class="tt-empty">По вашему запросу ничего не найдено</div>',
        suggestion: function(data) {
            return '<div><img class="tt-img" src="' + data.image + '" width="30">' + data.value + (data.category ? ' <span class="tt-category">в категории</span> <span class="tt-category-name">' + data.category + '</span>' : '') + '</div>';
        }
    }
});

*/

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
        992 : {
            items: 2
        },
        1200 : {
            items: 3
        }
    }
});
