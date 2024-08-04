window.addEventListener("scroll", function () {
    const header = document.getElementById("navbar");
    const navigation = document.getElementById("navigation");
    const iconLogin = document.getElementById("iconLogin");
    const trekify = document.getElementById("header");
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const textHref = document.getElementById("textHref");
    const textUser = document.getElementById("dropdownDefaultButton");

    if (scrollTop > 0) {
        header.classList.add("white-bg");
        navigation.classList.add("nav-js");
        iconLogin.classList.add("fa-regular-js");
        trekify.classList.add("span-js");
        textHref.classList.add("href-js");
    } else {
        header.classList.remove("white-bg");
        navigation.classList.remove("nav-js");
        trekify.classList.remove("span-js");
        iconLogin.classList.remove("fa-regular-js");
        textHref.classList.remove("href-js");
    }
});

// Membuat observer
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            const img = entry.target;
            const src = img.getAttribute("data-src");
            img.setAttribute("src", src);
            observer.unobserve(img);
        }
    });
});

// Memilih semua elemen gambar yang memiliki atribut data-src
const lazyImages = document.querySelectorAll("img[data-src]");

// Menerapkan observer pada setiap elemen gambar
lazyImages.forEach((image) => {
    observer.observe(image);
});
