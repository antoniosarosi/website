window.onscroll = () => {
    const header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
};

const menu = document.querySelector(".menu");
const menuBtn = document.querySelector(".menu-btn");
const closeBtn = document.querySelector(".close-btn");

menuBtn.onclick = () => menu.classList.add("active");
closeBtn.onclick = () => menu.classList.remove("active");
