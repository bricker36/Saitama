<?php
header("Content-type: text/css");
$pageBG = '#1C1C1C';
$pageFG = '#424242';
$pageFG-focus = '#BCBCBC';
?>

* {
  font-family: 'Quicksand', sans-serif;
}
html,
body {
  background:<?=$pageBG?>;
  padding: 0;
  margin: 0;
  height: 100%;
  width: 100%;

  /* overflow: hidden; */
}
#canvas {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
}
#container-main {
  /* Main Container */
  position: relative;
  height: 75%;
  width: 75%;
  top: 5%;
}

/* Time, Day of the Week, Date */
.time-date-wrapper{
  text-align: right;
  position: relative;
}
#time {
  text-align: center;
  font-family: 'Heebo', sans-serif;
  font-size: 36pt;
  margin: 0 auto 0;
}
.date-wrapper {
  position: absolute;
  right: 0;
  bottom: 0;
}
#day-of-week {
  margin: 0;
  font-size: 14pt;
  position: relative;
  font-family: 'Source Sans Pro', sans-serif;
}
#date {
  margin: 0;
  font-size: 14pt;
  position: relative;
  font-family: 'Source Sans Pro', sans-serif;
}

input {
  background-color: #1C1C1C;
  color: #595959;
  border: none;
}

/* Search */
.search {
  /* Search Bar Area */
  z-index: 9999;
  top: 5%;
  left: 12.5%;
}
.search input {
  /* Search Bar */
  font-size: 14pt;
  font-stretch: condensed;
  padding: 4px;
  transition: .3s ease-in-out;
  width: 100%;
}
input:focus {
  color: #BCBCBC;
}

  /* Main Image */
#billboard {
  /* Main Picture Area */
  background: black;
  height: 65%;
  width: 100%;
  margin: 0 auto 8px;
  position: relative;
}
#billboard img {
  position: absolute;
  height: 100%;
  width: 100%;
  object-fit: cover;
  transition: 1s;
}
.bb-transparent {
  opacity: 0;
}

/* Navigation */
#nav {
  /* Main Navigation Container */
  display: flex;
  justify-content: space-between;
  margin: 0;
}
.list {
  /* Lists - General Overrides */
  list-style: none;
  margin: 0;
  padding: 0;
}
.menu {
  /* Main Menu */
  width: 12%;
}
.menu-nest {
  /* Nested Menus */
}
.button {
  background: transparent;
  font-family: 'Source Sans Pro', sans-serif;
  border: 3px solid #595959;
  color: #595959;
  font-size: 18pt;
  cursor: pointer;
  transition: border-color .5s, color .5s;
  display: block;
  margin-bottom: 8px;
  text-align: center;
  text-decoration: none;
  transition: .5s;
}
.button:hover {
  color: #1C1C1C;
  border-color: #1C1C1C;
}
.link {
  /* Nested Menu Buttons/Links */
  opacity: 0;
  transition: .5s;
}
.link:hover {
  color: #BCBCBC;
  border-color: #1C1C1C;
  background-color: #424242;
}

#menu-1:hover .link {
  opacity: 1;
}
#menu-2:hover .link {
  opacity: 1;
}
#menu-3:hover .link {
  opacity: 1;
}
#menu-4:hover .link {
  opacity: 1;
}
#menu-5:hover .link {
  opacity: 1;
}
#menu-6:hover .link {
  opacity: 1;
}
#menu-7:hover .link {
  opacity: 1;
}
#menu-8:hover .link {
  opacity: 1;
}
#button-1:hover {
  background-color: #BF2F2F;
}
#button-2:hover {
  background-color: orange;
}
#button-3:hover {
  background-color: yellow;
}
#button-4:hover {
  background-color: green;
}
#button-5:hover {
  background-color: #1C1C1C;
  background-image:
    radial-gradient(orange 40%, transparent 0),
    radial-gradient(orange 40%, transparent 0);
  background-size: 20px 20px;
  background-position: 0 0, 10px 10px;
}
#button-6:hover {
  background-color: indigo;
}
#button-7:hover {
  background-color: violet;
}
#button-8:hover {
  background-color: cyan;
}

/* Individual Link Button Style */
#link-1-1:hover {
  border: 3px solid #BCBCBC;
  background: repeating-linear-gradient(-45deg,
    blue, cyan 2.5px,
    #1C1C1C 0, #1C1C1C 5px);
}
#link-1-2:hover {
  border: 3px solid #BCBCBC;
  background: repeating-linear-gradient(-45deg,
    #BF2F2F, #BF2F2F 2.5px,
    #1C1C1C 0, #1C1C1C 5px);
}
#link-1-3:hover {
  border: 3px solid #BCBCBC;
  background: repeating-linear-gradient(-45deg,
    #0084B4, #0084B4 2.5px,
    #1C1C1C 0, #1C1C1C 5px);
}

#link-2-1:hover {
  background: repeating-linear-gradient(-45deg,
    #BF2F2F, #BF2F2F 3.5px,
    #1C1C1C 0, #1C1C1C 5px);
}
#link-2-2:hover {
  color: #BF2F2F;
  background: repeating-linear-gradient(-45deg,
    #424242, #424242 1px,
    #1C1C1C 0, #1C1C1C 5px);
}

#link-3-1:hover {
  background: repeating-linear-gradient(-45deg,
    green, green 1.5px,
    #1C1C1C 0, #1C1C1C 5px);
}
#link-3-2:hover {
  background: repeating-linear-gradient(-45deg,
    #FF7700, #FF7700 1.5px,
    #1C1C1C 0, #1C1C1C 5px);
}
#link-3-3:hover {
  color: #FFD119;
  background: repeating-linear-gradient(-45deg,
    #F4522B, #F4522B 2.5px,
    #1C1C1C 0, #1C1C1C 5px);
}
#link-3-4:hover {
  color: #BF2F2F;
  background: repeating-linear-gradient(-45deg,
    #424242, #424242 2.5px,
    #1C1C1C 0, #1C1C1C 5px);
}

#link-4-1:hover {
  color: #BF2F2F;
  background-color: #BCBCBC;
}
#link-4-2:hover {
  color: #2F8FBF;
  background-color: #424242;
}
#link-4-3:hover {
  background-color: #BF2F2F;
}
#link-4-4:hover {
  background-color: #2F8FBF;
}

/* Configuration */
.config {
  position: relative;
  top: 15%;
  margin-top: 4px;
  color: #BCBCBC;
}
.config input {
  margin-top: 4px;
  border-bottom: 1px solid #424242;
}
.config form {
  font-size: 10pt;
}
#config-left {
  text-align: left;
  margin-left: 2px;
}
#config-right {
  text-align: right;
  margin-right: 2px;
  top: 5%;
}
.input-config:focus{
  border-color: orange;
}
.button-config:hover {
  color: #BCBCBC;
  border-color: orange;
}
#config-button {
  position: absolute;
  bottom: 5px;
  left: 5px;
  cursor: pointer;
}
#config-button:hover {
  color: #BCBCBC;
}

.hidden {
  visibility: hidden;
}
