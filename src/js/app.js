import "../scss/main.scss";



const hamburger = document.querySelector(".hamburger");
const mobileNav = document.querySelector(".mobileNav");

const handleClick = () => {
	hamburger.classList.toggle('hamburger--active');
	mobileNav.classList.toggle('mobileNav--active');
}

hamburger.addEventListener('click', handleClick);