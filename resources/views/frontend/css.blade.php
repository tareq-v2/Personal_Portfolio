<style>
    @media (max-width: 1199px) {
  .portfolio-popup .pp-prev {
    left: 30px; }
  .portfolio-popup .pp-next {
    right: 15px; } }

@media (max-width: 991px) {
  .portfolio-section .portfolio-item,
  .services-section .services-item {
    flex: 0 0 50%;
    max-width: 50%; }
  .portfolio-popup .pp-prev {
    left: 20px; }
  .portfolio-popup .pp-next {
    right: 0px; } }

@media (max-width: 767px) {
  .home-section .home-text, .home-section .home-img {
    flex: 0 0 100%;
    max-width: 100%; }
  .home-section .home-text {
    text-align: center; }
  .home-section .full-screen {
    padding: 100px 0; }
  .home-section .home-img .img-box {
    margin-bottom: 40px;
    max-width: 350px; }
  .home-section .effect-3 {
    margin-left: -60px; }
  .home-section .effect-4 {
    left: 15%; }
  .home-section .effect-5 {
    right: 8%; }
  .about-section .skills .skill-item,
  .about-section .about-info, .about-section .about-img {
    flex: 0 0 100%;
    max-width: 100%; }
  .about-section .about-img {
    padding-bottom: 30px; }
  .about-section .timeline .timeline-item:nth-child(odd) {
    padding-right: 30px;
    text-align: left;
    padding-left: 75px; }
  .about-section .timeline .timeline-item:nth-child(even) {
    padding-left: 75px;
    padding-right: 30px; }
  .about-section .timeline .timeline-item:nth-child(odd) .icon {
    right: auto;
    left: 5px; }
  .about-section .timeline .timeline-item:nth-child(even) .icon {
    left: 5px; }
  .about-section .timeline .timeline-item {
    margin-bottom: 40px; }
  .about-section .timeline .timeline-item:last-child {
    margin-bottom: 0; }
  .about-section .timeline .timeline-item:nth-child(odd) .timeline-item-inner::before {
    left: 44px;
    right: auto; }
  .about-section .timeline .timeline-item:nth-child(even) .timeline-item-inner::before {
    left: 44px; }
  .about-section .timeline .timeline-item-inner::before {
    width: 16px; }
  .about-section .timeline:before {
    left: 25px; }
  .services-section .services-item {
    flex: 0 0 100%;
    max-width: 100%; }
  .contact-section .w-50,
  .contact-section .contact-item,
  .portfolio-popup .description,
  .portfolio-popup .info,
  .portfolio-section .portfolio-item {
    flex: 0 0 100%;
    max-width: 100%; }
  .portfolio-popup .info {
    padding-top: 10px; }
  .portfolio-popup .pp-prev {
    left: 10px; }
  .portfolio-popup .pp-next {
    right: -10px; }
  .contact-section .contact-form .submit-btn {
    text-align: center; } }

@media (max-width: 575px) {
  .home-section .order-sm-2 {
    order: 2; }
  .home-section .home-text h2 {
    font-size: 40px; }
  .home-section .effect-4 {
    left: 10%; }
  .home-section .effect-5 {
    right: 3%; }
  .about-section .timeline .timeline-item-inner .icon {
    width: 35px;
    height: 35px;
    line-height: 34px;
    margin-top: 3px; }
  .about-section .timeline:before {
    left: 35px; }
  .about-section .timeline .timeline-item:nth-child(odd) .icon {
    right: auto;
    left: 18px; }
  .about-section .timeline .timeline-item:nth-child(even) .icon {
    left: 18px; }
  .about-section .timeline .timeline-item:nth-child(odd) {
    padding-right: 40px;
    text-align: left;
    padding-left: 75px; }
  .about-section .timeline .timeline-item:nth-child(even) {
    padding-left: 75px;
    padding-right: 40px; }
  .about-section .timeline .timeline-item:nth-child(odd) .timeline-item-inner::before {
    left: 44px;
    right: auto; }
  .about-section .timeline .timeline-item:nth-child(even) .timeline-item-inner::before {
    left: 44px; }
  .portfolio-popup .pp-prev {
    left: 5px; }
  .portfolio-popup .pp-next {
    right: -18px; } }

@media (max-width: 414px) {
  .about-section .about-img .img-box img {
    height: 250px; } }

/*------------
global style
-------------*/
/* define custom css variables */
:root {
  --bg-black-900: #000000;
  --bg-black-100: #dddddd;
  --bg-black-50: #eff0f4;
  --skin-color: {{ $colors->theme_color }};
  --nav-color: {{ $colors->header_color }};
  --nav-color-1: #101820;
  --bg-opacity: rgba(225,225,225,0.5);
  --text-black-900: #000000;
  --text-black-700: #555555;
  --text-black-600: #666666;
  --text-black-300: #bbbbbb;
  --nav-text: #000000;
  --outer-shadow: 3px 3px 3px #d0d0d0, -3px -3px 3px #f8f8f8;
  --outer-shadow-0: 0 0 0 #d0d0d0, 0 0 0 #f8f8f8;
  --inner-shadow: inset 3px 3px 3px #d0d0d0, inset -3px -3px 3px #f8f8f8;
  --inner-shadow-0: inset 0 0 0 #d0d0d0, inset 0 0 0 #f8f8f8; }

/* override custom css variables for dark theme */
body.dark {
  --bg-black-900: #ffffff;
  --bg-black-100: #353535;
  --bg-black-50: #101820;
  --skin-color: {{ $colors->theme_color }};
  --nav-color: #101820;
  --nav-color-1: {{ $colors->header_color }};
  --bg-opacity: rgba(43,44,47,0.5);
  --text-black-900: #ffffff;
  --text-black-700: #ffffff;
  --text-black-600: #bbbbbb;
  --text-black-300: #bbbbbb;
  --nav-text: #ffffff;
  --outer-shadow: 3px 3px 3px {{ $colors->theme_color }}, -3px -3px 3px #dc3545;
  --outer-shadow-0: 0 0 0 {{ $colors->theme_color }}, 0 0 0 #dc3545;
  --inner-shadow: inset 3px 3px 3px #dc3545bf, inset -3px -3px 3px {{ $colors->theme_color }}c9;
  --inner-shadow-0: inset 0 0 0 #dc3545bf, inset 0 0 0 {{ $colors->theme_color }}c9; }

body {
  font-size: 16px;
  line-height: 1.5;
  overflow-x: hidden;
  background: var(--bg-black-50); }

body.hidden-scrolling {
  overflow-y: hidden; }

*:not(i) {
  font-family: Times, Times New Roman, Georgia, serif;
  font-weight: 400; }

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none; }

a {
  text-decoration: none;
  background-color: transparent; }

a:hover {
  text-decoration: none; }

ul {
  list-style: none;
  margin: 0;
  padding: 0; }

img {
  vertical-align: middle;
  max-width: 100%; }

.container {
  margin: auto; }

.outer-shadow {
  box-shadow: var(--outer-shadow); }

.inner-shadow {
  box-shadow: var(--inner-shadow); }

.hover-in-shadow {
  position: relative;
  z-index: 1; }

.hover-in-shadow:hover {
  box-shadow: var(--outer-shadow-0); }

.hover-in-shadow:after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  transition: all 0.3s ease; }

.hover-in-shadow:hover:after {
  box-shadow: var(--inner-shadow); }

.btn-1 {
  padding: 10px 25px;
  font-size: 16px;
  font-weight: 500;
  color: var(--skin-color);
  background-color: transparent;
  line-height: 1.5;
  cursor: pointer;
  border-radius: 30px;
  transition: all 0.3s ease;
  display: inline-block;
  border: none; }

.btn-1:after {
  border-radius: 30px; }

.btn-1:hover {
  color: var(--skin-color); }

.effect-wrap .effect {
  position: absolute;
  z-index: -1; }

.effect-1 {
  width: 30px;
  height: 30px;
  border: 4px solid #8a49ff;
  right: 10%;
  bottom: 10%;
  animation: spin 10s linear infinite; }

.effect-2 {
  left: 3%;
  bottom: 20%;
  width: 40px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  animation: topBounce 3s ease-in-out infinite; }

.effect-2 div {
  width: 3px;
  height: 3px;
  background-color: #ff9c07;
  margin: 0 3px 8px; }

.effect-3 {
  height: 180px;
  width: 180px;
  border: 25px solid var(--skin-color);
  border-radius: 50%;
  left: 50%;
  top: -120px;
  animation: leftBounce 3s ease-in-out infinite; }

.effect-4 {
  border-top: 30px solid transparent;
  border-left: 30px solid #06d79c;
  left: 15%;
  top: 20%;
  animation: spin 15s linear infinite; }

.effect-4:before {
  content: '';
  border-top: 30px solid transparent;
  border-left: 30px solid #06d79c;
  position: absolute;
  opacity: 0.5;
  left: -35px;
  top: -25px; }

.effect-5 {
  width: 50px;
  height: 50px;
  right: 10%;
  top: 30%;
  display: flex;
  justify-content: space-between;
  border-radius: 50%;
  overflow: hidden;
  animation: spin 10s linear infinite; }

.effect-5 div {
  width: 1px;
  background-color: #4dd0e1; }

@keyframes spin {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg); } }

@keyframes topBounce {
  0%, 100% {
    transform: translateY(0); }
  50% {
    transform: translateY(25px); } }

@keyframes leftBounce {
  0%, 100% {
    transform: translateX(0); }
  50% {
    transform: translateX(25px); } }

@keyframes fadeInTop {
  0% {
    opacity: 0;
    transform: translateY(-25px); }
  50% {
    opacity: 1;
    transform: translateX(25px); } }

/*==========
glowing
===========*/
.glowing {
  position: relative;
  transform-origin: right;
  animation: colorChange 5s linear infinite; }

.glowing:nth-child(even) {
  transform-origin: left; }

@keyframes colorChange {
  0% {
    filter: hue-rotate(0deg);
    transform: ratate(0deg); }
  100% {
    filter: hue-rotate(360deg);
    transform: ratate(360deg); } }

.glowing span {
  position: absolute;
  top: calc(80px * var(--i));
  left: calc(80px * var(--i));
  bottom: calc(80px * var(--i));
  right: calc(80px * var(--i)); }

.glowing span:before {
  content: '';
  position: absolute;
  top: 50%;
  left: -8px;
  width: 10px;
  height: 10px;
  background: #f00;
  border-radius: 50%; }

.glowing span:nth-child(3n + 1):before {
  background: #86ff00;
  box-shadow: 0 0 20px #86ff00, 0 0 40px #86ff00, 0 0 60px #86ff00, 0 0 80px #86ff00, 0 0 0 8px #86ff00; }

.glowing span:nth-child(3n + 2):before {
  background: #ffd600;
  box-shadow: 0 0 20px #ffd600, 0 0 40px #ffd600, 0 0 60px #ffd600, 0 0 80px #ffd600, 0 0 0 8px #ffd600; }

.glowing span:nth-child(3n + 3):before {
  background: #00e2ff;
  box-shadow: 0 0 20px #00e2ff, 0 0 40px #00e2ff, 0 0 60px #00e2ff, 0 0 80px #00e2ff, 0 0 0 8px #00e2ff; }

.glowing span:nth-child(3n + 1) {
  animation: animate 10s alternate infinite; }

.glowing span:nth-child(3n + 2) {
  animation: animate-reverse 3s alternate infinite; }

.glowing span:nth-child(3n + 3) {
  animation: animate 8s alternate infinite; }

@keyframes animate {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg); } }

@keyframes animate-reverse {
  0% {
    transform: rotate(360deg); }
  100% {
    transform: rotate(0deg); } }

/*all sec*/
.section-title {
  padding: 0 15px;
  flex: 0 0 100%;
  max-width: 100%;
  text-align: left;
  margin-left: 0px;
  margin-bottom: 60px; }

.section-title h2 {
  display: inline-block;
  font-size: 30px;
  font-weight: 700;
  color: var(--text-black-900);
  text-transform: uppercase;
  margin: 0; }

.section-title h2:before {
  content: attr(data-heading);
  display: block;
  font-size: 17px;
  font--weight: 600;
  color: var(--skin-color); }

.section.hide {
  display: none; }

/*---------
preloader
----------*/
.preloader {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: 1500;
  background-color: var(--bg-black-50);
  display: flex;
  align-items: center;
  justify-content: center;
  padding-left: 80px;
  /*=======box2=======*/
  /*=======box3=======*/
  /*========animation=======*/ }
  .preloader .box {
    position: relative;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    animation: animate 2s linear infinite;
    background: linear-gradient(45deg, transparent, transparent 40%, #e5f503); }
  .preloader .box:before {
    content: '';
    position: absolute;
    top: 6px;
    left: 6px;
    right: 6px;
    bottom: 6px;
    background: var(--bg-black-50);
    border-radius: 50%;
    z-index: 1000; }
  .preloader .box:after {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
    background: liner-gradient(45deg, tarnsparent, transparent 40%, #e5f403);
    border-radius: 50%;
    z-index: 1000;
    z-index: 1;
    filter: blur(20px); }
  .preloader .box2 {
    position: relative;
    left: -80px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    animation: animate 3s linear infinite;
    background: linear-gradient(45deg, transparent, transparent 40%, #e5f503); }
  .preloader .box2:before {
    content: '';
    position: absolute;
    top: 6px;
    left: 6px;
    right: 6px;
    bottom: 6px;
    background: var(--bg-black-50);
    border-radius: 50%;
    z-index: 1000; }
  .preloader .box2:after {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
    background: liner-gradient(45deg, tarnsparent, transparent 40%, #e5f403);
    border-radius: 50%;
    z-index: 1000;
    z-index: 1;
    filter: blur(10px); }
  .preloader .box3 {
    position: relative;
    left: -122px;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    animation: animate 4s linear infinite;
    background: linear-gradient(45deg, transparent, transparent 40%, #e5f503); }
  .preloader .box3:before {
    content: '';
    position: absolute;
    top: 6px;
    left: 6px;
    right: 6px;
    bottom: 6px;
    background: var(--bg-black-50);
    border-radius: 50%;
    z-index: 1000; }
  .preloader .box3:after {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
    background: liner-gradient(45deg, tarnsparent, transparent 40%, #e5f403);
    border-radius: 50%;
    z-index: 1000;
    z-index: 1;
    filter: blur(5px); }

@keyframes animate {
  0% {
    transform: rotate(0deg);
    filter: hue-rotate(0deg); }
  100% {
    transform: rotate(360deg);
    filter: hue-rotate(360deg); } }

.preloader.fade-out {
  opacity: 0;
  transition: all 0.6s ease; }

/*---------
HEADER
----------*/
.header {
  padding: 20px 15px;
  position: absolute;
  width: 100%;
  top: 0;
  left: 0px;
  z-index: 99; }
  .header .logo a {
    display: inline-block;
    text-align: center;
    height: 40px;
    width: 40px;
    font-size: 24px;
    color: var(--skin-color);
    border-radius: 50%;
    line-height: 35px;
    font-weight: 600;
    text-trasform: upppercase;
    border: 2px solid var(--skin-color); }
  .header .hamburger-btn {
    height: 40px;
    width: 40px;
    display: flex;
    cursor: pointer;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    border-radius: 50%;
    position: fixed;
    right: 10px; }
    .header .hamburger-btn span {
      display: block;
      height: 2px;
      width: 16px;
      background-color: var(--bg-black-900);
      position: relative; }
    .header .hamburger-btn span:before, .header .hamburger-btn span:after {
      content: '';
      position: absolute;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: var(--bg-black-900); }
    .header .hamburger-btn span:before {
      top: -6px; }
    .header .hamburger-btn span:after {
      top: 6px; }
  .header .hamburger-btn:after {
    border-radius: 50%; }

/*--------------
Navigation menu
---------------*/
.nav-menu {
  position: fixed;
  padding: 0 15px;
  background-color: var(--bg-black-50);
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  opacity: 0;
  visibility: hidden;
  overflow-y: auto; }
  .nav-menu .close-nav-menu {
    height: 40px;
    width: 40px;
    display: block;
    font-size: 35px;
    line-height: 40px;
    border-radius: 50%;
    position: absolute;
    right: 20px;
    top: 20px;
    cursor: pointer;
    text-align: center;
    color: var(--text-black-600);
    transition: all 0.3s ease; }
  .nav-menu .close-nav-menu:after {
    border-radius: 50%; }
  .nav-menu .nav-menu-inner {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center; }
  .nav-menu ul {
    padding: 15px; }
  .nav-menu ul li {
    display: block;
    margin-bottom: 20px;
    text-align: center; }
  .nav-menu ul li:last-child {
    margin-bottom: 0; }
  .nav-menu ul li a {
    display: inline-block;
    font-size: 20px;
    font-weight: 600;
    padding: 5px 30px;
    color: var(--text-black-700);
    text-transform: capitalize;
    border-radius: 30px;
    transition: all 0.3s ease; }
  .nav-menu ul li a:after {
    border-radius: 30px; }
  .nav-menu ul li a.active {
    color: var(--skin-color); }
  .nav-menu .copywrite-text {
    position: absolute;
    left: 0;
    top: 50%;
    font-size: 18px;
    color: var(--text-black-600);
    transform: translateY(-50%) rotate(-90deg);
    left: -60px; }

.nav-menu.open {
  visibility: visible;
  opacity: 1;
  z-index: 999;
  transition: all 0.3s ease-in; }

.fade-out-effect {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: var(--bg-black-50);
  z-index: -1;
  visibility: hidden; }

.fade-out-effect.active {
  visibility: visible;
  z-index: 1000;
  animation: fadeOut 0.3s ease-out; }

@keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }

/*nav_bar desktop_menu*/
.nav_bar {
  font-family: "Rubik";
  background: var(--nav-color);
  color: var(--nav-text);
  display: flex;
  justify-content: space-between; }
  .nav_bar .mainMenu {
    display: flex;
    list-style: none; }
  .nav_bar .logo {
    font-size: 25px;
    font-weight: 700;
    color: {{ $colors->theme_color }}; }
  .nav_bar .mainMenu li a {
    display: inline-block;
    padding: 20px;
    text-decoration: none;
    text-transform: uppercase;
    color: var(--nav-text);
    font-size: 1.0rem; }
  .nav_bar .mainMenu li a:hover {
    color: var(--skin-color);
    border-bottom: 2px solid {{ $colors->theme_color }}; }
  .nav_bar .mainMenu li a.active {
    color: var(--skin-color);
    border-bottom: 2px solid {{ $colors->theme_color }}; }
  .nav_bar .openMenu {
    font-size: 1.6rem;
    margin: 20px;
    display: none;
    cursor: pointer; }

.icons i {
  font-size: 1.6rem;
  padding: 5px;
  color: var(--text-black-700); }

.icons a {
  font-size: 20px;
  font-weight: 600;
  color: var(--text-black-700);
  transition: all 0.3s ease;
  padding: 15px; }

.fa-facebook:hover {
  color: #006eff; }

.fa-twitter:hover {
  color: #569af3; }

.fa-instagram:hover {
  color: magenta; }

.fa-github:hover {
  color: #ff7b00; }

.fixed-top {
  background: var(--nav-color); }
  .fixed-top .mainMenu li a {
    color: var(--nav-text); }
  .fixed-top .openMenu .fa {
    color: #fff; }
  .fixed-top .nav_bar {
    background: var(--nav-color); }

@media (max-width: 2999px) {
  .mobile_menu {
    display: none; }
  .header {
    display: none; } }

@media (max-width: 819px) {
  .nav_bar {
    display: none; }
  .mobile_menu {
    display: block; }
  .header {
    display: block; } }

/*-----------
HOME SECTION
------------*/
.home-section .row {
  position: relative; }

.home-section .full-screen {
  padding: 50px 0;
  height: 100vh; }

.home-section .home-text, .home-section .home-img {
  padding: 0 15px; }

.home-section .home-text p {
  color: var(--text-black-300);
  font-size: 18px;
  text-transform: capitalize;
  margin: 0; }

.home-section .home-text h2 {
  font-size: 55px;
  font-weight: 600;
  color: var(--text-black-900);
  margin: 0; }
  .home-section .home-text h2 b {
    color: {{ $colors->theme_color }};
    font-weight: 600; }

.home-section .home-text h1 {
  font-size: 21px;
  font-weight: 500;
  color: var(--text-black-700);
  text-transform: capitalize;
  margin: 0; }

.home-section .btn-1 {
  margin-top: 20px; }

.home-section .home-img .img-box {
  position: relative;
  bottom: -220px; }

.home-section .home-img .img-box img {
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  transition: bottom 1s, left 1s; }

.home-section .home-img .img-box .back_img {
  width: 62%; }

.home-section .home-img .img-box .main_img {
  width: 50%; }

.home-section .home-img .img-box:hover .back_img {
  bottom: 40px; }

.home-section .home-img .img-box:hover .main_img {
  left: 54%; }

/*@media(max-width: 2900px){
	.about-section{
		margin-top: 0px;
	}
}*/
@media (max-width: 991px) {
  .home-section .home-img .img-box .back_img {
    width: 85%; }
  .home-section .home-img .img-box .main_img {
    width: 80%; } }

@media (max-width: 767px) {
  .home-section .home-text {
    position: absolute;
    top: 160px; }
  .home-section .home-img .img-box .back_img {
    width: 72%; }
  .home-section .home-img .img-box .main_img {
    width: 60%; }
  .home-section .home-img .img-box {
    position: relative;
    bottom: -290px; }
  .home-section .home-img .img-box img {
    position: absolute;
    left: 80%;
    bottom: 0;
    transform: translateX(-50%);
    transition: bottom 1s, left 1s; }
  .about-section {
    margin-top: 230px; }
  .img-box1 {
    max-width: 50%;
    margin-left: 130px;
    margin-top: 50px; } }

@media (max-width: 575px) {
  .home-section .home-text {
    position: absolute;
    top: 120px; }
  .home-section .home-img .img-box .back_img {
    width: 72%; }
  .home-section .home-img .img-box .main_img {
    width: 60%; }
  .home-section .home-img .img-box {
    position: relative;
    bottom: -290px; }
  .home-section .home-img .img-box img {
    position: absolute;
    left: 80%;
    bottom: 0;
    transform: translateX(-50%);
    transition: bottom 1s, left 1s; }
  .about-section {
    margin-top: 160px; }
  .img-box1 {
    max-width: 50%;
    margin-left: 130px;
    margin-top: 50px; } }

@media (max-width: 376px) {
  .home-section .home-text {
    position: absolute;
    top: 100px; }
    .home-section .home-text h2 {
      font-size: 35px; }
    .home-section .home-text h1 {
      font-size: 20px; }
    .home-section .home-text p {
      font-size: 15px; }
  .home-section .home-img .img-box .back_img {
    width: 70%; }
  .home-section .home-img .img-box .main_img {
    width: 60%; }
  .home-section .home-img .img-box {
    position: relative;
    top: 250px; }
  .home-section .home-img .img-box img {
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    transition: bottom 1s, left 1s; }
  .img-box1 {
    max-width: 50%;
    margin-left: 92px;
    margin-top: 50px; }
  .about-section {
    margin-top: 130px; } }

/*-------------
ABOUT SECTION
--------------*/
.about-section {
  padding: 80px 0 80px;
  min-height: 100vh; }
  .about-section .about-img {
    padding: 0 15px; }
    .about-section .about-img .img-box {
      padding: 15px;
      border-radius: 5px; }
      .about-section .about-img .img-box img {
        width: 100%;
        border: 10px solid transparent;
        border-radius: 5px;
        height: 350px; }
    .about-section .about-img .social-links {
      margin-top: 20px;
      text-align: center; }
      .about-section .about-img .social-links a {
        display: inline-block;
        height: 40px;
        width: 40px;
        font-size: 16px;
        text-align: center;
        color: var(--skin-color);
        margin: 0 4px;
        border-radius: 50%;
        transition: all 0.3s ease; }
      .about-section .about-img .social-links a:after {
        border-radius: 50%; }
      .about-section .about-img .social-links a:hover {
        color: var(--skin-color); }
      .about-section .about-img .social-links a i {
        line-height: 40px; }
  .about-section .about-info {
    padding: 0 15px; }
    .about-section .about-info p {
      font-size: 16px;
      line-height: 26px;
      margin-bottom: 15px;
      color: var(--text-black-700); }
    .about-section .about-info span {
      font-weight: 700; }
    .about-section .about-info .btn-1 {
      margin-top: 20px; }
  .about-section .about-tabs {
    padding: 60px 15px 50px;
    flex: 0 0 100%;
    max-width: 100%;
    text-align: center; }
    .about-section .about-tabs .tab-item {
      display: inline-block;
      margin: 0 5px 10px;
      cursor: pointer;
      padding: 5px 10px;
      border-radius: 30px;
      transition: all 3s ease;
      font-size: 16px;
      color: var(--text-black-600);
      font-weight: 500;
      text-transform: capitalize; }
    .about-section .about-tabs .tab-item:hover:not(.active) {
      opacity: 0.6; }
    .about-section .about-tabs .tab-item.active {
      color: var(--skin-color); }
  .about-section .tab-content {
    flex: 0 0 100%;
    max-width: 100%;
    display: none; }
  .about-section .tab-content.active {
    display: block;
    animation: fadeInTop 0.5s ease; }
  .about-section .skills .skill-item {
    padding: 0 15px;
    margin-bottom: 30px; }
    .about-section .skills .skill-item p {
      font-size: 16px;
      color: var(--text-black-700);
      text-transform: capitalize;
      margin: 0 0 10px; }
    .about-section .skills .skill-item .progress-1 {
      height: 20px;
      border-radius: 10px;
      position: relative; }
    .about-section .skills .skill-item .progress-bar-1 {
      background-color: var(--skin-color);
      height: 6px;
      left: 7px;
      top: 7px;
      position: absolute;
      border-radius: 10px; }
      .about-section .skills .skill-item .progress-bar-1 span {
        position: absolute;
        right: 0;
        top: 0;
        font-size: 16px;
        font-weight: 500;
        color: var(--skin-color);
        margin-top: -40px; }
  .about-section .experience, .about-section .education {
    padding-bottom: 80px; }
  .about-section .timeline {
    flex: 0 0 100%;
    max-width: 100%;
    position: relative; }
    .about-section .timeline .timeline-item {
      flex: 0 0 100%;
      max-width: 100%;
      padding: 0 15px; }
    .about-section .timeline .timeline-item:nth-child(odd) {
      padding-right: calc(50% + 50px);
      text-align: right; }
    .about-section .timeline .timeline-item:nth-child(even) {
      padding-left: calc(50% + 50px); }
    .about-section .timeline .timeline-item:nth-child(odd) .icon {
      right: calc(50% - 20px); }
    .about-section .timeline .timeline-item:nth-child(even) .icon {
      left: calc(50% - 20px); }
    .about-section .timeline .timeline-item:nth-child(odd) .timeline-item-inner:before {
      right: calc(50% - -20px); }
    .about-section .timeline .timeline-item:nth-child(even) .timeline-item-inner:before {
      left: calc(50% - -20px); }
    .about-section .timeline .timeline-item-inner {
      padding: 30px;
      border-radius: 5px; }
      .about-section .timeline .timeline-item-inner .icon {
        width: 40px;
        height: 40px;
        background-color: var(--bg-text-50);
        border: 1px solid var(--bg-black-100);
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        font-size: 16px;
        color: var(--skin-color);
        position: absolute; }
      .about-section .timeline .timeline-item-inner span {
        font-weight: 500;
        color: var(--skin-color);
        display: block;
        margin: 0 0 10px;
        text-transform: capitalize; }
      .about-section .timeline .timeline-item-inner h3 {
        font-size: 20px;
        color: var(--text-black-700);
        font-weight: 600;
        margin: 0 0 5px;
        text-transform: capitalize; }
      .about-section .timeline .timeline-item-inner h4 {
        font-size: 16px;
        color: var(--text-black-300);
        font-style: italic;
        margin: 0; }
      .about-section .timeline .timeline-item-inner p {
        font-size: 20px;
        color: var(--text-black-300);
        line-height: 26px;
        margin: 15px 0 0; }
  .about-section .timeline:before {
    content: '';
    width: 1px;
    height: 100%;
    position: absolute;
    left: 50%;
    top: 0;
    background-color: var(--bg-black-100); }
  .about-section .timeline .timeline-item-inner:before {
    content: "";
    position: absolute;
    background-color: var(--bg-black-100);
    width: 30px;
    height: 1px;
    margin-top: 20px;
    z-index: -1; }

/*----------------
services section
-----------------*/
.service-section {
  min-height: 100vh;
  padding: 80px 0 80px; }
  .service-section .service-item {
    padding: 15px 5px;
    height: 400px; }
  .service-section .service-item-inner {
    padding: 40px 15px;
    border-radius: 5px;
    text-align: center;
    width: 100%;
    height: 100%; }
  .service-section .service-item-inner .icon {
    height: 58px;
    width: 60px;
    text-align: center;
    border-radius: 50%;
    transition: all 0.3s ease;
    display: block;
    margin: 0 auto 30px;
    position: relative; }
  .service-section .service-item-inner .icon:after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    transition: all 0.3s ease; }
  .service-section .service-item-inner:hover .icon {
    box-shadow: var(--inner-shadow-0); }
  .service-section .service-item-inner:hover .icon:after {
    box-shadow: var(--outer-shadow); }
  .service-section .service-item-inner .icon i {
    font-size: 25px;
    line-height: 60px;
    color: var(--text-black-900);
    transition: all 0.3s ease;
    font-weight: 600; }
  .service-section .service-item-inner:hover .icon i {
    color: var(--skin-color); }
  .service-section .service-item-inner .icon .bi-palette {
    line-height: 51px;
    color: var(--text-black-900); }
  .service-section .service-item-inner:hover .icon .bi-palette {
    color: var(--skin-color); }
  .service-section .service-item-inner h3 {
    font-size: 20px;
    font-weight: 600;
    color: var(--text-black-700);
    margin: 0 0 10px;
    text-transform: capitalize; }
  .service-section .service-item-inner p {
    font-size: 16px;
    color: var(--text-black-600);
    margin: 0;
    line-height: 26px; }

/*----------------
portfolio section
-----------------*/
.portfolio-section {
  min-height: 100vh;
  padding: 80px 0 80px; }
  .portfolio-section .section-title {
    margin-bottom: 40px; }
  .portfolio-section .portfolio-filter {
    padding: 0 15px;
    flex: 0 0 100%;
    max-width: 100%;
    text-align: center; }
  .portfolio-section .filter-item {
    display: inline-block;
    margin: 0 5px 10px;
    padding: 5px 10px;
    border-radius: 30px;
    cursor: pointer;
    font-weight: 500;
    color: var(--text-black-600);
    text-transform: capitalize;
    font-size: 16px;
    transition: all 0.3s ease; }
  .portfolio-section .filter-item.active {
    color: var(--skin-color); }
  .portfolio-section .filter-item:hover:not(.active) {
    opacity: 0.6; }
  .portfolio-section .portfolio-item {
    flex: 0 0 33.33%;
    max-width: 33.33%;
    padding: 15px;
    display: flex;
    flex-wrap: wrap; }
  .portfolio-section .portfolio-item.hide {
    display: none; }
  .portfolio-section .portfolio-item.show {
    display: block;
    animation: fadeInTop 0.5s ease; }
  .portfolio-section .portfolio-item-inner {
    padding: 15px;
    border-radius: 5px;
    cursor: pointer; }
  .portfolio-section .portfolio-item-img img {
    border-radius: 5px;
    width: 100%;
    transition: all 0.2s ease; }
  .portfolio-section .portfolio-item-inner:hover .portfolio-item-img img {
    transform: translateY(-25px); }
  .portfolio-section .portfolio-item-img {
    position: relative; }
  .portfolio-section .portfolio-item-img .view-project {
    font-size: 16px;
    text-transform: capitalize;
    font-weight: 500;
    color: var(--skin-color);
    transition: all 0.3s ease;
    position: absolute;
    left: 0;
    bottom: -4px;
    transform: translateY(-5px);
    z-index: -1;
    opacity: 0; }
  .portfolio-section .portfolio-item-inner:hover .view-project {
    transform: translateY(0px);
    opacity: 1; }
  .portfolio-section .portfolio-item-details {
    display: none; }
  .portfolio-section .portfolio-item-inner p {
    font-size: 16px;
    margin: 10px 0 0;
    color: var(--text-black-600);
    text-transform: capitalize; }

/*-------------
portfolio popup
---------------*/
.portfolio-popup {
  background-color: var(--bg-black-50);
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 1000;
  overflow-y: scroll;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease; }
  .portfolio-popup .pp-details {
    max-width: 1350px;
    width: calc(85% + 30px);
    margin: auto;
    max-height: 0;
    overflow: hidden;
    opacity: 0;
    transition: all 0.3s ease; }
  .portfolio-popup .pp-details.active {
    opacity: 1; }
  .portfolio-popup .pp-details-inner {
    padding: 30px 0; }
  .portfolio-popup .pp-title {
    padding: 0 15px; }
  .portfolio-popup .pp-title h2 {
    font-size: 25px;
    color: var(--text-black-900);
    text-transform: capitalize;
    font-weight: 600;
    margin: 0 0 5px; }
  .portfolio-popup .pp-title p {
    font-size: 14px;
    color: var(--text-black-600);
    font-weight: 600;
    margin: 0 0 15px;
    border-bottom: 1px solid var(--bg-black-100);
    padding-bottom: 10px; }
  .portfolio-popup .pp-title p span {
    font-weight: 400;
    text-transform: capitalize; }
  .portfolio-popup .row {
    margin-left: 0px; }
  .portfolio-popup .pp-project-details h3 {
    font-size: 20px;
    color: var(--text-black-700);
    text-transform: capitalize;
    font-weight: 600;
    margin: 0 0 15px; }
  .portfolio-popup .description {
    flex: 0 0 65%;
    max-width: 65%;
    padding: 0 15px; }
  .portfolio-popup .description p {
    font-size: 16px;
    color: var(--text-black-600);
    line-height: 26px;
    margin: 0; }
  .portfolio-popup .info {
    flex: 0 0 35%;
    max-width: 35%;
    padding: 0 15px; }
  .portfolio-popup .info ul li {
    display: block;
    margin-bottom: 10px;
    font-weight: 600;
    color: var(--text-black-600);
    font-size: 16px; }
    .portfolio-popup .info ul li a {
      color: var(--skin-color); }
  .portfolio-popup .info ul li span {
    font-weight: 400; }
  .portfolio-popup .info ul li:last-child {
    margin-bottom: 0; }
  .portfolio-popup .separator {
    height: 1px;
    width: 100%;
    display: block;
    background-color: var(--bg-black-100); }
  .portfolio-popup .pp-img {
    max-width: 100%;
    width: auto;
    height: auto;
    padding: 10px;
    border-radius: 5px; }
  .portfolio-popup .pp-main {
    min-height: 100vh;
    max-width: 1350px;
    width: 85%;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 80px; }
  .portfolio-popup .pp-main-inner {
    padding: 70px 0 50px;
    position: relative; }
  .portfolio-popup .pp-project-details-btn {
    position: absolute;
    left: 0;
    border-radius: 30px;
    font-size: 16px;
    font-weight: 500;
    color: var(--skin-color);
    cursor: pointer;
    padding: 0 15px;
    height: 40px;
    line-height: 40px;
    top: 15px;
    transition: all 0.3s ease; }
  .portfolio-popup .pp-project-details-btn i {
    margin-left: 4px; }
  .portfolio-popup .pp-project-details-btn:after {
    border-radius: 30px; }
  .portfolio-popup .pp-close {
    position: absolute;
    right: 0;
    border-radius: 50%;
    height: 40px;
    width: 40px;
    top: 15px;
    text-align: center;
    line-height: 40px;
    font-size: 35px;
    color: var(--text-black-600);
    cursor: pointer;
    transition: all 0.3s ease; }
  .portfolio-popup .pp-close:after {
    border-radius: 50%; }
  .portfolio-popup .pp-counter {
    position: absolute;
    right: 0;
    height: 40px;
    line-height: 40px;
    bottom: 5px;
    font-size: 16px;
    color: var(--text-black-600); }
  .portfolio-popup .pp-prev, .portfolio-popup .pp-next {
    position: fixed;
    top: 50%;
    height: 40px;
    width: 40px;
    font-size: 20px;
    cursor: pointer;
    z-index: 1010;
    color: var(--text-black-900);
    transition: all 0.3s ease;
    opacity: 0.5; }
  .portfolio-popup .pp-prev:hover,
  .portfolio-popup .pp-next:hover {
    opacity: 1; }
  .portfolio-popup .pp-prev i,
  .portfolio-popup .pp-next i {
    line-height: 40px; }
  .portfolio-popup .pp-prev {
    left: 30px; }
  .portfolio-popup .pp-next {
    right: 30px; }
  .portfolio-popup .pp-prev i {
    transform: rotate(180deg); }

.portfolio-popup.open {
  visibility: visible;
  opacity: 1;
  padding-top: 50px; }

.portfolio-popup .pp-loader {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: 1005;
  background-color: var(--bg-opacity);
  display: flex;
  align-items: center;
  justify-content: center;
  visibility: hidden;
  opacity: 0; }
  .portfolio-popup .pp-loader div {
    height: 40px;
    width: 40px;
    border: 3px solid var(--skin-color);
    border-radius: 50%;
    border-right: 3px solid transparent;
    animation: spin 2s linear infinite; }

.portfolio-popup .pp-loader.active {
  visibility: visible;
  opacity: 1; }

/*=================
testimonial section
===================*/
.testimonial-section {
  padding: 80px 0 80px;
  min-height: 100vh; }
  .testimonial-section .testi-box {
    width: 100%;
    max-width: 600px;
    margin: auto;
    padding: 0 15px; }
  .testimonial-section .testi-slider {
    border-radius: 5px;
    overflow: hidden; }
  .testimonial-section .testi-item {
    padding: 30px;
    text-align: center;
    position: relative; }
    .testimonial-section .testi-item i {
      position: absolute;
      font-size: 30px;
      color: var(--text-black-600);
      opacity: 0.1; }
    .testimonial-section .testi-item i.left {
      left: 5px;
      top: 5px; }
    .testimonial-section .testi-item i.right {
      right: 5px;
      bottom: 5px; }
    .testimonial-section .testi-item p {
      font-size: 16px;
      line-height: 26px;
      color: var(--text-black-600);
      margin: 0 0 30px; }
    .testimonial-section .testi-item img {
      max-width: 70px;
      display: inline-block;
      width: 100%; }
    .testimonial-section .testi-item span {
      display: block;
      margin: 10px 0 0;
      font-weight: 600px;
      font-size: 16px;
      color: var(--text-black-700);
      text-transform: capitalize; }
  .testimonial-section .testi-slider-nav {
    margin-top: 30px;
    text-align: center; }
    .testimonial-section .testi-slider-nav span {
      height: 40px;
      width: 40px;
      color: var(--skin-color);
      display: inline-block;
      font-size: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
      border-radius: 50%;
      margin: 0 4px; }
      .testimonial-section .testi-slider-nav span i {
        line-height: 40px;
        font-weight: bold; }
    .testimonial-section .testi-slider-nav span:after {
      border-radius: 50%; }
  .testimonial-section .testi-slider .testi-slider-container {
    display: flex;
    transition: margin 1s ease;
    align-items: center; }

/*=================
contact section
===================*/
.contact-section {
  padding: 80px 0 80px;
  min-height: 100vh; }
  .contact-section .contact-item {
    flex: 0 0 33.33%;
    max-width: 33.33%;
    padding: 15px;
    display: flex; }
  .contact-section .contact-item-inner {
    padding: 30px 15px;
    text-align: center;
    border-radius: 5px;
    width: 100%; }
    .contact-section .contact-item-inner i {
      font-size: 25px;
      color: var(--skin-color); }
    .contact-section .contact-item-inner span {
      display: block;
      font-size: 16px;
      font-weight: 600;
      color: var(--text-black-700);
      margin: 15px 0 10px;
      text-transform: capitalize; }
    .contact-section .contact-item-inner p {
      font-size: 16px;
      color: var(--text-black-600);
      line-height: 26px;
      margin: 0;
      word-break: break-word; }
  .contact-section .contact-form {
    flex: 0 0 100%;
    maz-width: 100%;
    margin-top: 50px; }
  .contact-section .w-50 {
    padding: 0 15px;
    flex: 0 0 50%;
    maz-width: 50%; }
  .contact-section .input-group {
    margin: 0 0 25px;
    transition: all 0.3s ease;
    border-radius: 30px; }
  .contact-section .input-group:after {
    border-radius: 30px; }
  .contact-section .input-group .input-control {
    height: 45px;
    display: block;
    border-radius: 30px;
    width: 100%;
    border: none;
    background-color: transparent;
    font-size: 17px;
    padding: 0 15px;
    color: var(--text-black-700); }
  .contact-section .input-group textarea.input-control {
    height: 184px;
    padding-top: 15px;
    resize: none; }
  .contact-section .contact-form .submit-btn {
    flex: 0 0 100%;
    max-width: 100%;
    text-align: right;
    padding: 0 15px; }
  .contact-section .contact-form .submit-btn button:focus {
    outline: none; }

/*=============
style-switcher
==============*/
.style-switcher {
  position: fixed;
  right: 22px;
  top: 77px;
  padding: 15px;
  width: 200px;
  z-index: 101;
  border-radius: 5px;
  margin-right: -25px;
  transition: all 0.3s ease;
  transform: translateX(100%); }
  .style-switcher .s-icon {
    position: absolute;
    height: 40px;
    width: 40px;
    text-align: center;
    font-size: 20px;
    color: var(--text-black-900);
    right: 100%;
    margin-right: 15px;
    cursor: pointer;
    transition: all 0.3s ease;
    border-radius: 50%; }
  .style-switcher .s-icon:after {
    border-radius: 50%; }
  .style-switcher .style-switcher-toggler {
    top: 0; }
  .style-switcher .day-night {
    top: 55px; }
  .style-switcher i {
    line-height: 40px;
    color: var(--text-black-900); }
  .style-switcher h4 {
    margin: 0 0 10px;
    color: var(--text-black-700);
    font-size: 16px;
    font-weight: 600;
    text-transform: capitalize; }

.style-switcher.open {
  transform: translateX(-15px); }

/*progress bar*/
/*.progress-bar-1{
  transition: 0.4s linear;  
  transition-property: width, background-color;    
}
.progress-moved .progress-bar-1 {
  animation: progressAnimation 6s;
}

@keyframes progressAnimation {
  0%   { width: 0%; background-color: #dc3545bf;}
  100% { width: 50%; background-color: {{ $colors->theme_color }}; }
}*/

</style>