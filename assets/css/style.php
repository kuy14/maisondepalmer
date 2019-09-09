/*--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/
<?php
header("Content-type: text/css");
?>
body {
    margin: 0;
    padding: 0;
    background: #fff;
    font-family: 'Open Sans', sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
    font-family: 'Montserrat', sans-serif;
}

p {
    margin: 0;
    letter-spacing: 1px;
}

ul {
    margin: 0;
    padding: 0;
}

p,
ul,
ol {
    font-size: 14px;
    letter-spacing: 1px;
}

.background-video {
    position: fixed;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    width: 100%;
    height: 100%;
}

input[type="submit"],
a,
.nbs-flexisel-nav-left,
.nbs-flexisel-nav-right {
    transition: .5s ease-in;
    -webkit-transition: .5s ease-in;
    -moz-transition: .5s ease-in;
    -o-transition: .5s ease-in;
    -ms-transition: .5s ease-in;
}

a:hover {
    text-decoration: none;
}

a:focus {
    outline: none;
    text-decoration: none;
}

/*-- banner --*/
.wrapper_top_w3layouts {
    position: relative;
}
.logo {
    position: absolute;
    z-index: 99;
    left:7%;
    top: 6.5%;
}
.logo.inner_page_log {
    position: absolute;
    z-index: 99;
    left: 7%;
    margin-top: 47px;
}
.navbar-brand {
    font-size: 0.7em;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 300;
    display: block;
    padding: 0;
    height: 46px;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.31);
}
.navbar-brand span {
    padding: 0.496em .6em;
    display: inline-block;
    background: #fff;
    color: #2e2f2f;
}
.navbar-brand i {
    padding: 0.5em 0.5em 0.5em 0em;
    font-style: normal;
    display: inline-block;
}
a.navbar-brand:hover {
    color: #fff;
}
 ul.top_icons {
    position: absolute;
    z-index: 9;
    left: 45%;
    margin-top: 3em;
    bottom: 29%;
}
ul.top_icons li{
	display:inline-block;
	margin-right:16px;
}
ul.top_icons li a {
    color: #fff;
    font-size:14px;
}
ul.top_icons li a:hover {
    color: #fb383b;
}
.top_nav_right {
    width: 17%;
    margin-top: 47px;
    position: absolute;
    z-index: 99;
    right: -2%;
}
/*-- menu --*/
.mobile-nav-button {
    position: fixed;
    margin: 47px 0 0 0;
    right: 8%;
    top: 0;
    z-index: 9999;
    cursor: pointer;
    width: 36px;
    height: 36px;
    background: rgba(27, 25, 25, 0.27);
}

.mobile-menu ul li {
    list-style: none;
    margin-bottom: 2em;
    display: block;
}

.mobile-menu ul li a {
    width: 100%;
    margin: 0 auto;
    display: block;
    text-align: center;
    text-decoration: none;
    color: #fff;
    font-size: 1em;
    font-weight: bold;
    overflow: hidden;
    position: relative;
    padding: 1em 0;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.open>ul.dropdown-menu.agile_short_dropdown {
    display: block;
    transform: none !important;
    min-width: 65%;
    border: none;
    box-shadow: none;
    border-radius: 0;
    left: 18%;
}

.open>ul.dropdown-menu.agile_short_dropdown li {
    margin: 0 !important;
}

ul.dropdown-menu.agile_short_dropdown>li>a:hover {
    background: none;
}

.mobile-menu ul li a:after {
    content: '';
    background: #7aba1e;
    width: 100%;
    height: 100%;
    position: absolute;
    right: -100%;
    top: 0;
    z-index: -1;
    transition: 0.4s ease;
}

.mobile-menu ul li a:hover,
.mobile-menu ul li.active a {
    color: #fff;
}

.mobile-menu ul li a:hover:after,
.mobile-menu ul li.active a:after {
    right: 0;
}

li.dropdown.act a.w3_icons_act {
    background: #0e0e0e;
    color: #fff;
}

.mobile-menu img {
    position: absolute;
    width: 150px;
    display: block;
    left: 50%;
    top: 3rem;
    transform: translatex(-50%);
    -webkit-transform: translatex(-50%);
    -moz-transform: translatex(-50%);
    -o-transform: translatex(-50%);
    -ms-transform: translatex(-50%);
    padding: 0;
    text-align: center;
}

.mobile-menu--open {
    opacity: 1;
    right: 0%;
}

.dropdown.active.open a ul.dropdown-menu.agile_short_dropdown li a.w3_icon_1:after {
    background: none !important;
}

/*-- //menu --*/
/*-- /search --*/

.cd-header-buttons {
    position: fixed;
    display: inline-block;
    top: 47px;
    right: 196px;
    z-index: 99;
}
.cd-header-buttons li {
	display: inline-block;
}

.cd-search-trigger,
.cd-nav-trigger {
	position: relative;
	display: block;
	width: 36px;
    height:36px;
	overflow: hidden;
	white-space: nowrap;
	color: transparent;
	z-index: 3;
	background:rgba(27, 25, 25, 0.27);
	border: 1px solid rgba(27, 25, 25, 0.27);
}

.cd-search-trigger::before,
.cd-search-trigger::after {
	/* search icon */
	content: '';
	position: absolute;
	-webkit-transition: opacity 0.3s;
	-moz-transition: opacity 0.3s;
	transition: opacity 0.3s;
	/* Force Hardware Acceleration in WebKit */
	-webkit-transform: translateZ(0);
	-moz-transform: translateZ(0);
	-ms-transform: translateZ(0);
	-o-transform: translateZ(0);
	transform: translateZ(0);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.cd-search-trigger::before {
    top: 6px;
    left: 8px;
    width: 18px;
    height: 18px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 3px solid #fff;
}

.cd-search-trigger::after {
    height: 3px;
    width: 8px;
    background: #fff;
    bottom: 9px;
    right: 5px;
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg);
}

.cd-search-trigger span {
	/* container for the X icon */
	position: absolute;
	height: 100%;
	width: 100%;
	top: 0;
	left: 0;
}

.cd-search-trigger span::before,
.cd-search-trigger span::after {
	/* close icon */
	content: '';
	position: absolute;
	display: inline-block;
	height: 3px;
	width: 22px;
	top: 50%;
	margin-top: -2px;
	left: 50%;
	margin-left: -11px;
	background: #fff;
	opacity: 0;
	/* Force Hardware Acceleration in WebKit */
	-webkit-transform: translateZ(0);
	-moz-transform: translateZ(0);
	-ms-transform: translateZ(0);
	-o-transform: translateZ(0);
	transform: translateZ(0);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	-webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
	-moz-transition: opacity 0.3s, -moz-transform 0.3s;
	transition: opacity 0.3s, transform 0.3s;
}

.cd-search-trigger span::before {
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg);
}

.cd-search-trigger span::after {
	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

.cd-search-trigger.search-is-visible::before,
.cd-search-trigger.search-is-visible::after {
	/* hide search icon */
	-moz-opacity: 0;
	opacity: 0;
}

.cd-search-trigger.search-is-visible span::before,
.cd-search-trigger.search-is-visible span::after {
	/* show close icon */
	-moz-opacity: 1;
	opacity: 1;
}

.cd-search-trigger.search-is-visible span::before {
	-webkit-transform: rotate(135deg);
	-moz-transform: rotate(135deg);
	-ms-transform: rotate(135deg);
	-o-transform: rotate(135deg);
	transform: rotate(135deg);
}

.cd-search-trigger.search-is-visible span::after {
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg);
}

.cd-search {
	position: absolute;
	width: 100%;
	top: 14%;
	left: 0;
	z-index: 3;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: opacity .3s 0s, visibility 0s .3s;
	-moz-transition: opacity .3s 0s, visibility 0s .3s;
	transition: opacity .3s 0s, visibility 0s .3s;
}

.cd-search input {
	border-radius: 0;
	border: none;
	background: rgba(0, 0, 0, 0.75);
	width: 100%;
	-webkit-appearance: none;
	-moz-appearance: none;
	-ms-appearance: none;
	-o-appearance: none;
	appearance: none;
	font-size: 1em;
    padding: 2em 3em;
	color: #fff;
	letter-spacing: 3px;
    
}

.cd-search input::-webkit-input-placeholder {
	color: #fff !important;
}

.cd-search input::-moz-placeholder {
	color: #fff !important;
}

.cd-search input:-moz-placeholder {
	color: #fff !important;
}

.cd-search input:-ms-input-placeholder {
	color: #fff !important;
}

.cd-search input:focus {
	outline: none;
}

.cd-search.is-visible {
	-moz-opacity: 1;
	opacity: 1;
	visibility: visible;
	-webkit-transition: opacity .3s 0s, visibility 0s 0s;
	-moz-transition: opacity .3s 0s, visibility 0s 0s;
	transition: opacity .3s 0s, visibility 0s 0s;
}


/*-- //search --*/

/*-- banner-top --*/

.banner-top {
	background-size: cover;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	-moz-background-size: cover;
	min-height:750px;
}

.banner-top1 {
	background-size: cover;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	-moz-background-size: cover;
	min-height:750px;
}

.banner-top2 {
	background-size: cover;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	-moz-background-size: cover;
	min-height:750px;
}

.banner-top3 {
	background-size: cover;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	-moz-background-size: cover;
	min-height:750px;
}

.banner-info-wthree   {
    text-align: center;
    padding: 17em 0em 0 0em;
}
.banner-info-wthree   h3 {
	font-size:5em;
	color: #fff;
	font-weight:700;
	letter-spacing: 1px;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
}

.banner-info-wthree    p {
    font-size: 1.2em;
    color: #fff;
    margin: 0em 0;
    letter-spacing: 6px;
    font-weight: 600;
    text-transform: uppercase;
}
/*-- //banner-top --*/


/*--slider--*/

#slider2,
#slider3 {
	box-shadow: none;
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	margin: 0 auto;
}

.rslides_tabs li:first-child {
	margin-left: 0;
}

.rslides_tabs .rslides_here a {
	background: rgba(255, 255, 255, .1);
	color: #fff;
	font-weight: bold;
}

.events {
	list-style: none;
}

.callbacks_container {
	position: relative;
	float: left;
	width: 100%;
}

.callbacks {
	position: relative;
	list-style: none;
	overflow: hidden;
	width: 100%;
	padding: 0;
	margin: 0;
}

.callbacks li {
	position: absolute;
	width: 100%;
}

.callbacks img {
	position: relative;
	z-index: 1;
	height: auto;
	border: 0;
}

.callbacks .caption {
	display: block;
	position: absolute;
	z-index: 2;
	font-size: 20px;
	text-shadow: none;
	color: #fff;
	left: 0;
	right: 0;
	padding: 10px 20px;
	margin: 0;
	max-width: none;
	top: 10%;
	text-align: center;
}

.callbacks_nav {
	position: absolute;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	top: 50%;
	left: 40px;
	opacity: 0.7;
	z-index: 3;
	text-indent: -9999px;
	overflow: hidden;
	text-decoration: none;
	height: 34px;
	width: 34px;
	background: url(../images/left.png) no-repeat 0px 0px;
}

.callbacks_nav.next {
	left: auto;
	background: url(../images/right.png) no-repeat 0px 0px;
	right: 0;
}

.callbacks_nav.prev {
	left: auto;
	background: url(../images/left.png) no-repeat 0px 0px;
	left: 0px;
}

#slider3-pager a {
	display: inline-block;
}

#slider3-pager span {
	float: left;
}

#slider3-pager span {
	width: 100px;
	height: 15px;
	background: #fff;
	display: inline-block;
	border-radius: 30em;
	opacity: 0.6;
}

#slider3-pager .rslides_here a {
	background: #FFF;
	border-radius: 30em;
	opacity: 1;
}

#slider3-pager a {
	padding: 0;
}

#slider3-pager li {
	display: inline-block;
}

.rslides {
	position: relative;
	list-style: none;
	overflow: hidden;
	width: 100%;
	padding: 0;
}

.rslides li {
	-webkit-backface-visibility: hidden;
	position: absolute;
	display: none;
	width: 100%;
	left: 0;
	top: 0;
}

.rslides li {
	position: relative;
	display:inline-block;
	float: left;
}

.rslides img {
	height: auto;
	border: 0;
}

.callbacks_tabs {
    list-style: none;
    position: absolute;
    bottom: 10%;
    left: 44%;
    padding: 0;
    margin: 0;
    display: block;
    z-index: 99;
}

.slider-top span {
	font-weight: 600;
}

.callbacks_tabs li {
	display:inline-block;
	margin:0px 3px;
}


/*----*/

.callbacks_tabs a {
	visibility: hidden;
}

.callbacks_tabs a:after {
	content: "\f111";
	font-size: 0;
	font-family: FontAwesome;
	visibility: visible;
	display: block;
    height: 20px;
    width: 20px;
    display: inline-block;
    background: none;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -o-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border:2px solid #fff;
}

.callbacks_here a:after {
	background: #7fd3f7;
}
/*-- //slider --*/
/*--/ grids_bottom --*/

.style-grid {
	padding: 0;
	position: relative;
}

.style-grid-1 img {
	height: 908px;
}

.style-grid-1-text, .style-grid-2-text {
    position: absolute;
    top: 0;
    left: 0;
    text-align: left;
    width: 100%;
    height: 100%;
    padding: 5em;
}

.style-grid-1-text h3, .style-grid-2-text h3 {
    font-size: 30px;
    text-align: left;
    color: #FFF;
    margin-bottom: 20px;
    font-weight: 700;
    letter-spacing: 1px;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
}

.style-grid-1-text p {
	color: #FFF;
	line-height: 30px;
}

.style-image-1 {
	position: relative;
}

.style-image-2 {
	position: relative;
}

.style-grid-2-text p {
	color: #FFF;
	font-size: 14px;
	line-height: 30px;
	padding-right: 100px;
}

.style-grid.style-grid-1 {
    float: left;
    width: 50%;
}
.style-grid.style-grid-2 {
    float: right;
    width: 50%;
}
.style-grid.style-grid-1 img,.style-grid.style-grid-2 img  {
    width: 100%;
}
.style-image-1_info {
    padding: 50px;
    height: 436px;
}

.style-image-1_info {
    padding: 7em 5em;
    height: 321px;
    background: #bae1ff;
}
.style-grid-2-text_info h3 {
    font-size: 30px;
    text-align: left;
    margin-bottom: 20px;
    font-weight: 700;
    letter-spacing: 1px;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.41);
}
.style-grid-2-text_info p {
    font-size: 1em;
    letter-spacing: 1px;
    line-height: 1.9em;
	margin:1em 0 2em 0;
}
.shop-button a {
    background: #000;
    color: #fff;
    padding: 0.6em 1em;
    font-size: 0.9em;
    letter-spacing: 1px;
}
.shop-button a:hover,.shop-button.two a:hover {
    background: #fff;
    color: #000;
}
/*-- //grids_bottom --*/
/*-- /grids_bottom_sec --*/
.grids_sec_2_left {
    padding: 0;
    float: left;
    width: 50%;
}
.grids_sec_2_right {
    padding: 0;
    float: right;
}
.grids_sec_2_right img,.grids_sec_2_left img{
	width:100%;
}
.style-grids_main {
    width: 80%;
}
/*-- //grids_bottom_sec --*/

.grid_sec_info {
    padding: 7em 5em;
    background: #bae1ff;
}
.grid_sec_info.last {
    background: #b7effb;
}
.shop-button.two a {
    background: #7fd3f7;
}
button.top_shoe_cart {
    font-size: 1.2em;
    color: #fff;
    border: none;
    text-align: center;
    background: none;
    width: 36px;
    height: 36px;
    background: rgba(27, 25, 25, 0.27);
    border: 1px solid rgba(27, 25, 25, 0.27);
}
.shop_inner_inf {
    width: 90%;
    margin: 0 auto;
}

/*-item_slider-*/

.carousel {
	margin-bottom: 0;
	padding: 0px;
}


/* The controlsy */

.carousel-control {
	left: -66px;
	height: 40px;
	width: 40px;
	background: none;
	border: 2px solid #000;
	border-radius: 50%;
	margin-top:84px;
	color: #000;
	box-shadow: none;
	background-image: none!important;
	opacity: 0.9;
	line-height: 34px;
}

.carousel-control.right {
    left: -66px;
    top: 66px;
}

/* The indicators */

.carousel-indicators {
	right: 50%;
	top: auto;
	bottom: -10px;
	margin-right: -19px;
}

.thumbnail img {
	width: 100%;
}
.mid_slider_info {
    margin: 0 auto;
    padding: 0;
}
.slidering {
    padding: 0;
}
.thumbnail {
    display: block;
    padding: 0;
    margin-bottom:0px;
    line-height: 1.42857143;
    background: none;
    border: none;
    border-radius: 0;

}
.mid_slider_w3lsagile{
    background: #bae1ff;
}
.mid_slider_text h5 {
    font-size: 23px;
    margin-top: 121px;
    letter-spacing: 1px;
    font-weight: 700;
    text-align: left;
}
.mid_slider_text {
    padding: 0em 3em;
}
.carousel-indicators {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 15;
    width: 60%;
    padding-left: 0;
    margin-left: -30%;
    text-align: center;
    list-style: none;
    display: none;
}
/*-//item_slider-*/

/*--/newsletter--*/
.newsletter_w3layouts_agile {
    padding: 3em 7em;
}
.newsright input[type="email"] {
    outline: none;
    width: 100%;
    padding: 10px 15px;
    color: #848484;
    font-size: 14px;
    border: 1px solid #ddd;
    width: 74%;
    letter-spacing:3px;
    background: none;
}
.newsright input[type="submit"]{
    border: none;
    padding: 10px 20px 11px;
    font-size: 15px;
    outline: none;
    text-transform: uppercase;
    margin: 0 0 0 -4px;
    font-weight: 600;
    letter-spacing: 1px;
    background: #fb383b;
	color:#fff;
}
.newsright input[type="submit"]:hover{
    background: #080808;
    color: #ffffff;
}
.newsleft h3 {
    font-size: 24px;
    margin-top: 15px;
    color: #333;
    letter-spacing: 3px;
    font-weight: 700;
}
/*--//newsletter--*/
/*-- footer --*/
.footer_agileinfo_w3{
    padding: 4em 0;
    background: #080808;
}
.footer_inner_info_w3ls_agileits{
    width: 90%;
    margin: 0 auto;
}
ul.social-nav.model-3d-0.footer-social.social.two {
    float: none;
}
.footer-left p{
    color: #737070;
    line-height: 2em;
    font-size: 14px;
    margin-top: 22px;
}

.sign-gd h4,.sign-gd-two h4 {
    color: #fff;
    font-size: 1.2em;
    margin-bottom: 25px;
    font-weight: 700;
    letter-spacing:1px;
}
.sign-gd h4 span,.sign-gd-two h4 span{
  font-weight:300;
}
.sign-gd ul li,.sign-gd-two ul li {
    color: #848484;
    line-height: 2em;
    font-size: 14px;
	list-style-type:none;
}
.sign-gd ul li a,.sign-gd-two ul li a{
    color: #737070;
    letter-spacing: 1px;
}
.sign-gd ul li a:hover,.sign-gd-two ul li a:hover{
    color: #ffffff;
}
.post-grid:nth-child(2){
	margin:1em 0;
}
.address-grid{
    background: #080808;
    padding: 1em;
}
.address-left{
	float:left;
	width:10%;
}
.address-left i.fa.fa-phone,.address-left i.fa.fa-envelope,.address-left i.fa.fa-map-marker{
    color: #FFFFFF;
    font-size: 1em;
}
.address-right{
	float: right;
    width: 87%;
}
.address-right h6{
    color: #FFFFFF;
    font-size: 0.9em;
    margin: 0;
    font-weight: 600;
    letter-spacing: 1px;
}
.address-right p{
    margin: 1em 0 0 0;
    font-size: .9em;
    color: #565656;
}
.address-right p a{
    color: #fb383b;
    text-decoration: none;
}
.address-right p a:hover{
	color:#b5b5b5;
}
.address-right p span{
	display:block;
	margin:.5em 0;
}
ul.social-nav.model-3d-0.footer-social.social.two {
    margin-top: 2em;
}
.social-nav li {
    display: inline-block;
    margin: 0 6px;
}
.social-nav a {
    display: inline-block;
    float: none;
    width: 30px;
    height: 30px;
    text-decoration: none;
    cursor: pointer;
    text-align: center;
    line-height: 30px;
    background: #000;
    position: relative;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
}
.model-3d-0 a {
    background:#5C5B5B;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    -o-transform-style: preserve-3d;
    transform-style: preserve-3d;
}
.model-3d-0 .front, .model-3d-0 .back {
    width: 30px;
    height: 30px;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transform: translateZ(18px);
    -moz-transform: translateZ(18px);
    -ms-transform: translateZ(18px);
    -o-transform: translateZ(18px);
    transform: translateZ(18px);
    -webkit-backface-visibility: visible;
    -moz-backface-visibility: visible;
    -ms-backface-visibility: visible;
    -o-backface-visibility: visible;
    backface-visibility: visible;
	color:#212121;
	font-size:12px;
}
.model-3d-0 .back {
    -webkit-transform: rotateX(90deg) translateZ(18px);
    -moz-transform: rotateX(90deg) translateZ(18px);
    -ms-transform: rotateX(90deg) translateZ(18px);
    -o-transform: rotateX(90deg) translateZ(18px);
    transform: rotateX(90deg) translateZ(18px);
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;
}
a.twitter .front {
    background: #00acee;
}
a.facebook .front {
    background: #3b5998;
}
a.instagram .front {
    background: #f77737;
}
a.pinterest .front {
    background: #bd081c;
}
.twitter .back,.facebook .back,.instagram .back,.pinterest .back{
    background:#fff;
}
.model-3d-0 a:hover {
    -webkit-transform: rotateX(-90deg);
    -moz-transform: rotateX(-90deg);
    -ms-transform: rotateX(-90deg);
    -o-transform: rotateX(-90deg);
    transform: rotateX(-90deg);
}
.model-3d-0 a:hover .back {
    -webkit-backface-visibility: visible;
    -moz-backface-visibility: visible;
    -ms-backface-visibility: visible;
    -o-backface-visibility: visible;
    backface-visibility: visible;
}
.social .front i{
	color: #fff;
    font-size: 12px;
}
.social .back i{
	color: #000;
    font-size: 12px;
}
/*--social icons--*/
.address-grid:nth-child(2){
    margin: 0.2em 0;
}
.flickr-post ul li{
	display:inline-block;
	margin:5px 5px;
}
.flickr-post ul li {
    display: inline-block;
    margin: 1% 1%;
    width: 28%;
}
p.copy-right-w3ls-agileits {
    color: #848484;
    text-align: center;
    margin-top: 55px;
    font-size: 14px;
    border-top: 1px solid #0e0e0e;
    padding-top: 3em;
}
p.copy-right-w3ls-agileits a{
    color: #ffffff;
	text-decoration:none;
}
p.copy-right-w3ls-agileits a:hover{
color: #2fdab8;	
}
.footer-left h2 a {
    font-size: 0.9em;
    color: #fff;
    font-weight: 300;
    letter-spacing: 2px;
}
.footer-left h2 a span {
    padding: 6px 10px;
    background: #444242;
    font-weight: 700;
}
/*-- //footer --*/
.banner_top.innerpage {
    background: url(../images/slider2.png) no-repeat 0px -221px;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    min-height: 225px;
}
.ads-grid_shop {
    padding: 6em 0;
}
ul.short {
    text-align: left;
    padding:12em 0em 0 8em;
}
ul.short li {
    display: inline-block;
    text-transform: uppercase;
    color: #fff;
    font-size: 0.8em;
    font-weight:600;
    letter-spacing: 1px;
}
.services-breadcrumb_w3ls_agileinfo ul li i {
    padding: 0 1.5em;
}
ul.short li a {
    color: #fb383b;
    text-decoration: none;
}
.inner_section_w3ls {
    margin-top: 4em;
}
h3.head {
    text-align: center;
    color: #111;
    font-size: 3em;
    letter-spacing: 2px;
    font-weight: 700;
    text-shadow: rgba(0, 0, 0, 0.13) 2px 2px 3px;
    text-transform: uppercase;
}
p.head_para {
    color: #999;
    text-align: center;
    letter-spacing:5px;
    font-size:0.85em;
}
/*-- /error --*/

	.error_page h4 {
		font-size: 12em;
		font-weight: 700;
		color: #333;
		margin: 0;
		padding: 0;
	}

	a.b-home {
        background: #0c0c0c;
        padding: 0.7em 1.5em;
        display: inline-block;
        color: #FFF;
        text-decoration: none;
        margin: 2em 0 1em 0;
	}

	.error_page p {
        color: #848080;
        font-size: 0.8em;
        text-transform: uppercase;
        letter-spacing: 8px;
        margin: 1em 0 2em 0;
	}

	.error_page {
		margin: 0 auto;
		text-align: center;
	}

	.error_page form input[type="search"] {
		outline: none;
		border: 1px solid #c4c5c5;
		background: none;
		color: #212121;
		padding: 11px 15px;
		width: 80%;
		float: left;
		font-size: 16px;
		letter-spacing: 2px;
	}

	button.btn1 {
		color: #fff;
		border: none;
		padding: 13px 0;
		text-align: center;
		text-decoration: none;
	    background: #fb383b;
		-webkit-transition: 0.5s all;
		-moz-transition: 0.5s all;
		-o-transition: 0.5s all;
		-ms-transition: 0.5s all;
		transition: 0.5s all;
		float: right;
		width: 20%;
	}

	.error_page form {
		margin: 0 auto;
		width: 35%;
		text-align: center;
	}
	/*-- //error --*/
    #toTop {
    display: none;
    text-decoration: none;
    position: fixed;
    bottom: 10px;
    right: 10px;
    overflow: hidden;
    width: 34px;
    height: 34px;
    border: none;
    text-indent: 100%;
    background: url(../images/move-top.png) no-repeat 0px 0px;
}
    /*--responsive--*/
@media(max-width:1680px){
	.style-image-1_info {
        padding: 7em 5em;
        height: 380px;
    }
    .cd-header-buttons {
        top: 47px;
        right: 173px;
    }
}
@media(max-width:1600px){
    .style-image-1_info {
        padding: 7em 5em;
        height: 400px;
    }
    .cd-header-buttons {
        top: 47px;
        right: 171px;

    }
    .top_nav_right {
        right: 0%;
    } 
    .top_nav_right {
        right: -1%;
    }
    .mid_services_img {
        min-height: 550px;
    }
}
@media(max-width:1599px){
    .cd-header-buttons {
        top: 47px;
        right: 172px;
    }
    .top_nav_right {
        right: -1%;
    }
}
@media(max-width:1440px){
	.ads-grid_shop {
        padding: 4em 0;
    }
    .inner_section_w3ls {
        margin-top: 3em;
    }
    .style-image-1_info {
        padding: 7em 5em;
        height: 440px;
    }
    .banner-info-wthree    h3 {
      font-size: 5em;
    }
    .banner-top,.banner-top1,.banner-top2,.banner-top3{
        min-height:700px;
    }
    .callbacks_tabs {
        bottom: 16%;
        left: 43.5%;
    }
    .top_nav_right {
        right: 1%;
    }
}
@media(max-width:1366px){
	.top_nav_right {
        right: 1%;
        margin-top: 48px;
    }
    .cd-header-buttons {
        top: 47px;
        right: 158px;
    }
    .banner-info-wthree    p {
       font-size: 1.1em;
    }
    .footer {
       padding: 3em 0;
    }
    .style-image-1_info {
        padding: 7em 5em;
        height: 458px;
    }
    .error_page form {
        margin: 0 auto;
        width: 40%;
    }
}
@media(max-width:1280px){
	.style-grid-1 img {
        height: 653px;
    }
    .style-image-1_info {
        padding: 5em 5em;
        height: 340px;
    }
    .cd-header-buttons {
        top: 47px;
        right: 146px;
    }
    .mid_slider_text h5 {
        font-size: 19px;
        margin-top: 117px;
    }
    .banner-top, .banner-top1, .banner-top2, .banner-top3 {
        min-height: 633px;
    }
    .banner-info-wthree    h3 {
        font-size: 9em;
    }
}
@media(max-width:1080px){
	.cd-header-buttons {
        top: 47px;
        right: 129px;
    }
    .top_nav_right {
        right: 2.5%;
        margin-top: 48px;
    }
    .style-grid-1 img {
        height: 603px;
    }
    .newsletter_w3layouts_agile {
        padding: 3em 4em;
    }
}
@media(max-width:1050px){
	.newsletter_w3layouts_agile {
        padding: 3em 2em;
    }
    .grid_sec_info {
        padding: 4em 3em;
    }
    .mid_slider_text h5 {
        font-size: 17px;
        margin-top: 78px;
    }
    .mid_slider_text {
        padding: 0em 1em;
    }
    .style-grid-1 img {
        height: 596px;
    }
    .carousel-control {
        border-radius: 50%;
        margin-top: 51px;
    }
    .search-hotel input[type="search"] {
        width: 75%;
    }
}
@media(max-width:1024px){
    ul.short {
        padding: 10em 0em 0 5em;
    }
    .footer-left h2 a {
        font-size: 0.8em;
        font-weight: 300;
        letter-spacing: 1px;
    }
    .footer_inner_info {
        width: 95%;
        margin: 0 auto;
    }
    .top_nav_right {
        right: 3.5%;
        margin-top: 48px;
    }
}
@media(max-width:991px){
	.left-ads-display{
        padding: 0;
        margin-top: 2em;
    }
    .product-shoe-info {
        padding: 15px;
        width: 48%;
        margin: 0.5em;
        float: left;
    }
    .sign-gd {
        margin: 2em 0px;
    }
    .sign-gd.flickr-post {
        margin: 2em 0 0 0;
    }
    .sign-gd-two {
        margin-bottom: 2em;
    }
    .mid_slider_text {
        padding: 2em 1em;
    }
    .mid_slider_text h5 {
        font-size: 20px;
        margin-top: 4px;
    }
    .carousel-control {
        margin-top: 80px;
        left: 16px;
    }
    .top_nav_right {
        right:4.3%;
        margin-top: 48px;
    }
    .style-grid-1 img {
        height: 525px;
    }
    .style-image-1_info {
        padding: 3em 3em;
        height: 284px;
    }
    .style-grid-2-text_info h3 {
        font-size: 23px;
    }
    .cd-header-buttons {
        top: 47px;
        right: 124px;
    }
    .banner-info-wthree    h3 {
        font-size: 7em;
    }
    .banner-info-wthree    p {
        font-size: 1em;
    }
    .style-grid-1-text, .style-grid-2-text {
        padding: 3em 2em;
    }
    .carousel-control.right {
        left: 14px;
        top: 66px;
    }
    ul.short {
        padding: 10em 0em 0 5em;
    }
	.product-men.women_two {
        margin: 0;
        margin-bottom: 30px;
	}
    .callbacks_tabs {
        bottom: 16%;
        left: 43%;
    }
    .add-review input[type="text"], .add-review input[type="email"], .add-review textarea {
        width: 100%;
    }
    .add-review input[type="email"] {
        margin-left: 0;
        margin-top: 2%;
    }
    .add-review input[type="submit"] {
        margin-bottom: 2em;
    }
    .news-right {
        margin-top: 2em;
    }
    .bar-grids {
        padding: 5em 2em;
    }
    .mid_services_img {
        min-height: 445px;
    }
    #staplesbmincart {
        left:50%;
        top: 16.9%;
        width: 420px;
    }
    .check_box_one {
        float: left;
        width:50%;
        margin-bottom: 10px;
    }
}
@media(max-width:900px){
    .top_nav_right {
        right:4.5%;
        margin-top: 48px;
    }
    .cd-header-buttons {
        top: 47px;
        right: 112px;
    }
    .banner-top, .banner-top1, .banner-top2, .banner-top3 {
        min-height: 564px;
    }
    .callbacks_tabs a:after {
        height: 15px;
        width: 15px;
    }
    .banner-info-wthree    {
        padding: 14em 0em 0 0em;
    }
    .banner-info-wthree    p {
        font-size: 0.9em;
    }
    .style-grid-1 img {
        height: 503px;
    }
    .style-grids_main {
        width: 90%;
    }
    .newsletter_w3layouts_agile {
        padding: 2em 1em;
    }
    .banner_top.innerpage {
        background: url(../images/banner3.jpg) no-repeat 0px -21px;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -moz-background-size: cover;
        min-height: 225px;
    }
    .error_page form {
        margin: 0 auto;
        width: 70%;
    }
}
@media(max-width:800px){
	.style-grid-1 img {
        height:auto;
    }
    .style-grid.style-grid-1 {
        float: left;
        width: 100%;
    }
    .style-grid.style-grid-2 {
        float: right;
        width: 100%;
    }
    .newsletter_w3layouts_agile {
        padding: 2em 1em;
    }
    .newsright input[type="email"] {
      width: 70%;
    }
    .top_nav_right {
        right: 7.5%;
        margin-top: 48px;
    }
    .error_page h4 {
       font-size:10em;
    }
    #staplesbmincart {
        left: 34%;
        top: 16.9%;
        width: 420px;
    }
}
@media(min-width:769px){
	.style-grids_main {
        display: flex;
    }
    .grids_sec_2_left {
        padding: 0;
        float: left;
        width: 100%;
    }
    
}
@media(max-width:768px){
	.top_nav_right {
        right: 8%;
        margin-top: 48px;
    }
    .cd-header-buttons {
        top: 47px;
        right: 106px;
    }
    .banner-top, .banner-top1, .banner-top2, .banner-top3 {
        min-height: 515px;
    }
    .callbacks_tabs li {
        display: inline-block;
        margin: 0px 1px;
    }
    ul.top_icons {
        left: 43%;
        margin-top: 3em;
        bottom: 29%;
    }
    .newsleft {
        float: none;
        width: 100%;
    }
    .newsright {
        margin-top: 2em;
        width: 100%;
    }
    .product-shoe-info {
        padding: 15px;
        width: 47%;
        margin: 0.5em;
        float: left;
    }
    .checkout-left-basket {
        float: left;
        padding-left: 0;
        width: 100%;
        margin-bottom: 1em;
    }
    .address_form {
        float: right;
        width: 100%;
        padding: 0;
    }
    form.cc-form {
        margin-top: 2em;
    }
    .check_box_one {
        float: left;
        width: 100%;
        margin-bottom: 10px;
    }
}
@media(max-width:767px){
	.single-right-left h3 {
        font-size: 19px;
    }
}
@media(max-width:736px){
	ul.short {
        padding: 10em 0em 0 3em;
    }
    h3.head {
      font-size: 2.5em;
    }
}
@media(max-width:667px){
	.carousel-control {
        margin-top: 30px;
    }
    .logo {
        left: 3%;
        top: 4.5%;
    }
    .mobile-nav-button {
        margin: 24px 0 0 0;
        right: 3%;
    }
    .cd-header-buttons {
        top: 24px;
        right: 61px;
    }
    .top_nav_right {
        right: 5.5%;
        margin-top: 25px;
    }
    .callbacks_tabs {
        bottom: 16%;
        left: 42%;
    }
    .grids_sec_2_left {
        padding: 0;
        float: left;
        width:100%;
    }
    .error_page form {
        margin: 0 auto;
        width: 76%;
    }
    .error_page h4 {
       font-size: 9em;
    }
    .logo.inner_page_log {
        left: 3%;
        margin-top: 24px;
    }
    ul.short {
        padding: 8em 0em 0 2em;
    }
    .banner_top.innerpage {
        min-height: 185px;
    }
    #staplesbmincart {
        left: 23%;
        top: 16.9%;
        width: 420px;
    }
    .news-right h4 {
        font-size: 1.3em;
    }
}
@media(max-width:640px){
	.banner-info-wthree    h3 {
        font-size: 5em;
    }
    .banner-top, .banner-top1, .banner-top2, .banner-top3 {
        min-height: 461px;
    }
    .banner-info-wthree    {
        padding: 12em 0em 0 0em;
    }
    .banner-info-wthree    p {
        font-size: 0.8em;
        letter-spacing: 3px;
    }
    ul.top_icons {
        left: 42%;
        margin-top: 2em;
        bottom: 33%;
    }
    .callbacks_tabs a:after {
        height: 10px;
        width: 10px;
    }
    ul.top_icons li {
        margin-right: 13px;
    }
}
@media(max-width:600px){
	.top_nav_right {
        right: 7.5%;
        margin-top: 25px;
    }
    .single-right-left {
        width: 93%;
    }
    #staplesbmincart {
        left: 7%;
        top: 16.9%;
        width: 410px;
    }
    p.copy-right-w3ls-agileits {

        margin-top: 25px;
        font-size: 13px;
        padding-top: 2em;
        line-height:1.8em;
    }
    .contact-map iframe {
        width: 100%;
        height: 300px;
    }
}
@media(max-width:568px){
	.top_nav_right {
        right: 8.5%;
        margin-top: 25px;
    }
    .cd-header-buttons {
        top: 24px;
        right: 57px;
    }
    .banner-top, .banner-top1, .banner-top2, .banner-top3 {
        min-height: 410px;
    }
    .banner-info-wthree    {
        padding: 10em 0em 0 0em;
    }
    .banner-info-wthree    h3 {
        font-size: 4em;
    }
    .product-shoe-info {
        padding: 15px;
        width: 46%;
        margin: 0.5em;
        float: left;
    }
    .style-grid-2-text_info p {
        font-size: 0.9em;
    }
}
@media(max-width:480px){
	.top_nav_right {
        right: 12.5%;
        margin-top: 25px;
    }
    .style-grid-1-text h3, .style-grid-2-text h3 {
        font-size: 25px;
    }
    .style-grid-2-text_info h3 {
        font-size: 21px;
    }
    .newsleft h3 {
        font-size: 20px;
        margin-top: 15px;
        letter-spacing: 1px;
    }
    .newsright input[type="email"] {
        width: 68%;
    }
    .sign-gd {
        margin: 2em 0px;
        padding: 0;
    }
    .carousel-control.right {
        left: 341px;
        top: 1px;
    }
    .sign-gd-two {
        padding: 0;
    }
    h3.head {
        font-size: 2.2em;
    }
    .ads-grid_shop {
        padding: 2em 0;
    }
    .inner_section_w3ls {
        margin-top: 2em;
    }
    .newsright {
        margin-top: 1em;
        width: 100%;
    }
    ul.top_icons {
        left: 37%;
        margin-top: 2em;
        bottom: 33%;
    }
    .callbacks_tabs {
        bottom: 16%;
        left: 37%;
    }
}
@media(max-width:414px){
	
    .navbar-brand {
        font-size: 0.55em;
        height: 42px;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.31);
    }
    .navbar-brand span {
        padding: 0.526em .5em;
    }
    .top_nav_right {
        right: 17.5%;
        margin-top: 19px;
    }
    .cd-header-buttons {
        top: 18px;
        right: 57px;
    }
    .mobile-nav-button {
        margin: 18px 0 0 0;
        right: 3%;
    }
    ul.top_icons {
        left: 38%;
        margin-top: 2em;
        bottom: 34%;
    }
    .callbacks_tabs {
        bottom: 16%;
        left: 40%;
    }
    #staplesbmincart {
        left: 4%;
        top: 16.9%;
        width: 340px;
    }
    .footer-left p {
        font-size: 13px;
        margin-top: 22px;
    }
    .according_inner_grids {
        padding: 3.07em 2em;
    }
    h3.heading.two {
       font-size: 1.6em;
    }
    .bar-grids {
        padding: 3em 0.5em;
    }
    .mid_services_img {
        min-height: 348px;
    }
    .skill_info {
        margin-top: 2em;
    }
    .bar-grids h6 {
       font-size: 0.9em;
    }
    .error_page h4 {
        font-size: 6em;
    }
}
@media(max-width:384px){
	.cd-header-buttons {
        top: 18px;
        right: 51px;
    }
    .banner-top, .banner-top1, .banner-top2, .banner-top3 {
        min-height: 370px;
    }
    .banner-info-wthree    h3 {
        font-size: 3.5em;
    }
    .callbacks_tabs {
        bottom: 16%;
        left: 36%;
    }
    ul.top_icons {
        left: 35%;
        margin-top: 2em;
        bottom: 33%;
    }
    .grid_sec_info {
        padding: 3em 2em;
    }
    .carousel-control.right {
        left: 312px;
        top: 1px;
    }
    .newsletter_w3layouts_agile {
        padding: 2em 0em;
    }
    .product-shoe-info {
        padding: 15px;
        width: 100%;
        margin: 0.5em 0;
        float: left;
    }
    .banner_top.innerpage {
        min-height: 162px;
    }
    .social-nav li {
        margin: 0px 1px;
    }
    .contact-map iframe {
        width: 100%;
        height: 200px;
    }
}
@media(max-width:375px){
	.top_nav_right {
        right: 18.5%;
        margin-top: 19px;
    }
    .banner-top, .banner-top1, .banner-top2, .banner-top3 {
        min-height: 325px;
    }
    .banner-info-wthree    {
        padding: 8em 0em 0 0em;
    }
    .single-right-left {
        width: 96%;
    }
    .single-right-left h3 {
        font-size: 16px;
        line-height: 1.7em;
    }
    .style-image-1_info {
        padding: 3em 2em;
        height: 284px;
    }
    .error_page p {
        font-size: 0.8em;
        letter-spacing: 5px;
        margin: 1em 0 2em 0;
    }
    .error_page form {
        margin: 0 auto;
        width: 95%;
    }
    ul.short {
        padding: 6.5em 0em 0 1em;
    }
    h3.head {
        font-size: 1.6em;
    }
    .news-right h4 {
        font-size: 1.2em;
        line-height: 1.6em;
    }
    #staplesbmincart .sbmincart-details-name {
        float: left;
        width: 52%;
    }
    .shop_inner_inf {
        width: 95%;
    }
    .newsleft h3 {
        font-size: 18px;
        margin-top: 15px;
        letter-spacing: 1px;
    }
    .footer-left h2 a {
        font-size: 0.7em;
        font-weight: 300;
        letter-spacing: 1px;
    }
}
@media(max-width:320px){
	.navbar-brand {
        font-size: 0.45em;
        height: 38px;
    }
    .top_nav_right {
        right: 23%;
        margin-top: 19px;
    }
    .banner-top, .banner-top1, .banner-top2, .banner-top3 {
        min-height: 289px;
    }
    .banner-info-wthree    h3 {
        font-size: 3em;
    }
    ul.top_icons {
        left: 33%;
        margin-top: 2em;
        bottom: 29%;
    }
    .callbacks_tabs {
        bottom: 16%;
        left: 33%;
    }
    #staplesbmincart {
        left: 2%;
        top: 16.9%;
        width: 281px;
    }
    .cd-header-buttons {
        top: 18px;
        right: 47px;
    }
    .newsright input[type="email"] {
        width: 62%;
        letter-spacing: 1px;
    }
    #staplesbmincart .sbmincart-subtotal {
       font-size: 12px;
    }
    #staplesbmincart .sbmincart-submit {
       font-size: 0.8em;
    }
    #staplesbmincart .sbmincart-details-quantity {
        float: left;
        width: 17%;
    }

}
/*--//responsive--*/