// ヘッダー内の処理ここから
function HEADER() {
    const headerLogo = document.querySelector(".header__logo");
    // ヘッダー内のロゴの色をファーストビューを超えたか、ナビゲーションメニューを開いたら変更ここから
    document.addEventListener("scroll", () => {
        const targetElement = document.querySelector(".fv__hero__wrap");
        const getElementDistance = targetElement.getBoundingClientRect().bottom;
        if (30 > getElementDistance) {
            headerLogo.classList.add("changeColor");
        } else {
            headerLogo.classList.remove("changeColor");
        1``}
    });
    // ヘッダー内のロゴの色をファーストビューを超えたか、ナビゲーションメニューを開いたら変更ここまで

    // グローバルナビゲーションメニューの開閉ここから
    const globalNavigation = () => {
        const navBtn = document.querySelector(".header__nav__btn");
        const nav = document.querySelector(".nav");
        const navLinks = document.querySelectorAll(".nav__link a");
        const body = document.querySelector("body");
        navBtn.addEventListener("click", () => {
            navBtn.classList.toggle("open");
            nav.classList.toggle("active");
            body.classList.toggle("stop_scroll");
            if (navBtn.classList.contains("open")) {
                headerLogo.classList.add("changeColor");
                navLinks.forEach((navLink, i) => {
                    const delay = i * 0.05;
                    navLink.style.transform = "translateY(100%)";
                    navLink.style.opacity = "0";
                    navLink.animate(
                        [
                            { opacity: "0", transform: "translateY(100%)" },
                            { opacity: "1", transform: "translateY(0)" },
                        ],
                        {
                            duration: 800,
                            delay: delay * 1000,
                            easing: "ease-out",
                            fill: "both",
                        }
                    );
                });
            } else {
                headerLogo.classList.remove("changeColor");
            }
        });

        nav.addEventListener("click", (e) => {
            const navContentsWrap = document.querySelector(".nav__contents__wrap");
            if(e.target !== navContentsWrap) {
                nav.classList.remove("active");
                navBtn.classList.remove("open");
                body.classList.remove("stop_scroll");
            }
        });
    };
    globalNavigation();
    // グローバルナビゲーションメニューの開閉ここまで
}
HEADER();
// ヘッダー内の処理ここまで
