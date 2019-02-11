@extends('fornt/master/allmaster')
@section('content')

<style type="text/css">
	
	
h1,h2,h3,h4,h5,h6{
	margin:0;
	font-family: 'Montserrat', sans-serif;	
}	
p,label{
	margin:0;
}
ul{
	margin:0;
	padding:0;
}

/*--popup--*/
.agileits {
    padding: 3em;
    width: 60%;
    margin: 0 auto;
	background: #000;
}
.agileinfo{
	text-align:center;
	margin-bottom:2em;
}
.agileinfo h6{
	font-size: 2em;
    color: #62BF43;
    font-family: 'Glegoo', serif;
    margin-bottom: 0.3em;
	    font-weight: bold;
}
.agileinfo p{
	font-size:0.9em;
	color:#999;
}
.latter-left {
    text-align: center;
    width: 60%;
    margin: 0 auto;
}

.w3agile-left input[type="text"] {
    border:1px solid #999;
    outline: none;
    float: left;
    color: #999;
    font-size: 1em;
    width: 100%;
	padding: 9px 20px;
}
.w3agile-left input[type="submit"] {
    border: none;
    outline: none;
    color: #fff;
    font-size: 1em;
    background: #FC6914;
    padding: 9px 20px;
	width:100%;
	margin-top: 1em;
}
.w3agile-left input[type="submit"]:hover {
    background: #62BF43;
	transition: .5s ease-in-out;
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    -ms-transition: .5s ease-in-out;
}
button.close.close-w3 {
    top: -20px;
    position: absolute;
    right: -23px;
    font-size: 17px;
    background: #FC6914;
    opacity: 1;
    color: #fff;
    border-radius: 100px;
    width: 25px;
    height: 25px;
}
.modal-dialog.modal-lg.wthree-1 {
    position: absolute;
    bottom: 0px;
    right: 0;
}
/*----*/
img.img-head {
    position: absolute;
	top:0;
}
.hyper {
  margin: auto;
  padding: 0 50px;
  display: inline-block;
  position: relative;
  text-decoration: none;
  color: black;
  width: auto;
  overflow: hidden;
  z-index: 2;
  transition: all .5s ease;
}

.hyper span {
  z-index:2;
  position:relative;
}
.hyper:hover {
  color: white;
}
.hyper:hover:before {
  right: 95%;
    opacity: 1;
}
.hyper:hover:after {
	left: 5%;
    opacity: 1;
}
.hyper:before {
  opacity: 0;
  content: '';
  display: block;
  position: absolute; 
  background:#039445;
  width:4px;
  height: 100%;
  top: 0;
  right: 100%;
    transition:all .6s ease;
}
.hyper:after {
    opacity: 0;
  content: '';
  display: block;
  position: absolute; 
  background:#FAB005 ;
  width: 100%;
  height: 100%;
  top: 0;
  left: 100%;
    transition:all .5s ease;
}
.active a:before{
	opacity: 1;
	right: 95%;
}
.active1 a:before,.active1 a:hover:before{
	opacity: 1;
	right: 97%;
}
.active1 a:after ,.active1 a:hover:after{
	left: 3%;
    opacity: 1;
}
/*-- header --*/
.header {
    text-align: center;
	margin-top: 2em;
}
.logo h1{
   font-family: 'Montserrat', sans-serif;
    font-size: 3em;
    color: #000;
	display: inline-block;
	position:relative;
}
.logo h1 a{
    text-decoration:none;
    color: #000;
}
.logo h1 span {
    font-size: 12px;
    display: block;
    letter-spacing: 4px;
    text-transform: uppercase;
    font-family: 'Noto Sans', sans-serif;
    padding-top: 4px;
}
.logo h1  b {
    font-size: 8px;
    background: #ED0612;
    font-weight: normal;
    padding: 3px;
    display: inline-block;
    position: absolute;
    top: 8px;
    left: -2px;
    color: #fff;
    line-height: 8px;
}
.head-t {
    margin: 1em 0;
}
.card li{
	display:inline-block;
}
.card li a{
	display:inline-block;
	color: #999;
    font-size: 0.9em;
	margin:0 0.5em;
}
.card li a i{
	margin-right:5px;
	color: #FAB005;
}
/*--social--*/
.social-top li{
	display:inline-block;
}
.icon {
	border-radius: 100px;
	cursor: pointer;
	display: inline-block;
	font-size: 0.9em;
	height: 35px;
	line-height: 37px;
	margin: 0 2px;
	position: relative;
	text-align: center;
	-webkit-user-select: none;
	   -moz-user-select: none;
	    -ms-user-select: none;
	        user-select: none;
	width: 35px;
}

/* Circle */
.icon span {
	border-radius: 0;
	display: block;
	height: 0;
	left: 50%;
	margin: 0;
	position: absolute;
	top: 50%;
	-webkit-transition: all 0.3s;
	   -moz-transition: all 0.3s;
	     -o-transition: all 0.3s;
	        transition: all 0.3s;
	width: 0;
}
.icon:hover span {
	width: 35px;
	height: 35px;
	border-radius: 100px;
	margin: -18px;
}
.twitter span {
	background-color: #4099ff;
}
.facebook span {
	background-color: #3B5998;
}
.pinterest span {
	background-color: #CB2028;
}
.dribbble span {
	background-color:#E04D84;
}

/* Icons */
.icon i {
	background: none;
	color: #000;
	height: 35px;
	left: 0;
	line-height: 35px;
	position: absolute;
	top: 0;
	-webkit-transition: all 0.3s;
	   -moz-transition: all 0.3s;
	     -o-transition: all 0.3s;
	        transition: all 0.3s;
	width: 35px;
	z-index: 10;
}
.icon .fa-twitter {
	color: #4099ff;
}
.icon .fa-facebook {
	color: #3B5998;
}
.icon .fa-pinterest-p {
	color: #CB2028;
}
.icon .fa-dribbble {
	color: #E04D84;
}
.icon:hover .fa-facebook,
.icon:hover .fa-twitter,
.icon:hover .fa-pinterest-p,
.icon:hover .fa-dribbble {
	color: white;
}
/*--social--*/
/*--nav--*/
.navbar-nav {
    float: none;
    margin: 0;
}
.nav > li {
    float: none;
    display: inline-block;
}
ul.multi-column-dropdown {
    text-align: left;
}
.multi-column-dropdown li a {
    display: block;
    clear: both;
    line-height: 1.428571429;
    color: #737373 !important;
    white-space: normal;
    font-size: 13px;
}
.multi-column-dropdown li a i{
    margin-right:7px;
}
.multi-column-dropdown li {
    list-style-type: none;
    margin: 7px 0;
}

.multi-column-dropdown li a:hover {
    color: #000 !important;
}


.w3l{
	padding:0;
}
.w3l img{
	margin-top:2em;
}

nav.navbar.navbar-default {
    float: left;
    height: 44px;
}
.cart{
	float: right; 
	cursor: pointer;
	margin-top: 11px;
    width: 9%;
}





/*--nav--*/
.multi-column-dropdown li a {
    color: #999 !important;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    background-color:#FAB005;
    color: #fff;
}
.nav > li > a {
    padding: 12px 20px  !important;
}
.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border: none;
}
.navbar-default {
    background: none;
    border: none;
}
.navbar-collapse {
    padding: 0;
}
ul.multi-column-dropdown h6 {
    font-size: 1.5em;
    color: #000;
    margin: 0 0 1em;
    padding: 0.7em 0;
    border-bottom: 2px solid #62BF43;
    text-transform: capitalize;
    font-family: 'Glegoo', serif;
}

.dropdown-menu.multi {
    min-width: 745px;
    padding: 30px 30px;
}
.nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
    background: none;
    border: none;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    background-color: transparent;
}
.navbar-default .navbar-nav > li > a:hover{
    color: #FFF;
    background-color: transparent;
}
.navbar-default .navbar-nav > li > a:focus {
    color: #fff;
}
.navbar {
    min-height: auto;
    margin-bottom: 0px;
}
.dropdown-menu {
    top: 98%;
    left: -85%;
}
.multi1{
	left: -330%;
}
.row1 {
    padding-left: 0;
	padding-right:7px;
}
.row2{
	padding-right: 0;
	padding-left:7px;
}
.row-top {
    margin-top: 1em;
}

 .navbar-default .navbar-nav > .open > a:hover{
    color: #fff;
}
 .navbar-default .navbar-nav > .open > a:focus {
    color: #999;
}
span.fa.fa-shopping-cart.my-cart-icon {
    position: absolute !important;
    font-size: 1.5em;
    color: #039445;
}
.badge {
    display: inline-block;
    width: 18px;
    height: 18px;
    line-height: 19px;
    padding: 0; 
    font-size: 10px;
    font-weight: bold;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    background-color: #FAB005;
    border-radius: 10px;
}

.multi1 {
    top: 98%;
    left: -129%;
}
.multi2 {
    top: 98%;
    left: -275%;
}
/*-- //header --*/
/*--banner--*/
.banner-info {
    margin:8em 0;
	text-align:center;
}
.banner-info h3 {
    color: #fff;
    font-size: 3em;
    width: 80%;
    margin: 0 auto 1em;
}
.search-form {
    width: 55%;
    margin: 0 auto;
}
.search-form input[type='text']{
	width: 93%;
    padding: 10px;
    outline: none;
    font-size: 1em;
    color: #fff;
    border: 1px solid #FFF;
    background: rgba(255, 255, 255, 0.45);
}
.search-form input[type='submit']{
	    width: 40px;
    height: 41px;
    outline: none;
    border: 1px solid #fff;
    background: url(../images/can.png) no-repeat 6px 7px #FCCD1E;
    display: inline-block;
}
.search-form input[type='submit']:hover {
    background: url(../images/can.png) no-repeat 6px 7px #039445;
        transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
 ::-webkit-input-placeholder{
	color:#fff;
}

:-moz-placeholder { /* Firefox 18- */
   color: #fff; 
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #fff;  
}

:-ms-input-placeholder {  
   color: #fff;  
}
/*-- //to-top --*/
.spec {
    text-align: center;
    margin-bottom: 3em;
}
.spec h3{
    font-size:3em;
	color:#006b36;
	margin-bottom:0.5em;
}
.ser-t {
    text-align: center;
    margin: 0 auto;
    width: 20%;
    position: relative;
}
.ser-t b{
	width: 100%;
    height: 2px;
    display: block;
    background: #039445;
    margin-bottom: 3px;
}
.ser-t b.line{
	width: 80%;
	margin:0 auto;
}
.ser-t  span{
	width: 40px;
    height: 40px;
    display: block;
    background: #fff;
    position: absolute;
    top: -7px;
    left: 42%;  
}
.ser-t  span i{
	width: 20px;height: 20px;
    display: block;
    border: 2px solid #039445;
    -webkit-transform: rotate(45deg) translate3d(0, 0, 0);
    -moz-transform: rotate(45deg) translate3d(0, 0, 0);
    -ms-transform: rotate(45deg) translate3d(0, 0, 0);
    -o-transform: rotate(45deg) translate3d(0, 0, 0);
    transform: rotate(45deg) translate3d(0, 0, 0);
    margin-left: 0.7em;
}
/*--content--*/
.content-top{
	padding:4em 0 0;
}
.offer-w3agile{
	padding:6em 0;
}
.wthree-of{
	margin-top:5em;
}
.tab-head {
    margin: 1em 0 0;
}
.tabs li{
	display:inline-block;
}
ul.nav.tabs {
    text-align: center;
	margin-bottom: 4em;
}
.tabs li a {
    font-size: 1em;
    color: #8A8A8A;
    padding: 16px 17px !important;
    display: inline-block;
}

.tabs  li.active {
	border-bottom: 2px solid #000
}
.nav > li > a:hover, .nav > li > a:focus {
    background: none;
}

.tab-content-t {
    padding: 0em !important;
}


/*----*/
.mid-1 h6 {
    font-size: 1.2em;
}
.mid-1 h6 a {
    color: #000000;
    text-decoration:none;
}
.mid-1 h6 a:hover {
    color: #FAB005;
}
.mid-2 p{
	float:left;
	font-size:0.9em;
	color:#B4B4B4;
}
.mid-2 p em{
	font-style:normal;
}
.mid-2 p label{
	text-decoration: line-through;
	font-weight:400;
	margin-right:6px;
}
.mid-2 {
    padding: 1em 0;
}
.mid-1 {
    padding: 3em 0 0;
}
.block {
    float: right;
}
.add{
	text-align:center;
}
.col-m {
    padding: 1em;
    border: 1px solid #B2B2B2;
}
.offer-img{
	position:relative;
	display:block;
}
.offer-img img{
	margin:0 auto;
	width: 55%;
}
.offer{
	    position: absolute;
    top: 0;
    right: -15px;
    border: 2px solid #ED0612;
    border-radius: 100px 0 0 100px;
    padding: 2px;
}
.offer p{
    background: #ED0612;
    border-radius: 100px 0px 0px 100px;
    text-align: center;
    line-height: 0em !important;
    font-size: 0.9em !important;
    padding: 7px;
}
.offer span{
    color: #fff;
    font-size: 11px;
    text-align: center;
    display: inline-block;
    font-weight: bold;
}

.modal-body {
    padding: 1em 1em 0em;
}
.modal-footer {
    margin-top: 0px;
}
div#my-cart-empty-message {
    margin: 0;
}
/*--cart--*/
.my-cart-b {
    background: none;
    text-decoration: none;
    color: #029241;
    font-size: 1em;
    border: 2px solid #039445;
    border-radius: 50px;
    padding: 0.5em 1em;
    outline: none;
}
a:focus {
    outline: thin dotted;
    outline: none;
    outline-offset: -2px;
}

/* Sweep To Bottom */
.my-cart-b{
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.my-cart-b:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #039445;
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
    border-radius: 50px;
	border: 2px solid #039445;
}
.my-cart-b:hover, .my-cart-b:focus, .my-cart-b:active {
	color: white;
    background: none;
    border: 2px solid #039445;
    outline: none !important;
}
.my-cart-b:hover:before, .my-cart-b:focus:before, .my-cart-b:active:before {
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
}
/*--content--*/
/*--product--*/
.span-1 h3 {
	color: #000;
    font-size: 1.8em;	
}
p.in-para{
color: #B3B3B3;
    font-size: 0.9em;
    line-height: 2em;
    margin: 1em 0 ;
	border-bottom: 1px solid #f0f0f0;
    border-top: 1px solid #f0f0f0;
	padding:1em 0;
}
.price_single {
    padding-bottom: 1em;
}
span.reducedfrom {
	    color: #FAB005;
    font-size: 1.5em;   
}

h4.quick {
	color: #000;
	font-size:1.2em;
	text-transform: uppercase;
	margin-top: 1em;
	
}
p.quick_desc {
	color:#B3B3B3;
	font-size:0.9em;
	line-height: 2em;
	margin: 1em 0 2em;
}

/* Shutter In Vertical */
.my-cart-btn1 {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
    background-color:#FAB005;
   color: #fff;
   padding: 0.5em 1em;
   font-size:1em;
    text-decoration:none;
	 border: none;
}
.my-cart-btn1:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background:#029241;
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
  -webkit-transform-origin: 50%;
  transform-origin: 50%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
    border: none;
}
.my-cart-btn1:hover, .my-cart-btn1:focus, .my-cart-btn1:active {
	color: white;
	text-decoration:none;
	border:none;
	background: #FAB005;
	border-radius: 0;
}
.my-cart-btn1:hover:before, .my-cart-btn1:focus:before, .my-cart-btn1:active:before {
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
   text-decoration:none;
}


ul.product-qty {
	padding: 0;
	list-style: none;
}
.product-qty span {
	color: #000;
	font-size:1.2em;
	padding-bottom: 0.5em;
	display: block;
	text-transform: uppercase;

}
.product-qty select {
	border: 1px solid #eee;
	padding: 0.5em;
	font-size: 1em;
	outline: none;
}
.product-qty option {
	border: 1px solid #EEE;
}
.wish-list {
	padding: 15px 0;
	border-bottom: 1px solid #f0f0f0;
	border-top: 1px solid #f0f0f0;
}
.wish-list ul{
	padding:0;
	list-style:none;
}
.wish-list li {
    display: inline-block;
    margin-right: 4%;
    width: 36%;
}
.wish-list li a i{
    margin-right:4%;
}
.wish-list li a {
	color:#FAB005;
	font-size: 0.85em;
	text-decoration: underline;
}
.wish-list li a span {
	padding-right:10px;
}
.wish-list li a:hover{
	text-decoration:none;
}

.size-top {
    margin: 2em 0;
}
/*----*/
.modal-dialog {
    width: 800px;
    margin: 30px auto;
}
.modal-spa {
    padding: 1em 1em 2.5em;
}

.modal-header {
    border-bottom: none;
}
.close {
    font-size: 31px;
}
/*--product--*/
/*--content-mid--*/

.col-md,.col-md1,.col-md2,.col-md3{
	position:relative;
}
.col-md1,.col-md2,.col-md3{
	text-align:center;
}
.big-sale {
    position: absolute;
    top: 77px;
    left: 20%;
    border: 4px double #fff;
    text-align: center;
    transform: rotate(-45deg);
    width: 210px;
    height: 210px;
}
.big-sale1 {
	transform: rotate(45deg);
	margin: 3.5em 0 0;
}
.big-sale h3,.big-sa h3,.big-sale2 h3,.big-sale3 h3{
	color:#fff;
	font-size:3em;
	margin-bottom: 0.3em;
}
.big-sa h3{
	margin-bottom: 0.2em;
}
.big-sale h3 span,.big-sa h3 span,.big-sale2 h3 span,.big-sale3 h3 span{
	color:#FAB005;
}
.big-sale p,.big-sa p,.big-sale2 p,.big-sale3 p{
	color:#fff;
	font-size:1em;
	line-height:2em;
}
.big-sa h6{
	color:#fff;
	font-size:1em;
	text-transform:uppercase;
	letter-spacing:2px;
}
.big-sa {
    position: absolute;
    top: 0;
    width: 100%;
    margin-top: 9em;
}
.big-sale2,.big-sale3{
    position: absolute;
    top: 0;
    width: 100%;
    margin-top: 3em;
}
.col-md2 {
    margin-bottom: 30px;
}
.content-mid {
    padding: 6em 0;
}
/*--content-mid--*/
.product {
	padding:8em 0 6em;
}
.pro-1 {
    margin-bottom: 2em;
}
/*--causel--*/
.carousel-indicators {
    position: absolute;
    bottom: -45px;
    left: 48%;
    z-index: 15;
	width: auto;
    padding-left: 0;
    margin: 0;
    text-align: center;
    list-style: none;
}


.carousel-indicators li {
    display: inline-block;
    width: 12px;
    height: 12px;
    margin:0 6px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #029241;
    border: none;
    border-radius: 10px;
}
.carousel-indicators .active {
    background-color: #FAB005;
    margin: 0 6px;
}
/*-- //footer-top --*/
.footer-bottom {
    text-align: center;
    margin: 4em 0 0;
}
.footer-bottom h2 {
    font-family: 'Montserrat', sans-serif;
    font-size: 3.5em;
    display: inline-block;
	position:relative;
}
.footer-bottom h2 a {
    text-decoration: none;
    color: #fff;
}
.footer-bottom h2 span {
    font-size: 12px;
    display: block;
    letter-spacing: 5px;
    text-transform: uppercase;
    font-family: 'Noto Sans', sans-serif;
    padding-top: 6px;
}
.footer-bottom h2 b {
    font-size: 10px;
    background: #CC2127;
    font-weight: normal;
    padding: 3px;
    display: inline-block;
    line-height: 10px;
    position: absolute;
    top: 9px;
    left: -7px;
}
 p.fo-para {
    font-size: 1em;
    line-height: 2em;
    color: #fff;
    padding: 1em 0 3em;
    width: 70%;
    margin: 0 auto;
}
.fo-grid1 p{
	 font-size:1em;
	line-height:2em;
	color:#fff;
}
.fo-grid1 p a{
	text-decoration:none;
	color:#fff;
}
.fo-grid1 p a:hover {
    color: #FAB005;
}
.fo-grid1 p  i{
	margin-right:7px;
}
.social-fo  li{
	list-style-type:none;
	display:inline-block;
	margin:0 5px;
}
.social-fo li a {
    width: 35px;
	height: 35px;
    display: block;
    background: #3B5998;
    border-radius: 100px;
    color: #fff;
    line-height: 2.5em;
}
.social-fo li a:hover {
   transform:rotate(-360deg);
}
.social-fo li a.twi {
    background: #4099FF;
}
.social-fo li a.pin {
    background: #CD2830;
}
.social-fo li a.dri {
    background:#E35E90;
}
.address {
    margin-top: 2em;
}
/*-- //footer-top --*/
.footer {
    background: #353535;
    padding: 5em 0;
}
.footer-grid h3 {
    color: #fff;
    font-size: 1.7em;
    margin-bottom: 1em;
}
.footer-grid p {
    color: #ABABAB;
    line-height: 2.2em;
    font-size: 14px;
}
.footer-grid ul li{
	list-style-type:none;
	font-size:14px;
	line-height:2.2em;
    color: #ABABAB;

}
.footer-grid ul li a{

    color: #ABABAB;		
}
.footer-grid ul li a:hover{
    color:#FAB005;		
}

.copy-right p {
    color: #fff;
    font-size: 14px;
    text-align: center;
    margin-top: 4em;
}
.copy-right p a {
    color: #fff;	
}
.copy-right p a:hover {
    color: #E21737;	
}
/*-- //footer --*/
/*--product--*/
.banner-top{
	text-align: center;
    width: 100%;
    height: 114px;
    display: block;
    background: url(../images/sh.jpg)no-repeat ;
    padding: 3em 0;
    background-size: cover;
}
.banner-top h3{
	font-size:2.5em;
	color:#fff;
	float:left;
    font-weight: 700;
}
.banner-top h4{
	font-size:0.9em;
	color:#fff;
	margin-top:1em;
	float:right;
}
.banner-top h4 a{
	color:#FAB005;
}
.banner-top h4 label{
	margin:0 0.4em;
}
	
/*-- contact --*/
.contact{
	padding:6em 0;
}
.contact-w3 {
    padding-top: 3em;
}
.contact-left h4{
	font-size:2em;
	color:#000;
	margin-bottom:1em;
}
.contact-right iframe{
	width:100%;
	height:298px;
}
.contact-right img{
	margin-bottom:2em;
}
.contact_left h4 {
    color: #029241;
    font-size: 2em;
    margin-bottom: 0.7em;
}
.contact-left p {
    line-height: 2em;
    color: #999;
    font-size: 1em;
}
ul.contact-list li {
    display: inline-block;
    margin: 0 33px 0 0;
	font-size:1em;
	color:#999;
}
ul.contact-list li a{
	color:#999;
	text-decoration:none;
}
ul.contact-list {
    margin: 1em 0 2em;
}
ul.contact-list li i {
    color: #ED0612;
    margin-right: 15px;
    top: 2px;
}
ul.resp-tabs-list, p {
margin: 0px;
padding: 0px;
}
.resp-tabs-list li {
    font-weight: 600;
    font-size: 13px;
    display: inline-block;
    padding: 13px 15px;
    margin: 0 4px 0 0;
    list-style: none;
    cursor: pointer;
    float: left;
    width: 25%;
    text-align: center;
}
.resp-tabs-list li i{
    font-size: 1.8em;
    color: #FAB005;
    padding: 16px 0;
}
.resp-tabs-container {
	padding: 0px;
	background-color: #fff;
	clear: left;
}
h2.resp-accordion {
	cursor: pointer;
	padding: 5px;
	display: none;
}
.resp-tab-content {
	display: none;
	padding: 2em;
}
.resp-tab-active {
	border: 1px solid #c1c1c1;
	border-bottom: none;
	margin-bottom: -1px !important;
}
.resp-tab-active {
	border-bottom: none;
	background-color: #fff;
}
.resp-content-active, .resp-accordion-active {
	display: block;
}
.resp-tab-content {
	border: 1px solid #c1c1c1;
}
h2.resp-accordion {
	font-size: 13px;
	border: 1px solid #c1c1c1;
	border-top: 0px solid #c1c1c1;
	margin: 0px;
	padding: 10px 15px;
}
h2.resp-tab-active {
	border-bottom: 0px solid #c1c1c1 !important;
	margin-bottom: 0px !important;
	padding: 10px 15px !important;
}
h2.resp-tab-title:last-child {
	border-bottom: 12px solid #c1c1c1 !important;
	background: blue;
}
/*-----------Vertical tabs-----------*/
.resp-vtabs ul.resp-tabs-list {
	float: left;
	width: 30%;
}
.resp-vtabs .resp-tabs-list li {
	display: block;
	padding: 15px 15px !important;
	margin: 0;
	cursor: pointer;
	float: none;
}
.resp-vtabs .resp-tabs-container {
	padding: 0px;
	background-color: #fff;
	border: 1px solid #c1c1c1;
	float: left;
	width: 68%;
	min-height: 250px;
	border-radius: 4px;
	clear: none;
}
.resp-vtabs .resp-tab-content {
	border: none;
}
.resp-vtabs li.resp-tab-active {
	border: 1px solid #c1c1c1;
	border-right: none;
	background-color: #fff;
	position: relative;
	z-index: 1;
	margin-right: -1px !important;
	padding: 14px 15px 15px 14px !important;
}
.resp-arrow {
	width: 0;
	height: 0;
	float: right;
	margin-top: 3px;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-top: 12px solid #c1c1c1;
}
h2.resp-tab-active span.resp-arrow {
	border: none;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-bottom: 12px solid #9B9797;
}
/*-----------Accordion styles-----------*/
h2.resp-tab-active {
	background: #DBDBDB !important;
}
.resp-easy-accordion h2.resp-accordion {
	display: block;
}
.resp-easy-accordion .resp-tab-content {
	border: 1px solid #c1c1c1;
}
.resp-easy-accordion .resp-tab-content:last-child {
	border-bottom: 1px solid #c1c1c1 !important;
}
.resp-jfit {
	width: 100%;
	margin: 0px;
}
.resp-tab-content-active {
	display: block;
}
h2.resp-accordion:first-child {
	border-top: 1px solid #c1c1c1 !important;
}
.contact-left input[type="text"],.contact-left input[type="email"] {
    border: 1px solid #CECECE;
    width: 48.7%;
    margin: 0 2% 2% 0%;
    outline: none;
    font-size: 13px;
    color: #5b5b5b;
    padding: 10px 12px;
    -webkit-appearance: none;
    background: none;
	float:left;
}
.contact-left input[type="email"]{
	 margin: 0 0% 2% 0%;
}
.contact-left textarea {
  border: 1px solid #CECECE;
  outline: none;
  font-size: 13px;
  color: #5b5b5b;
  padding: 10px 12px;
  width: 99%;
  resize: none;
  height: 180px;
  -webkit-appearance: none;
  background:none;
}
.contact-left input[type="submit"] {
    border: none;
    padding: 9px 0;
    width: 22%;
    margin-top: 0.5em;
    font-size: 1em;
    color: #fff;
    letter-spacing: 1px;
    outline: none;
    background: #029241;
    transition: 0.5s all ease;
    -webkit-transition: 0.5s all ease;
    -moz-transition: 0.5s all ease;
    -o-transition: 0.5s all ease;
    -ms-transition: 0.5s all ease;
	-webkit-appearance: none;
}
.contact-left input[type="submit"]:hover{
    background:#FAB005;	
}
.contact-left h5 {
    color: #029241;
    font-size: 1.5em;
    margin-bottom: 0.7em;
}
.map-grid ul li{
	display:block;
	line-height:2.2em;
	color: #999;
    font-size: 1em;
}
.map-grid ul li i{
	color:#ED0612;
	margin-right:15px;
}
/*-- //contact --*/
/*--trypography--*/
.typrography {
    padding: 6em 0;
}
.mb-60 {
    padding-left: 0;
}
.mb-60 h4 {
    margin: 36px 0 38px;
    font-size: 24px;
}
.tab-content {
	padding: 15px;
	padding-top: 0px; 
	padding-left: 0px; 
	padding-bottom: 0px;
	border-top: none;
}
.nav-tabs {
	border: none;
}
.nav-tabs > li {
	float: left;
	margin-bottom: -1px;
}
.nav-tabs > li > a {
	background: #f8f8f8;
	margin-right: 3px;
	border: none;
	border-radius: 0;
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
	color: #555;
	padding: 12px 20px;
	-webkit-transition: all 0.3s ease-in-out 0s;
	-o-transition: all 0.3s ease-in-out 0s;
	transition: all 0.3s ease-in-out 0s;
}
.nav-tabs > li > a .fa {
	margin-right: 10px;
}
.nav-tabs > li.active > a{
	border: none;
}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
	color: #fff;
	background-color:#FAB005;
	border: none;
	border-radius: 0;
}
.nav-tabs > li > a:hover, .nav-tabs > li > a:focus {
	color: #fff;
	background-color:#FAB005;
}
.nav-tabs > li > a i {
	font-size: 32px;
	margin-right: 20px;
	vertical-align: middle;
}
.tab-content p {
    line-height: 2.2em;
    font-size: 14px;
}
.grid_4{
	background:#fff;
	padding:0em 0em 0em 0em;
}  
.grid_5{
	background:#fff;
	padding:1em 0 2em 0;
}

.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
  padding: 15px!important;
}
.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
  font-size: 0.8em;
  color:#222222;
}
.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
  border-top: none !important;
}
.tab-content > .active {
  display: block;
  visibility: visible;
}
.label {
  font-weight: 300 !important;
}
.label {
  padding: 4px 6px;
  border: none;
  text-shadow: none;
}
h4.typ1{
	margin-bottom:15px;
}
h5.typ1{
	margin-bottom:15px;
}
.progress {
  height: 8px;
  box-shadow: none;
}
.progress {
  overflow: hidden;
  height: 20px;
  margin-bottom: 20px;
  background-color: #eeeeee;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #ffffff;
  text-align: center;
  background-color: #03a9f4;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-bar {
  box-shadow: none;
}
.progress-bar-primary {
  background-color: #03a9f4;
}
.progress-bar-info {
  background-color: #00bcd4;
}
.progress-bar-success {
  background-color: #8bc34a;
}
.progress-bar-warning {
  background-color: #ffc107;
}
.progress-bar-danger {
  background-color: #e51c23;
}
.progress-bar-inverse {
  background-color: #757575;
}
.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
  background-color:#FDA30E !important;
  border-color:#FDA30E !important;
}
.grid_3 p,.page-header p {
  color: #888;
  font-size: 14px;
  line-height:2em;
  margin: 1em 0 2em;
}
.bs-docs-example {
  margin: 1em 0;
}
section#tables  p {
 margin-top: 1em;
}
.breadcrumb li{
	font-size:0.85em;
}
.badge-primary {
  background-color: #03a9f4;
}
.badge-success {
  background-color: #8bc34a;
}
.badge-warning {
  background-color: #ffc107;
}
.badge-danger {
  background-color: #e51c23;
}
.tab-container .tab-content {
  border-radius: 0 2px 2px 2px;
  border: 1px solid #e0e0e0;
  padding: 16px;
  background-color: #ffffff;
}
.nav-tabs {
  margin-bottom: 1em;
}
.alert {
  font-size: 0.85em;
}
h1.t-button,h2.t-button,h3.t-button,h4.t-button,h5.t-button {
line-height:1.8em;
  margin-top:0.5em;
  margin-bottom: 0.5em;
}
.bars {
    margin-bottom: 0.8em;
    color: #FAB005;
    font-size: 2.5em;
}
li.list-group-item1 {
  line-height: 2.5em;
}
ol {
  margin-bottom: 44px;
}
.list-group {
  margin-bottom: 48px;
}
.input-group {
  margin-bottom: 20px;
}
.breadcrumb {
    background-color: #2D2D2D;
}
.breadcrumb li a {
    font-size: 16px;
    color: #FDA30E;
}
.breadcrumb > .active {
    color: #fff;
}
.breadcrumb li a span {
    margin-right: 6px;
}
a#myTabDrop1 {
    background: #EAEAEA;
}
/*-- //typrography --*/
/*--product--*/
.kic h3 {
    font-size: 2.5em;
    color: #000;
    margin: 0em 0.4em 1em;
}
.kic-top1 h6{
	font-size:1.3em;
	color:#000;
	margin:0.7em 0 0.3em;
}
.kic-top1 p{
	font-size:1em;
	color:#000;
}
.kic-top {
    padding: 8em 0 0;
}
.agileinf{
	padding-top:3em;
}
/*--product--*/
/*-- faq --*/
.faq-w3 {
    padding: 6em 0;
}
.panel-default {
    border-color: #FFF;
}
.panel-default>.panel-heading {
    color: #222;
    background-color: #FFFFFF;
    border-color: #FFF;
	text-transform:capitalize;
}
.panel-default>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #FFF;
}
.panel-title {
    font-size: 1.5em;
    color: #5D5D5D;
}
.panel-title:hover {
     cursor: pointer;
}
.panel-title span {
	color:#ED0612;
}
.panel-body {
	padding-top:0;
	padding-bottom:0;
}
.panel-body p {
    color: #9A9A9A;
    font-size: 13.5px;
    margin-left: 17px;
    padding: 0px 15px 20px;
    line-height: 30px;
}
.panel-heading {
	padding: 20px 15px;
}
.panel-group .panel+.panel {
    margin-top: 0px;
}
.panel-group .panel {
    margin-bottom: 5px;
}
/*-- //faq --*/
/*-- terms-section-starts --*/
.terms h6 {
    font-size: 1.5em;
    color: #006b36;
}
.terms h6 span{
         color: #ED0612;
}
.terms p {
    color: #000000;
    font-size: 1em;
    line-height: 2em;
    margin-top: 15px;
    padding-left: 40px;
}
.terms ol li {
    color: #999;
    font-size:0.9em;
    font-weight: 300;
    line-height: 26px;
    margin-top: 15px;
}
.terms {
    padding: 6em 0;
}

.terms-bottom {
    margin-top: 3em;
}
.ter-wthree{
	margin-bottom:1em;
}
/*-- //terms-section-ends --*/
/*--login--*/
.login{
	padding:6em 0;
}
.main-agileits {
    width: 30%;
    margin: 0em auto ;
	box-shadow: 0px 0px 15px 0px #D6D6D6;
	-o-box-shadow: 0px 0px 15px 0px #D6D6D6;
	-moz-box-shadow: 0px 0px 15px 0px #D6D6D6;
	-webkit-box-shadow: 0px 0px 15px 0px #D6D6D6;
	padding: 3em ;
}

.key  input[type="text"] ,.key  input[type="password"]{
    width: 89%;
    padding: 10px 10px;
    font-size: 1em;
    border: none;
    border-bottom: none;
    outline: none;
    color: #999;
    float: left;
    background: none;
}
.key i{
	    float: left;
    color: #999;
    font-size: 1.1em;
    padding: 13px;
}
.key {
    background: #fff;
    border: 1px solid #999;
    margin-bottom: 2em;
}
.form-w3agile h3{
    color: #029241;
    font-size: 2.5em;
    text-align: center;
    margin-bottom: 1.5em;
}
.form-w3agile input[type="submit"] {
    background: #fdb515;
    color: #FFFFFF;
    text-align: center;
    padding: 10px 0;
    border: none;
    font-size: 1em;
    outline: none;
    width: 32%;
    cursor: pointer;
    margin-bottom:30px;
}
.form-w3agile  input[type="submit"]:hover{
	background:#029241;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
.forg a {
    text-decoration: none;
    color: #029241;
    font-size:1em;
}
.forg a:hover{
	color:#fdb515;
}
.forg-left{
	float:left;
}
.forg-right{
	float:right;
}
.form1 input[type="submit"] {
	margin-bottom:0;
}
/*--//login--*/
/*--checkout--*/
.check-out{
	padding:6em 0;
}
table.table {
    width: 100%;
    border: 1px solid #D0D0D0;
}
td.t-data {
    border: 1px solid #D2D2D2;
    padding: 10px !important;
	color:#000;
	vertical-align: middle !important;
	    font-size: 1em !important;
}
th.t-head {
	background: #F1F1F1;
    color: #FFFFFF;
    font-size: 1em !important;
    padding: 0.6em !important;
    border: 1px solid #D2D2D2 !important;
}
a.at-in {
  float: left;
}
a.at-in{
	border:1px solid #DADADA;
	padding:1em 0;
	margin-left: 11%;
}
.sed {
    float: right;
	width: 60%;
}
.check{
	width:6%;
}
.sed h5 {
    color:#FAB005;
    font-size: 1.2em;
    margin-top: 3em;
}
.ring-in{
	position:relative;
	width:45%;
}
.close1,.close2,.close3{
  cursor: pointer;
  position: absolute;
   left:3%;
  top: 52px;
  -webkit-transition: color 0.2s ease-in-out;
  -moz-transition: color 0.2s ease-in-out;
  -o-transition: color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out;
}
.close1 i,.close2 i,.close3 i{
	color: #FFFFFF;
    font-size: 12px;
    width: 32px;
    height: 32px;
    border-radius: 100px;
    text-align: center;
    line-height: 2.7em;
    background: #EA0612;	
}
.add-1 {
    text-decoration: none;
    color: #fff;
    padding: 7px 10px;
    width: auto;
    font-size: 1em;
    background: #029241;
}
.add-1:hover {
    text-decoration: none;
    background: #FAB005;
	color: #fff;
}
/*--quantity-starts--*/
.quantity{
	margin: 1.5em 0;
	float:left;
}
 .value-minus,
.value-plus{
    height: 40px;
    line-height: 24px;
    width: 40px;
    margin-right: 3px;
    display: inline-block;
    cursor: pointer;
    position: relative;
    font-size: 18px;
    color: #fff;
    text-align: center;
    -webkit-user-select: none;
    -moz-user-select: none;
	border:1px solid #b2b2b2;
	    vertical-align: bottom;
}
.quantity-select .entry.value-minus:before,
.quantity-select .entry.value-plus:before{
	content: ""; 
	width: 13px;
	height: 2px; 
	background: #000;
	left: 50%;
	margin-left: -7px; 
	top: 50%;
	margin-top: -0.5px;
	position: absolute;
}
.quantity-select .entry.value-plus:after{
	content: "";
	height: 13px;
	width: 2px; 
	background: #000;
	left: 50%; 
	margin-left: -1.4px;
    top: 50%;
    margin-top: -6.2px;
	position: absolute;
}
.value  {
    cursor: default;
    width: 40px;
	height:40px;
    padding: 8px 0px;
    color: #A9A9A9;
    line-height: 24px;
    border: 1px solid #E5E5E5;
    background-color: #E5E5E5;
    text-align: center;
    display: inline-block;
	margin-right: 3px;
}
.quantity-select .entry.value-minus:hover,
 .quantity-select .entry.value-plus:hover{
	background: #E5E5E5;
}

.quantity-select .entry.value-minus{
    margin-left: 0;
}
span.span-1 {
    margin: 0 !important;
}
/*--quantity-end--*/
/*--wishlist--*/
/*--single--*/
.single-right h3 {
	color: #000;
    font-size: 1.8em;
    font-weight: 700;
}
p.in-pa{
    color: #999;
    font-size: 1em;
    line-height: 2em;
    margin: 1em 0;
    border-bottom: 1px solid #f0f0f0;
    padding: 1em 0;
}
.pr-single{
    padding-bottom: 1em;
}

.pr-single a {
    float: right;
    margin-top: 0.5em;
}

.reduced{
	color: #FC6914;
    font-size: 1em;
	margin-top: 1em;
}
.reduced del{
	 margin-right: 2%;
    color: #62BF43;
    font-size: 0.9em;
}
.block-w3{
	float:none;
}
.single {
    padding: 7em 0 0;
}
.con-sin{
	margin:0;
}
.add-3 {
    margin-top: 0.5em;
    text-align: left;
}

.single-w3agile{
	border: 1px solid #DEDEDE;
    text-align: center;
    padding: 2em;
}
.single-w3agile img{
	margin:0 auto;
}
/*--about--*/
.about{
	padding:6em 0;
}
.about h2 {
    font-size: 3em;
    text-align: center;
    color: #000;
	margin-bottom: 1em;
}
.work h3 {
    font-size: 3em;
    text-align: center;
    color: #fff;
	margin-bottom: 1em;
}
.about-left p {
    font-size: 1em;
    color: #999;
    line-height: 2em;
	padding:2em 0;
}
.third-sl{
	width:100%;
	height:350px;
}
/*--//about--*/
/*--work--*/
.work {
    background: #F2F3F3;
	padding:6em 0;
}
.work-left {
    text-align: right;
    padding: 5em 5em 0 0;
}
.work-right {
    border-left: 1px solid #999;
    padding: 18em 0 2em 6em;
}

.work-info h5 {
    font-size: 1.3em;
    color: #000000;
    margin-bottom: .5em;
    display: inline-block;
}
.work-info p{
    font-size: 1em;
    color: #999;
	line-height:2em;
}
.work-info  span {
      font-size: 1.2em;
    color: #fff;
    background: #029241;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
    width: 60px;
    height: 60px;
    display: block;
    text-align: center;
    line-height: 3.5em;
    position: absolute;
    top: 0;
    left: 32.2em;
}
.work-info {
    position: relative;
}
.work-w3,.work-w31{
	background:#fff;
	padding:2em;
}
.work-left label,.work-right label{
    width: 10px;
    height: 10px;
    background: #FAB005;
    border-radius: 100px;
    position: absolute;
    left: 40.4em;
    top: 12em;
    z-index: 9;
}
.work-right label {
    left: -0.4em;
    top: 25em;
}
span.last {
    bottom: 0;
    top: auto;
}
/*--about-end--*/
.advantages-left h3{
	font-size: 2.5em;
 	color: #000;
}
.advn-one {
	margin-top: 2em;
}
.ad-mian {
	margin-top: 3%;
}
.ad-left {
	width: 10%;
	float: left;
}
.ad-left p {
	color: #fff;
	background: #029241;
	border-radius: 100px;
	-webkit-border-radius:100px;
	-moz-border-radius: 100px;
	-o-border-radius: 100px;
	-ms-border-radius: 100px;
	text-align: center;
	font-size: 1.5em;
  width: 50px;
  height: 50px;
  line-height: 2.5em;
}
.ad-right {
	width: 84%;
	float: right;
}
.ad-right h4, .advn-two h4 {
	font-size: 1.4em;
}
.ad-right h4 a, .advn-two h4 a{
	text-decoration:none;
		color: #FAB005;
}
.ad-right p {
	color: #7c7c7c;
	font-size: 1em;
	line-height: 1.9em;
	margin-top: 8px;
}
.advn-two ul {
	margin-top: 3%;
}
.advn-two ul li {
	list-style: none;
}
.advn-two p{
	color: #7c7c7c;
	font-size: 1em;
	line-height: 1.9em;
	margin-top: 8px;
}
.advn-two {
	margin-top: 2em;
}
.advn-two ul li a {
	color: #7c7c7c;
	font-size: 1em;
	text-decoration: none;
	margin: 0.8em 0;
	display: block;
}
.advn-two ul li a i{
	margin-right:2%;
}
.advn-two ul li a:hover{
	color:#029241;
}
.advantages {
    padding: 6em 0;
}
.spec-w3ls h3{
	color:#000;
}
.spec-w3ls span {
    background: #F2F3F3;
}
/*--//work--*/
/*-- to-top --*/
#toTop {
	display: none;
	text-decoration: none;
	position: fixed;
	bottom: 24px;
	right: 1%;
	overflow: hidden;
	z-index: 999; 
	width: 32px;
	height: 32px;
	border: none;
	text-indent: 100%;
	background: url("../images/arr.png") no-repeat 0px 0px;
}
/*--responsive--*/
@media(max-width:1440px){
.main-agileits {
    width: 35%;
}
}
@media(max-width:1280px){
.main-agileits {
    width: 38%;
}
}
@media(max-width:1080px){
.banner-info h3 {
    width: 95%;
}
.big-sale h3, .big-sa h3, .big-sale2 h3, .big-sale3 h3 {
    font-size: 2.7em;
}
.big-sale {
    top: 53px;
    left: 18%;
    width: 180px;
    height: 180px;
}
.big-sale1 {
    margin: 3em 0 0;
}
.search-form input[type='text'] {
    width: 92%;
}
.search-form {
    width: 60%;
    margin: 0 auto;
}
.main-agileits {
    width: 50%;
}
.about-left p {
    padding: 1em 0;
	font-size: 0.9em;
}
.work-info span {
    left: 26.2em;
}
.work-left label{
    left: 33.3em;
}
.big-sa {
    margin-top: 6em;
}
.big-sale2, .big-sale3 {
    margin-top: 2em;
}
.footer-grid h3 {
    font-size: 1.5em;
}
}
@media(max-width:991px){
.modal-dialog {
    width: 720px;
}
.banner-info h3 {
    width: 99%;
    font-size: 2.5em;
}
.m-wthree {
    width: 50%;
    float: left;
    margin-bottom: 2em;
}
.pro-1 {
    width: 50%;
    float: left;
}
.footer-grid {
    float: left;
    width: 50%;
    margin-bottom: 2em;
}
.footer-bottom {
    text-align: center;
    margin: 0em 0 0;
}
p.fo-para {
    padding: 1em 0 2em;
}
.copy-right p {
    margin-top: 2em;
}
.footer {
    padding: 3em 0;
}
.product {
    padding: 6em 0 3em;
}
.ser-t {
    width: 30%;
}
.m-w3ls ,.m-w3ls1{
    margin: 0 auto;
    width: 53%;
}
.m-w3ls1{
	margin:2em auto;
}
.big-sale {
    top: 77px;
    left: 20%;
    width: 210px;
    height: 210px;
}
.content-mid {
    padding: 4em 0;
}
.nav > li > a {
    padding: 12px 17px !important;
}
.dropdown-menu.multi {
    min-width: 730px;
}

.search-form input[type='text'] {
    width: 89%;
}
.search-form {
    width: 70%;
}
.carousel-indicators {
    left: 46%;
}
.kic-top1 {
    text-align: center;
    margin: 0 0 2em;
}
.kic-top1:last-child {
    margin: 0 0 0em;
}
.kic-top1 img{
    margin: 0 auto;
}
.kic-top {
    padding: 6em 0 0;
}

.contact-right img{
	margin:0 auto 2em;
}
.contact-left {
    margin-top: 2em;
}
.contact {
    padding: 4em 0;
}
.contact-w3 {
    padding-top: 0em;
}
.main-agileits {
    width: 65%;
}
.faq-w3 {
    padding: 4em 0 3em;
}
.terms {
    padding: 4em 0;
}
.about {
    padding:4em 0;
}
.work-right {
    border-left: none;
    padding: 2em 0;
}
.work-left label, .work-right label {
    display: none;
}
.work-left {
    text-align: right;
    padding: 6em 0 0;
}
.work-info span {
    left: 20.2em;
}
span.last {
    bottom: -46px;
}
.work {
    padding: 4em 0 6em;
}
.advantages {
    padding: 4em 0;
}
.about-agi {
    margin-top: 2em;
}
.single-top {
    width: 50%;
}
.single-right {
    margin-top: 2em;
}
a.at-in {
    width: 27%;
}
.sed h5 {
    font-size: 1em;
}
.big-sa {
    margin-top: 9em;
}
.big-sale2, .big-sale3 {
    margin-top: 3em;
}
.check-out {
    padding:3em 0;
}
.login {
    padding: 4em 0;
}
.offer-w3agile {
    padding:4em 0;
}
.typrography {
    padding: 4em 0;
}
.single {
    padding: 4em 0 0;
}
}
@media(max-width:767px){
.nav > li {
    float: none;
    display: block;
}
.navbar-collapse {
    background: #fff;
}

.navbar-toggle {
    position: relative;
    float: left;
    padding: 9px 10px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    background-color: #FAB005;
    background-image: none;
    border: 1px solid #FAB005;
    border-radius: 0px;
}
.navbar-default .navbar-toggle .icon-bar {
    background-color: #FFF;
}
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
    background-color: #FAB005;
}
nav.navbar.navbar-default {
    float: left;
    height: auto;
    width: 82%;
}
.navbar-collapse {
    max-height: none;
    background: #fff;
	overflow-x: hidden;
}
.dropdown-menu.multi {
    min-width: auto;
    padding: 0px;
    text-align: center;
}
ul.multi-column-dropdown {
    text-align: center;
}
.hyper:hover:before {
  right: 99.1%;
    opacity: 1;
}
.hyper:hover:after {
	left: 0.9%;
    opacity: 1;
}
.active a:before{
	opacity: 1;
	right: 99.1%;
}
.active a:after {
	left: 0.9%;
    opacity: 1;
}
.navbar-default .navbar-toggle {
    border-color: #FAB005;
}
.navbar-nav {
    margin: 1em 0 0;
}
.w3l img {
    width: 50%;
    margin: 2em auto;
}
.nav-top {
    margin-bottom: 1em;
}
.tabs li {
    display: inline-block;
}
.m-w3ls, .m-w3ls1 {
    width: 64%;
}
.modal-dialog {
    width: 600px;
}
.spec h3 {
    font-size: 2.8em;
}
.search-form {
    width: 76%;
    margin: 0 auto;
}
.banner-info {
    margin: 5em 0;
}
.search-form {
    width: 76%;
}
.agileinf {
    padding-top: 0em;
}
.contact-w3 {
    padding-top: 0em;
}
.contact {
    padding:3em 0  ;
}
.contact-right iframe {
    height: 180px;
}
ul.contact-list li {
    margin: 0 0px 7px 0;
    color: #999;
}
.login {
    padding: 4em 0;
}
.main-agileits {
    width: 78%;
}

.panel-title {
    font-size: 1.2em;
}
.terms {
    padding: 5em 0 3em;
}
.work-info span {
    left: 16.2em;
}
.single-top {
    width: 62%;
}
.product {
    padding: 5em 0 3em;
}
.close1, .close2, .close3 {
    left: 80%;
    top: 15px;
}
a.at-in {
    padding: 0.8em 0;
    margin-left: 0%;
}
.ring-in {
    width: 38%;
}
.sed {
    width: 65%;
}
.sed h5 {
    margin-top: 2em;
}
.value {
    width: 32px;
    height: 32px;
    line-height: 16px;
}
.value-minus, .value-plus {
    height: 32px;
    width: 32px;
}
.login {
    padding: 3em 0;
}
.spec {
    margin-bottom: 2em;
}
.typrography {
    padding: 3em 0;
}
.wthree-of {
    margin-top: 3em;
}
.offer-w3agile {
    padding:3em 0;
}
.single {
    padding: 4em 0 0;
}
/*--typo--*/
.bars {
    font-size: 2.2em;
}
}
@media(max-width:600px){
.banner-info h3 {
    width: 100%;
    font-size: 2em;
}
.search-form {
    width: 93%;
}
.banner-info {
    margin: 4em 0;
}
.spec h3 {
    font-size: 2.5em;
}
.ser-t {
    width: 43%;
}
.tabs li a {
    padding: 16px 9px !important;
}
ul.nav.tabs {
    margin-bottom: 2em;
}
.mid-1 h6 {
    font-size: 1em;
}
.m-w3ls, .m-w3ls1 {
    width: 85%;
}
.offer-img img {
    width: 75%;
}
.product {
    padding: 4em 0 2em;
}
.footer-grid {
    width: 100%;
    margin-bottom: 1em;
}
.cart {
    width: 15%;
}
nav.navbar {
    width: 85%;
}
.spec h3 {
    font-size: 2.2em;
}
.ser-t {
    width: 47%;
}
.offer-w3agile {
    padding:3em 0 2em;
}
.content-mid {
    padding: 2em 0;
}
p.fo-para {
    width: 95%;
}
.footer-bottom h2 b {
    font-size: 8px;
    padding: 2px;
    line-height: 9px;
    top: 8px;
    left: -6px;
}
.footer-bottom h2 span {
    letter-spacing: 3px;
}
.modal-dialog {
    width: 450px;
}

.kic h3 {
    font-size: 2.2em;
}
.ser-t span {
    left: 39%;
}
.span-1 {
    margin-top: 2em;
}

.carousel-indicators {
    left: 44%;
}
.main-agileits {
    width: 90%;
    padding: 2em;
}
.form-w3agile h3{
    margin-bottom: 1em;
}
.key i {
    padding: 13px 13px 13px 10px;
}
.panel-heading {
    padding: 11px 0px;
}
.panel-title {
    font-size: 0.94em;
}
.faq-w3 {
    padding: 4em 0 2em;
}
.terms {
    padding: 5em 0 2em;
}
.work-info span {
    left: 11.2em;
}
.work {
    padding: 3em 0 5em;
}
.advantages {
    padding: 3em 0;
}
.about {
    padding: 3em 0;
}
.single-top {
    width: 85%;
}

a.at-in {
    padding: 0.5em 0;
    width: 37%;
}
.sed {
    width: 100%;
}
.sed h5 {
    margin-top: 1em;
}
.ring-in {
    width: 34%;
}
.add-1 {
    padding: 7px 4px;
    font-size: 0.9em;
}
.check-out {
    padding: 3em 0 2em;
}
.login {
    padding: 2em 0;
}
.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 6px !important;
}
.advantages-left h3 {
    font-size: 2em;
}
.wthree-of {
    margin-top: 2em;
}
.bars {
    font-size: 1.8em;
}
.single {
    padding: 3em 0 0;
}
}
@media(max-width:414px){
.cart {
    width: 27%;
}
nav.navbar.navbar-default {
    width: 73%;
}
.m-wthree {
    width: 50%;
    float: left;
    margin-bottom: 1em;
    padding: 0 3px;
}
.mid-1 {
    padding: 2em 0 0;
}
.col-m {
    padding: 0.5em;
}
.mid-1 h6 {
    font-size: 0.85em;
}
.mid-2 p {
    float: none;
}
.block {
    float: none;
}
.my-cart-b {
    font-size: 0.9em;
    padding: 0.3em 1em;
}
.m-w3ls, .m-w3ls1 {
    width: 100%;
}
.big-sale {
        top: 39px;
    left: 15.1%;
    width: 184px;
    height: 184px;
}
.big-sale h3, .big-sa h3, .big-sale2 h3, .big-sale3 h3 {
    font-size: 2.2em;
}
.pro-1 {
    padding: 0 5px;
}
.banner-info {
    margin: 2em 0;
}
img.img-head {
    width: 19%;
}
.logo h1 {
    font-size: 2.2em;
}
.logo h1 span {
    font-size: 11px;
    letter-spacing: 1px;
}
.logo h1 b {
    font-size: 7px;
    padding: 2px;
    top: 6px;
    left: -8px;
    line-height: 6.5px;
}
.card li a {
    font-size: 0.85em;
    margin: 0 0.3em;
}
.banner-info h3 {
    font-size: 1.4em;
}
.search-form input[type='submit'] {
    width: 35px;
    height: 35px;
    background: url(../images/can.png) no-repeat 4px 3px #FCCD1E;
}
.search-form input[type='text'] {
    width: 85%;
    padding: 7px 10px;
    font-size: 0.9em;
}
.search-form {
    width: 95%;
}
.spec h3 {
    font-size: 1.7em;
}
.ser-t {
    width: 64%;
}
.ser-t span i {
    width: 18px;
    height: 18px;
}
.ser-t span {
    width: 36px;
    height: 36px;
    left: 38%;
}
.ser-t {
    width: 64%;
}
.tabs li a {
    padding: 8px 9px !important;
	font-size: 0.9em;
}
.offer {
    right: -8px;
}
.container {
    padding-right: 5px;
    padding-left: 5px;
}
.product {
    padding: 3em 0 0em;
}
.footer-bottom h2 {
    font-size: 2.5em;
}
.footer-bottom h2 span {
    letter-spacing: 2px;
    font-size: 11px;
}
.footer-bottom h2 b {
    font-size: 7px;
    padding: 2px;
    line-height: 7px;
    top: 7px;
    left: -7px;
}
.footer-grid h3 {
    font-size: 1.5em;
    margin-bottom: 0.5em;
}
.pro-1 {
    margin-bottom: 1em;
}
.big-sale p, .big-sa p, .big-sale2 p, .big-sale3 p {
    font-size: 0.9em;
    line-height: 1.7em;
}
.big-sale2, .big-sale3 {
    margin-top: 2.5em;
}
.kic h3 {
    font-size: 1.8em;
}
.kic-top {
    padding: 4em 0 0;
}
.carousel-indicators li {

    margin: 0 3px;
}
.carousel-indicators {
    left: 41%;
    bottom: -26px;
}
.resp-tab-content {
    padding: 1em;
}
.contact-left input[type="text"], .contact-left input[type="email"] {
    width: 100%;
    margin: 0 0% 5% 0%;
}
.contact-left input[type="submit"] {
    width: 33%;
    font-size: 0.9em;
}
.contact {
    padding: 3em 0 2em;
}
.main-agileits {
    width: 90%;
    padding: 1em;
}
.key input[type="text"], .key input[type="password"] {
    width: 84%;
    padding: 8px 10px;
}
.key i {
    padding: 10px 0px 10px 10px;
}
.form-w3agile input[type="submit"] {
    padding: 7px 0;
    margin-bottom: 25px;
}
.login {
    padding: 2em 0;
}
.form-w3agile h3{
    margin-bottom: 0.8em;
}
.panel-title {
    line-height: 1.8em;
}
.panel-heading {
    padding: 6px 0px;
}
.faq-w3 {
    padding: 3em 0 1em;
}
.spec {
    margin-bottom: 2em;
}
.terms h6 {
    font-size: 1.2em;
}
.terms p {
    font-size: 0.9em;
    margin-top: 10px;
    padding-left: 18px;
}
ol {
    margin-bottom: 17px;
}
.terms {
    padding: 4em 0 2em;
}
.work-info span {
    left: 7em;
}
.banner-top h3 {
    font-size: 1.7em;
}
.banner-top h4 {
    margin-top: 0.5em;
}
.banner-top {
    height: 76px;
    padding: 2em 0.5em;
}
.check-out {
    padding: 2em 0 1em;
}
th.t-head {
    font-size: 0.7em !important;
}
td.t-data {
    font-size: 0.8em !important;
}
.ring-in {
    width: 27%;
}
.t-w3l {
    width: 30%;
}
a.at-in {
    width: 75%;
}
.close1 i, .close2 i, .close3 i {
    width: 20px;
    height: 20px;
    line-height: 1.7em;
}
.close1, .close2, .close3 {
    left: 73%;
    top: 6px;
}
.work-w3, .work-w31 {
    padding: 1.5em;
}
.advantages-left h3 {
    font-size: 1.8em;
}
.ad-left p {
    font-size: 1.2em;
    width: 43px;
    height: 43px;
    line-height: 2.5em;
}
.ad-right {
    width: 80%;
}
.ad-left {
    width: 17%;
}
.ad-right h4, .advn-two h4 {
    font-size: 1.1em;
    line-height: 1.6em;
}
.advn-two {
    margin-top: 1em;
}
.contact-left h4 {
    font-size: 1.7em;
    margin-bottom: 0.5em;
}
.contact-left {
    margin-top: 1em;
}
.single-top {
    width: 100%;
}
.single-w3agile {
    padding: 1em;
}
.wthree-of {
    margin-top: 1em;
}
.offer-w3agile {
    padding:2em 0;
}
.single {
    padding: 2em 0 0;
}
.modal-dialog {
    width: 290px;
}
input.my-product-quantity {
    width: 40px !important;
}
.big-sa {
    margin-top: 5em;
}
/*--typo--*/
.bars {
    font-size: 1.5em;
}
h1.t-button {
    font-size: 25px;
}
 h2.t-button{
    font-size: 22px;
}
 h3.t-button {
    font-size: 20px;
}
 h4.t-button {
    font-size: 18px;
}
 h5.t-button {
    font-size:15px;
}
.pagination-lg > li > a, .pagination-lg > li > span {
    padding: 10px 11px;
    font-size: 18px;
}

.grid_3 p, .page-header p {
    font-size: 13px;
}
p{
    color:black;
}
}
</style>
<!--- terms ---->
			<div class="terms">
				<div class="container">
					 
					<div class="spec ">
					<h3>Why Trust</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>

					<div class="ter-wthree">
						<h6 class="text text-center"><span></span>Why Trust on Healthpharma.com.bd ?</h6>
						
					</div>
<br>
					<div class="ter-wthree">
						<h6><span></span></h6>
						<ol start="1">
                        <p>	1.	Bangladesh Base Online Pharmacy and Nursing Services.</p>
                        <p>	2.	Provide medicines at specific temperatures.</p>
                        <p>	3.	The duration of the medicine is checked regularly.</p>
                        <p>	4.	Your privacy is highly maintained.</p>
                        <p>	5.	Needy delivery is done timely.</p>
                        <p>	6.	All types of medicines, including Indian, are under the same roof.</p>
                        <p>	7.	Get 5% discount on regular purchases.</p>
                        <p>	8.	We have own pharmacists.</p>
                        <p>	9.	The medicines are collected directly from the drug company.</p>

						</ol>
					</div>
					<br>
                   
					
				</div>
			</div>
			<!--- /terms ---->
			  @stop