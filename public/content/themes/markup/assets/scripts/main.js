import "bootstrap";
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

// Register ScrollTrigger gsap plugin
gsap.registerPlugin(ScrollTrigger);

jQuery(function () {
    animate_image_header();
    animate_banners();
});

function animate_image_header() {
    let imageHeader = document.querySelector(".site-header .image-header");

    // if image header element is null cancel parallax creation
    if (!imageHeader) {
        return;
    }

    // get parallax items
    let background = imageHeader.querySelector(".image-header__background");
    let title = imageHeader.querySelector(".image-header__title");

    // create parallax with gsap
    gsap.timeline()
        .from(background, {
            ease: "power1.out",
            y: -100,
            scrollTrigger: {
                scrub: true,
                trigger: document.body,
                start: "top top",
                end: "bottom top",
                endTrigger: background,
            },
        })
        .to(
            title,
            {
                ease: "power1.out",
                opacity: 0,
                scrollTrigger: {
                    scrub: true,
                    trigger: document.body,
                    start: "top top",
                    end: "bottom top",
                    endTrigger: title,
                },
            },
            0
        );
}

function animate_banners() {
    let banners = document.querySelectorAll("[data-banner]");

    // iterate over each item in banners list
    banners.forEach((banner) => {
        // get parallax items
        let backgrounds = banner.querySelectorAll(".banner__background");
        let title = banner.querySelector(".banner__title");
        let subtitle = banner.querySelector(".banner__subtitle");
        let cta = banner.querySelector(".banner__cta");

        // create timeline with gsap
        let timeline = gsap.timeline();

        // create parallax effect for the backgrounds images (desktop and mobile)
        backgrounds.forEach((background) => {
            let backgroundFrom = background
                ? JSON.parse(background.getAttribute("data-banner-from"))
                : false;

            // add background parallax to timeline
            if (backgroundFrom) {
                timeline.from(background, {
                    markers: true,
                    ease: background.getAttribute("data-banner-ease"),
                    ...backgroundFrom,
                    scrollTrigger: {
                        scrub: true,
                        trigger: background,
                        start: background.getAttribute("data-banner-start"),
                        end: background.getAttribute("data-banner-end"),
                        endTrigger: document.body,
                    },
                });
            }
        });

        // create parallax effect to the title element
        let titleFrom = title
            ? JSON.parse(title.getAttribute("data-banner-from"))
            : false;

        if (titleFrom) {
            timeline.from(
                title,
                {
                    ease: title.getAttribute("data-banner-ease"),
                    ...titleFrom,
                    scrollTrigger: {
                        scrub: true,
                        trigger: banner,
                        start: title.getAttribute("data-banner-start"),
                        end: title.getAttribute("data-banner-end"),
                        endTrigger: banner,
                    },
                },
                0
            );
        }

        // create parallax effect to the subtitle element
        let subtitleFrom = subtitle
            ? JSON.parse(subtitle.getAttribute("data-banner-from"))
            : false;

        if (subtitleFrom.length > 0) {
            timeline.from(
                subtitle,
                {
                    ease: "none",
                    ...subtitleFrom,
                    scrollTrigger: {
                        scrub: true,
                        trigger: banner,
                        start: subtitle.getAttribute("data-banner-start"),
                        end: subtitle.getAttribute("data-banner-end"),
                        endTrigger: banner,
                    },
                },
                0
            );
        }

        // create parallax effect to the link element (call to action)
        let ctaFrom = cta
            ? JSON.parse(cta.getAttribute("data-banner-from"))
            : false;

        if (ctaFrom) {
            timeline.from(
                cta,
                {
                    ease: cta.getAttribute("data-banner-ease"),
                    ...ctaFrom,
                    scrollTrigger: {
                        scrub: true,
                        trigger: banner,
                        start: cta.getAttribute("data-banner-start"),
                        end: cta.getAttribute("data-banner-end"),
                        endTrigger: banner,
                    },
                },
                0
            );
        }
    });
}
